<?php
switch($_GET['code'])
{
case '404':header('Location: https://www.243tech.com/erreur-404.php');
break;
default:header('Location: https://www.243tech.com/');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 404</title>
    <style>
        body {
            background-color: #f8f8f8;
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 50px;
        }

        h1 {
            font-size: 36px;
            color: #333;
            margin-bottom: 20px;
        }

        p {
            font-size: 18px;
            color: #666;
            margin-bottom: 20px;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <h1>Oops! Page not found</h1>
    <p>The page you are looking for might have been removed or is temporarily unavailable.</p>
    <p>Please <a href="/">click here</a> to go back to the homepage.</p>
</body>
</html>
