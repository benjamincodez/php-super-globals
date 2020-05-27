<?php include 'server-info.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title> system info</title>
	<link rel="stylesheet" href="https://bootswatch.com/4/sketchy/bootstrap.min.css">
</head>
<body>
	<div class="container">
	<h1>Sever &  File Info</h1>
		<!-- the best way of writing an if statement inside html -->
		<?php if($_SERVER): ?>

			<ul class="list-group">
				<?php foreach($server as $key => $value): ?>

					<li class="list-group-item">
						<strong><?php echo $key; ?></strong>
						<?php echo $value; ?>
					</li>
				<?php endforeach; ?>

			</ul>
		<?php endif; ?>



		<h1>CLIENT info</h1>
		<!-- the best way of writing an if statement inside html -->
		<?php if($client): ?>
			<ul class="list-group">
				<?php foreach($client as $key => $value): ?>

					<li class="list-group-item">
						<strong><?php echo $key; ?></strong>
						<?php echo $value; ?>
					</li>
				<?php endforeach; ?>
			</ul>
		<?php endif; ?>

	</div>
</body>
</html>
