<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="./header.css" />
		<link rel="stylesheet" href="./footer.css" />
		<link rel="stylesheet" href="./index.css" />
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
		<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
		<script src="./script.js"></script>
		<title>Инициативы Оренбурга</title>
    </head>
  
    <body onload="ClearHash(); LoadInitiatives('actual');">
	<?php include 'header.php';?>
		
		<main>
			<section class="slider" id="slider1">
				<div class="sliderSlide sliderSlideActive">
					<img src="./img/slider1.png"/>
					<div class="sliderMenu">
						<h1>Бумаге - вторая жизнь</h1>
						<div class="sliderParagraphs">
							<p>На деньги за сдачу мукулатуры мы купим саженцы деревьев и в нашем Оренбурге появится еще один красивый уголок.</p>
							<p>Присоединяйтесь к акции, приносите газеты, журналы, книги, бумагу, картон, гофрокартон и складывайте на стол.</p>
						</div>
						<div class="sliderRotate">
							<img id="imgSliderLeft" src="./img/sliderLeft.png" onclick="SliderSlideChange('slider1','left','AnimationSlideAdd1','AnimationSlideRemove1');" />
							<p>1/3</p>
							<img id="imgSliderRight" src="./img/sliderRight.png" onclick="SliderSlideChange('slider1','right','AnimationSlideAdd1','AnimationSlideRemove1');" />
						</div>
					</div>
				</div>
				<div id="slideNoOpacity">
					<img src="./img/slider2.png"/>
				</div>
				<div class="sliderSlide sliderSlideInactive">
					<img src="./img/slider2.png"/>
					<div class="sliderMenu">
						<h1>Дом моего соседа</h1>
						<div class="sliderParagraphs">
							<p>Дома есть не у всех. Видя бездомного на улице, мы отворачиваемся от него и проходим мимо.</p>
							<p>Хватит это терпеть! Хороший дом начинается с проекта! Имея за плечами более 20 лет опыта мы разработали удобные проекты.</p>
						</div>
						<div class="sliderRotate">
							<img id="imgSliderLeft" src="./img/sliderLeft.png" onclick="SliderSlideChange('slider1','left','AnimationSlideAdd1','AnimationSlideRemove1');" />
							<p>2/3</p>
							<img id="imgSliderRight" src="./img/sliderRight.png" onclick="SliderSlideChange('slider1','right','AnimationSlideAdd1','AnimationSlideRemove1');" />
						</div>
					</div>
				</div>
				<div class="sliderSlide sliderSlideInactive">
					<img src="./img/slider3.png"/>
					<div class="sliderMenu">
						<h1>Козловский. 1945</h1>
						<div class="sliderParagraphs">
							<p>Наш соотечественник, Николай Анатольевич Козловский, поет, ветеран, певец и просто душа компании тяжело заболел.</p>
							<p>Мы открываем сбор средств. Они очень помогут дедушке в этот нелегкий час. Спасибо!</p>
						</div>
						<div class="sliderRotate">
							<img id="imgSliderLeft" src="./img/sliderLeft.png" onclick="SliderSlideChange('slider1','left','AnimationSlideAdd1','AnimationSlideRemove1');" />
							<p>3/3</p>
							<img id="imgSliderRight" src="./img/sliderRight.png" onclick="SliderSlideChange('slider1','right','AnimationSlideAdd1','AnimationSlideRemove1');" />
						</div>
					</div>
				</div>
			</section>
			<div id="mainMenu">
				<h1>Инициативы</h1>
				<a id="toAddInitiative" href="./addInitiative.php">ПРЕДЛОЖИТЬ ИНИЦИАТИВУ</a>
			</div>
			<article id="article">
				
			</article>
			<button id="showMore" onclick="LoadInitiatives('actual');">Показать еще</button>
		</main>
		
	<?php include 'footer.php';?>

    </body>
</html>