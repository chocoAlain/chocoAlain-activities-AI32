<!DOCTYPE html>

<!-- Database are auto generated, just turn on XAMPP Apache & MySQL -->
<!-- The Database name is hanzph then the table is accounts -->

<!-- Reference -->
<!-- https://animatedbackgrounds.me/ For animated background -->
<!-- https://uiverse.io/ For the button -->
<!-- https://getbootstrap.com/ For the bootstrap -->

<?php
$imageLogo = 'https://bitbucket.org/chocoalain/online-files/raw/331a758d4cb12ca0c85e538381674bc3580e4498/1563190816830.png';
databaseConnectivityAndGeneration();
addData();
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="icon" href="<?php echo $imageLogo; ?>">
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        svg {
            z-index: -1;
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            box-sizing: border-box;
            display: block;
            background-color: #0e4166;
            background-image: linear-gradient(to bottom, rgba(14, 65, 102, 0.86), #0e4166);
            background-attachment: fixed;
            background-position: center;
            background-size: cover;
        }

        .py-5 {
            padding-bottom: 0px !important;
        }

        .Btn {
            position: relative;
            width: 100%;
            height: 55px;
            border-radius: 45px;
            border: none;
            background-color: rgb(58, 179, 139);
            color: white;
            box-shadow: 0px 10px 10px rgb(63, 145, 206) inset,
                0px 5px 10px rgba(5, 5, 5, 0.212),
                0px -10px 10px rgb(234, 51, 55) inset;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .Btn::before {
            width: 70%;
            height: 2px;
            position: absolute;
            background-color: rgba(250, 250, 250, 0.678);
            content: "";
            filter: blur(1px);
            top: 7px;
            border-radius: 50%;
        }

        .Btn::after {
            width: 70%;
            height: 2px;
            position: absolute;
            background-color: rgba(250, 250, 250, 0.137);
            content: "";
            filter: blur(1px);
            bottom: 7px;
            border-radius: 50%;
        }

        .Btn:hover {
            animation: jello-horizontal 0.9s both;
        }

        @keyframes jello-horizontal {
            0% {
                transform: scale3d(1, 1, 1);
            }

            30% {
                transform: scale3d(1.25, 0.75, 1);
            }

            40% {
                transform: scale3d(0.75, 1.25, 1);
            }

            50% {
                transform: scale3d(1.15, 0.85, 1);
            }

            65% {
                transform: scale3d(0.95, 1.05, 1);
            }

            75% {
                transform: scale3d(1.05, 0.95, 1);
            }

            100% {
                transform: scale3d(1, 1, 1);
            }
        }

        @media only screen and (max-width: 575px) {
            .regFormText {
                display: none;
            }
        }
    </style>
</head>

<body class="bg-light">
    <div class="container">
        <main>
            <div class="py-5 text-center">
                <img class="d-block mx-auto mb-2" src="<?php echo $imageLogo; ?>" alt="" width="100" height="100">
                <h2 class="text-light ">Register</h2>
                <p class="lead text-light regFormText">Registration form</p>
            </div>
            <div class="row justify-content-md-center">
                <div class="col-md-7 col-lg-8">
                    <form method="POST" action="./index.php">
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label for="firstName" class="form-label text-light">First name</label>
                                <input name="firstName" type="text" class="form-control" id="firstName" required>
                            </div>
                            <div class="col-sm-6">
                                <label for="lastName" class="form-label text-light">Last name</label>
                                <input name="lastName" type="text" class="form-control" id="lastName" required>
                            </div>
                            <div class="col-12">
                                <label for="cellNum" class="form-label text-light">Cellphone Number</label>
                                <input name="cellNum" type="text" onkeypress="validate(event)" class="form-control" id="cellNum" placeholder="09*********" min="11" maxlength="11" required>
                            </div>
                            <div class="col-sm-6">
                                <label for="email" class="form-label text-light">Email</label>
                                <input name="email" type="email" class="form-control" id="email" placeholder="you@google.com" required>
                            </div>
                            <div class="col-sm-6">
                                <label for="username" class="form-label text-light">Username</label>
                                <input name="username" type="text" class="form-control" id="username" required>
                            </div>
                            <div class="col-12">
                                <label for="passw" class="form-label text-light">Password</label>
                                <input name="passw" type="password" class="form-control" id="passw" placeholder="******" required>
                            </div>
                            <div class="col-12">
                                <label for="address" class="form-label text-light">Address</label>
                                <input name="address" type="text" class="form-control" id="address" placeholder="Barangay or Street" required>
                            </div>
                        </div>
                        <br>
                        <button class="Btn" value="Submit" type="submit">
                            Submit
                        </button>
                        <br>
                        <div class="col-md-6 align-self-end text-light">Check Database
                            <a class="text-warning" href="http://localhost/phpmyadmin/index.php?route=/sql&db=hanzph&table=accounts&pos=0">account</a>
                        </div>
                    </form>
                </div>
            </div>
        </main>
        <footer class="text-muted text-center text-small">
            <p class="mb-1 text-light">© 2019–2023 HanzPh</p>
        </footer>
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%" height="100%" viewBox="0 0 1600 900" preserveAspectRatio="xMidYMax slice">
            <defs>
                <linearGradient id="bg">
                    <stop offset="0%" style="stop-color:rgba(130, 158, 249, 0.06)"></stop>
                    <stop offset="50%" style="stop-color:rgba(76, 190, 255, 0.6)"></stop>
                    <stop offset="100%" style="stop-color:rgba(115, 209, 72, 0.2)"></stop>
                </linearGradient>
                <path id="wave" fill="url(#bg)" d="M-363.852,502.589c0,0,236.988-41.997,505.475,0
	s371.981,38.998,575.971,0s293.985-39.278,505.474,5.859s493.475,48.368,716.963-4.995v560.106H-363.852V502.589z" />
            </defs>
            <g>
                <use xlink:href='#wave' opacity=".3">
                    <animateTransform attributeName="transform" attributeType="XML" type="translate" dur="10s" calcMode="spline" values="270 230; -334 180; 270 230" keyTimes="0; .5; 1" keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0" repeatCount="indefinite" />
                </use>
                <use xlink:href='#wave' opacity=".6">
                    <animateTransform attributeName="transform" attributeType="XML" type="translate" dur="8s" calcMode="spline" values="-270 230;243 220;-270 230" keyTimes="0; .6; 1" keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0" repeatCount="indefinite" />
                </use>
                <use xlink:href='#wave' opacty=".9">
                    <animateTransform attributeName="transform" attributeType="XML" type="translate" dur="6s" calcMode="spline" values="0 230;-140 200;0 230" keyTimes="0; .4; 1" keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0" repeatCount="indefinite" />
                </use>
            </g>
        </svg>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
        function validate(evt) {
            var theEvent = evt || window.event;

            if (theEvent.type === 'paste') {
                key = event.clipboardData.getData('text/plain');
            } else {
                // Handle key press
                var key = theEvent.keyCode || theEvent.which;
                key = String.fromCharCode(key);
            }
            var regex = /[0-9]/;
            if (!regex.test(key)) {
                theEvent.returnValue = false;
                if (theEvent.preventDefault) theEvent.preventDefault();
            }
        }
    </script>
</body>

</html>

<?php
function databaseConnectivityAndGeneration()
{
    try {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $databaseName = "hanzph";
        $conn = new mysqli($servername, $username, $password);
        if ($conn->connect_error) {
            die("<script>alert('Connection failed: " . $conn->connect_error . ", Try to start Apache and My SQL in XAMPP.');</script>");
        } else {
            try {
                new mysqli($servername, $username, $password, $databaseName);
                echo "<script>console.log('Database is already created');</script>";
            } catch (Exception) {
                // Creating Local Database To your Device kasi iba na computer imo gamit
                echo "<script>console.log('Creating Database');</script>";
                $conn->query("CREATE DATABASE $databaseName");
                try {
                    echo "<script>console.log('Creating Table');</script>";
                    $connected = new mysqli($servername, $username, $password, $databaseName);
                    // Create Table narin para sure
                    $sql = "CREATE TABLE accounts (
                        id int NOT NULL AUTO_INCREMENT,
                        firstname VARCHAR(30) NOT NULL,
                        lastname VARCHAR(30) NOT NULL,
                        email VARCHAR(50),
                        pass VARCHAR(50),
                        contact_Number VARCHAR(15),
                        username VARCHAR(50),
                        address VARCHAR(200),
                        PRIMARY KEY (id)
                        )";

                    if ($connected->query($sql) === TRUE) {
                        echo "<script>console.log('Table created successfully');</script>";
                    } else {
                        echo "<script>console.log('Error creating table: " . $conn->error . "');</script>";
                        $connected->close();
                    }
                } catch (Exception $e) {
                    echo "<script>console.log('Error creating table');</script>";
                }
            }
        }
    } catch (Exception) {
        echo "<script>alert('Check server');</script>";
    }
}
function addData()
{
    $firstName = filter_input(INPUT_POST, 'firstName');
    $lastName = filter_input(INPUT_POST, 'lastName');
    $cellNum = (int)filter_input(INPUT_POST, 'cellNum');
    $email = filter_input(INPUT_POST, 'email');
    $username = filter_input(INPUT_POST, 'username');
    $passes = filter_input(INPUT_POST, 'passw');
    $address = filter_input(INPUT_POST, 'address');
    if (!empty($firstName) || !empty($lastName) || !empty($cellNum) || !empty($email) || !empty($passes) || !empty($address)) {
        $conn = new mysqli("localhost", "root", "", "hanzph");
        if (mysqli_connect_error()) {
            die('Connect Error (' . mysqli_connect_error() . ')' . mysqli_connect_error());
        } else {
            $insertData = "INSERT INTO accounts (contact_Number, firstname, lastname, email,pass , username, address) VALUES ('" . $cellNum . "','" . $firstName . "','" . $lastName . "','" . $email . "','" . $passes . "','" . $username . "','" . $address . "')";
            if ($conn->query($insertData)) {
                echo "<script>
                console.log('Data Added');
                if (confirm(`Register Successful
            Do you want to check the database?`) == true) {
                    window.location.href = 'http://localhost/phpmyadmin/index.php?route=/sql&db=hanzph&table=accounts&pos=0';
                } else {
                    window.history.back();
                }
            </script>
            ";
            } else {
                echo "<script>console.log('DATA not Added')</script>";
                echo "<script>
                            if (confirm('Double Primary ID, Please try again!')) {
                                window.history.back(-1);
                            } else {
                                window.location.href = './index.php';
                            }
                        </script>";
            }
            $conn->close();
        }
    } else {
        echo "<script>console.log('Please fillup all boxes');</script>";
    }
}
?>

