<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>

</head>

<body>
    <br>
    <br>
    <br>
    <style>
        body {
            background-image: url('');
            background-size: cover;
            background-position: auto;
            background-repeat: no-repeat;

        }

        h1 {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            text-align: center;
            color: rgb(27, 134, 6);
            font-style: oblique;
        }

        form {
            background-color: rgb(165, 212, 197);
            border-left: 20px;
            border-right: 20px;
            border-radius: 10px;
            padding: 20px;
            box-sizing: border-box;
            width: 400px;
            align-items: center;



        }

        button[type="submit"] {
            background-color: #12024b;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="Name"],
        input[type="password"] {
            width: 50%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-bottom: 10px;
        }
    </style>
    <h1>Admin</h1>
    <center>
        <form>
            <div class="form-group">
                <label for="exampleInputName">Username</label>
                <input type="Name" class="form-control" id="exampleInputName" aria-describedby="nameHelp">
            </div>
            <br>
            <br>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <br>
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </center>
</body>

</html>