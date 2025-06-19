<!DOCTYPE html>
<html lang="bg">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Калъфчета Онлайн</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Калъфчета Онлайн</h1>
    </header>

    <main>
        <section class="products">
            <h2>Нашите продукти</h2>
            <div class="product-list" id="product-list">
                <!-- Продуктите ще се зареждат тук от PHP -->
            </div>
        </section>

        <section class="add-product">
            <h2>Добави нов калъф</h2>
            <form action="add_product.php" method="POST">
                <input type="text" name="name" placeholder="Име на калъфа" required>
                <input type="number" name="price" step="0.01" placeholder="Цена" required>
                <input type="text" name="image" placeholder="URL на изображение">
                <button type="submit">Добави</button>
            </form>
        </section>
    </main>

    <script>
        fetch('get_products.php')
            .then(response => response.text())
            .then(data => {
                document.getElementById('product-list').innerHTML = data;
            });
    </script>
</body>
</html>
