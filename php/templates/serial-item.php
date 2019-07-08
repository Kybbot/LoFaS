<div class="film">
	<div class="film-img-fllag">
		<div class="poster">
			<img src="img/serials/<?php echo $serial['photo']?>" alt="<?php echo $serial['photo']?>" >
		</div>
	</div>		
	<div class="film-info">
		<h2 class="film-title"><?php echo $serial['name']?></h2>
		<p class="film-description"><?php echo $serial['text']?></p>
		<div class="date-time">
			<div class="date"><?php echo $serial['date']?></div>
			<div class="time"><?php echo $serial['time']?></div>
		</div>
		<div class="film-tags">
			<a href="#" class="tag"><?php echo $serial['genre']?></a>
		</div>
	</div>					
</div>