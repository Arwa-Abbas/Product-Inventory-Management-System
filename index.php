<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product Inventory Management</title>
  <link rel="stylesheet" href="assets/style.css">
  <style>
    .home-container {
      background: #fff;
      padding: 40px 50px;
      border-radius: 16px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.1);
      max-width: 500px;
      width: 90%;
      margin: 80px auto;
      text-align: center;
    }

```
.home-container h2 {
  font-size: 2rem;
  color: #1a3c6d;
  margin-bottom: 10px;
}

.home-container p {
  color: #555;
  margin-bottom: 25px;
  font-size: 1.05rem;
}

.home-links {
  display: flex;
  flex-direction: column;
  gap: 18px;
  align-items: center;
}

.home-links a {
  background: #1a3c6d;
  color: #fff;
  text-decoration: none;
  padding: 14px 0;
  width: 80%;
  border-radius: 8px;
  font-weight: 500;
  transition: all 0.3s ease;
  box-shadow: 0 4px 8px rgba(0,0,0,0.1);
}

.home-links a:hover {
  background: #2f5aa3;
  transform: translateY(-2px);
}
```

  </style>
</head>
<body>
  <div class="home-container">
    <h2>Product Inventory Management System</h2>

<div class="home-links">
  <a href="pages/add_product.php">Add Product</a>
  <a href="pages/view_product.php">View Products</a>
  <a href="pages/update_product.php">Update Product</a>
  <a href="pages/delete_product.php">Delete Product</a>
</div>

  </div>
</body>
</html>
