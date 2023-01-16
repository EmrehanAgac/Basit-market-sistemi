<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <title>Sepetim</title>
</head>
<body>

<?php include "lib/navbar.php"?>
<!---------------------main------------------>
<div class="container">
    <?php if($total_count > 0){ ?>
        <h2 class="text-center">Sepetinizde <strong class="color-danger"><?php echo $total_count; ?></strong> adet ürün bulunmaktadır</h2>
            <div class="col-md-8 col-md-offset-2"> 
                <table class="table table-hover table-bordered table-striped">
                    <thead>
                        <th class="text-center">Ürün Resmi</th>
                        <th class="text-center">Ürün Adı</th>
                        <th class="text-center">Fiyatı</th>
                        <th class="text-center">Adeti</th>
                        <th class="text-center">Toplam</th>
                        <th class="text-center">Sepetten Çıkar</th>
                    </thead>
                    <tbody>
                        <?php foreach ($shopping_products as $product) { ?>
                            <tr>
                                <td class="text-center" width="120">
                                <img src="assets/images/<?php echo $product->img_url; ?>" alt="" width="50px"> 
                                </td>
                                <td class="text-center urun_adi"><?php echo $product->products_name ?></td>
                                <td class="text-center urun_fiyati"><strong><?php echo $product->price ?> TL</strong></td>
                                <td class="text-center">
                                <a href="lib/cart_db.php?p=incCount&product_id=<?php echo $product->id; ?>" class="btn btn-xs btn-success">
                                <span class="glyphicon glyphicon-plus"></span>      
                                </a>
                                <input type="text" class="item-count-input urun_adet"value="<?php echo $product->count; ?>"> 
                                <a href="lib/cart_db.php?p=decCount&product_id=<?php echo $product->id; ?>" class="btn btn-xs btn-danger">
                                <span class="glyphicon glyphicon-minus"></span>      
                                </a>
                                </td>                                               
                                <td class="text-center"><?php echo $product->total_price; ?></td>
                                <td class="text-center" width="120">
                                <button product-id="<?php echo $product->id; ?>" class="btn btn-danger btn-sm removeFromCartBtn">
                                <span>Sepeten Çıkar  </span><span class="glyphicon glyphicon-remove"></span>
                                </a>
                                </td>
                        <?php } ?>
                    </tbody>
                    <tfoot>
                        <th colspan="2" class="text-left">
                        Toplam Ürün  :  <span class="color-danger"><?php echo $total_count; ?></span>
                        </th>
                        <th colspan="2" class="text">
                        <button product-id="<?php echo $product->id; ?>" class="btn btn-primary btn-sm satinalim" role="button">
                        <span>Satın Al  </span><span class="glyphicon glyphicon-shopping-cart"></span>
                        </th>
                        <th colspan="4" class="text-right">
                        Toplam Fiyatı  :  <span class="color-danger"><?php echo $total_price; ?></span>
                        </th>
                    </tfoot>
                </table>
    </div>
</div>
<hr>
<div class="row">
    <?php } else { ?>
        <div class="alert alert-info">
            <strong>Sepetinizde Ürün Bulunmamaktadır. Eklemek için <a href="index.php"> Tıklayınız.</a></strong>
        </div>
    <?php } ?>
</div>
        <script src="assets/js/jquery-3.6.0.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/custom.js"></script>
</body>
</html>