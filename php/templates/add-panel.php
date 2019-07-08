<div class="add-section">
	<div class="container">
		<div class="row">
			<div class="col-xl-6">

				<p class="main-title">Добавить фильм:</p>

				<form enctype="multipart/form-data" action="index.php" class="add-film" id="film-form" method="POST">

					<fieldset class="photo-flag-point">
						<input type="hidden" name="MAX_FILE_SIZE" value="5242880">
						<input type="file" id="film-photo-input" name="user_film_file">
						<img src="" alt="" id="film-image">
						<label for="film-photo-input" class="photo-drop-zone">Загрузите или перетащите сюда фото</label>
						<div class="box">
							<select name="film_countrys">
							<option selected>Страна</option>
								<option>Австралия</option>
								<option>Австрия</option>
								<option>Беларусь</option>
								<option>Бельгия</option>
								<option>Бразилия</option>
								<option>Болгария</option>
								<option>Великобритания</option>
								<option>Венгрия</option>
								<option>Германия</option>
								<option>Греция</option>
								<option>Гонконг</option>
								<option>Дания</option>
								<option>Исландия</option>
								<option>Индия</option>
								<option>Ирландия</option>
								<option>Израиль</option>
								<option>Италия</option>
								<option>Испания</option>
								<option>Канада</option>
								<option>Китай</option>
								<option>Люксембург</option>
								<option>Мексика</option>
								<option>Нидерланды</option>
								<option>Новая-зеландия</option>
								<option>Норвегия</option>
								<option>Польша</option>
								<option>Португалия</option>
								<option>Румыния</option>
								<option>Россия</option>
								<option>США</option>
								<option>Украина</option>
								<option>Финляндия</option>
								<option>Франция</option>
								<option>Чехо-словакия</option>
								<option>Швеция</option>
								<option>Швейцария</option>
								<option>Южная-корея</option>
								<option>Япония</option>
							</select>
						</div>

						<div class="box">
							<select name="film_point">
								<option selected>Оценка</option>
								<option>5</option>
								<option>4</option>
								<option>3</option>
								<option>2</option>
								<option>1</option>
							</select>
						</div> 
					</fieldset>
					
					<fieldset class="name-date-time-tag">
						<input type="text" class="film-name" placeholder="Название фильма" id="film-name-input" name="film_name">
						<textarea name="film_text" class="film-description-input" cols="" rows="" placeholder="Введите описание" id="film-description-input"></textarea>
						<div class="box">
							<select class="lg" name="film_date">
								<option selected>Год</option>
								<option>2018</option>
								<option>2017</option>
								<option>2016</option>
								<option>2015</option>
								<option>2014</option>
								<option>2013</option>
								<option>2012</option>
								<option>2011</option>
								<option>2010</option>
								<option>2009</option>
								<option>2008</option>
								<option>2007</option>
								<option>2006</option>
								<option>2005</option>
							</select>
						</div>

						<div class="box">
							<select class="lg" name="film_time">
								<option selected>Время</option>
								<option>2+ часа</option>
								<option>2 часа</option>
								<option>1:30+ часа</option>
								<option>1:30 часа</option>
								<option>1 час</option>
							</select>
						</div>

						<div class="box">
							<select class="lg" name="film_genre">
								<option selected>Жанры</option>
								<option>Арт-хаус</option>
								<option>Биографические</option>
								<option>Боевики</option>
								<option>Вестерн</option>
								<option>Военные</option>
								<option>Детективы</option>
								<option>Документальные</option>
								<option>Драмы</option>
								<option>Исторические</option>
								<option>Комедии</option>
								<option>Короткометражные</option>
								<option>Криминал</option>
								<option>Мелодрамы</option>
								<option>Мюзиклы</option>
								<option>Научно-популярные</option>
								<option>Постапокалиптика</option>
								<option>Приключения</option>
								<option>Семейные</option>
								<option>Спортивные</option>
								<option>Триллеры</option>
								<option>Ужасы</option>
								<option>Фантастика</option>
								<option>Фэнтези</option>
							</select>
						</div>

						<div class="film-buttons">
							<input type="submit" value="Добавить" name="film-submit" class="add-button" id="add-button-film">
							<input type="reset" class="reset-button">
						</div>
					</fieldset>
					
				</form>

			</div>
			<div class="col-xl-6">

				<p class="main-title">Добавить сериал:</p>

				<form enctype="multipart/form-data" action="index.php" class="add-series" id="series-form" method="POST">

					<fieldset class="photo-flag-point">
						<input type="hidden" name="MAX_FILE_SIZE" value="5242880">
						<input type="file" id="series-photo-input" name="user_serial_file">
						<img src="" alt="" id="series-image">
						<label for="series-photo-input" class="series-drop-zone">Загрузите или перетащите сюда фото</label>
						<div class="box">
							<select name="serial_countrys">
								<option selected>Страна</option>
								<option>Австралия</option>
								<option>Австрия</option>
								<option>Беларусь</option>
								<option>Бельгия</option>
								<option>Бразилия</option>
								<option>Болгария</option>
								<option>Великобритания</option>
								<option>Венгрия</option>
								<option>Германия</option>
								<option>Греция</option>
								<option>Гонконг</option>
								<option>Дания</option>
								<option>Исландия</option>
								<option>Индия</option>
								<option>Ирландия</option>
								<option>Израиль</option>
								<option>Италия</option>
								<option>Испания</option>
								<option>Канада</option>
								<option>Китай</option>
								<option>Люксембург</option>
								<option>Мексика</option>
								<option>Нидерланды</option>
								<option>Новая-зеландия</option>
								<option>Норвегия</option>
								<option>Польша</option>
								<option>Португалия</option>
								<option>Румыния</option>
								<option>Россия</option>
								<option>США</option>
								<option>Украина</option>
								<option>Финляндия</option>
								<option>Франция</option>
								<option>Чехо-словакия</option>
								<option>Швеция</option>
								<option>Швейцария</option>
								<option>Южная-корея</option>
								<option>Япония</option>
							</select>
						</div>

						<div class="box">
							<select name="serial_point">
								<option selected>Оценка</option>
								<option>5</option>
								<option>4</option>
								<option>3</option>
								<option>2</option>
								<option>1</option>
							</select>
						</div>
					</fieldset>
					
					<fieldset class="name-date-time-tag">
						<input type="text" class="series-name" placeholder="Название сериала" id="series-name-input" name="serial_name">
						<textarea name="serial_text" class="series-description-input" cols="" rows="" placeholder="Введите описание" id="series-description-input"></textarea>
						<div class="box">
							<select class="lg" name="serial_date">
								<option selected>Год</option>
								<option>2018</option>
								<option>2017</option>
								<option>2016</option>
								<option>2015</option>
								<option>2014</option>
								<option>2013</option>
								<option>2012</option>
								<option>2011</option>
								<option>2010</option>
								<option>2009</option>
								<option>2008</option>
								<option>2007</option>
								<option>2006</option>
								<option>2005</option>
							</select>
						</div>
	
							<div class="box">
								<select class="lg" name="serial_time">
									<option selected>Время</option>
									<option>1 час</option>
									<option>50 мин</option>
									<option>40 мин</option>
									<option>30 мин</option>
									<option>20 мин</option>
								</select>
							</div>

							<div class="box">
								<select class="lg" name="serial_genre">
									<option selected>Жанры</option>
									<option>Арт-хаус</option>
									<option>Биографические</option>
									<option>Боевики</option>
									<option>Вестерн</option>
									<option>Военные</option>
									<option>Детективы</option>
									<option>Документальные</option>
									<option>Драмы</option>
									<option>Исторические</option>
									<option>Комедии</option>
									<option>Короткометражные</option>
									<option>Криминал</option>
									<option>Мелодрамы</option>
									<option>Мюзиклы</option>
									<option>Научно-популярные</option>
									<option>Постапокалиптика</option>
									<option>Приключения</option>
									<option>Семейные</option>
									<option>Спортивные</option>
									<option>Триллеры</option>
									<option>Ужасы</option>
									<option>Фантастика</option>
									<option>Фэнтези</option>
								</select>
							</div>

						<div class="series-buttons">
							<input type="submit" value="Добавить" name="serial-submit" class="add-button" id="add-button-series">
							<input type="reset" class="reset-button">
						</fieldset>

					</div>

				</form>

			</div>
		</div>
	</div>
</div>

<script>

document.getElementById("film-photo-input").onchange = function () {
		var reader = new FileReader();
			
		reader.onload = function (e) {
			// get loaded data and render thumbnail.
			document.getElementById("film-image").src = e.target.result;
			document.querySelector('.photo-drop-zone').innerHTML = '';
		};
			
		// read the image file as a data URL.
		reader.readAsDataURL(this.files[0]);
	};

	document.getElementById("series-photo-input").onchange = function () {
	var reader = new FileReader();
		
	reader.onload = function (e) {
		// get loaded data and render thumbnail.
		document.getElementById("series-image").src = e.target.result;
		document.querySelector('.series-drop-zone').innerHTML = '';
	};
		
	// read the image file as a data URL.
	reader.readAsDataURL(this.files[0]);
	};

</script>