<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Dream Project</title>
    <link rel="stylesheet" href="../The-Dream-project/resources/css/home.css">
</head>

<body>
    <h2>Currency converter</h2>
    <form class="form-container" method="GET" action="index.php">
        <div class="form-group">
            <select class="dropdown" name="option-from">
                <option name="EUR">EUR</option>
                <option name ="DZD">DZD</option>
                <option>USD</option>
                <option>YEN</option>
                <option>SKR</option>
            </select>

            <button class="switch-button">SWITCH</button>

            <select class="dropdown" name="option-to">
                <option name="EUR">EUR</option>
                <option name="DZD">DZD</option>
                <option>USD</option>
                <option>YEN</option>
                <option>SKR</option>
            </select>
        </div>

        <div class="form-group">
            <label class="label" for="amount" >Amount</label>
            <input type="number" id="amount" placeholder="Enter amount" class="input-field" name="amount"/>

        </div>

        <button class="convert-button">Convert</button>
        <p><?php echo $euro_to_dzd_round ?> DZD</p>
        <p><?php echo $dzd_to_euro_round ?> €</p>
        <p><?php echo $euro_to_usd_round ?> USD</p>
        <p><?php echo $usd_to_eur_round ?> €</p>
    </form>
</body>
</html>