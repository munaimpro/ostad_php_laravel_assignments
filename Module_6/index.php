<?php 
include 'inc/header.php'; 
/*-- Query for Task 1: Customer info with their total order number --*/
$result1 = $db->select("SELECT a.*, COUNT(b.`orderId`) AS `totalOrder` FROM `customers` a LEFT JOIN `orders` b ON a.`cmrId` = b.`cmrId` GROUP BY b.`cmrId` ORDER BY `totalOrder` DESC;");


/*-- Query for Task 2: Product name, quantity, and total amount for each order item --*/
$result2 = $db->select("SELECT a.`name`, b.`orderId`, b.`quantity`, (b.`quantity` * b.`unitPrice`) AS `totalAmount` FROM `products` a JOIN `orderitems` b ON a.`productId` = b.`productId` ORDER BY b.`orderId`");


// /*-- Query for Task 3: Product name, quantity, and total amount for each order item --*/
// $result2 = $db->select("SELECT a.`name`, b.`orderId`, b.`quantity`, (b.`quantity` * b.`unitPrice`) AS `totalAmount` FROM `products` a JOIN `orderitems` b ON a.`productId` = b.`productId` ORDER BY b.`orderId`");


/*-- Query for Task 4: Customer name along with the total purchase amount in descending order of the purchase amount --*/
$result4 = $db->select("SELECT a.`name`, SUM(b.`totalAmount`) AS `totalPurchase` FROM `customers` a JOIN `orders` b ON a.`cmrId` = b.`cmrId` GROUP BY b.`cmrId` ORDER BY `totalPurchase` DESC");
?>




<!-- Task 1: Customer info with their total order number -->
<h1>Task 1: Product name, quantity, and total amount for each order item</h1>
<table style="width:100%; border-collapse:collapse">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Location</th>
        <th>Total Order</th>
    </tr>
    <?php if($result1){ 
        while($value = $result1->fetch_assoc()){ ?>
    <tr>
        <td><?php echo $value['name'];?></td>
        <td><?php echo $value['email'];?></td>
        <td><?php echo $value['location'];?></td>
        <td><?php echo $value['totalOrder'];?></td>
    </tr>
    <?php }} ?>
</table>



<!-- Task 2: Product name, quantity, and total amount for each order item -->
<h1>Task 2: Product name, quantity, and total amount for each order item</h1>
<table style="width:100%; border-collapse:collapse">
    <tr>
        <th>Order No</th>
        <th>Name</th>
        <th>Quantity</th>
        <th>Total Amount</th>
    </tr>
    <?php if($result2){ 
        while($value = $result2->fetch_assoc()){ ?>
    <tr>
        <td><?php echo $value['orderId'];?></td>
        <td><?php echo $value['name'];?></td>
        <td><?php echo $value['quantity'];?></td>
        <td><?php echo $value['totalAmount'];?></td>
    </tr>
    <?php }} ?>
</table>



<!-- Task 4: Customer name along with the total purchase amount in descending order of the purchase amount -->
<h1>Task 4: Customer who made maximum purchase </h1>
<table style="width:100%; border-collapse:collapse">
    <tr>
        <th>Name</th>
        <th>Total Amount</th>
    </tr>
    <?php if($result4){ 
        while($value = $result4->fetch_assoc()){ ?>
    <tr>
        <td><?php echo $value['name'];?></td>
        <td><?php echo $value['totalPurchase'];?></td>
    </tr>
    <?php }} ?>
</table>




		

<?php include 'inc/footer.php'; ?>