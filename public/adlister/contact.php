<!-- THIS IS THE HTML FOR THE CONTACT PAGE -->

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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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

    <div id="sitecontent">

    <div class="container">
      <form id="contact-form" class="styled-form col-med-7 col-lg-7" action="" method="post" accept-charset="utf-8">
        <div style="display:none"><input type="hidden" name="csrfmiddlewaretoken" value="8ece95d139633656ad0371bf53c45b2d" /></div>    
        <h1 class="pagetitle">Contact us</h1>
        
        <div class="note">
          <p>We are here to answer any questions you may have about your GetAhGeek
            experience. Reach out to us and we'll respond as soon as we can.</p>
          <p>Even if there isn't a geek you want on GetAhGeek, let us know and we promise we'll do our
            best to find who you're looking for!</p>
        </div>
        
        <p class="row half first">
          <label for="id_name">Name: <span class="required">*</span></label>
          <span class="field"><input type="text" name="name" id="id_name" /></span>
        </p>
        <p class="row half">
          <label for="id_email">Email: <span class="required">*</span></label>
          <span class="field"><input type="text" name="email" id="id_email" /></span>
        </p>
        <p class="row">
          <label for="id_message">Message: <span class="required">*</span></label>
          <br>
          <span class="field"><textarea cols="40" rows="5" name="message" id="id_message"></textarea></span>
        </p>
        <p class="row half first">
          <label for="id_tapcha_0">How much is 9+2? <span class="required">*</span></label>
          <span class="field"><input type="text" name="tapcha_0" id="id_tapcha_0" /><input type="hidden" name="tapcha_1" id="id_tapcha_1" value="ZjYxYzczNjBlYTBlYTkyYWNhMjZiNmUwNTFhMzJmM2VmYzljNzA5OA==" /></span>
          <span style="display:none">
          <span class="field"><input type="text" name="honeypot" id="id_honeypot" /></span>
          </span>
        </p>
        <p class="submit-row">
          <button type="submit">SEND</button>
        </p>
      </form>
      
      <aside id="contact-info" class="col-med-4 col-lg-4 col-med-offset-1 col-lg-offset-1">
        <dl>
          <dt>Email</dt>
          <dd><a href="mailto:info.getahgeek.com" title="Click to send us an email">info.GetAhGeek.com</a></dd>
          <dt>Telephone</dt>
          <dd><a href="tel:5554532949" title="Click to call us">(555) 453-2949</a></dd>
          <dt>Skype</dt>
          <dd><a href="skype:getahgeek?call" title="Click to call us on Skype">GetAhGeek</a></dd>
          <dt>Address</dt>
          <dd>
            <address>
              GetAhGeek<br />
              1 Cool Avenue<br />
              Bora Bora<br />
              Company No. 1357019587
            </address>
          </dd>
          <dd class="social-links">
            <a class="fb" href="http://www.facebook.com/GetAhGeek" title="Find us on Facebook">Facebook</a>
            <a class="tt" href="http://twitter.com/GetAhGeek" title="Find us on Twitter">Twitter</a>
          </dd>
        </dl>
      </aside>
    </div>

    </div>

    </div></div>

  
    </div>


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
