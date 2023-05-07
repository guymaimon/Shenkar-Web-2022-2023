<?php
// retrieve form data
$product_name = $_GET['product_name'];
$product_color = $_GET['product_color'];
$product_size = $_GET['product_size'];

// process the data
if ($product_color == 'red') {
  $in_stock = true;
} else {
  $in_stock = false;
}

if ($product_size == 'S' || $product_size == 'M' || $product_size == 'L') {
  $size_available = true;
} else {
  $size_available = false;
}

if ($product_name == 'shirt' && $product_color == 'black') {
  $on_sale = true;
} else {
  $on_sale = false;
}

// generate the result HTML
if ($in_stock && $size_available && !$on_sale) {
  $result_html = file_get_contents('response/success.html');
} else {
  $result_html = file_get_contents('response/error.html');
}

// return the result to the client
echo $result_html;
?>