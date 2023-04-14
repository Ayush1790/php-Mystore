$(document).ready(function () {
    $.ajax({
        url: 'adminPanel.php'
    }).done(function (value) {
        //console.log(value);
    })
})
function getAllUser() {
    $.ajax({
        url: 'adminGetUser.php',
        type: 'post',
        data: 'getAllUser=' + true,
        datatype: 'text'
    }).done(function (value) {
        $("#top5User").html(value);
    })
}


$(document).on("click", ".editData", function () {
    let id = this.getAttribute("data-id");
    //console.log(data-id);
    $(".enablefield" + id).attr('disabled', false);
    $("#edit" + id).html("Update");
    $("#edit" + id).attr("class", "update");
});
$(document).on("click", ".update", function () {
    let id = this.getAttribute("data-id");
    console.log(id);
    if ($(this).parent().parent().attr('id') == 'user') {
        id = $("#id" + id).val();
        let name = $("#name" + id).val();
        let email = $("#email" + id).val();
        let pswd = $("#pswd" + id).val();
        let mob = $("#mob" + id).val();
        let status = $("#status" + id).val();
        let addr = $("#address" + id).val();
        let pin = $("#pin" + id).val();
        let role = $("#role" + id).val();
        $.ajax({
            url: 'editUserData.php',
            type: 'post',
            data: { 'id': id, 'name': name, 'email': email, 'pswd': pswd, 'mob': mob, 'status': status, 'addr': addr, 'pin': pin, 'role': role },
            datatype: 'text'
        }).done(function (value) {
            console.log(id);
            $(".enablefield" + id).attr('disabled', true);
            $("#edit" + id).html("Edit");
            $("#edit" + id).attr("class", "editData");
        })
    } else if ($(this).parent().parent().attr('id') == 'product') {
        let name = $("#name" + id).val();
        let qty = $("#qty" + id).val();
        let sqty = $("#sale_qty" + id).val();
        let price = $("#price" + id).val();
        let catageory = $("#category" + id).val();
        let desc = $("#description" + id).val();
        console.log(name);
        $.ajax({
            url: 'editProductData.php',
            type: 'post',
            data: { 'id': id, 'name': name, 'qty': qty, 'sqty': sqty, 'price': price, 'catageory': catageory, 'desc': desc },
            datatype: 'text'
        }).done(function (value) {
            $(".enablefield" + id).attr('disabled', true);
            $("#edit" + id).html("Edit");
            $("#edit" + id).attr("class", "editData");
        })
    } else if ($(this).parent().parent().attr('id') == 'order') {
        console.log("Ayush");
        let oid = $("#oid" + id).val();
        let pid = $("#pid" + id).val();
        let uid = $("#uid" + id).val();
        let qty = $("#qty" + id).val();
        let price = $("#price" + id).val();
        let status = $("#status" + id).val();
        let date = $("#date" + id).val();
        let address = $("#address" + id).val();
        console.log(pid);
        $.ajax({
            url: 'editOrderData.php',
            type: 'post',
            data: { 'id': oid, 'pid': pid, 'uid': uid, 'qty': qty, 'price': price, 'status': status, 'date': date, 'address': address },
            datatype: 'text'
        }).done(function (value) {
            console.log(value);
            $(".enablefield" + id).attr('disabled', true);
            $("#edit" + id).html("Edit");
            $("#edit" + id).attr("class", "editData");
        })
    }

})
$(".deleteData").on("click", function (e) {
    e.preventDefault;
    let id = this.id;
    let table = $(this).parent().parent().attr('id');
    let confirm = window.confirm("Are You sure to want to delete ?");
    if (confirm) {
        $.ajax({
            url: 'deleteUserdata.php',
            type: 'post',
            data: { 'id': id, 'table': table },
            datatype: 'text'
        }).done(function (value) {
            if (value == "1") {
                alert("Item can not be deleted");
            } else {
                location.reload();
            }
        })
    }
})

function getAllProducts() {
    $.ajax({
        url: 'getAllProducts.php',
        type: 'post',
        data: 'getAllUser=' + true,
        datatype: 'text'
    }).done(function (value) {
        console.log(value);
        $("#top5Products").html(value);
    })
}
function getAllOrder() {
    $.ajax({
        url: 'getAllOrder.php',
        type: 'post',
        data: 'getAllUser=' + true,
        datatype: 'text'
    }).done(function (value) {
        console.log(value);
        $("#top5orders").html(value);
    })
}
function adminUserChange(value) {
    let status = $("#selectedStatus" + value).val();
    let role = $("#selectedRole" + value).val();
    console.log(value + status + role);
    $.ajax({
        url: 'handleUserRequest.php',
        type: 'post',
        data: { 'id': value, 'status': status, 'role': role },
        datatype: 'text'
    }).done(function (value) {
        location.reload();
        console.log(value);
    })
}

$(document).on("click", "#addProducts", function () {
    let name = $("#name").val();
    let price = $("#price").val();
    let qty = $("#qty").val();
    let desc = $("#desc").val();
    let catageory = $("#catageory").val();
    let img = $("#img").val();
    img = img.split("\\");
    //  let file = $('#img').prop("files")[0];
    // console.log(file);
    $.ajax({
        url: 'addProduct.php',
        data: { 'name': name, 'price': price, 'qty': qty, 'desc': desc, 'catageory': catageory, 'img': img[2] },
        type: 'post',
        datatype: 'json'
    }).done(function (value) {
        console.log(value);
    })
})
$("#Adminlogin").click(function () {

    let email = $("#login_email").val();
    let pswd = $("#login_pswd").val();
    if (checkEmpty(email, "Email", "#login_email_msg")) { return; }
    if (checkEmpty(pswd, "Password", "#login_pswd_msg")) { return; }
    $.ajax({
        url: 'AdminLoginValidator.php',
        type: 'POST',
        data: { 'login_email': email, 'login_pswd': pswd },
        datatype: 'json'
    }).done(function (value) {
        console.log(value);
        if (value) {
            window.location = 'adminPanel.php';
        } else {
            alert("Wrong Email or Password");
        }
    })
})

// function to check empty fields
function checkEmpty(id, msg, msg_id) {
    if (id == "") {
        $(msg_id).text(msg + " can not be empty").css("color", "red");
        return 1;
    } else {
        $(msg_id).text("");
    }
}