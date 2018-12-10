<!--
  Assignment: Create Your bscacad3.buffalostate Web Page
  Author: Daniel MacLachlan
  Date: 8/9/18
  Editor: PHP Storm

Overhauled on 10/19/18, updated to bootstrap 4 framework.
-->
<!doctype html>
<html lang="en">
<head>
	<?php include("assignments/vars.php") ?>
    <?php include("functions.php") ?>
	<!-- Standard Stuff-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo("$description")?>">
    <meta name="keywords" content="<?php echo("meta")?>">
    <meta name="author" content="Daniel MacLachlan">
    <title><?php echo("$title");?></title>

    <!-- Bootstrap and jquery hardlinks, also contains links to my CSS file and javascript -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="http://bscacad3.buffalostate.edu/~macldj18/scripts/scripts.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- End reference block -->
    <link rel="stylesheet" href="http://bscacad3.buffalostate.edu/~macldj18/styles/styles.css">
</head>

<body>
<!-- Bootstrap Nav Block with size responsive menu -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#me">Daniel MacLachlan</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-nav">
        <a class="nav-item nav-link" href="#Assignments">Assignments</a>
    </div>
</nav>
<!-- End Bootstrap Nav Block with size responsive menu -->

<div class="container"> <!-- Begin Container Division Element -->
    <div class="jumbotron mt-5 bp-5">
        <h1 class="display-4"><?php echo("$myName"); ?><img src="images/me.jpg" class="rounded float-right" alt="A Picture of me"></h1>
        <p class="lead"><?php echo("$aboutMe"); ?></p>
        <hr class="my-4">
        <p>On this page you will find links to examples of my coding, most of which is hosted on github</p>

    </div>
<div class="spaceCreator"><br></div><!--Temporary fix to space out page a bit better -->
    <!-- This is unlikely the most efficient way to achieve this layout, will investigate later -->
    <!-- The following huge block of code is used to display a card for each programming language i use
         and make available a link to my github work
                    (Note - mt-2 is a bootstrap notation for quickly making adjustments to margins-->
     <div class="card mt-5">
        <div class="card-body">
            The following are programming languages I am familiar with:<span class="fas fa-ghost"></span>
        </div>
        </div>
    <div class="row">
        <div class="col mt-3">
         <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">C++</h5>
            <p class="card-text">I have a portfolio of work ranging from Hello World! to OOP and Linked Lists</p>
            <a href="#" class="btn btn-primary">C++ Porfolio</a>
        </div>
        </div><!--End Card -->
        </div><!--End Column -->
        <div class="col mt-3">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Java</h5>
                    <p class="card-text">My Java portfolio ranges from basic OOP to deployment of GUI using JavaFX</p>
                    <a href="#" class="btn btn-primary">Java Porfolio</a>
                </div>
            </div><!--End Card -->
        </div><!--End Column -->
        <div class="col mt-3">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">C++</h5>
                    <p class="card-text">I have a portfolio of work ranging from Hello World! to OOP and Linked Lists</p>
                    <a href="#" class="btn btn-primary">C++ Porfolio</a>
                </div>
            </div><!--End Card -->
        </div><!--End Column -->
        <div class="col mt-3">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">C++</h5>
                    <p class="card-text">I have a portfolio of work ranging from Hello World! to OOP and Linked Lists</p>
                    <a href="#" class="btn btn-primary">C++ Porfolio</a>
                </div>
            </div><!--End Card -->
        </div><!--End Column -->
        <div class="col mt-3">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Web Development</h5>
                    <p class="card-text">I have experience in HTML, CSS, Javascript, PHP, and MySQL</p>
                    <a href="" class="btn btn-primary">My Gitpages Site</a>
                </div>
            </div><!--End Card -->
        </div><!--End Column -->
        <div class="col mt-3">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Action Telephone</h5>
                    <p class="card-text">I wrote and published a company website for Action Telephone, a Rochester based answering service</p>
                    <a href="http://www.actiontelephone.com" class="btn btn-primary">Action Telephone</a>
                </div>
            </div><!--End Card -->
        </div><!--End Column -->

    </div><!--End Row -->
    <!--End Code Block for Cards -->
    <div class="spaceCreator"><br></div><!--Temporary fix to space out page a bit better -->

    <div id="assignments">
        <?php assignments() ?><!-- While a little unnecessary, this is simply to show I can use php functions to display web content -->
    </div>



</div> <!-- ***************End Container Division Element***************** -->

<!-- Footer -->
<footer>

</footer>
</body>
</html>