<?php
     // Database Structures
     // 1. IZAAPA   >  MAIN DATABASE
     // izaapa - table => customer_accounts 
     // izaapa - table => retailer_ accounts 
     // customer_accounts  => { id , name , email , tel , wishlist_products , password}
     // retailer_accounts  => { id , name , email , shopName , shop location , password , product_name , product_original_amount , product_discount_amount }
     
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>_RENDER</title>
</head>
<body>
    <style>
        .holder {
           float:left;
           font-family:consolas;
           color:grey;
           width:500px;
           box-shadow: 1px 1px 2px 1px green;
           border-radius:9px;
           padding:10px;
        }
        .line-down { 
            padding-left:250px;
        }
        .line-down p {
            font-size:50px;
        }
    </style>
    <div class="holder">
    <code>CREATE TABLE `izaapa`.`retailer_accounts` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `name` VARCHAR(100) NOT NULL , `email` VARCHAR(100) NOT NULL , `shop_name` VARCHAR(100) NOT NULL , `shop_location` VARCHAR(100) NOT NULL , `product_name` VARCHAR(100) NOT NULL , `product_amount` INT NOT NULL , `product_discount_amount` INT NOT NULL , `password` VARCHAR(10) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;</code>
    </div>
    
    <br><br><br><br><br><br><div class="line-down">
     <p> &downarrow;</p>
    </div>
    <div class="holder">
    <code>CREATE TABLE `izaapa`.`retailer_accounts` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `name` VARCHAR(100) NOT NULL , `email` VARCHAR(100) NOT NULL , `shop_name` VARCHAR(100) NOT NULL , `shop_location` VARCHAR(100) NOT NULL , `product_name` VARCHAR(100) NOT NULL , `product_amount` INT NOT NULL , `product_discount_amount` INT NOT NULL , `password` VARCHAR(10) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;CREATE TABLE `izaapa`.`retailer_accounts` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `name` VARCHAR(100) NOT NULL , `email` VARCHAR(100) NOT NULL , `shop_name` VARCHAR(100) NOT NULL , `shop_location` VARCHAR(100) NOT NULL , `product_name` VARCHAR(100) NOT NULL , `product_amount` INT NOT NULL , `product_discount_amount` INT NOT NULL , `password` VARCHAR(10) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;CREATE TABLE `izaapa`.`retailer_accounts` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `name` VARCHAR(100) NOT NULL , `email` VARCHAR(100) NOT NULL , `shop_name` VARCHAR(100) NOT NULL , `shop_location` VARCHAR(100) NOT NULL , `product_name` VARCHAR(100) NOT NULL , `product_amount` INT NOT NULL , `product_discount_amount` INT NOT NULL , `password` VARCHAR(10) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;CREATE TABLE `izaapa`.`retailer_accounts` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `name` VARCHAR(100) NOT NULL , `email` VARCHAR(100) NOT NULL , `shop_name` VARCHAR(100) NOT NULL , `shop_location` VARCHAR(100) NOT NULL , `product_name` VARCHAR(100) NOT NULL , `product_amount` INT NOT NULL , `product_discount_amount` INT NOT NULL , `password` VARCHAR(10) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;CREATE TABLE `izaapa`.`retailer_accounts` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `name` VARCHAR(100) NOT NULL , `email` VARCHAR(100) NOT NULL , `shop_name` VARCHAR(100) NOT NULL , `shop_location` VARCHAR(100) NOT NULL , `product_name` VARCHAR(100) NOT NULL , `product_amount` INT NOT NULL , `product_discount_amount` INT NOT NULL , `password` VARCHAR(10) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;CREATE TABLE `izaapa`.`retailer_accounts` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `name` VARCHAR(100) NOT NULL , `email` VARCHAR(100) NOT NULL , `shop_name` VARCHAR(100) NOT NULL , `shop_location` VARCHAR(100) NOT NULL , `product_name` VARCHAR(100) NOT NULL , `product_amount` INT NOT NULL , `product_discount_amount` INT NOT NULL , `password` VARCHAR(10) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;CREATE TABLE `izaapa`.`retailer_accounts` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `name` VARCHAR(100) NOT NULL , `email` VARCHAR(100) NOT NULL , `shop_name` VARCHAR(100) NOT NULL , `shop_location` VARCHAR(100) NOT NULL , `product_name` VARCHAR(100) NOT NULL , `product_amount` INT NOT NULL , `product_discount_amount` INT NOT NULL , `password` VARCHAR(10) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;CREATE TABLE `izaapa`.`retailer_accounts` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `name` VARCHAR(100) NOT NULL , `email` VARCHAR(100) NOT NULL , `shop_name` VARCHAR(100) NOT NULL , `shop_location` VARCHAR(100) NOT NULL , `product_name` VARCHAR(100) NOT NULL , `product_amount` INT NOT NULL , `product_discount_amount` INT NOT NULL , `password` VARCHAR(10) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;CREATE TABLE `izaapa`.`retailer_accounts` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `name` VARCHAR(100) NOT NULL , `email` VARCHAR(100) NOT NULL , `shop_name` VARCHAR(100) NOT NULL , `shop_location` VARCHAR(100) NOT NULL , `product_name` VARCHAR(100) NOT NULL , `product_amount` INT NOT NULL , `product_discount_amount` INT NOT NULL , `password` VARCHAR(10) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;</code>
    </div>
</body>
</html>