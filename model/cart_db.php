<?php
//Add something to the cart
function add_to_cart($user_id, $product_id, $quantity) {
    global $db;
    $query = "INSERT INTO orders
                 (userID, productID, quantity)
              VALUES
                 ('$user_id', '$product_id', '$quantity')";
    $q = $db->exec($query);
    
    return $q;
}
//Get items in the cart
function get_items($user_id){
    global $db;
    $query = "SELECT * FROM orders
              WHERE orders.userID = '$user_id'
              ORDER BY quantity";
    $items = $db->query($query);
    return $items;
}
//Check if the product is already in the cart
function check_cart($user_id, $product_id){
    global $db;
    $query = "SELECT * FROM orders
              WHERE `userID` = '$user_id' AND `productID` = '$product_id'";
    $order = $db->query($query);
    $order = $order->fetch();
    return $order;
}
//edit the quantity in a row in the table
function edit_cart($order_id, $quantity) {
    global $db;
    $query = "UPDATE orders SET quantity='$quantity' WHERE orderID=$order_id";
    $db->exec($query);
}
//delete an order
function delete_order($order_id){
    global $db;
    $query = "DELETE FROM orders WHERE orderID=$order_id";
    $db->exec($query);
}
//Checkout function, delete any orders made by that user
function checkout($user_id){
    global $db;
    $query = "DELETE FROM orders WHERE userID=$user_id";
    $db->exec($query);
}
//checks if the cart is empty for a user
function cart_empty_check($user_id){
    global $db;
    $query = "SELECT * FROM orders
              WHERE `userID` = '$user_id'";
    $order = $db->query($query);
    $order = $order->fetch();
    return $order;
}
?>