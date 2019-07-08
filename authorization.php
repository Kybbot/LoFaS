<?php 

include('php/input-output.php');

if(isset($_POST['do_login'])) {
	// $errors = array();

	$login = $_POST['login'];
	$password = $_POST['password'];
	
	$user = getLogin($login);
	$userPassword = getPassword($password);

	if($user) {
		if($userPassword) {
			$_SESSION['logged_user'] = $user;
			header('Location:index.php');
		} else {
			// $errors[] = 'Неверно введён пароль!';
		}
	} else {
		// $errors[] = 'Пользователь с таким логином не найден!';
	}

	// if(!empty($errors)) {
	// 	echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';
	// }
}

if(isset($_POST['viewing'])) {
	$user = false;
	$_SESSION['logged_user'] = $user;
	header('Location:index.php');
}

?>

<?php include('php/templates/head.php') ?>

	<div class="paralax">
		<div class="paralax-bg"></div>
		<main class="authorization-form">

			<form action="authorization.php" method="POST" class="authorization" id="authorization-form">
				<h2 class="authorization-title">Авторизация</h2>
				<input type="text" placeholder="Логин" name="login" class="login">
				<input type="password" placeholder="Пароль" name="password" class="password">
				<div class="authorization-buttons">
					<input type="submit" value="Просмотр" class="viewing" name ="viewing">
					<input type="submit" value="Войти" class="submit" name="do_login">
				</div>		
			</form>
			
		</main>
	</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/paralax.js"></script>

</body>
</html>