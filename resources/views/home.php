<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Dream Project</title>
    <link rel="stylesheet" href="../The-Dream-project/resources/css/home.css">
</head>
<body>
<div class="login-container">
        <h2>Currency converter</h2>
        <form method="GET" action="index.php">
            <input type="number" placeholder="€" name="euro">
            <button type="submit">&rarr;</button>
            <p><?php echo $euro_to_dzd_round ?> DZD</p>
            <br>
            <input type="number" placeholder="DZD" name="dzd">
            <button type="submit">&rarr;</button>
            <p><?php echo $dzd_to_euro_round ?> €</p>
        </form>
    </div>
</body>
</html>