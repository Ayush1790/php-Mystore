
$(".option1").click(function () {
    let id = this.id;
    id = id.split("_");
    console.log(id);
    $.ajax({
        url: 'addCart.php',
        type: 'POST',
        data: { 'id': id[1], 'action': id[0] },
        datatype: 'text'
    }).done(function (value) {

    })
})
//code for sign in
$("#submit").click(function () {
    let name = $("#name").val();
    let email = $("#email").val();
    let pswd = $("#pswd").val();
    let cpswd = $("#cpswd").val();
    let mob = $("#mob").val();
    let address = $("#address").val();
    let pin = $("#pin").val();

    //checking empty fields
    if (checkEmpty(name, "Name", "#name_msg")) { return; }
    if (checkEmpty(email, "Email", "#email_msg")) { return; }
    if (checkEmpty(pswd, "Password", "#pswd_msg")) { return; }
    if (checkEmpty(cpswd, "Confirm Password", "#cpswd_msg")) { return; }
    if (checkEmpty(mob, "Mobile Number", "#mob_msg")) { return; }
    if (checkEmpty(pin, "Pin Code", "#pin_msg")) { return; }
    if (checkEmpty(address, "Address", "#address_msg")) { return; }
    if (pswd != cpswd) {
        $("#msg").text("Password not matched").css("color", "red");
        return;
    } else {
        $("#msg").text("");
        $.ajax({
            url: 'registration.php',
            method: 'POST',
            data: { 'name': name, 'email': email, 'pswd': pswd, 'mob': mob, 'pin': pin, 'address': address },
            datatype: 'json'
        }).done(function (value) {
            console.log(value);
            if (value) {
                window.location = "login.php";
            } else {
                alert("Something went wrong , Please Try Again");
            }
        })
    }
})
// code for login
$("#login").click(function () {
    let email = $("#login_email").val();
    let pswd = $("#login_pswd").val();
    if (checkEmpty(email, "Email", "#login_email_msg")) { return; }
    if (checkEmpty(pswd, "Password", "#login_pswd_msg")) { return; }
    $.ajax({
        url: 'loginValidator.php',
        type: 'POST',
        data: { 'login_email': email, 'login_pswd': pswd },
        datatype: 'json'
    }).done(function (value) {
        if (value) {
            window.location = 'index.php';
        } else {
            alert("You are not a registered user, Please wait for admin response");
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

$(".move").click(function () {
    let id = this.id;
    id = id.split("_");
    console.log(id);
    $.ajax({
        url: 'moveProduct.php',
        data: { 'id': id[1], 'action': id[0] },
        type: 'post',
        datatype: 'text'
    }).done(function () {
        // location.reload();
    })
})
$(".buy").click(function () {
    id = this.id;
    id = id.split("_");
    $.ajax({
        url: 'productDescriptionData.php',
        type: 'POST',
        data: { 'id': id[2], 'action': id[1], 'event': id[0] },
        datatype: 'text'
    }).done(function (value) {
        console.log(value);
        window.location = 'productDescription.php';
    })
})

$(document).on("click", "#checkOut", function () {
    let id = $("#pid").val();
    let qty = $("#inputQuantity").val();
    $.ajax({
        url: 'checkOut.php',
        data: { 'id': id, "qty": qty },
        type: 'post',
        datatype: 'text'

    }).done(function (value) {
        if(value){
        alert(value);
        window.location = 'index.php';}else{
            alert("Quantity is not availbale")
        }
    })
})

$(".delete").click(function(value){
    id = this.id;
    id = id.split("_");
    $.ajax({
        url: 'deleteCartWish.php',
        type: 'POST',
        data: { 'id': id[1],  'event': id[0] },
        datatype: 'text'
    }).done(function (value) {
        if(id[0]=='cart'){
            window.location="showCart.php";
        }else{
            window.location="showWishList.php";
        }
    })
})