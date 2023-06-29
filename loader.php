<?php
session_start();
header("refresh:5;url=home.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loading</title>
    <style>
        body{
            background-color: black;
            font-family: Arial, Helvetica, sans-serif;
        }
    .content1 {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 20px;
        margin-top: 150px;
    }
    img{
        height: 140px;
        width: 140px;
        border-radius: 9px;
    }
    .loader{
        border: 8px solid black;
        border-radius: 50%;
        border-top: 8px solid red;
        border-right: 8px solid red;
        border-left: 8px solid red;
        width: 70px;
        height: 70px;
        -webkit-animation: spin 0.4s linear infinite;
        animation: spin 0.4s linear infinite;
        margin-left: 39%;
        margin-top: 50px;
    }
    @-webkit-keyframes spin{
        0%{
            -webkit-transform: rotate(0deg);
        }
        100%{
            -webkit-transform: rotate(360deg);
        }
    }
    @keyframes spin{
        0%{
            transform: rotate(0deg);
        }
        100%{
            transform: rotate(360deg);
        }
    }
    </style>
</head>
<body>
    <div class="content1">
        <div class="profiles">
            <img src="paul merson.jpeg" alt="">
        </div>
    </div>
    <div class="loader"></div>
</body>
</html>