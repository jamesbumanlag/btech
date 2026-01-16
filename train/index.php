<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Train Ticket</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <!-- Adult : $10 -->
    <!-- Student : $7 -->
    <!-- Senior : $8 -->
    <!-- Kids  : $5 -->
    <div class="main-container">
        <div class="trainTicket-container">
            <h1>Train Ticket</h1>
                <form>
                    <div>
                        <label for="inputName">Name</label>
                        <input type="text" id="inputName" placeholder="Type your name" class="inputDesign">
                    </div>
            
                    <div>
                        <label for="from">From</label><br>
                        <select name="from" id="from" class="selectPassenger">
                            <option value="default">Select</option>
                            <option value="brisbane">Brisbane</option>
                            <option value="sydney">Sydney</option>
                            <option value="melbourne">Melbourne</option>
                            <option value="perth">Perth</option>
                        </select>
                    </div>

                    <div>
                        <label for="to">To</label><br>
                        <select name="to" id="to" class="selectPassenger">
                            <option value="default">Select</option>
                            <option value="brisbane">Brisbane</option>
                            <option value="sydney">Sydney</option>
                            <option value="melbourne">Melbourne</option>
                            <option value="perth">Perth</option>
                        </select>
                    </div>

                    <div>
                        <label for="passenger">Passenger Type</label><br>
                        <select name="passenger" id="passenger" class="selectPassenger">
                            <option value="default">Select</option>
                            <option value="adult">Adult</option>
                            <option value="student">Student</option>
                            <option value="senior">Senior</option>
                            <option value="kids">Kids</option>
                        </select>
                    </div>

                    
                    <button type="button" id="goButton" class="goButton">Go</button>
                    
                </form>
                <hr>
                <div class="receipt-container">
                    
                    <h1>Receipt</h1>
                    <p><strong>Date:</strong><span>17/01/2026</span></p>
                    <p><strong>Time:</strong><span>10:25:32</span></p>
                    <p><strong>Name</strong><span>James Bumanlag</span></p>
                    <p><strong>Passenger Type:</strong><span>Adult</span></p>
                    <p><strong>From:</strong><span>Brisbane</span></p> 
                    <p><strong>To:</strong><span>Sydney</span></p>

                    <p class="ticketPriceDisplay"><strong>Ticket Price:</strong> <span id="showPrice">0</span></p>
                    <img src="images/barcode sample.jpg" alt="">
                </div>
        </div> <!-- end trainTicket-container -->
    </div> <!-- end main-container -->


    <script src="script.js"></script>
</body>
</html>