<div class="film">
	<div class="film-img-fllag">
		<div class="poster">
			<img src="img/films/<?php echo $film['photo']?>" alt="<?php echo $film['photo']?>" >
		</div>
	</div>		
	<div class="film-info">
		<h2 class="film-title"><?php echo $film['name']?></h2>
		<p class="film-description"><?php echo $film['text']?></p>
		<div class="date-time">
			<div class="date"><?php echo $film['date']?></div>
			<div class="time"><?php echo $film['time']?></div>
		</div>
		<div class="film-tags">
			<a href="#" class="tag"><?php echo $film['genre']?></a>
		</div>
	</div>					
</div>