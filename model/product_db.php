<?php
//Get products
function get_products() {
    global $db;
    $query = 'SELECT * FROM products
              ORDER BY categoryID';
    $products = $db->query($query);
    return $products;
}
//Get products from a category
function get_products_by_category($category_id) {
    global $db;
    $query = "SELECT * FROM products
              WHERE products.categoryID = '$category_id'
              ORDER BY productID";
    $products = $db->query($query);
    return $products;
}
//Get a product from the ID
function get_product($product_id) {
    global $db;
    $query = "SELECT * FROM products
              WHERE productID = '$product_id'";
    $product = $db->query($query);
    $product = $product->fetch();
    return $product;
}
//Delete a product
function delete_product($product_id) {
    global $db;
    $query = "DELETE FROM products
              WHERE productID = '$product_id'";
    $db->exec($query);
}
//Add a product
function add_product($category_id, $code, $name, $price) {
    global $db;
    $query = "INSERT INTO products
                 (categoryID, productCode, productName, listPrice)
              VALUES
                 ('$category_id', '$code', '$name', '$price')";
    $db->exec($query);
}
//Edit a product
function edit_product($product_id, $category_id, $code, $name, $price) {
    global $db;
    $query = "UPDATE products SET categoryID='$category_id', productCode='$code', productName='$name', listPrice='$price' WHERE productID=$product_id";
    $db->exec($query);
}
?>