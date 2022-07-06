<?php 
session_start();

if (isset($_GET['beli'])&& is_numeric($_GET['beli'])){
    if (isset($_SESSION['chart'])){
        $_SESSION['chart'][ $_GET['beli'] ]++;

    }else{
        $_SESSION['cart'][$_GET['beli']]=1;

    }
}
print_r( $_SESSION['cart']);
?>
<p><a href="?beli=1">beli 1</a>
<a href="?beli=2">beli 2</a>
<a href="?beli=3">beli 3</a>
<a href="?beli=4">beli 4</a>
</p>