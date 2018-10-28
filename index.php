<?php 
header('content-type: text/html; charset=utf-8');

	require "db.php";
	if (isset($_POST['send'])) {

	$koments = R::dispense('koments');
	if (isset ( $_POST ['name'])){
		$koments->name = $_POST['name'];
	}
	if (isset ( $_POST ['message'])){
		$koments->message = $_POST['message'];
	}
		$koments->date = date("H:i d.m.Y");

	R::store($koments);
	header('Location: index.php');
}

?>
<html lang="en">
	<head>
		<link rel="stylesheet" href="css/style.css">
		<meta charset="UTF-8">
	</head>

	<body>
		<div class='header'>
		<p class="firstp">Телефон: (499)340-94-71</p>
		<p class="secondp">Email: <u>info@future-group.ru</u></p>
		<h1>Комментарии</h1>
		<img src="img/logo.jpg" alt="Future" class="logo">
		</div>
		<div class="main">
		<?php $komen = mysqli_query($con, "SELECT * FROM koments order by id") ?>
		<?php while ($kom = mysqli_fetch_assoc($komen)) { ?>
			<div class="koment">
				<div class="name"><?= $kom['name'] ?><?php echo " ";?><?= $kom['date'] ?></div>
				<br>
				<div class="message"><?= $kom['message'] ?></div>
			</div>
			<?php echo "<br><br><br><br><br><br><br><br><br>";} ?>
			
			<hr>
			<h1>Оставить комментарий</h1>
			<form action="" method="post" class="form">
				<h3>Ваше имя</h3>
				<input type="text" name="name" class="name1"><br><br>
				<h3>Ваш комментарий</h3>
				<textarea type="text" name="message"></textarea><br><br>
				<div style="clear:both"><br><br></div>
				<input type="submit" name="send" class="button">
			</form>
		</div>
	
		<div class="footer">
		<p class="tel">Телефон: (499)340-94-71</p>
		<p class="email">Email: <u>info@future-group.ru</u></p>
		<p class="adress">Адрес: <u>115088 Москва, ул. 2-я Машиностроения, д. 7 стр. 1</u></p>
		<p class="rules">© 2010 - 2014 Future. Все права защищены</p>
		<img src="img/logo.jpg" alt="Future" class="logo_2" width="150" display="block">
	</div>
	</body>
</html>
