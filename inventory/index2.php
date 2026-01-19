<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Material Inventory</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
            <section class="title-container">
                <h1>Material Inventory</h1>
            </section>
            <nav>
                <ul>
                    <li><a href="#">Login</a></li>
                </ul>
            </nav>

    </header>
<hr>
    <main>
        <form>
            <label for="selectVehicle">Select Vehicle</label>
            <select name="selectVehicle" id="selectVehicle">
                <option value="select">---</option>
                <option value="ranger">Ranger</option>
                <option value="staria">Staria</option>
                <option value="hilux">Hilux</option>
                <option value="triton">Triton</option>
            </select>
            
            <div class="button-container">

            
                <button type="button">Add Material</button>
            
                <button type="button">View Stocks</button>

                <button type="button">Search</button>

            </div>

            


        </form>

        <section class="addMaterial-container">

            <form class="material-form">
                <div class="materialType-container spaceBlock">
                    <label for="materialType">Material Type</label>
                    <select name="materialType" id="materialType">
                        <option value="internalCable">Internal Cable</option>
                        <option value="externalCable">External Cable</option>
                    </select>
                </div>

                <div class="internalLenght-container  spaceBlock">
                    <label for="internalLenght">Internal Cable Lenght</label>
                    <select name="internalLenght" id="internalLenght">
                        <option value="select">Select...</option>
                        <option value="5">5m</option>
                        <option value="15">15m</option>
                        <option value="25">25m</option>
                        <option value="30">30m</option>
                    </select>
                </div>

                <div class="externalLenght-container spaceBlock">
                    <label for="externalLenght">External Cable Lenght</label>
                    <select name="externalLenght" id="externalLenght">
                        <option value="40">40m</option>
                        <option value="60">60m</option>
                        <option value="80">80m</option>
                        <option value="120">120m</option>
                        <option value="160">160m</option>
                        <option value="200">200m</option>
                        <option value="250">250m</option>
                        <option value="300">300m</option>
                        <option value="500">500m</option>
                    </select>
                </div>

                <button type="submit" id="addMaterialButton" class="addMaterialButton">Add</button>
            </form>

        </section>

    </main>


<script src="script.js"></script>
</body>
</html>