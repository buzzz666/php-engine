<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Atricles list</title>
	<link rel="stylesheet" href="/template/css/style.css" type="text/css">
</head>
<body>
	<div class="container">
		<header id="navtop">
			<a href="#" class="logo fleft">
				<img src="/template/img/logo.png" alt="Designa Studio">
			</a>

			<nav class="fright">
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="about.html">About</a></li>
				</ul>
				<ul>
					<li><a href="works.html">Works</a></li>
					<li><a href="services.html">Services</a></li>
				</ul>
				<ul>
					<li><a href="blog.html" class="navactive">Blog</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</nav>
		</header>

		<div class="blog-page main grid-wrap">

			<header class="grid col-full">
				<hr>
				<p class="fleft">News</p>
			</header>

			<section class="grid col-three-quarters mq2-col-two-thirds mq3-col-full">

				<?php foreach ($newsList as $newsItem) : ?>

					<article class="post">
						<h2><a href="/news/<?php echo $newsItem['id'] ?>" class="post-title"><?php echo $newsItem['title'] ?></a></h2>
						<div class="meta">
							<p>Posted on <span class="time"><?php echo $newsItem['date'] ?></span>
						</div>
						<div class="entry">
							<?php echo $newsItem['short_content'] ?>
						</div>
						<footer>
							<a href="/news/<?php echo $newsItem['id'] ?>" class="article-link" class="more-link">Continue reading…</a>
						</footer>
					</article>		

					
				<?php endforeach; ?>	


				<ul class="page-numbers">
					<li><a href="#">Prev</a></li>
					<li><a href="#" class="current">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">Next</a></li>
				</ul>

			</section>

			<aside class="grid col-one-quarter mq2-col-one-third mq3-col-full blog-sidebar">

				<div class="widget">
					<input id="search" type="search" name="search" value="Type and hit enter to search" >
				</div>

				<div class="widget">
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi commodo, ipsum sed pharetra gravida, orci magna rhoncus neque, id pulvinar odio lorem non turpis. Nullam sit amet enim.</p>
				</div>

				<div class="widget">
					<h2>Popular Posts</h2>
					<ul>
						<li><a href="#" title="">Nullam porttitor elementum ligula</a></li>
						<li><a href="#" title="">Vestibulum interdum</a></li>	
						<li><a href="#" title="">Quisque venenatis ante sit amet dolor</a></li>		
						<li><a href="#" title="">Aliquam adipiscing libero vitae leo</a></li>		
						<li><a href="#" title="">Sed accumsan quam ac tellus</a></li>	
					</ul>
				</div>

				<div class="widget">
					<h2>Categories</h2>
					<ul>
						<li><a href="http://">Design (99+)</a></li>
						<li><a href="http://">Web (53)</a></li>
						<li><a href="http://">Other (12)</a></li>
						<li><a href="http://">Weird (4)</a></li>
					</ul>
				</div>

				<div class="widget">
					<h2>Meta</h2>
					<ul>
						<li><a href="">Entries (RSS)</a></li>
						<li><a href="">Comments (RSS)</a></li>
					</ul>
				</div>

			</aside>
		</div> <!--main-->
	</body>
</html>