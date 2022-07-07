<!DOCTYPE HTML>
<html>
	<head>
		<title>Categories</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<!-- <div class="inner">

							<!- Logo ->
								<a href="index.html" class="logo">
									<span class="symbol"><img src="images/logo.svg" alt="" /></span><span class="title">Phantom</span>
								</a>

							<!- Nav ->
								<nav>
									<ul>
										<li><a href="#menu">Menu</a></li>
									</ul>
								</nav>

						</div> -->
						
					</header>


				<!-- Main -->
					<div id="main">
						<div class="inner">
							<header>
								
								<h1>SIFF<br />
								
								 <a href="https://www.youngartiste.com">YOUNG ARTISITE</a>.</h1>
								<p>Select the required category to vote for in this voting contest.</p>
							</header>
							<section class="tiles">
							<?php
                           require 'dbcon.php';
						   
                           $query =mysqli_query($conn,"SELECT * FROM category");
							while($row=mysqli_fetch_array($query))
							{ 
							?>
							
								<article class="style1" value=""   >
								
									<span class="image">
										<img src="<?php echo $row['img']; ?>" alt=""  />
									</span>
									<a href="try.php?myVar=<?php echo $row['category_id']; ?>" onclick="POST">
										<h2><?php echo $row['category'];?></h2>
										<!-- <div class="content">
											<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
										</div> -->
							</a>
							
							
								</article>
							<?php } ?>
							</section>
						</div>
					</div>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<section>
								<h2>Get in touch</h2>
								<form method="post" action="#">
									<div class="fields">
										<div class="field half">
											<input type="text" name="name" id="name" placeholder="Name" />
										</div>
										<div class="field half">
											<input type="email" name="email" id="email" placeholder="Email" />
										</div>
										<div class="field">
											<textarea name="message" id="message" placeholder="Message"></textarea>
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Send" class="primary" /></li>
									</ul>
								</form>
							</section>
							<section>
								<h2>Follow</h2>
								<ul class="icons">
									<li><a href="https://twitter.com/siffya2020" class="icon brands style2 fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="https://www.facebook.com/siff.youngartiste" class="icon brands style2 fa-facebook-f"><span class="label">Facebook</span></a></li>
									<li><a href="https://www.instagram.com/siff.youngartiste/" class="icon brands style2 fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="tel:+917669331121" class="icon solid style2 fa-phone"><span class="label">Phone</span></a></li>
									<li><a href="contactus@youngartiste.com" class="icon solid style2 fa-envelope"><span class="label">Email</span></a></li>
								</ul>
							</section>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script>
				function page()
				{
					window.location='try.php';
				}
				</script>
	</body>
</html>
