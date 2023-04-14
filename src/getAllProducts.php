<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
<?php
include 'config.php';
    if(isset($_POST['getAllUser'])){
        $str4="";
        $stmt="SELECT * from `Products`";
        $result=mysqli_query($conn,$stmt);
        if(mysqli_num_rows($result)>0){
            $str4.="<div class='row'>
            <h1>Product's Detail</h1>
            </div>";
            $str4.="<div class='row p-2 border'>
 
            <div class='col-1'>Product id</div>
            <div class='col-1'>Name</div>
            <div class='col-1'>Quantity</div>
            <div class='col-1'>Sell Quantity</div>
            <div class='col-1'>Price</div>
            <div class='col-1'>Category</div>
            <div class='col-3'>Discription </div>
            <div class='col-3'>Action </div>
            </div>";
            
            while($row=mysqli_fetch_assoc($result)){
              $str4.="<div class='row p-2' id='product' >

              <div class='col-1 boder border-secondary'><input type='text' class='enablefield$row[id]' id='name$row[id]' disabled name='id'  value='$row[id]'></div>
              <div class='col-1 boder border-secondary'><input type='text' class='enablefield$row[id]' id='email$row[id]' disabled name='name'  value='$row[name]'></div>
              <div class='col-1 boder border-secondary'><input type='text' class='enablefield$row[id]' id='mob$row[id]' disabled name='qty'  value='$row[qty]'></div>
              <div class='col-1 boder border-secondary'><input type='text' class='enablefield$row[id]' id='pswd$row[id]' disabled name='sale_qty'  value='$row[sale_qty]'></div>
              <div class='col-1 boder border-secondary'><input type='text' class='enablefield$row[id]' id='status$row[id]' disabled name='price'  value='$row[price]'></div>
              <div class='col-1 boder border-secondary'><input type='text' class='enablefield$row[id]' id='role$row[id]' disabled name='category'  value='$row[category]'></div>
              <div class='col-3 boder border-secondary text-truncate'><input type='text' class='enablefield$row[id]' id='role$row[id]' disabled name='des'  value='$row[description]'></div>
              <div class='col-3 boder border-secondary'><button class='btn btn-sm btn-warning editData' data-id='$row[id]' id='edit$row[id]'>Edit</button><button class='btn btn-sm btn-danger deleteData' id='$row[id]'>Delete</button></div>
              
              </div>";   
            }
        }
        echo $str4;
    }
    ?>
    <script src="./js/script1.js"></script>