<?php

    session_start();

    include 'secure.php';


?>


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
        <button type="button" id="addItemButton" class="addItemButton">Add Item</button>
    </header>

<!-- Start of Add modal -->

    <div class="add-modal-container" id="add-modal-container">
        <div class="modal-container" id="modal-container">
            <h2>Add Item</h2>
            <hr>
            
            <div class="add-menu">
                <!-- <label> -->
                    <input type="radio" name="category" value="cable"> Cable
                <!-- </label> -->
                <!-- <label> -->
                    <input type="radio" name="category" value="ntd"> NTD
                <!-- </label> -->
                <!-- <label> -->
                    <input type="radio" name="category" value="pcd"> PCD
                <!-- </label> -->
            </div>

            <div class="cable-form" id="cable-form">
                <label for="cableType">Type</label>
                <select id="cableType">
                    <option value="select">Select</option>
                    <option value="internal">Internal</option>
                    <option value="external">External</option>
                </select>
                <label for="cableLengthInternal">Length</label>
                <select id="cableLengthInternal">
                    <option value="select">Select</option>
                    <option value="5">5m</option>
                    <option value="15">15m</option>
                    <option value="20">20m</option>
                    <option value="30">30m</option>
                </select>

                <label for="cableLengthExternal">Length</label>
                <select id="cableLengthExternal">
                    <option value="select">Select</option>
                    <option value="40">40m</option>
                    <option value="60">60m</option>
                    <option value="80">80m</option>
                    <option value="120">120m</option>
                    <option value="160">160m</option>
                    <option value="300">300m</option>
                    <option value="500">500m</option>
                </select>
                <div class="submit-add-btn-container">
                    <button type="submit" class="submit-add-btn" id="submit-add-btn">Add</button>
                    <button type="submit" class="submit-close-btn" id="submit-close-btn">Cancel</button>
                </div>
            </div>
            <br>
            <hr>
            <br>
            <div class="ntdForm-container">
                <label for="ntdType">NTD Type</label>
                <select name="ntdType" id="ntdType">
                    <option value="select">Select</option>
                    <option value="4-Port">4-Port</option>
                    <option value="1-Port">1-Port</option>
                </select>

                <div class="submit-add-btn-container">
                    <button type="submit" class="submit-add-btn" id="submit-add-btn">Add</button>
                    <button type="submit" class="submit-close-btn" id="submit-close-btn">Cancel</button>
                </div>
            </div>

             <br>
            <hr>
            <br>
            <div class="pcdForm-container">
                <label for="pcdType">PCD Type</label>
                <select name="pcdType" id="pcdType">
                    <option value="select">Select</option>
                    <option value="corning">Corning</option>
                    <option value="madison">Madison</option>
                </select>

                <div class="submit-add-btn-container">
                    <button type="submit" class="submit-add-btn" id="submit-add-btn">Add</button>
                    <button type="submit" class="submit-close-btn" id="submit-close-btn">Cancel</button>
                </div>
            </div>



            
        </div>
    </div>

<!-- End of Add modal -->



    <nav class="max-width">
        <ul>
            <li>Home > Inventory > Dashboard</li>
            <li>
                <?php 

                    $username = ucfirst($_SESSION['username']) ;
                    echo "Welcome <strong>" .  $username . "</strong>";
                    
                    ?>
            
            
            
            </li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>
    <section class= "displayStatus-container max-width">
        <div class="totalItems-container">
            <img src="dashboard images/file.png" alt="">
            <h2>Total Items</h2>
            <p class="totalItems">52</p>
        </div>
        <div class="lowStockAlerts-container">
            <h2>Low Stock Alerts</h2>
            <p class="lowStockAlerts">3</p>
        </div>
        <div class="outOfStock-container">
            <h2>Out of Stock</h2>
            <p class="outOfStock">2</p>
        </div>
        <div class="totalValue-container">
            <h2>Total Value</h2>
            <p class="totalValue">2,500</p>
        </div>
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
            <div class="material-container">
                <h4>Materials</h4>
                <h5>NTD</h5>
                <h5>PCD</h5>
                <h5>Internal Cable</h5>
                <h5>External Cable</h5>
            </div>
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
<script src="script.js"></script>
</body>
</html>