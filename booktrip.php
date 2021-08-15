<html lang="en">

<head>
    <?php include "./head.php"; ?>
    <title>Book a shipment</title>
    <meta name="description" content="Booking shipment in easy steps.">
    <meta name="keywords" content="Trucks, Booking, shipmnet, shipping">


</head>

<body>
    <header>
        <?php include "./nav.php"; ?>
    </header>
    <main>
        <form action="./qoutation.php" action="POST">
            <h1 class="mainBooking">
                Book Your Trip, Arrange your Shipment:
            </h1>
            <div class="dateAndTime">
                <p>Date: <input type="text" name="date" id="datepicker" class="forminputs"></p>
                <p>Time: <input type="time" name="time" id="timepicker" class="forminputs"></p>
            </div>
            <h2 class="mainBooking">
                Shipment details:
            </h2>
            <div class="dateAndTime">
                <p>Number of pallets: </p>
                <input type="text" name="pallets" class="forminputs">
                <br><br>
                <p>Total weight : </p>
                <input type="text" name="wieght" class="forminputs">
                <br><br><br>
                <h4>Departure Address : </h4>
                <p>Street Number: </p>
                <input type="text" name="streetNun" class="forminputs">
                <br><br>
                <p>Street Name: </p>
                <input type="text" name="StreetName" class="forminputs">
                <br><br>
                <p>City: </p>
                <input type="text" name="city" class="forminputs">
                <br><br>
                <p>Province: </p>
                <input type="text" name="Province" class="forminputs">
                <br><br><br>
                <h4>Arrival Address : </h4>
                <p>Street Number: </p>
                <input type="text" name="streetNun" class="forminputs">
                <br><br>
                <p>Street Name: </p>
                <input type="text" name="StreetName" class="forminputs">
                <br><br>
                <p>City: </p>
                <input type="text" name="city" class="forminputs">
                <br><br>
                <p>Province: </p>
                <input type="text" name="Province" class="forminputs">
            </div>
            <h2 class="mainBooking">
                Shipper details:
            </h2>
            <div class="dateAndTime">
                <p>Company Name: </p>
                <input type="text" name="company" class="forminputs">
                <br><br>
                <p> Cell: </p>
                <input type="text" name="cell" class="forminputs">
                <br><br>
                <p> email: </p>
                <input type="email" name="email" class="forminputs">
            </div>
            <br>
            <div class="dateAndTime">
                <button type="submit" class="btn btn-success" id="btn-booking" name="submit">Success</button>
            </div>

        </form>

    </main>
    <footer>
        <?php include "./footer.php"; ?>
    </footer>

</body>

</html>