<?php session_start();
    if(isset($_SESSION["shoppingCart"])){
      $shoppingCart = $_SESSION["shoppingCart"];
      $total_count = $shoppingCart ["summary"] ["total_count"];
      $total_price = $shoppingCart ["summary"] ["total_price"];
      $shopping_products = $shoppingCart ["products"];
}

else{
    $total_count = 0;
    $total_price = 0.0;
}
?>

<!------------------------------------------------------>

<nav class="navbar navbar-default">
  <div class="container-fluid">
      <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand">Market</a>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class="active"><a href="index.php">Ürünler <span class="sr-only">(current)</span></a></li>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li>
                <a href="shopping-cart.php">
                  <span class="glyphicon glyphicon-shopping-cart cart_icon"></span> 
                  <span class="badge cart-count"><?php echo $total_count; ?></span>
                </a>
              </li>
            </ul>
        </div>
    </div>
</nav>