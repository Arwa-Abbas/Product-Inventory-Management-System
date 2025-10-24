<?php include '../connection/connection.php'; ?>
<link rel="stylesheet" href="../assets/style.css">

<div class="form-container">
    <h2>Update Product</h2>
    <form method="POST">
        <input type="number" name="id" placeholder="Product ID" required>
        <input type="number" step="0.01" name="price" placeholder="New Price">
        <input type="number" name="quantity" placeholder="New Quantity">
        <button type="submit" name="update">Update</button>
    </form>
</div>

<?php
if (isset($_POST['update'])) {
    $sql = "UPDATE products SET price=?, quantity=? WHERE id=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_POST['price'], $_POST['quantity'], $_POST['id']]);
    echo "<p class='success'>Product updated successfully!</p>";
}
?>
