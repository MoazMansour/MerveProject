<!doctype html>
<!--lang="en"-->
<html>
	<head>
		<meta charset="utf-8">
        <title>Merve Gulbay, CSC 170 Project 3</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
        <link rel="stylesheet" type="text/css" href="sss/sss.css">
        <link rel = "stylesheet" href = "http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    </head>

        <body>
        <!--<script type="text/javascript">
        	var slideIndex = 0;

			function showSlides() {
			    var i;
			    var slides = document.getElementsByClassName("mySlides");
			    var dots = document.getElementsByClassName("dot");
			    for (i = 0; i < slides.length; i++) {
			        slides[i].style.display = "none";
			        dots[i].className = dots[i].className.replace(" active", "");
			    }
			    slideIndex++;
			    if (slideIndex > slides.length) {slideIndex = 1} 
			    slides[slideIndex-1].style.display = "block";
				dots[slideIndex-1].className += " active";
			    setTimeout(showSlides, 4000); // Change image every 4 seconds
			}
        </script>
    <body onload="showSlides(1);">-->
    	<h1>
    		 <img src="images/logo.jpg" alt="Logo">
    	</h1>

        <nav>
        	<ul class ="menu">
        		<li class="menu"><a href="index.html">Home</a></li>
        		<li class="menu"><a href="malcolm.html">Malcolm</a></li>
        		<li class="menu"><a href="messi.html">Messi</a></li>
        		<li class="menu"><a href="gary.html">Gary</a></li>
        		<li class="menu"><a href="lovelace.html">Lovelace</a></li>
        	</ul>				
		</nav>

		<div class="hero-container">
		<section class="hero">
			<div class="slider">
				<img src="images/malcolm2.jpg" alt="Bears">
				<img src="images/lovelace1.jpg" alt="More bears">
				<img src="images/messi-action.jpg" alt="Bears, bears, bears">
				<img src="images/gygax_pic.jpg" alt="OMG. Bears.">
			</div>
		<!-- .hero-container -->
			<h2>Malcolm X</h2>
			<img src="images/malcolm2.jpg" alt="Malcolm X">
			<p> Malcolm X (1925–1965) was an African-American Muslim minister and human rights activist. To his admirers he was a courageous advocate for the rights of blacks, a man who indicted white America in the harshest terms for its crimes against black Americans; detractors accused him of preaching racism and violence. He has been called one of the greatest and most influential African Americans in history.</p> 
			<p><a href="http://www.urcsc170.org/mgulbay/project3/malcolm.html">Click for more on Malcolm X</a></p>


			<h2>Lionel Messi</h2>
			<img src="images/messi-action.jpg"x alt="Messi">
			<p>Lionel Andrés "Leo" Messi is an Argentine professional footballer who plays as a forward for Spanish club Barcelona and the Argentina national team. Often considered the best player in the world and regarded by many as the greatest of all time, Messi has a record-tying five Ballon d'Or awards, four of which he won consecutively, and a record-tying four European Golden Shoes.</p>
			<p><a href="http://www.urcsc170.org/mgulbay/project3/messi.html">Click for more on Lionel Messi</a></p>



			<h2>Gary Gygax</h2>
			<img src="images/gygax_pic.jpg" alt="Gary">
			<p>Ernest Gary Gygax was an American game designer and author best known for co-creating the pioneering role-playing game Dungeons & Dragons (D&D) with Dave Arneson.</p>
			<p><a href="http://www.urcsc170.org/mgulbay/project3/gary.html">Click for more on Gary Gygax</a></p>


			<h2>Ada Lovelace</h2> 
			<img src="images/closeup.jpg" alt="Lovelace">
			<p>Augusta Ada King-Noel, Countess of Lovelace was an English mathematician and writer, chiefly known for her work on Charles Babbage's proposed mechanical general-purpose computer, the Analytical Engine.</p> 
			<p><a href="http://www.urcsc170.org/mgulbay/project3/lovelace.html">Click for more on Ada Lovelace</a></p>
			</div>
		</section>


		<!-- Global site tag (gtag.js) - Google Analytics -->

		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-110948824-1"></script>
		<script>
 			window.dataLayer = window.dataLayer || [];
  			function gtag(){dataLayer.push(arguments);}
  			gtag('js', new Date());
  			gtag('config', 'UA-110948824-1');
		</script>

		<footer>
			<p> &#169; Merve Gulbay - CSC 170 Webpage Design and Development</p>
		</footer>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="sss/sss.min.js"></script>
		<script>
		$('.slider').sss();
		</script>
		<?php include "inc/scripts.inc"; ?>
	</body>
</html>