<?php
session_start();
include "config.php";
include "header.php";
?>
<!DOCTYPE html>
<html>

<head>
    <title>Ask Help</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
</head>

<body>
    <div id="ask-help">
        <h1>Ask Help</h1>
        <p>Please post your technical questions here and other users will provide solutions.</p>
        <form id="ask-help-form">
            <label for="title">Title</label>
            <input type="text" id="title" />
            <label for="description">Description</label>
            <textarea id="description"></textarea>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>

<?php
include 'footer.php';
?>

</html>