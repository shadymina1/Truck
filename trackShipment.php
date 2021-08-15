<html lang="en">

<head>
    <?php include "./head.php"; ?>
    <title>Tracking shipment</title>
    <meta name="description" content="Tracking a shipment with a tracking number to get the shipment status.">
    <meta name="keywords" content="Trucks, Trucks company, trucks tracking ,shipment tracking, safe shipping">
</head>

<body>
    <header>
        <?php include "./nav.php"; ?>
    </header>
    <main>
        <h1 class="mainBooking">Track Your Shipment!</h1>
        <div class="trakingImg">
            <img src="./imgs/tracking.png" alt="truck" style="width:100%;">
            <br>
            <br>
            <div>
                <p>Insert Your Tracking Number: </p>
                <input type="text" name="trackingNumber" class="forminputs">
                <br><br>
                <button type="submit" class="btn btn-dark" name="submit-tracking">Track My Shipment</button>

            </div>
            <br>
        </div>

    </main>
    <footer>
        <?php include "./footer.php"; ?>
    </footer>

</body>

</html>