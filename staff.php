<html lang="en">

<head>
    <?php include "./head.php"; ?>
    <title>Staff only</title>
    <meta name="description" content="Login for staff only .">
    <meta name="keywords" content="Trucks, Trucks company, trucks employees,MyTrucks staff">

</head>

<body>
    <header>
        <?php include "./nav.php"; ?>
    </header>
    <main>
        <h1 class="mainBooking">
            Are You A Staff Member ?
        </h1>
        <form action="POST">
            <div class="dateAndTime">
                <p>User Name: </p>
                <input type="text" name="userName" id="userName" class="forminputs">
                <br><br>
                <p>Passowrd: </p>
                <input type="password" name="password " id="password" class="forminputs">
                <br><br>
                <button type="submit" class="btn btn-success" id="btn-staff" name="submit-staff">Login</button>
        </form>
        </div>
        <P></P>
        <br><br>
    </main>
    <footer>
        <?php include "./footer.php"; ?>
    </footer>

</body>

</html>