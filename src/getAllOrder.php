<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
<?php
include 'config.php';
    if(isset($_POST['getAllUser'])){
        $str4="";
        $stmt="SELECT * from `order_table`";
        $result=mysqli_query($conn,$stmt);
        if(mysqli_num_rows($result)>0){
            $str4.="<div class='row'>
            <h1>Product's Detail</h1>
            </div>";
            $str4.="<div class='row p-2 border'>
 
            <div class='col-1'>order id</div>
            <div class='col-1'>Product id</div>
            <div class='col-1'>user id</div>
            <div class='col-1'>Quantity</div>
            <div class='col-1'>total Price</div>
            <div class='col-1'>status </div>
            <div class='col-1'>order date </div>
            <div class='col-2'>Shipping address </div>
            <div class='col-3'>Action </div>
            </div>";
            
            while($row=mysqli_fetch_assoc($result)){
              $str4.="<div class='row p-2' id='order' >

              <div class='col-1 boder border-secondary'><input type='text' ' id='oid$row[id]' disabled name='oid'  value='$row[order_id]'></div>
              <div class='col-1 boder border-secondary'><input type='text' class='enablefield$row[id]' id='pid$row[id]' disabled name='pid'  value='$row[product_id]'></div>
              <div class='col-1 boder border-secondary'><input type='text' class='enablefield$row[id]' id='uid$row[id]' disabled name='uid'  value='$row[user_id]'></div>
              <div class='col-1 boder border-secondary'><input type='text' class='enablefield$row[id]' id='qty$row[id]' disabled name='qty'  value='$row[qty]'></div>
              <div class='col-1 boder border-secondary'><input type='text' class='enablefield$row[id]' id='price$row[id]' disabled name='price'  value='$row[total_price]'></div>
              <div class='col-1 boder border-secondary'><input type='text' class='enablefield$row[id]' id='status$row[id]' disabled name='status'  value='$row[status]'></div>
              <div class='col-1 boder border-secondary text-truncate'><input type='text' class='enablefield$row[id]' id='date$row[id]' disabled name='date'  value='$row[order_date]'></div>
              <div class='col-2 boder border-secondary text-truncate'><input type='text' class='enablefield$row[id]' id='address$row[id]' disabled name='address'  value='$row[shipping_address]'></div>
              <div class='col-3 boder border-secondary'><button class='btn btn-sm btn-warning editData' data-id='$row[id]' id='edit$row[id]'>Edit</button><button class='btn btn-sm btn-danger deleteData' id='$row[id]'>Delete</button></div>
              
              </div>";   
            }
        }
        echo $str4;
    }
    ?>
    <script src="./js/script1.js"></script>