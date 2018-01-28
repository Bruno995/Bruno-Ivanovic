<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
	<head>
		
		<!-- CSS -->
		<link rel="stylesheet" href="style.css">
		<!-- End CSS -->
		<!-- meta elements -->
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="description" content="some description">
        <meta name="keywords" content="keyword 1, keyword 2, keyword 3, keyword 4, ...">
		
		<!-- Schema.org markup for Google+ -->
		<meta itemprop="name" content="Hello Example">
		<meta itemprop="description" content="Some description">
		<meta itemprop="image" content="Your URL"> 
		
		<!-- Open Graph data -->
		<meta property="og:title" content="Hello Example">
		<meta property="og:type" content="article">
		<meta property="og:url" content="Your URL">
		<meta property="og:image" content="Your URL">
		<meta property="og:description" content="Some description">
		<meta property="article:tag" content="keyword 1, keyword 2, keyword 3, keyword 4, ...">
		
		<!-- Twitter Card data -->
		<meta name="twitter:title" content="Hello Example">
		<meta name="twitter:description" content="Some description">
		
        <meta name="author" content="ivan_svrzic@hotmail.com">
		<!-- favicon meta -->
		<link rel="icon" href="favicon.ico" type="image/x-icon"/>
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
		<!-- end favicon meta -->
		<!-- end meta elements -->
		
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"> 
		<!-- End Google Fonts -->
		<title>PlayStation 4</title>
	</head>
<body>
	<header>
		<nav>
			<ul>
			  <li><a href="index.php">Home</a></li>
			  <li><a href="news.php">News</a></li>
			  <li><a href="contact.php">Contact</a></li>
			  <li><a href="about_us.php">About</a></li>
  			  <li><a href="register.php">Register</a></li>
			  <li><a href="index.php?logout='1'">Logout</a></li>
			</ul>
		</nav>
        <div class="hero-image" style="height: 400px;"></div>
	</header>
	<main>
		<h1>About Us</h1>
		<p>Using our unlimited passion for technology, content and services to deliver groundbreaking new excitement and entertainment, as only Sony can.</p>
		<p>Since its establishment, Sony has kept true to its spirit of challenging itself to "do what others do not do," growing its business domain, from the core electronics business to entertainment businesses including pictures and music. It has now become an unprecedentedly diverse company that even offers financial services. Having these diverse business domains and operating them with a common set of values under the 'SONY' brand is its fundamental strength.</p>
		<p>Through innovative, reliable products and services, talented people, a responsible approach to business and global citizenship, and collaboration with our partners and customers, Sony is taking the world in imaginative new directions.</a></p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2783.047563827628!2d15.939826321082602!3d45.77023702027077!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4765d43b4fe12f4f%3A0x7e7e1e8dd7fd0a02!2sSony+Center!5e0!3m2!1sen!2shr!4v1517175774349" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</main>
	<footer>
		<p>Copyright &copy; 2017 Bruno Ivanović</p>
	</footer>
	<!-- Google Analytics code -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-98455037-1', 'auto');
	  ga('send', 'pageview');

	</script>
	<!-- End Google Analytics code -->
</body>
</html>
