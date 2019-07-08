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

	<div class="info mt-0">
		<div class="container">
			<div class="row">

				<div class="col-xl-12">
					<h3 class="info-text-search">Результаты поиска</h3>
				</div>

				<div class="col-xl-12">
					<div class="search-widgets d-flex justifu-content-around align-items-center">

						<form action="search.php" method="POST" class="search">
							<input type="search" name="search" placeholder="Фильмы, Сериалы" class="mt-0">
						</form>
		
						<div class="widgets mt-0">
							<form action="index.php" method="POST">
								<button type="submit" class="come-in" name="home"><i class="fas fa-home"></i></button>
							</form>		
						</div>
					</div>				
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
							if( countFilmSearch($_POST['search']) == 0 ){
								echo "<h3 class='info-text'>Результатов нету!</h3>";
							}	else {
								$searchResults = filmSearch($_POST['search']);
								foreach($searchResults as $searchResult) : ?>
									<?php 
										$filmGeners = getGenreByName( $searchResult['genre_name'] );
										foreach ( $filmGeners as $filmGener ) : ?>
											<?php 
											$filmFlags = getFlag( $searchResult['flag'] );
											foreach ($filmFlags as $filmFlag ) : ?>	

											<div class="film">
												<div class="film-img-fllag">
													<div class="poster">
														<img src="img/films/<?php echo $searchResult['photo']?>" alt="<?php echo $searchResult['photo']?>" >
													</div>
													<div class="film-flag-point">
														<img src="img/flags/<?php echo $filmFlag['img']?>" alt="<?php echo $filmFlag['name']?>" class="flag">
														<i class="fas fa-star"></i>
														<div class="point"><?php echo $searchResult['point']?></div>
													</div>
												</div>		
												<div class="film-info">
													<h2 class="film-title"><?php echo $searchResult['name']?></h2>
													<p class="film-description"><?php echo mb_substr($searchResult['text'], 0, 339, 'UTF-8') . '...' ?></p>
													<div class="date-time">
														<div class="date"><?php echo $searchResult['date']?></div>
														<div class="time"><?php echo $searchResult['time']?></div>
													</div>
													<div class="film-tags">
														<a href="category.php?genreName=<?php echo $filmGener['name']?>" class="tag"><?php echo $filmGener['name']?></a>
													</div>
												</div>					
											</div>

										<?php endforeach; ?>
									<?php endforeach; ?>
								<?php endforeach; }?>

					</div>
				</div>
				<div class="col-xl-6">
					<div class="main-title" id="film-main-title">
						Сериалы:
					</div>
					<div class="serials">
						
						<?php	
							if( countSerialSearch($_POST['search']) == 0 ){
								echo "<h3 class='info-text'>Результатов нету!</h3>";
							}	else {				
								$searchResults = serialSearch($_POST['search']);
								foreach($searchResults as $searchResult) : ?>
									<?php 
										$serialGeners = getGenreByName( $searchResult['genre_name'] );
										foreach ( $serialGeners as $serialGener ) : ?>
											<?php 
												$serialFlags = getFlag( $searchResult['flag'] );
												foreach ($serialFlags as $serialFlag ) : ?>

												<div class="film">
													<div class="film-img-fllag">
														<div class="poster">
															<img src="img/serials/<?php echo $searchResult['photo']?>" alt="<?php echo $searchResult['photo']?>" >
														</div>
														<div class="film-flag-point">
															<img src="img/flags/<?php echo $serialFlag['img']?>" alt="<?php echo $serialFlag['name']?>" class="flag">
															<i class="fas fa-star"></i>
															<div class="point"><?php echo $searchResult['point']?></div>
														</div>
													</div>		
													<div class="film-info">
														<h2 class="film-title"><?php echo $searchResult['name']?></h2>
														<p class="film-description"><?php echo mb_substr($searchResult['text'], 0, 339, 'UTF-8') . '...' ?></p>
														<div class="date-time">
															<div class="date"><?php echo $searchResult['date']?></div>
															<div class="time"><?php echo $searchResult['time']?></div>
														</div>
														<div class="film-tags">
															<a href="category.php?genreName=<?php echo $serialGener['name']?>" class="tag"><?php echo $serialGener['name']?></a>
														</div>
													</div>					
												</div>

											<?php endforeach;?>
									<?php endforeach;?>
							<?php endforeach;}?>

					</div>
				</div>

			</div>
		</div>
	</main>

<?php include('php/templates/footer.php') ?>