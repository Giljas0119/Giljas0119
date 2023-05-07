<?php?>
<html>
<head>
    <script src="https://kit.fontawesome.com/f0afb4fc0d.js" crossorigin="anonymous"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css"/>
</head>

<style type="text/css">
    
        .imgbg{
            background-image: url("interiorbg.jpg");
            background-position: center;
            background-size: cover;
            position: center;
            display: inline-flex;
            height: 120vh;
            width: 100%;
            background-repeat: no-repeat;
        }

        .card-container:hover{
            box-shadow: 0 1px 2px darkcyan, 0 2px 3px 4px dimgray;
            cursor: pointer;
            transition: all 500ms;
            transition: ease-out 1s;
            transform-style: flat;
        }

</style>
<body class="imgbg">

<div class="container">
    <div class="card card-container">
        <img id="profile-img" class="profile-img-card" src="img/htl.png"/>
        <br>
        <div class="result">
            <?php
            if (isset($_GET['empty'])){
                echo '<div class="alert alert-danger">Enter Username or Password</div>';
            }elseif (isset($_GET['loginE'])){
                echo '<div class="alert alert-danger">Username or Password Don\'t Match</div>';
            } ?>
        </div>
        <form class="form-signin" data-toggle="validator" action="ajax.php" method="post">
            <div class="row">
                <div class="form-group col-lg-12">
                    <label>Username or Email</label>
                    <input type="text" name="email" class="form-control" placeholder="" required
                           data-error="Enter Username or Email">
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group col-lg-12">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="" required
                           data-error="Enter Password">
                    <div class="help-block with-errors"></div>
                </div>
            </div>

            <button class="btn btn-lg btn-success btn-block btn-signin" type="submit" name="login">LOGIN</button>

            <div class="infos">
                <center>
                    <small style="color: darkcyan;">
                        for more contact info you may contact 
                    </small>
                </center>
                <br>
                <div class="admin">
                    <strong> Project Manager: </strong> <small> Albert </small> <a href="https://www.facebook.com/profile.php?id=100003679554876&_rdc=2&_rdr"><i class="fa-brands fa-facebook"></i></a> <br>
                    <strong> Back-End Prog..: </strong> <small> Raymond</small> <a href="https://www.facebook.com/raymond.abroguena"><i class="fa-brands fa-facebook"></i></a> <br>
                    <strong> Front-End Prog..: </strong> <small> Jairino</small> <a href="https://www.facebook.com/jai.carinew0119"><i class="fa-brands fa-facebook"></i></a> <br>
                    <strong> Technical Writer: </strong> <small> Apriel</small> <a href="https://www.facebook.com/aprielann.lisama.7"><i class="fa-brands fa-facebook"></i></a> <br>
                    <strong> Quality Assurance: </strong> <small> Laarnie</small> <a href="https://www.facebook.com/XXJXMXN"><i class="fa-brands fa-facebook"></i></a> <br>
                </div>
            </div>

        </form><!-- /form -->
    </div><!-- /card-container -->
</div><!-- /container -->

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/validator.min.js"></script>
</body>
</html>