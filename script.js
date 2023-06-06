var isAnimationCompleted = true;

function SlideSetStyleDisplay(slide, style)
{
	slide.style.display = style;
}

function SlideSetAnimationName(slide, AnimationName)
{
	slide.style.animationName = AnimationName;
}

function SlideAddClass(slide, className)
{
	slide.classList.add(className);
}

function SlideRemoveClass(slide, className)
{
	slide.classList.remove(className);
}



function SliderSlideChange(sliderID, sliderDirection, AnimationAddName, AnimationRemoveName)
{
	var sliderCurrent = document.getElementById(sliderID);
	var slides = sliderCurrent.getElementsByClassName('sliderSlide');;
	
	if (isAnimationCompleted == true)
	{	
		isAnimationCompleted = false;
		for (var i = 0; i < slides.length; i++)
		{
			if (slides[i].classList.contains('sliderSlideActive'))
			{
				SlideSetAnimationName(slides[i],AnimationRemoveName);
				slides[i].classList.add('sliderSlideInactive');
				setTimeout(SlideRemoveClass, 500, slides[i], 'sliderSlideActive')
				var prevI = i;
				
				if (sliderDirection == 'left')
				{
					if (i == 0)
					{
						i = slides.length - 1;
					}
					else
					{
						i--;
					}
				}
				if (sliderDirection == 'right')
				{
					if (i == slides.length - 1)
					{
						i = 0;
					}
					else
					{
						i++;
					}
				}
				SlideSetAnimationName(slides[i],AnimationAddName);
				slides[i].classList.add('sliderSlideActive');
				slides[i].classList.remove('sliderSlideInactive');
				setTimeout(SlideSetStyleDisplay, 500, slides[prevI], 'none');
				setTimeout(() => {isAnimationCompleted = true;}, 500);
				break;
			}
		}
	}
}

function RegAuthSwitch(switchTo)
{
	var registerDiv = document.getElementById('registerDiv');
	var authDiv = document.getElementById('authDiv');
	if (switchTo == 'auth')
	{
		registerDiv.style.display = 'none';
		authDiv.style.display = 'block';
	}
	else
	{
		registerDiv.style.display = 'block';
		authDiv.style.display = 'none';
	}
}

function LoadInitiative() {
	var question = parseInt(document.location.hash.substring(1));
	$.ajax({
		url: 'loadInitiative.php',
		type: 'POST',
		data: {id: question},
		dataType: 'html',
		success: function(result) {
			$('#article').html(result);
		},
		complete: function(xhr, textStatus) {
        console.log(xhr.status);
    } 
	});
}

function LoadInitiatives(state = 'toModerate') {
	var question = parseInt(document.location.hash.substring(1));
	if (isNaN(question)) {
		var question = 0;
		document.location.hash = 0;
	}
	$.ajax({
		url: 'loadInitiatives.php',
		type: 'POST',
		data: {id: question, state: state},
		dataType: 'html',
		success: function(result) {
			var resultSplitted = result.split('*'); 
			$('#article').append(resultSplitted[0]);
			if (resultSplitted[1] != null) {
							document.location.hash = parseInt(resultSplitted[1]);
			}
			//document.location.hash = parseInt(document.location.hash.substring(1)) + 6;
		},
		complete: function(xhr, textStatus) {
        console.log(xhr.status);
    } 
	});
}

function ClearHash() {
		location.hash = "";
}

function Like(id) {
	var elem = '#likes' + id;
	$.ajax({
		url: 'like.php',
		type: 'POST',
		data: {id: id},
		dataType: 'html',
		success: function(result) {
			console.log(result);
			if (result == 'goRegister') {
				window.location.href = 'registration.php';
			}
			else if (result != 'nothing') {
								$(elem).html(result);
			}
		},
		complete: function(xhr, textStatus) {
        console.log(xhr.status);
    } 
	});
}

function OpenCloseMenu(state) {
		var closedMenu = document.getElementById('openHeaderMenuButton');
		var openedMenu = document.getElementById('headerMenuDiv');
		if (state == 'open') {
			closedMenu.style.display = 'none';
			openedMenu.style.display = 'flex';
		}
		else {
			closedMenu.style.display = 'block';
			openedMenu.style.display = 'none';
		}
}

function EditStateInitiative(state) {
	var question = parseInt(document.location.hash.substring(1));
	$.ajax({
		url: 'editStateInitiative.php',
		type: 'POST',
		data: {id: question, state: state},
		dataType: 'html',
		success: function(result) {
			if (result) {
				console.log("Успешно");
			}
		},
		complete: function(xhr, textStatus) {
        console.log(xhr.status);
    } 
	});
}


