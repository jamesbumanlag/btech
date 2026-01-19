<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory System</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="dashboard images/favicon.ico" type="image/x-icon">
</head>
<body>
    <header>
        <div>
            <img src="dashboard images/android-chrome-512x512.png" alt="">
            <h1>Material Inventory Dashboard</h1>
        </div>
        <button type="button" id="addItemButton" class="addItembutton">Add Item</button>
    </header>

    <nav class="max-width">
        <ul>
            <li>Home > Inventory > Dashboard</li>
            <li><a href="#">Logout</a></li>
        </ul>
    </nav>
    <section class= "displayStatus-container max-width">
        <h2>Total Items</h2>
        <h2>Low Stock Alerts</h2>
        <h2>Out of Stock</h2>
        <h2>Total Value</h2>
    </section>

    <main class="max-width">
        <section class="section1-container">
            <div class="barLevels-container">
                <h3>Bar Levels</h3>
            </div>
            <div class="locationSummary-container">
                <h3>Location Summary</h3>
            </div>
        </section>

        <section class="section2-container">
            <h3>Vehicle Inventory</h3>
        </section>

        <section class="section3-container">
            <div class="orderStatus-container">
                <h3>Order Status</h3>
            </div>
            <div class="teams-container">
                <h3>Teams</h3>
            </div>
        </section>
    </main>
</body>
</html>