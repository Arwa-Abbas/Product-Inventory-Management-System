<?php include '../connection/connection.php'; ?>
<link rel="stylesheet" href="../assets/style.css">

<div class="form-container">
    <h2>Add New Product</h2>
    <form method="POST">
        <input type="text" name="name" placeholder="Product Name" required>
        <input type="text" name="category" placeholder="Category" required>
        <input type="number" step="0.01" name="price" placeholder="Price" required>
        <input type="number" name="quantity" placeholder="Quantity" required>
        <button type="submit" name="submit">Add Product</button>
    </form>
</div>

<?php
if (isset($_POST['submit'])) {
    $sql = "INSERT INTO products (name, category, price, quantity) VALUES (?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_POST['name'], $_POST['category'], $_POST['price'], $_POST['quantity']]);
    echo "<p class='success'>Product added successfully!</p>";
}
?>
