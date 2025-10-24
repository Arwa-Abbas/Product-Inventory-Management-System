<?php include '../connection/connection.php'; ?>
<link rel="stylesheet" href="../assets/style.css">

<h2>Product Inventory</h2>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Category</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Status</th>
    </tr>

<?php
$query = $pdo->query("SELECT * FROM products");
while ($row = $query->fetch()) {
    $status = ($row['quantity'] < 10) ? "<span class='low-stock'>Low Stock</span>" : "OK";
    echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['name']}</td>
        <td>{$row['category']}</td>
        <td>Rs. {$row['price']}</td>
        <td>{$row['quantity']}</td>
        <td>$status</td>
    </tr>";
}
?>
</table>
