<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RENTING-WEBSITE</title>
    <style>
        *{
            text-decoration: none;
            margin: 0%;
            padding: 0%;
        }
        .navbar{
            background: black; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; 
        }
        .navdiv{
            display: flex; align-items: center;
            height: 80px;
            text-align: center;
            justify-content: center;
        }
        body{
            background-image: url('backgroundimage.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
        container{
            position: relative;
        }
        li{
            font-size: 35px; font-weight: 600; color: azure;
            list-style: none;
            text-align: center;
        }

        div.red{
            display: inline-block; 
            position: relative;
            top: 23vh;
            left: 35vh;
            font-size: 30px;
            text-decoration: rgb(0, 255, 255);
            color: rgb(59, 0, 86);
            text-align: center;
            font-family: system-ui, sans-serif;
            margin: 0 10px;
            box-shadow: 0 0 20px 2px rgba(0,0,0, .1);
            transition: 1s;
        }
        div.blue{
            display: inline-block;
            position: relative;
            top: 23vh;
            left: 60vh;
            font-size: 30px;
            text-decoration: rgb(0, 255, 255);
            color: rgb(59, 0, 86);
            text-align: center;
            font-family: system-ui, sans-serif;
            margin: 0 10px;
            box-shadow: 0 0 20px 2px rgba(0,0,0, .1);
            transition: 1s;
        }
        .red a img{
            display: block;
            border-radius: 5px;
        }
        .red:hover{
            transform:scale(1.3)
        }
        .blue a img{
            display: block;
            border-radius: 5px;
        }
        .blue:hover{
            transform:scale(1.3)
        }


    </style>
</head>
<body>
    <nav class="navbar">
        <div class="navdiv">
            <div class="logo"><a href="#"><img src="logo.jpg" alt="" height="83px" width="100px"></a></div>
            <ul>
                <li>CAR AND PROPERTY RENTAL SYSTEM</li>
            </ul>
        </div>
    </nav>
    <div class="red">
    <a href="car/index.php"><img src="car.jpg" alt="" height="300px" width="400px"></a>    <p>RENT A CAR</p>
</div>
<div class="blue">
    <a href="RealEstate-PHP/index.php"><img src="property.jpg" alt="" height="300px" width="400px"></a>  <p>RENT A PROPERTY</p>
</div>
</body>
</html>