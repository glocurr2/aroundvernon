<?php
session_start();

if (isset($_SESSION['fname'])) {
  $welcomeMessage = "Welcome " . $_SESSION["fname"];
}

?>
<!DOCTYPE html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Around Vernon - Vernon, New Jersey | Contact Us</title>
  <link href="bootstrap/css/_bootstrap.css" rel="stylesheet" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale = 1">
  <script src="js/jquery-2.1.4.min.js"></script>
  <script src="js/contactus.js"></script>
</head>

<body>
  <?php
  $contactfirstname = $_SESSION["contactfirstname"];

  $contactlastname = $_SESSION["contactlastname"];
  $contactemail = $_SESSION["contactemail"];
  $contactmessage = $_SESSION["contactmessage"];
  $captchaResult = $_GET['captcha'];
  ?>

  <?php include 'includes/header.php'; ?>



  <div class="container content">


    <div id="contactus" class="panel panel-default box-shadow--6dp">
      <form method="post" action="includes/contactsubmit.php" id="ContactUsForm"><!--action="contactus.php"-->
        <div class="panel-heading panel-contactus-header">Contact Us!</div>

        <div class="panel-body">

          <div id="contact-alerts"></div>
          <div class="col-md-5 col-lg-5">
            <div class="form-group" id="contactFirstName">
              <label class="control-label" for="inputContactFirstName">First Name</label>
              <input type="text" class="form-control" id="inputContactFirstName" name="inputContactFirstName" maxlength="35" value="<?php echo $contactfirstname ?>" placeholder="Enter Your First Name" />
            </div><!--/firstName-->
          </div>
          <div class="col-md-5 col-lg-5">
            <div class="form-group" id="contactLastName">
              <label class="control-label" for="inputContactLastName">Last Name</label>
              <input type="text" class="form-control" id="inputContactLastName" name="inputContactLastName" maxlength="35" value="<?php echo $contactlastname ?>" placeholder="Enter Your Last Name" />
            </div><!--/lastName-->
          </div>
          <div class="col-md-5 col-lg-5">
            <div class="form-group" id="contactEmail">
              <label class="control-label" for="inputContactEmail">Email Address</label>
              <input type="email" class="form-control" id="inputContactEmail" name="inputContactEmail" maxlength="60" value="<?php echo $contactemail ?>" placeholder="Enter Your Email Address" /><input type="hidden" class="form-control" id="inputAddress" name="inputAddress" maxlength="60" value="" placeholder="Enter Address Here" />
            </div><!--/email-->
          </div>
          <div class="col-md-10 col-lg-10 clearer">
            <div class="form-group" id="contactMessage">
              <label class="control-label" for="inputContactMessage">Message</label>
              <textarea class="form-control" id="inputContactMessage" name="inputContactMessage" rows="3" placeholder="Message Here" maxlength="300"><?php if ($contactmessage != '') {
                                                                                                                                                        echo $contactmessage;
                                                                                                                                                      } ?></textarea><br />
              <span class="sm-text">Limit 300 characters</span>
            </div><!--/message-->
          </div>
        </div><!--/panel-body-->
        <div id="captcha-container" style="margin-left:24px">
          <img id="captcha" src="/securimage/securimage_show.php" alt="CAPTCHA Image" />
          <input type="text" class="form-control" name="captcha_code" style="margin:10px 0; width:250px" />
          <a href="#" onClick="document.getElementById('captcha').src = '/securimage/securimage_show.php?' + Math.random(); return false">[ Different Image ]</a>
          <div class="error-message" style="color:red; margin:20px 0"><?php if ($captchaResult == "n") {
                                                                        echo "The security code entered was incorrect. Please try again.";
                                                                      } ?></div>
        </div>
        <div class="panel-footer"><button type="submit" id="SendMessage" name="SendMessage" class="btn btn-warning" value="SendMessage">Send Message</button></div>

      </form>
    </div>



    <div id="messagesent" class="panel panel-default box-shadow--6dp">
      <div class="panel-heading panel-contactus-header">Contact Us!</div>
      <div class="panel-body">
        <div id="thankyou">
          Thank you for your message! We will get back to you soon!
        </div>
      </div><!--/panel-body-->
    </div>



  </div><!--/container-->



  <div class="container-footer container-fluid green">
    <div class="row">

      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <p>&copy; <?php echo date("Y") ?> Around Vernon</p>
      </div>


    </div><!--/row-->
  </div><!--/container-->





  <script src="bootstrap/js/bootstrap.min.js"></script>

  <script>
    document.write("<script type='text/javascript' src='js/modals.js?v=" + Date.now() + "'><\/script>");
  </script>
  <script>

  </script>


  <?php
  include 'modalssub.php';
  include 'includes/modals.php';

  ?>
</body>

</html>