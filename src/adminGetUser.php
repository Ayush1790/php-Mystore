<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
<?php
include 'config.php';
    if(isset($_POST['getAllUser'])){
        $str4="";
        $stmt="SELECT * from `user`";
        $result=mysqli_query($conn,$stmt);
        if(mysqli_num_rows($result)>0){
            $str4.="<div class='row'>
            <h1>User's Detail</h1>
            </div>";
            $str4.="<div class='row p-2 border'>
            <div class='col-1'>User id</div>
            <div class='col-1'>Name</div>
            <div class='col-1'>Email</div>
            <div class='col-1'>Mobile No</div>
            <div class='col-1'>Password</div>
            <div class='col-1'>Status</div>
            <div class='col-1'>Address</div>
            <div class='col-1'>Pin code</div>
            <div class='col-1'>role </div>
            <div class='col-3'>Action </div>
            </div>";
            
            while($row=mysqli_fetch_assoc($result)){
              $str4.="<div class='row p-2' id='user' >
              <div class='col-1 boder border-secondary'><input type='text'  id='id$row[id]' disabled name='id'  value='$row[id]'></div>
              <div class='col-1 boder border-secondary'><input type='text' class='enablefield$row[id]' id='name$row[id]' disabled name='name'  value='$row[name]'></div>
              <div class='col-1 boder border-secondary'><input type='text' class='enablefield$row[id]' id='email$row[id]' disabled name='email'  value='$row[email]'></div>
              <div class='col-1 boder border-secondary'><input type='text' class='enablefield$row[id]' id='mob$row[id]' disabled name='mob'  value='$row[mob_nu]'></div>
              <div class='col-1 boder border-secondary'><input type='text' class='enablefield$row[id]' id='pswd$row[id]' disabled name='pswd'  value='$row[pswd]'></div>
              <div class='col-1 boder border-secondary'><input type='text' class='enablefield$row[id]' id='status$row[id]' disabled name='status'  value='$row[status]'></div>
              <div class='col-1 boder border-secondary'><input type='text' class='enablefield$row[id]' id='address$row[id]' disabled name='address'  value='$row[address]'></div>
              <div class='col-1 boder border-secondary'><input type='text' class='enablefield$row[id]' id='pin$row[id]' disabled name='pin'  value='$row[pincode]'></div>
              <div class='col-1 boder border-secondary'><input type='text' class='enablefield$row[id]' id='role$row[id]' disabled name='role'  value='$row[role]'></div>
              <div class='col-3 boder border-secondary'><button class='btn btn-sm btn-warning editData' data-id='$row[id]' id='edit$row[id]'>Edit</button><button class='btn btn-sm btn-danger deleteData' id='$row[id]'>Delete</button></div>
              
              </div>";   
            }
        }
        echo $str4;
    }
    ?>
    <script src="./js/script1.js"></script>