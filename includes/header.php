<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">

        <div class="navbar-header">

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#theNavBar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="index.php">Around Vernon
            </a>
        </div>

        <div class="collapse navbar-collapse" id="theNavBar">
            <ul id="navbar" class="nav navbar-nav">
                <li id="home"><a href="index.php">Home</a></li>
                <li id="places" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Places<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="parks.php">Parks</a></li>
                        <li><a href="points-of-interest.php">Points of Interest</a></li>
                    </ul>
                </li>
                <li id="directory"><a href="directory.php">Businesses</a></li>
                <li id="funstuff"><a href="funstuff.php">Fun Stuff</a></li>
                <li id="contact-us"><a href="contact.php">Contact Us</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li id="welcome"><?php echo $welcomeMessage ?></li>
                <li><a href="#" data-toggle="modal" data-target="#signupModal">Sign Up <span class="glyphicon glyphicon-user"></span></a></li>
                <li><a href="#" data-toggle="modal" data-target="#loginModal">Login <span class="glyphicon glyphicon-log-in"></span></a></li>
            </ul>


        </div>

    </div><!--container-->
</nav>
<div id="jumbo-container" class="container">
    <div class="jumbotron">
        <div id="jumboimage"><img src="images/aroundvernonlogo.png" class="img-responsive" id="logo" alt="aroundvernonlogo" title="Around Vernon - About Vernon Township NJ" /></div>
        <div id="jumbotext">Around Vernon Township, NJ<br /><br /></div>
    </div>
    <div class="clearer"></div>
</div><!--/container-->