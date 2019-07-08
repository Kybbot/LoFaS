<?php 

include('php/input-output.php');

if(isset($_POST['home'])) {
	header('Location:index.php');
}

?>

<?php include('php/templates/head.php') ?>

	<div id="preloader" class="preloader">
		<div id="loader"></div>
	</div>

	<header>
		<div class="container">
			<div class="row">

				<div class="col-xl-5">
					<div class="logo">
						Список фильмов <br>
						и сериалов 
					</div>
				</div>

				<div class="col-xl-7">

					<div class="search-widgets d-flex justifu-content-around align-items-center">

						<form action="search.php" method="POST" class="search">
							<input type="search" name="search" placeholder="Фильмы, Сериалы">
						</form>	
		
						<div class="widgets">
							<form action="index.php" method="POST">
								<button type="submit" class="come-in" name="home"><i class="fas fa-home"></i></button>
							</form>		
						</div>

					</div>
					
				</div>

			</div>
		</div>
	</header>

	<div class="tags">
		<div class="container">
			<div class="row">

				<div class="col-xl-12">

					<?php
						$genres = getGenres();
						foreach( $genres as $genre ) : ?>
						<a href="category.php?genreName=<?php echo $genre['name']?>" class="tag">#<?php echo $genre['name']?></a>
					<?php endforeach;?>

				</div>

			</div>
		</div>
	</div>

<div class="info">
	<div class="container">
		<div class="row">

			<div class="col-xl-12">
				<?php
					$genres = getGenreByName($_GET['genreName']);
					foreach($genres as $genre) : ?>

				<h3 class="info-text-search"><?php echo $genre['name']?></h3>

				<?php endforeach;?>				
			</div>

		</div>
	</div>
</div>
	

	<main>
		<div class="container">
			<div class="row">

				<div class="col-xl-6">
					<div class="main-title" id="film-main-title">
						Фильмы:
					</div>
					<div class="films">

						<?php
							$genreFilms = getGenreFilms($_GET['genreName']);
							foreach($genreFilms as $genreFilm) : ?>
							<?php 
							$filmGeners = getGenreByName( $genreFilm['genre_name'] );
							foreach ( $filmGeners as $filmGener ) : ?>
								<?php 
								$filmFlags = getFlag( $genreFilm['flag'] );
								foreach ($filmFlags as $filmFlag ) : ?>

									<div class="film">
										<div class="film-img-fllag">
											<div class="poster">
												<img src="img/films/<?php echo $genreFilm['photo']?>" alt="<?php echo $genreFilm['photo']?>" >
											</div>
											<div class="film-flag-point">
												<img src="img/flags/<?php echo $filmFlag['img']?>" alt="<?php echo $filmFlag['name']?>" class="flag">
												<i class="fas fa-star"></i>
												<div class="point"><?php echo $genreFilm['point']?></div>
											</div>
										</div>		
										<div class="film-info">
											<h2 class="film-title"><?php echo $genreFilm['name']?></h2>
											<p class="film-description"><?php echo mb_substr($genreFilm['text'], 0, 339, 'UTF-8') . '...' ?></p>
											<div class="date-time">
												<div class="date"><?php echo $genreFilm['date']?></div>
												<div class="time"><?php echo $genreFilm['time']?></div>
											</div>
											<div class="film-tags">
												<a href="category.php?genreName=<?php echo $filmGener['name']?>" class="tag"><?php echo $filmGener['name']?></a>
											</div>
										</div>					
									</div>

								<?php endforeach;?>
							<?php endforeach;?>
						<?php endforeach;?>

					</div>
				</div>
				<div class="col-xl-6">
					<div class="main-title" id="film-main-title">
						Сериалы:
					</div>
					<div class="serials">
						
						<?php
							$genreSerials = getGenreSerials($_GET['genreName']);
							foreach($genreSerials as $genreSerial) : ?>
							<?php 
								$serialGeners = getGenreByName( $genreSerial['genre_name'] );
								foreach ( $serialGeners as $serialGener ) : ?>
									<?php 
									$serialFlags = getFlag( $genreSerial['flag'] );
									foreach ($serialFlags as $serialFlag ) : ?>

										<div class="film">
											<div class="film-img-fllag">
												<div class="poster">
													<img src="img/serials/<?php echo $genreSerial['photo']?>" alt="<?php echo $genreSerial['photo']?>" >
												</div>
												<div class="film-flag-point">
													<img src="img/flags/<?php echo $serialFlag['img']?>" alt="<?php echo $serialFlag['name']?>" class="flag">
													<i class="fas fa-star"></i>
													<div class="point"><?php echo $genreSerial['point']?></div>
												</div>
											</div>		
											<div class="film-info">
												<h2 class="film-title"><?php echo $genreSerial['name']?></h2>
												<p class="film-description"><?php echo mb_substr($genreSerial['text'], 0, 339, 'UTF-8') . '...' ?></p>
												<div class="date-time">
													<div class="date"><?php echo $genreSerial['date']?></div>
													<div class="time"><?php echo $genreSerial['time']?></div>
												</div>
												<div class="film-tags">
													<a href="category.php?genreName=<?php echo $serialGener['name']?>" class="tag"><?php echo $serialGener['name']?></a>
												</div>
											</div>					
										</div>

								<?php endforeach;?>
							<?php endforeach;?>
						<?php endforeach;?>

					</div>
				</div>

			</div>
		</div>
	</main>

<?php include('php/templates/footer.php') ?>