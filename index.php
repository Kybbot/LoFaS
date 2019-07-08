<?php 
include('php/database.php');
include('php/input-output.php');

if(isset($_POST['come-in'])){
	header('Location:authorization.php');
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
							<button type="submit" class="come-in" name="come-in"><i class="fas fa-sign-in-alt"></i></button>
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

<?php	if($_SESSION['logged_user']) : ?>

	<?php include('php/templates/add-panel.php')?>

<?php else : ?>
	<div class="info">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<h3 class="info-text">Вы не авторизованы!</h3>
				</div>
			</div>
		</div>
	</div>		
<?php endif ?>	

<div class="sortings">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">

				<p class="main-title">Сортировка по:</p>

				<div class="sorting-settings">

					<form id="sorting-form" class="sorting-form" action="" method="POST">

							<div class="box">
								<select class="sorting" >
									<option>Год</option>
									<option class="sort-date">2018</option>
									<option class="sort-date">2017</option>
									<option class="sort-date">2016</option>
									<option class="sort-date">2015</option>
									<option class="sort-date">2014</option>
									<option class="sort-date">2013</option>
									<option class="sort-date">2012</option>
									<option class="sort-date">2011</option>
									<option class="sort-date">2010</option>
									<option class="sort-date">2009</option>
									<option class="sort-date">2008</option>
									<option class="sort-date">2007</option>
									<option class="sort-date">2006</option>
									<option class="sort-date">2005</option>
								</select>
							</div>

							<div class="box">
								<select class="sorting" >
									<option>Оценка</option>
									<option class="sort-point">5</option>
									<option class="sort-point">4</option>
									<option class="sort-point">3</option>
									<option class="sort-point">2</option>
									<option class="sort-point">1</option>
								</select>
							</div>

							<div class="box">
								<select class="sorting" >
									<option>Время</option>
									<option class="sort-time">2+ часа</option>
									<option class="sort-time">2 часа</option>
									<option class="sort-time">1:30+ часа</option>
									<option class="sort-time">1:30 часа</option>
									<option class="sort-time">1 час</option>
									<option class="sort-time">50 мин</option>
									<option class="sort-time">40 мин</option>
									<option class="sort-time">30 мин</option>
									<option class="sort-time">20 мин</option>
								</select>
							</div>

							<div class="box">
								<select class="sorting" >
									<option>Страна</option>
									<option class="sort-flag">Австралия</option>
									<option class="sort-flag">Австрия</option>
									<option class="sort-flag">Беларусь</option>
									<option class="sort-flag">Бельгия</option>
									<option class="sort-flag">Бразилия</option>
									<option class="sort-flag">Болгария</option>
									<option class="sort-flag">Великобритания</option>
									<option class="sort-flag">Венгрия</option>
									<option class="sort-flag">Германия</option>
									<option class="sort-flag">Греция</option>
									<option class="sort-flag">Гонконг</option>
									<option class="sort-flag">Дания</option>
									<option class="sort-flag">Исландия</option>
									<option class="sort-flag">Индия</option>
									<option class="sort-flag">Ирландия</option>
									<option class="sort-flag">Израиль</option>
									<option class="sort-flag">Италия</option>
									<option class="sort-flag">Испания</option>
									<option class="sort-flag">Канада</option>
									<option class="sort-flag">Китай</option>
									<option class="sort-flag">Люксембург</option>
									<option class="sort-flag">Мексика</option>
									<option class="sort-flag">Нидерланды</option>
									<option class="sort-flag">Новая-зеландия</option>
									<option class="sort-flag">Норвегия</option>
									<option class="sort-flag">Польша</option>
									<option class="sort-flag">Португалия</option>
									<option class="sort-flag">Румыния</option>
									<option class="sort-flag">Россия</option>
									<option class="sort-flag">США</option>
									<option class="sort-flag">Украина</option>
									<option class="sort-flag">Финляндия</option>
									<option class="sort-flag">Франция</option>
									<option class="sort-flag">Чехо-словакия</option>
									<option class="sort-flag">Швеция</option>
									<option class="sort-flag">Швейцария</option>
									<option class="sort-flag">Южная-корея</option>
									<option class="sort-flag">Япония</option>
								</select>
							</div>

					</form>
	
				</div>
		
			</div>			
		</div>
	</div>
</div>

<main class="film-serials">
	<div class="container">
		<div class="row">

			<div class="col-xl-6">
				<div class="main-title" id="film-main-title">
					Фильмы <?php countFilms(); ?>:
				</div>
				<div class="films film-filter_data">

				</div>
			</div>

			<div class="col-xl-6">
				<div class="main-title" id="serial-main-title">
					Сериалы <?php countSerials(); ?>:
				</div>
				<div class="serials serial-filter_data">

				</div>
			</div>

		</div>
	</div>
</main>

<?php include('php/templates/footer.php') ?>