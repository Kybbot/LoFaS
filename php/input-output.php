<?php

include('database.php');

// INPUT

	function addFilm() {
		global $db;

		if ( isset($_FILES['user_film_file']) && $_FILES['user_film_file']['tmp_name'] != '' ) {
			move_uploaded_file($_FILES['user_film_file']['tmp_name'], './img/films/' . $_FILES['user_film_file']['name'] );
			$fileName = $_FILES['user_film_file']['name'];
		} else {
			$fileName = 'nophoto.png';
		}

		$name = $_POST['film_name'];
		$text = $_POST['film_text'];
		$date = $_POST['film_date'];
		$time = $_POST['film_time'];
		$genre = $_POST['film_genre'];
		$country = $_POST['film_countrys'];
		$point = $_POST['film_point'];

		$sql = "INSERT INTO `films` ( photo, name, text, date, time, genre_name, flag, point ) VALUES ( :photo, :name, :text, :date, :time, :genre_name, :flag, :point )";
		$statement = $db->prepare($sql);
		$statement->bindValue(':photo', $fileName);
		$statement->bindValue(':name', $name);
		$statement->bindValue(':text', $text);
		$statement->bindValue(':date', $date);
		$statement->bindValue(':time', $time);	
		$statement->bindValue(':genre_name', $genre);	
		$statement->bindValue(':flag', $country);	
		$statement->bindValue(':point', $point);	
		$statement->execute();
	}

	if ( isset($_POST['film-submit']) ) {
		addFilm();
	}

	function addSerial() {
		global $db;

		if ( isset($_FILES['user_serial_file']) && $_FILES['user_serial_file']['tmp_name'] != '' ) {
			move_uploaded_file($_FILES['user_serial_file']['tmp_name'], './img/serials/' . $_FILES['user_serial_file']['name'] );
			$fileName = $_FILES['user_serial_file']['name'];
		} else {
			$fileName = 'nophoto.png';
		}

		$name = $_POST['serial_name'];
		$text = $_POST['serial_text'];
		$date = $_POST['serial_date'];
		$time = $_POST['serial_time'];
		$genre = $_POST['serial_genre'];
		$country = $_POST['serial_countrys'];
		$point = $_POST['serial_point'];

		$sql = "INSERT INTO `serials` ( photo, name, text, date, time, genre_name, flag, point ) VALUES ( :photo, :name, :text, :date, :time, :genre_name, :flag, :point )";
		$statement = $db->prepare($sql);
		$statement->bindValue(':photo', $fileName);
		$statement->bindValue(':name', $name);
		$statement->bindValue(':text', $text);
		$statement->bindValue(':date', $date);
		$statement->bindValue(':time', $time);	
		$statement->bindValue(':genre_name', $genre);	
		$statement->bindValue(':flag', $country);	
		$statement->bindValue(':point', $point);	
		$statement->execute();
	}

	if ( isset($_POST['serial-submit']) ) {
		addSerial();
	}


// Output

	// Вывод всех категорий
	function getGenres() {
		global $db;

		$sql = " SELECT * FROM `genres` ";
		$statement = $db->prepare($sql);
		$statement->execute();

		return  $statement->fetchAll(PDO::FETCH_ASSOC);
	}

	// Вывод категорий
	function getGenreByName( $genreName ) {
		global $db;

		$sql = " SELECT * FROM `genres` WHERE `name` = '$genreName' ";
		$statement = $db->prepare($sql);
		$statement->execute();

		return  $statement->fetchAll(PDO::FETCH_ASSOC);
	}

	function getGenreFilms( $genreName ) {
		global $db;
		
		$sql = " SELECT * FROM `films` WHERE `genre_name` = '$genreName' ";	
		$statement = $db->prepare($sql);
		$statement->execute();

		return  $statement->fetchAll(PDO::FETCH_ASSOC);
	}

	function getGenreSerials( $genreName ) {
		global $db;
		
		$sql = " SELECT * FROM `serials` WHERE `genre_name` = '$genreName' ";	
		$statement = $db->prepare($sql);
		$statement->execute();

		return  $statement->fetchAll(PDO::FETCH_ASSOC);
	}

	// Вывод всех фильмов
	function getAllFilms() {
		global $db;

		$sql = " SELECT * FROM `films` ";
		$statement = $db->prepare($sql);
		$statement->execute();

		return $statement->fetchAll(PDO::FETCH_ASSOC);
	}

	//  Вывод всех сериалов
	function getAllSerials() {
		global $db;

		$sql = " SELECT * FROM `serials` ";
		$statement = $db->prepare($sql);
		$statement->execute();

		return $statement->fetchAll(PDO::FETCH_ASSOC);
	}

	// Вывод флагов
	function getFlag( $flagName ) {
		global $db;

		$sql = "SELECT * FROM `flags` WHERE `name` = '$flagName' ";	
		$statement = $db->prepare($sql);
		$statement->execute();

		return  $statement->fetchAll(PDO::FETCH_ASSOC);
	}

	// Счетчик фильмов и сериалов
	function countFilms() {
		global $db;

		$nRows = $db->query(' SELECT COUNT(*) FROM `films` ')->fetchColumn(); 
		echo $nRows;
	}

	function countSerials() {
		global $db;

		$nRows = $db->query(' SELECT COUNT(*) FROM `serials` ')->fetchColumn(); 
		echo $nRows;
	}

	function countFilmSearch( $name ) {
		global $db;

		return $db->query(" SELECT COUNT(*) FROM `films` WHERE `name` LIKE '%$name%' ")->fetchColumn();
	}

	function countSerialSearch( $name ) {
		global $db;

		return $db->query(" SELECT COUNT(*) FROM `serials` WHERE `name` LIKE '%$name%' ")->fetchColumn();
	}

	// Поиск фильмов и сериалов
	function filmSearch( $name ) {
		global $db;

		$sql = " SELECT * FROM `films` WHERE `name` LIKE '%$name%' ";	
		$statement = $db->prepare($sql);
		$statement->execute();

		return  $statement->fetchAll(PDO::FETCH_ASSOC);
	}

	function serialSearch( $name ) {
		global $db;

		$sql = " SELECT * FROM `serials` WHERE `name` LIKE '%$name%' ";	
		$statement = $db->prepare($sql);
		$statement->execute();

		return  $statement->fetchAll(PDO::FETCH_ASSOC);
	}

	// Авторизация
	function getLogin( $login ) {
		global $db;

		$sql = "SELECT * FROM `users` WHERE `login` = '$login' ";	
		$statement = $db->prepare($sql);
		$statement->execute();

		return  $statement->fetchAll(PDO::FETCH_ASSOC);
	}

	function getPassword( $password ) {
		global $db;

		$sql = "SELECT * FROM `users` WHERE `password` = '$password' ";	
		$statement = $db->prepare($sql);
		$statement->execute();

		return  $statement->fetchAll(PDO::FETCH_ASSOC);
	}

?>