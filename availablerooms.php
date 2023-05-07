<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <script src="https://kit.fontawesome.com/f0afb4fc0d.js" crossorigin="anonymous"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/styles.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>Available Beds</title>
</head>

	<style type="text/css">

		.card:hover{
			box-shadow: 0 1px 2px 3px dimgray, 0 2px 3px 4px black;
			cursor: pointer;
			transition: all 250ms;
            border-top-left-radius: 1%;
            border-top-right-radius: 1%;
		}

		body{
            backdrop-filter: blur(2px);
			height: 100vh;
			background-repeat: no-repeat;
			background-size: cover;
			background-position: center;
			background-image: url("hallwayone.jpg");
		}

        img{
            height: 320px;
            width: 200px;
            border-radius: 10px;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }

        .navbar-brand{
            font-display: auto;
            font-family: 'Comic-sans', sans-serif;
            display: center;
        }
        .card-body{
            background-color: whitesmoke;
            height: 140px;
        }
        .card-title{
            color: black;

        }
        .twobeds{
            height: 10%;
            width: 50px;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
        .btn-back{
            background-color: blue;
            height: 7%;
            width: 10%;
            padding: 10px;
            position: absolute;
            left: 10px;
            top: 10px;
        }
        .btn-book:hover{
            box-shadow: 1px 2px 3px 4px dimgray;
            transition: all 200ms;
            cursor: pointer;
        }
    	</style>

<body>
<center>
	<div>
        <center>
            <nav class="navbar navbar-custom">
    <div class="container-fluid">
        <div class="navbar-header">
            <center>
                <a class="navbar-brand"><span>Add Rooms</span> For Customer </a>
            </center>   
    </div>
        </center>
        <br>
	<div class="container">
        <div class="row g-3">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card">
                    <img src="onebed.jpg" class="card-img-top" alt="Single Room w/ Single Bed">
                    <div class="card-body">
                        <h5 class="card-title">Single Bed | Single Room</h5>
                        <p>
                            <strong>1 Person only can fit within this <i class="fa-solid fa-bed"></i> bed</strong>
                        </p>
                        <a href="index.php?room_mang" class="btn btn-primary btn-book">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card">
                    <img src="twobed.jpg" class="card-img-top" alt="Single Room w/ Double Beds" class="twobeds">
                    <div class="card-body">
                        <h5 class="card-title">Double Beds | Single Room</h5>
                        <p><strong>
                            2 persons can fit within this <i class="fa-solid fa-bed"></i> bed
                        </strong></p>
                        <a href="index.php?room_mang" class="btn btn-primary btn-book">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card">
                    <img src="threebed.jpg" class="card-img-top" alt="Single Room w/ Tripple Beds">
                    <div class="card-body">
                        <h5 class="card-title">Tripple Deck  Beds | Single Room</h5>
                        <p><strong>
                            3 persons can fit within this <i class="fa-solid fa-bed"></i> bed
                        </strong></p>
                        <a href="index.php?room_mang" class="btn btn-primary btn-book">Book Now</a>
                    </div>
                </div>
            </div>            
        </div>
    </div>
    <br>
    <div class="btn">
        <a href="index.php?dashboard">
            <btn class="btn btn-primary btn-back">
            BACK
        </btn>
        </a>
    </div>
</center>

</body>
</html>