<!DOCTYPE html>
<!-- Crossway - Startup Landing Page Template design by DSA79 (http://www.dsathemes.com) -->
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-157502961-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-157502961-1');
</script>

	<!-- Basic -->
	<meta charset="utf-8">
	<title>
		<?php 
			echo $title
		?>
	</title>
	<meta name="author" content="workplacements.online">
	<link rel="shortcut icon" href="img/logo.png" type="image/*">
	<meta name="description"
		content="<?php 
			echo $description
		?>">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Libs CSS -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/flexslider.css" rel="stylesheet">
	<link href="css/owl.carousel.css" rel="stylesheet">
 
	<!-- Template CSS -->
	<link href="css/style.css" rel="stylesheet">

	<!-- Responsive CSS -->
	<link href="css/responsive.css" rel="stylesheet">

	<!-- Favicons -->
	<link rel="shortcut icon" href="img/icons/favicon.ico">
	<link rel="apple-touch-icon" sizes="114x114" href="img/icons/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/icons/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" href="img/icons/apple-touch-icon.png">

	<!-- Google Fonts -->
	<link
		href='https://fonts.googleapis.com/css?family=Lato:400,900italic,900,700italic,400italic,300italic,300,100italic,100'
		rel='stylesheet' type='text/css'>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
		integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
 <style>
	
	.content-adjust{
		margin-top: 10em; 
		margin-bottom: 5em;
	}
 </style>
	<script>
		(function () {
			if (location.protocol !== "https:") {
				location.replace("https://workplacements.online")
			}
		}())
	</script>
	<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.8.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.8.0/firebase-analytics.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.8.0/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.8.0/firebase-firestore.js"></script>
<script>
  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyA4P3XSDUDcP1piSQx7-9_IPLq6aToQ-xw",
    authDomain: "workplacements-299fd.firebaseapp.com",
    databaseURL: "https://workplacements-299fd.firebaseio.com",
    projectId: "workplacements-299fd",
    storageBucket: "workplacements-299fd.appspot.com",
    messagingSenderId: "58006187682",
    appId: "1:58006187682:web:e5154e52ee90139e1bf1fb",
    measurementId: "G-KLF24TXSHG"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha256-KsRuvuRtUVvobe66OFtOQfjP8WA2SzYsmm4VPfMnxms=" crossorigin="anonymous"></script>
</head>

<body>


	<!-- PRELOADER
		============================================= -->

	<div id="preloader">
		<div id="status"></div>
	</div>


	<!-- HEADER
		============================================= -->

	<header id="header">

		<div class="navbar navbar-fixed-top">
			<div class="container">

				<!-- Logo & Responsive Menu -->
				<div class="navbar-header">
					<button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse"
						data-target="#navigation-menu">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#top-page-banner"><img src="img/logo.png" alt="logo" width="100"
							role="banner"></a>
				</div> <!-- /.navbar-header -->

				<!-- Navigation -->
				<nav id="navigation-menu" class="collapse navbar-collapse" role="navigation">
					<ul class="nav navbar-nav navbar-right">
						<li><a id="GoToHome" href="/">Home</a></li>
						<li><a id="GoToAbout" href="about.php">About</a></li>
						<li><a id="GoToFeatures" href="process.php">Recruitment Process</a></li>
						<li><a id="GoToFaq" href="faq.php">FAQ</a></li>
						<li><a id="GoToClients" href="clients.php">Clients</a></li>
					</ul>
				</nav> <!-- /.navbar-collapse -->

			</div> <!-- /.container -->
		</div> <!-- /.navbar -->

	</header> <!-- END HEADER -->
