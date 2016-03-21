<!DOCTYPE HTML>
<html>
	<head>
		<title>Almighty Construction</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="css/almighty.css" />
		<link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="no-sidebar">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper">
					<header id="header" class="container">

						<!-- Logo -->
							<div id="logo">
								<p><a href="tel:1-609-331-7060">609-331-7060</a></p>
							</div>

						<!-- Nav -->
							<nav id="nav">
								<ul>
									<li><a href="index.html">Home</a>
										<ul>
											<li><a href="about.html">About Us</a></li>
											<li><a href="contact.html">Contact Us</a></li>
										</ul>
									</li>
									<li>
										<a href="landscaping.html">Landscaping</a>
										<ul>
											<li><a href="landscaping.html#hardscaping">Hardscaping</a></li>
											<li><a href="landscaping.html#fencing">Fencing</a></li>
											<li><a href="landscaping_gallery.html">Gallery</a></li>
										</ul>
									</li>
									<li>
										<a href="waterproofing.html">Waterproofing</a>
										<ul>
											<li><a href="waterproofing.html#mold">Mold Removal</a></li>
											<li><a href="wp_gallery.html">Gallery</a></li>
										</ul>
									</li>
									<li>
										<a href="remodeling.html">Remodeling</a>
										<ul>
											<li><a href="remod_gallery.html">Gallery</a></li>
										</ul>
									</li>
								</ul>
							</nav>

					</header>
				</div>

				<!-- Banner -->
				<div id="banner-wrapper">
					<div id="banner" class="box container">
						<div class="row">
							<div class="7u 12u(medium)">
								<h2>Almighty Construction</h2>
								<p style="font-size: 1.5em; font-weight: 600">Residential - Commercial</p>
							</div>
							<div class="5u 12u(medium)">
								<ul>
									<li id="more_info"><a href="index.html" class="button alt big icon fa-home">Home</a></li>
									<li id="contact_button"><a href="contact.html" class=" but_dis button big icon fa-arrow-circle-right">Contact Us</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

			<!-- Main -->
				<div id="main-wrapper">
					<div class="container">
						<div id="content">

<?php
 
if(isset($_POST['submit'])) { 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "almightyconstructionllc@gmail.com";
 
    $email_subject = "Online Contact Form Submission";
 
     
 
     
 
    function died($error) {
 
        // your error code can go here
 
        echo "We are very sorry, but there were error(s) found with the form you submitted.";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['firstName']) ||
 
        !isset($_POST['lastName']) ||
 
        !isset($_POST['address']) ||

        !isset($_POST['city']) ||

        !isset($_POST['state']) ||

        !isset($_POST['zip']) ||

        !isset($_POST['phone']) ||

        !isset($_POST['email']) ||

        !isset($_POST['issue'])) {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
 
    }
 
     
 
    $firstName = $_POST['firstName']; // required
 
    $spouseName = $_POST['spouseName']; // not required
 
    $lastName = $_POST['lastName']; // required
 
    $address = $_POST['address']; // required

    $city = $_POST['city']; // required

    $state = $_POST['state']; // required

    $zip = $_POST['zip']; // required

    $phone = $_POST['phone']; // required

    $phone2 = $_POST['phone2']; // not required

    $email_from = $_POST['email']; // required

    $issue = $_POST['issue']; // not required

    $description = $_POST['description']; // not required
 
     
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$firstName)) {
 
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
 
  }
 
  if(!preg_match($string_exp,$lastName)) {
 
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
 
  }
 
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "First Name: ".clean_string($firstName)."\n";
 
    $email_message .= "Spouse Name: ".clean_string($spouseName)."\n";
 
    $email_message .= "Last Name: ".clean_string($lastName)."\n";
 
    $email_message .= "Address: ".clean_string($address)."\n";

    $email_message .= "City: ".clean_string($city)."\n";

    $email_message .= "State: ".clean_string($state)."\n";

    $email_message .= "ZIP: ".clean_string($zip)."\n";

    $email_message .= "Phone: ".clean_string($phone)."\n";

    $email_message .= "Alternate Phone: ".clean_string($phone2)."\n";

    $email_message .= "Email: ".clean_string($email_from)."\n";

    $email_message .= "Issue: ".clean_string($issue)."\n";

    $email_message .= "Description: ".clean_string($description)."\n";
 
      
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
 
<!-- include your own success html here -->
 
	<h1 id="thank_you">Thank you for contacting us using our submission form! We'll do our best to contact you within 24 hours.
	<br /><br />If you need immediate assistance, please call us at 1-609-331-7060.
	<br /><br />Thank you.</h1>
 
 
<?php
 
}
?>

								


						</div>
					</div>
				</div>

			<!-- Footer -->
				<div id="footer-wrapper">
					<footer id="footer" class="container">
						<div class="row">
							<div class="3u 6u(medium) 12u$(small)">

								<!-- Links -->
									<section class="widget links">
										<h3>Site</h3>
										<ul class="style2">
											<li><a href="landscaping.html">Landscaping</a></li>
											<li><a href="waterproofing.html">Waterproofing</a></li>
											<li><a href="remodeling.html">Remodeling</a></li>
											<li><a href="contact.html">Contact Us</a></li>
											<li><a href="about.html">About Us</a></li>
										</ul>
									</section>

							</div>
							<div class="3u 6u$(medium) 12u$(small)">

								<!-- Links -->
									<section class="widget links">
										<h3>Specialties</h3>
										<ul class="style2">
											<li><a href="landscaping.html#hardscaping">Hardscaping Designs</a></li>
											<li><a href="waterproofing.html#mold">Certified Mold Removal</a></li>
											<li><a href="remodeling.html#basements">Basement Finishing</a></li>
											<li><a href="remodeling.html#kitchens">Kitchen Remodel</a></li>
											<li><a href="remodeling.html#custom_carpentry">Custom Carpentry</a></li>
										</ul>
									</section>

							</div>
							<div class="3u 6u(medium) 12u$(small)">

								<!-- Links -->
									<section class="widget links">
										<h3>Galleries</h3>
										<ul class="style2">
											<li><a href="landscaping_gallery.html">Landscaping & Hardscaping</a></li>
											<li><a href="landscaping_gallery.html#fence_gallery">Fencing</a></li>
											<li><a href="wp_gallery.html">Waterproofing & Mold Remediation</a></li>
											<li><a href="remod_gallery.html">Remodeling</a></li>
											<li><a href="gallery.html">Projects</a></li>
										</ul>
									</section>

							</div>
							<div class="3u 6u$(medium) 12u$(small)">

								<!-- Contact -->
									<section class="widget contact">
										<h3>Contact Us</h3>
										<ul>
											<li><a href="tel:1-609-331-7060" class="icon fa-phone"><span class="label">Call</span></a></li>
											<li><a href="https://www.facebook.com/AlmightyConstructionLLC" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
											<li><a href="mailto:almightyconstructionllc@gmail.com" class="icon fa-envelope"><span class="label">Email</span></a></li>
										</ul>
										<p>PA License# PA119749<br />
									</section>

							</div>
						</div>
						<div class="row">
							<div class="12u">
								<div id="copyright">
									<ul class="menu">
										<li>&copy; <a href="index.html">Almighty Construction</a></li>
									</ul>
								</div>
							</div>
						</div>
					</footer>
				</div>

			</div>

		<!-- Scripts -->

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
			<script src="js/gallery.js"></script>
			<script src="js/gallery2.js"></script>
			<script src="js/jquery.maskedinput.min.js"></script>
			<script src="js/mask.js"></script>

	</body>
</html>