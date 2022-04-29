<!DOCTYPE HTML>
<!--
-->
<html>
	<head>
		<title>Ricky Youm</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<a href="index.html" class="logo"><strong>Ricky</strong> <span>Youm</span></a>
						<nav>
							<a href="#menu">Menu</a>
						</nav>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<ul class="links">
							<ul class="actions stacked">
								<li><a href="index.html" class="button primary fit">Home</a></li>
							</ul>
							<li><a href="landing.html">Sudoku Solver</a></li>
							<li><a href="generic.html">Multibody Pendulum Simulator</a></li>
							<li><a href="elements.html">Elements</a></li>
						</ul>

					</nav>

				<!-- Banner -->
					<section id="banner" class="major">
						<div class="inner">
							<header class="major">
								<h1>Hello, my name is Ricky</h1>
							</header>
							<div class="content">
								<p>And this is my portfolio</p>
								<ul class="actions">
									<li><a href="#one" class="button next scrolly">Get Started</a></li>
								</ul>
							</div>
						</div>
					</section>

				<!-- Main -->
					<div id="main">

						<!-- One -->
							<section id="one" class="tiles">
								<article>
									<span class="image">
										<img src="images/sudoku.png" alt="" />
									</span>
									<header class="major">
										<h3><a href="landing.html" class="link">Sudoku Solver</a></h3>
										<p>A Chess Sudoku Solver Implementing the Backtracking Algorithm using Java</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="https://github.com/yaeldemers/multibody-pendulum-visualization/blob/main/images/MPVT.png?raw=true" alt="" />
									</span>
									<header class="major">
										<h3><a href="landing.html" class="link">Multibody Pendulum Visualiser</a></h3>
										<p>A pendulum visualization tool created using p5.js</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/pic03.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="landing.html" class="link">Magna</a></h3>
										<p>Lorem etiam nullam</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/pic04.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="landing.html" class="link">Ipsum</a></h3>
										<p>Nisl sed aliquam</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/pic05.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="landing.html" class="link">Consequat</a></h3>
										<p>Ipsum dolor sit amet</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/pic06.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="landing.html" class="link">Etiam</a></h3>
										<p>Feugiat amet tempus</p>
									</header>
								</article>
							</section>

						<!-- Two -->
							<section id="two">
								<div class="inner">
									<header class="major">
										<h2>Who am I?</h2>
									</header>
									<p>I am a Computer Science undergraduate student at McGill University. I have a strong passion in developing innovative softwares and applications. In the last couple of years, I've developed a keen interest in game design, software design and sound design.</p>
									<p>Get in touch with me if you want to collaborate! </p>
								</div>
							</section>

					</div>

					<?php
									$name = $_POST['name'];
									$email = $_POST['email'];
									$subject = $_POST['subject'];
									$message = $_POST['message'];                                                   
									$from = 'From: <the-email-that-you-want-it-to-come-from>';
									$to = '<recipient-email>';
									$email_subject = 'New Contact Form Submission!';
									
									$body = "Name: $name\nE-mail: $email\nSubject: $subject\n\nThe message is below:\n$message";;
								?>

				<!-- Contact -->
					<section id="contact">
						<div class="inner">
							<section>

								<?php
									if (isset($_POST['submitbtn']))
									{
										if (mail($to, $email_subject, $body, $from))
										{
											echo "<font color=\"green\"><p>Your message has been sent!</p></font>";
										}
										else
										{
										echo "<font color=\"red\"><p>Your message sending has failed! Please manually email (your email)!</p></font>";
										}
									}
								?>
								<form method="post" action=index.php>
									<div class="fields">
										<div class="field half">
											<label for="name">Name</label>
											<input type="text" name="name" id="name" />
										</div>
										<div class="field half">
											<label for="email">Email</label>
											<input type="text" name="email" id="email" />
										</div>
										<div class="field">
											<label for="message">Message</label>
											<textarea name="message" id="message" rows="6"></textarea>
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Send Message" class="primary" name="submitbtn" /></li>
										<li><input type="reset" value="Clear" /></li>
									</ul>
								</form>
							</section>
							<section class="split">
								<section>
									<div class="contact-method">
										<span class="icon solid alt fa-envelope"></span>
										<h3>Email</h3>
										<p>hyeokmyeong.youm@mail.mcgill.ca</p>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon solid alt fa-phone"></span>
										<h3>Phone</h3>
										<span>+1-514-214-1672</span>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon solid alt fa-home"></span>
										<h3>Address</h3>
										<span>Montréal, Québec, Canada</span>
									</div>
								</section>
							</section>
						</div>
					</section>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<ul class="icons">
								<li><a href="https://www.facebook.com/ricky.youm/" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
								<li><a href="https://www.instagram.com/rickyyoum/" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
								<li><a href="https://github.com/duaguraud" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
								<li><a href="https://www.linkedin.com/in/ricky-youm-16710120b/" class="icon brands alt fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
							</ul>
							<ul class="copyright">
								<li>Copyright &copy; 2022. Ricky Youm.</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li>
							</ul>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>