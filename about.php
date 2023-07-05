<?php
session_start();
error_reporting(0);
include('config.php');
include('header.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
        }

        html {
            box-sizing: border-box;
        }

        *,
        *:before,
        *:after {
            box-sizing: inherit;
        }

        .column {
            float: left;
            width: 33.3%;
            margin-bottom: 16px;
            padding: 0 8px;
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            margin: 8px;
           
        }

        .about-section {
            padding: 50px;
            text-align: center;
            background-color: #474e5d;
            color: white;
        }

        .container {
            padding: 0 16px;
        }

        .container::after,
        .row::after {
            content: "";
            clear: both;
            display: table;
        }

        .title {
            color: grey;
        }

        .button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
        }

        .button:hover {
            background-color: #555;
        }

        @media screen and (max-width: 650px) {
            .column {
                width: 100%;
                display: block;
            }
        }
    </style>
</head>

<body>

    <div class="about-section">
        <h1>About Us Page</h1>
        <p>

            We are a team of experienced computer technicians who specialize in repairs and technical support. We offer a wide range of services, including:
        </p>
        <p style="font-size: large; ">
        <ul>
            <li>* Hardware repairs</li>
            <li>* Software installation and troubleshooting</li>
            <li> * Data recovery</li>
            <li>* Network setup and maintenance</li>
            <!-- <li>* Virus removal</li> -->
        </ul>
        <p>
            We are committed to providing our customers with the highest quality of service, at a price that is affordable. We offer same-day service, and we are always available to answer your questions.
        </p>

        <p>We are so confident in our ability to provide you with quality service that we offer a 100% satisfaction guarantee. If you are not satisfied with our work, we will refund your money.</p>
    </div>

    <h2 style="text-align:center">Our Team</h2>
    <div class="row">
        <div class="column">
            <div class="card">
                <img src="pic.jpg" alt="Jane" width="200" height="200" style="border-radius: 50%">
                <div class="container">
                    <h2>Jane </h2>
                    <p class="title">Hardware Expert</p>
                    <p>Some text that describes me.</p>
                    <p>jane@example.com</p>
                    <p><button class="button"></button></p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <img src="pic.jpg" alt="Mike" width="200" height="200" style="border-radius: 50%">
                <div class="container">
                    <h2>Mike </h2>
                    <p class="title">Software Developer</p>
                    <p>Some text that describes me.</p>
                    <p>mike@example.com</p>
                    <p><button class="button"></button></p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <img src="pic.jpg" alt="John" width="200" height="200" style="border-radius: 50%">
                <div class="container">
                    <h2>John </h2>
                    <p class="title">Network Administratos</p>
                    <p>Some text that describes me.</p>
                    <p>john@example.com</p>
                    <p><button class="button"></button></p>
                </div>
            </div>
        </div>
    </div>

</body>
<?php
include('footer.php');

?>

</html>