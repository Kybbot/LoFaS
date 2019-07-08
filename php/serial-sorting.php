<?php

	include('database.php');
	include('input-output.php');

	if (isset($_POST['action'])) {
		$sql = " SELECT * FROM serials WHERE name IS NOT NULL ";

		if (isset($_POST['date'])) {
			$date_filter = implode(',', $_POST['date']);
			$sql .= " AND date IN ('$date_filter') ";
		}

		if (isset($_POST['point'])) {
			$point_filter = implode(',', $_POST['point']);
			$sql .= " AND point IN ('$point_filter') ";
		}

		if (isset($_POST['time'])) {
			$time_filter = implode(',', $_POST['time']);
			$sql .= " AND time IN ('$time_filter') ";
		}

		if (isset($_POST['flag'])) {
			$flag_filter = implode(',', $_POST['flag']);
			$sql .= " AND flag IN ('$flag_filter') ";
		}

		$statement =  $db->prepare($sql);
		$statement->execute();
		$result = $statement->fetchAll(PDO::FETCH_ASSOC);
		$rows = $statement->rowCount();
		$output = '';

		if ($rows > 0) {
			foreach ($result as $row ){
				$serialGeners = getGenreByName( $row['genre_name'] );
				foreach ( $serialGeners as $serialGener ){
					$filmFlags = getFlag( $row['flag'] );
					foreach ($filmFlags as $filmFlag ) {

						$output .='
							<div class="film">
								<div class="film-img-fllag">
									<div class="poster">
										<img src="img/serials/'. $row['photo'] .'" alt="'. $row['name'] .'" >
									</div>
									<div class="film-flag-point">
										<img src="img/flags/'. $filmFlag['img'] .'" alt="'. $filmFlag['name'] .'" class="flag">
										<i class="fas fa-star"></i>
										<div class="point">'. $row['point'] .'</div>
									</div>
								</div>		
								<div class="film-info">
									<h2 class="film-title">'. $row['name'].'</h2>
									<p class="film-description">'. mb_substr($row['text'], 0, 339, 'UTF-8'). ' ...' .'</p>
									<div class="date-time">
										<div class="date">'. $row['date'] .'</div>
										<div class="time">'. $row['time'] .'</div>
									</div>
									<div class="film-tags">
										<a href="category.php?genreName='. $serialGener['name'] .'" class="tag">'. $serialGener['name'] .'</a>
									</div>
								</div>					
							</div>
						';
						
					}
				}			
			}
		} else {
			$output = '<h3 class="info-text">Результатов нету!</h3>';
		}
		echo $output;
	}

?>