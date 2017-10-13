<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Atricles list</title>
	<link rel="stylesheet" href="/template/css/style.css" type="text/css">
</head>
	<body>
		<?php foreach ($newsList as $newsItem) : ?>
			<div class="post">
				<h2>
					<a href="/news/<?php echo $newsItem['id'] ?>">
						<?php echo $newsItem['title'] ?>
					</a>
				</h2>
				<div class="subtitle">
					<?php echo $newsItem['date'] ?>
				</div>
				<div class="content">
					<div class="image">
						<img src="/template<?php echo $newsItem['image'] ?>" alt="image">
					</div>
					<?php echo $newsItem['short_content'] ?>
				</div>
				<div class="meta">
					<a href="/news/<?php echo $newsItem['id'] ?>" class="article-link">
						Read more...
					</a>
				</div>
			</div>
		<?php endforeach; ?>	
	</body>
</html>