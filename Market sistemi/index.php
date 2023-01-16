<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/custom.css">
</head>
<body>
  <?php  require_once "lib/db.php";?>
  <?php $products = $db->query("SELECT * from products", PDO::FETCH_OBJ)->fetchAll();?>
  <?php include "lib/navbar.php"?>
<!--------------------------------main---------------------------------------->
<div class="container">
  <h2 class="text-center"><strong>Ürün Listesi</strong></h2>
    <div class="row">
      <?php foreach ($products as $product) { ?>
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <img src="assets/images/<?php echo $product->img_url; ?>" alt="<?php echo $product->product_name ?>">
            <div class="caption">
            <h3><?php echo $product->products_name;?></h3>
            <p><?php echo $product->products_detail;?></p>
            <h3 class="text-right price-container"><strong><?php echo $product->price;?> TL</strong></h3>  
            <p>
            <button product-id="<?php echo $product->id;?>" class="btn btn-primary btn-block addToCartBtn" role="button">
            <span>Sepete Ekle </span><span class="glyphicon glyphicon-shopping-cart"></span>
              </a>
              </p>
            </div>
          </div>
        </div>
        <?php }?>
    </div>
</div>
<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/custom.js"></script>
</body>
</html>