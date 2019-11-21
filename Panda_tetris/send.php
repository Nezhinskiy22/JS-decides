<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/panda.css">
    <link rel="shortcut icon" href="images/iconfinder_Panda_bear_face_happy_copy_3044792.png" type="image/x-icon">
    <title>Panda tetris</title>
</head>

<body>
    
    <div class="container">
        <header>
            <h1 class="text-center">
                Panda tetris
            </h1>
        </header
            <main>
                <?php
                require_once 'config.php';
                    $username = $_POST['username'];
                    $score = $_POST['score'];

                    $conn = mysqli_connect(SERVERNAME, USER, PASS, DBNAME);
                    mysqli_set_charset($conn, 'utf8');
                    // Check connection
                    if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                    }

                    $sql = "INSERT INTO score (username, score, date) VALUES ('".$username."', ".$score.", ".time().")";

                    if (mysqli_query($conn, $sql)) {
                    echo "New record created successfully";
                    } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }

                    mysqli_close($conn);

                ?>
            </main>
    </div>


    <script src="js/panda.js"></script>
</body>

</html>