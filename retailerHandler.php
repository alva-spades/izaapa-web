<?php 

  $shop_name = $_POST['shop_name'];
  include("../config.php");
    
  function addProduct(){
    $product_name = $_POST['product_name'];
    $product_amount = $_POST['product_amount'];
    $product_discount_amount = $_POST['product_discount_amount'];
    $sql = "INSERT INTO retailerAccount VALUES
    ('','$name','$email','$shop_name','$shop_location','$product_name','$product_amount','$product_discount_amount','$password')";
   if(mysqli_query($conn, $sql)){
       echo "<h3>Data Added</h3>";
       echo nl2br("\n$name\n $email");
   } else { 
       echo "ERROR: Hush! Sorry $sql. "
       . mysqli_error($conn); 
   }

   // close connection
   mysqli_close($conn);
}    
    function createShop(){
        $conn = mysqli_connect("localhost","root","","izaapa");
            
        $name = $_POST['name'];
        $email = $_POST['email'];
        $shop_name = $_POST['shop_name'];
        $shop_location = $_POST['shop_location'];
        $password = $_POST['password'];
        $sql = "CREATE TABLE `izaapa`.`$shop_name` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `product_name` VARCHAR(100) NOT NULL , `product_amount` INT(200) NOT NULL , `product_discount_amount` INT(200) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;";
        if(mysqli_query($conn, $sql)){
            echo "<h3>Shop Created</h3>";
            echo nl2br("\n$shop_name\n was  $email");
        } else { 
            echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($conn); 
        }
    }
    function whatsInTheShop(){
       $conn = mysqli_connect("localhost","root","","izaapa");
       $sql = "SELECT * FROM '$shop_name'";
       mysqli_query($conn, $sql);
    }
    function createRetailerAccount(){
       $conn = mysqli_connect("localhost","root","","izaapa");
            
       $name = $_POST['name'];
       $email = $_POST['email'];
       $shop_name = $_POST['shop_name'];
       $shop_location = $_POST['shop_location'];
       $password = $_POST['password'];
    
       $sql = "INSERT INTO retailer_accounts VALUES
       ('','$name','$email','$shop_name','$shop_location','_blank','00','00','$password')"; 
       createShop();
      if(mysqli_query($conn, $sql)){
          echo "<h3>DAccount Created</h3>";
          echo nl2br("\n$name\n $email");
         
      } else { 
          echo "ERROR: Hush! Sorry $sql. "
          . mysqli_error($conn); 
      }
         
     
      mysqli_close($conn);
   }
