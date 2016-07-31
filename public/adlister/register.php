<!-- THIS IS THE HTML FOR THE LOGIN/REGISTER PAGE -->



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>GetAhGeek : Login/Register</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">
    <link href="css/adlister.css" rel="stylesheet">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">GetAhGeek</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
<!-- ======================================BODY============================================ -->

    <main class="main container">
        
        <div class="jumbotron">
            <h1>Order Your Geek Today!</h1>
        </div>

        <div class="row">
            <div class="col-med-6 col-lg-6 col-xl-6 log">
                <h1>Log In</h1>

                <form method="GET" action="/login_form.php">
                    <p>
                        <label for="username">Username</label>
                        <input id="username" type="text" name="username" placeholder="Please enter username">
                    </p>
                    <p>
                        <label for="password">Password</label>
                        <input id="password" type="password" name="password" placeholder="Please enter password">
                    </p>
                    <p>
                        <button type="submit" name="submit">Sign In</button>
                    </p>

                </form>
            </div>

            <div class="col-med-6 col-lg-6 col-xl-6 log register">
                <h1>Register</h1>

                <form method="GET" action="/login_form.php">
                    <p>
                        <label for="email">Email</label>
                        <input id="email" type="text" name="email" placeholder="Please enter email">
                    </p>
                    <p>
                        <label for="username">Username</label>
                        <input id="username" type="text" name="username" placeholder="Please enter username">
                    </p>
                    <p>
                        <label for="password">Password</label>
                        <input id="password" type="password" name="password" placeholder="Please enter password">
                    </p>
                    <p>
                        <label for="confirm">Confirm Password</label>
                        <input id="confirm" type="confirm" name="confirm" placeholder="Please enter confirm">
                    </p>
                    <p>
                        <button type="submit" name="submit">Submit</button>
                    </p>

                </form>
            </div>
        </div>

    </main>

<!-- ======================================END OF BODY============================================ -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Wyatt Barnes, Rachel Rost, Justin Reich 2016</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
