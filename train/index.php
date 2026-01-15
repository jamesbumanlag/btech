<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Train Ticket</title>
</head>
<body>

    <!-- Adult : $10 -->
    <!-- Student : $7 -->
    <!-- Senior : $8 -->
    <!-- Kids  : $5 -->

    <h1>Train Ticket</h1>
    <form>
        <label for="passenger">Passenger</label>
        <select name="passenger" id="passenger">
            <option value="default">Select</option>
            <option value="adult">Adult</option>
            <option value="student">Student</option>
            <option value="senior">Senior</option>
            <option value="kids">Kids</option>
        </select>
        <button type="button" id="goButton">Go</button>
    <p>Ticket Price: <span id="showPrice">0</span></p>

    </form>

    <script src="script.js"></script>
</body>
</html>