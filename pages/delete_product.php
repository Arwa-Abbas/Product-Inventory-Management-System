<?php include '../connection/connection.php'; ?>
<link rel="stylesheet" href="../assets/style.css">

<div class="form-container">
    <h2>Delete Product</h2>
    <form method="POST">
        <input type="number" name="id" placeholder="Product ID" required>
        <button type="submit" name="delete">Delete</button>
    </form>
</div>

<?php
if (isset($_POST['delete'])) {
    $sql = "DELETE FROM products WHERE id=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_POST['id']]);
    echo "<p class='success'>Product deleted successfully!</p>";
}
?>
