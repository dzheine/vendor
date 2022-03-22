<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendor</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./dist/css/style.css">

</head>
<body>
    <div class="container1">
        <div class="up">
            <div class="up1">
                <span>WELCOME TO WEDDING VENDOR</span>
            </div>
            <div class="up2">
            <ul>
                <li>Help</li>
                <li>Pricing</li>
                <li>I am couple</li>
                <li>Are you vendor?</li>
                <li><a href="views/register.php">Register</a></li>
                <li><i class="fa-solid fa-magnifying-glass"></i></li>
            </ul>
            </div>
        </div>
        <div class="middle">
            <div class="middle1">
                <!-- <img src="dist/img/logo.svg" alt="logo" width="70px" height="70px"> -->
            </div>
            <div class="middle2">
            <ul>
                <li>HOME</li>
                <li>LISTING</li>
                <li>VENDROR</li>
                <li>SUPPLIERS</li>
                <li>PLANNING TOOLS</li>
                <li>FEATURES</li>
                <li>REAL WEDDING</li>
            </ul>
            </div>
        </div>
        <div class="photo">
            <div><img src="dist/img/couple.jpg" alt="" ></div>
            <div class="lock">
            <i class="fa-solid fa-clock-rotate-left"></i>
            <h1>Welcome back to your account</h1>
            <span>We are happy you are here</span>
            </div>
        </div>
        <div class="login">

            <a href="#">Home</a>
            <span>/  </span>
            <a href="#">Login place</a>
        </div>
    </div>
    <div class="container2">
        <div class="formos">
            <div class="forma1">
                <h2>Vendor Login</h2>
                <form action="./scripts/login.php" method="POST">
                    <div class="form-group my-3">
                        <label for="exampleInputEmail1">E-mail* </label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mail" name="email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password*</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                    </div>
                    <input type="submit" class="btn" value= "LOGIN" >
                    <span class="end"><a href="#">Forgot Password?</a></span>
            </form>
            </div>
            <!-- <div class="forma2">
                <h2>Couple Login</h2>
                <form>
                    <div class="form-group my-3">
                        <label for="exampleInputEmail1">E-mail* </label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mail">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password*</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <input type="submit" class="btn" value= "LOGIN" >
                    <span class="end"><a href="#">Forgot Password?</a></span>
            </form>
            </div> -->
        </div>
    </div>
</body>
</html>