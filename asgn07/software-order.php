<?php

include( '../assets/layout.php' );

$title = "Web-182 | OOP Exercise";
$date = "October 18, 2017";
$file = "software-order.php";

displayHeader( $date, $file, $title );

include( "inc-order-object.php" );

$cost = $_POST[ "cost" ];
$items = $_POST[ "items" ];

$order = new order();

$order->setItemCost( $cost );
$order->setNumItems( $items );

$subTotal = $order->getSubTotal();
$tax = $order->getSalesTax();
$shippingHandling = $order->getShippingHandling();
$total = $order->getTotal();


print("<h1>Software Order</h1>");
print( "	<table>
			<tr><td>Sub-Total:</td><td>$subTotal</td></tr>
			<tr><td>Tax:</td><td>$tax</td></tr>
			<tr><td>Shipping and Handling:</td><td>$shippingHandling</td></tr>
			<tr><td>TOTAL:</td><td>$total</td></tr>
			</table>" );
displayFooter();
?>