function controlTextText() {
	textText = document.getElementById('textTextControl');
	textPreview = document.getElementById('textPreview');
	textPreview.innerHTML = textText.value;
	localStorage.setItem('textText', textText.value);
}

function controlTextSize() {
	textSize = document.getElementById('textSizeControl');
	textPreview = document.getElementById('textPreview');
	textPreview.style.fontSize = textSize.value;
	localStorage.setItem('textSize', textSize.value);
}

function controlTextColour() {
	textColour = document.getElementById('textColourControl');
	textPreview = document.getElementById('textPreview');
	textPreview.style.color = textColour.value;
	localStorage.setItem('textColour', textColour.value);
}

function controlTextFont() {
	textFont = document.getElementById('textFontControl');
	textPreview = document.getElementById('textPreview');
	textPreview.style.fontFamily = textFont.value;
	localStorage.setItem('textFont', textFont.value);
}

function controlBorderWidth() {
	borderWidth = document.getElementById('borderWidthControl');
	buttonBackground = document.getElementById('buttonBackground');
	buttonBackground.style.borderWidth = borderWidth.value;
	localStorage.setItem('borderWidth', borderWidth.value);
}
 
function controlBorderColour() { 
	borderColour = document.getElementById('borderColourControl');
	buttonBackground = document.getElementById('buttonBackground');
	buttonBackground.style.borderColor = borderColour.value;
	localStorage.setItem('borderColour', borderColour.value);
}

function controlBackgroundStyle() {
	backgroundStyle = document.getElementById('backgroundStyleControl');
	buttonBackground = document.getElementById('buttonBackground');
	localStorage.setItem('backgroundStyle', backgroundStyle.value);
	
	if(backgroundStyle.value == 'solid') {
		document.getElementById('backgroundSolidOptions').style.display = 'block';
		document.getElementById('backgroundGradientOptions').style.display = 'none';
		document.getElementById('backgroundImageOptions').style.display = 'none';
		
		buttonBackground.style.backgroundColor = document.getElementById('backgroundColourControl').value;
		buttonBackground.style.backgroundImage = 'none';
		localStorage.setItem('backgroundColour', document.getElementById('backgroundColourControl').value);
	}
	
	if(backgroundStyle.value == 'gradient') {
		document.getElementById('backgroundSolidOptions').style.display = 'none';
		document.getElementById('backgroundGradientOptions').style.display = 'block';
		document.getElementById('backgroundImageOptions').style.display = 'none';	
		
		backgroundColour1 = document.getElementById('backgroundColour1Control').value;
		backgroundColour2 = document.getElementById('backgroundColour2Control').value;
		backgroundGradient = document.getElementById('backgroundGradientControl').value;
		
		if(backgroundGradient == 'horizontal') {
			buttonBackground.style.backgroundImage = 'linear-gradient(180deg, ' + backgroundColour1 + ', ' + backgroundColour2 + ')';	
		}
		
		if(backgroundGradient == 'vertical') {
			buttonBackground.style.backgroundImage = 'linear-gradient(90deg, ' + backgroundColour1 + ', ' + backgroundColour2 + ')';	
		}
		
		if(backgroundGradient == 'radial') {
			buttonBackground.style.backgroundImage = 'radial-gradient(' + backgroundColour1 + ', ' + backgroundColour2 + ')';
		}
		
		localStorage.setItem('backgroundColour1', backgroundColour1);
		localStorage.setItem('backgroundColour2', backgroundColour2);
		localStorage.setItem('backgroundGradient', backgroundGradient);
	}
	
	if(backgroundStyle.value == 'image') {
		document.getElementById('backgroundSolidOptions').style.display = 'none';
		document.getElementById('backgroundGradientOptions').style.display = 'none';
		document.getElementById('backgroundImageOptions').style.display = 'block';
		
		if(document.getElementById('backgroundImageControl').files.length != 0) {
			buttonBackground.style.backgroundColor = 'transparent';
			buttonBackground.style.backgroundImage = 'none';
			files = document.getElementById('backgroundImageControl').files;
			
			// FileReader support
			if (FileReader && files && files.length) {
				var fr = new FileReader();
				fr.onload = function () {
					document.getElementById('buttonBackground').style.backgroundImage = "url(" + fr.result + ")";
				}
				fr.readAsDataURL(files[0]);
			}
		}
		
		localStorage.setItem('backgroundStyle', 'solid');
	}
} 

function controlIconType(fa = null, md = null) {
	iconType = document.getElementById('iconTypeControl');
	buttonIcon = document.getElementById('buttonIcon');
	buttonIconInner = document.getElementById('buttonIconInner');
	iconSize = document.getElementById('iconSizeControl');
	iconPosition = document.getElementById('iconPositionControl');
	iconColour = document.getElementById('iconColourControl');
	iconText = document.getElementById('iconTextControl');
	
	localStorage.setItem('iconType', iconType.value);
	localStorage.setItem('iconSize', iconSize.value);
	localStorage.setItem('iconPosition', iconPosition.value);
	localStorage.setItem('iconColour', iconColour.value); 
	localStorage.setItem('iconText', iconText.value);
	
	if(fa) {
		localStorage.setItem('iconFa', fa.dataset.iconUrl);
	}
	
	if(md) {
		localStorage.setItem('iconMd', md.dataset.iconUrl);
	}
	
	if(iconPosition.value == 'inline') {
		buttonIcon.style.position = 'relative';
		buttonIcon.style.height = iconSize.value;
	}
	
	if(iconPosition.value == 'behind') {
		buttonIcon.style.position = 'absolute';
		buttonIcon.style.height = '100%';
	}
	
	if(iconType.value == 'none') {
		let hideIconOptions = document.querySelectorAll('.charIconOptions, .faIconOptions, .uploadIconOptions, .mdIconOptions');
		hideIconOptions.forEach((option) => {
			option.style.display = 'none'
		});
		buttonIcon.style.display = 'none';
	}
	
	if(iconType.value == 'fa') {
		let hideIconOptions = document.querySelectorAll('.charIconOptions, .uploadIconOptions, .mdIconOptions');
		hideIconOptions.forEach((option) => {
			option.style.display = 'none'
		});
		
		let showIconOptions = document.querySelectorAll('.faIconOptions');
		showIconOptions.forEach((option) => {
			option.style.display = 'block'
		});
		
		document.querySelector('#iconPicker-fa').style.display = 'flex';
		buttonIcon.style.display = 'flex';
		buttonIconInner.style.fontSize = iconSize.value;
		buttonIconInner.style.height = iconSize.value;
		
		var fileName = localStorage.getItem('iconFa');
		
		buttonIconInner.innerHTML = `<i class="${fileName}"></i>`;
		document.querySelector('#buttonIconInner i').style.fontSize = iconSize.value;
		buttonIconInner.style.color = iconColour.value;
	}
	
	if(iconType.value == 'md') {
		let hideIconOptions = document.querySelectorAll('.charIconOptions, .uploadIconOptions, .faIconOptions');
		hideIconOptions.forEach((option) => {
			option.style.display = 'none'
		});
		
		let showIconOptions = document.querySelectorAll('.mdIconOptions');
		showIconOptions.forEach((option) => {
			option.style.display = 'block'
		});
		
		document.querySelector('#iconPicker-md').style.display = 'flex';
		buttonIcon.style.display = 'flex';
		buttonIconInner.style.fontSize = iconSize.value;
		buttonIconInner.style.height = iconSize.value;
		var fileName = localStorage.getItem('iconMd');
		
		buttonIconInner.innerHTML = `<span class="material-symbols-outlined">${fileName}</span>`;
		document.querySelector('#buttonIconInner span').style.fontSize = iconSize.value;
		buttonIconInner.style.color = iconColour.value;
	}
	
	if(iconType.value == 'char') {
		let hideIconOptions = document.querySelectorAll('.faIconOptions, .uploadIconOptions, .mdIconOptions');
		hideIconOptions.forEach((option) => {
			option.style.display = 'none'
		});
		
		let showIconOptions = document.querySelectorAll('.charIconOptions');
		showIconOptions.forEach((option) => {
			option.style.display = 'block'
		});
		
		buttonIconInner.style.fontSize = iconSize.value;
		buttonIconInner.style.color = iconColour.value;
		buttonIcon.style.display = 'flex';
		buttonIconInner.innerHTML = `<div class="char-text">${iconText.value}</div>`;
	}
	
	if(iconType.value == 'upload') {
		let hideIconOptions = document.querySelectorAll('.faIconOptions, .charIconOptions');
		hideIconOptions.forEach((option) => {
			option.style.display = 'none'
		});
		
		let showIconOptions = document.querySelectorAll('.uploadIconOptions');
		showIconOptions.forEach((option) => {
			option.style.display = 'block'
		});
		
		buttonIcon.style.display = 'flex';
		buttonIconInner.style.height = iconSize.value;
		
		if(document.getElementById('iconUploadControl').files.length != 0) {
			files = document.getElementById('iconUploadControl').files;
			
			// FileReader support
			if (FileReader && files && files.length) {
				var fr = new FileReader();
				fr.onload = function () {
					buttonIconInner.innerHTML = '<img src="' + fr.result + '">';	
				}
				fr.readAsDataURL(files[0]);
			}
		}
	}
} 

function controlOverlay() {
	overlay = document.getElementById('overlayControl');
	buttonOverlay = document.getElementById('buttonOverlay');
	buttonOverlay.src = 'assets/overlays/' + overlay.value;
	localStorage.setItem('overlay', overlay.value);
}

function controlTextShadow() {
	textShadow = document.getElementById('textShadowControl').value;
	buttonText = document.getElementById('textPreview');

	if(textShadow == 'none') {
		buttonText.style.textShadow = 'none';
	}

	if(textShadow == 'shadow') {
		buttonText.style.textShadow = '.025em .025em .05em rgba(0,0,0,0.25)';
	}

	localStorage.setItem('textShadow', textShadow);
}

function iconSearch(elem) {
	var query = elem.value;
	var hits = document.querySelectorAll(`#iconPicker-fa .icon[data-search*='${query}'], #iconPicker-md  .icon[data-search*='${query}']`);
	var icons = document.querySelectorAll(`#iconPicker-fa .icon, #iconPicker-md .icon`);
	
	if(query) {
		icons.forEach((icon) => {
			icon.style.display = 'none';
		});
		
		hits.forEach((hit) => {
			hit.style.display = 'grid';
		});
	} else {
		icons.forEach((icon) => {
			icon.style.display = 'grid';
		});
	} 
}

function init() {
	const controls = [
		'textText',
		'textSize',
		'textColour',
		'textFont',
		'borderWidth',
		'borderColour',
		'backgroundStyle',
		'backgroundColour',
		'backgroundColour1',
		'backgroundColour2',
		'backgroundGradient',
		'overlay',
		'textShadow',
		'iconSize',
		'iconPosition',
		'iconColour',
		'iconText',
		'iconType'
	];
	
	if(!localStorage.getItem('iconFa')) {
		localStorage.setItem('iconFa', 'fa-regular fa-face-smile-beam');
	}
	
	if(!localStorage.getItem('iconMd')) {
		localStorage.setItem('iconMd', 'sentiment_very_satisfied');
	}
	
	controls.forEach(function(item, index, arr) {
		if(localStorage.getItem(item)) {
			document.getElementById(item + 'Control').value = localStorage.getItem(item);
		}	
	});
	
	controlTextText();
	controlTextColour();	
	controlTextFont();
	controlTextSize();
	controlBorderWidth();
	controlBorderColour();
	controlBackgroundStyle();
	controlOverlay();
	controlTextShadow();
	controlIconType();

	const defaultChoices = document.querySelectorAll('[default-choices]');
	defaultChoices.forEach(function(currentValue) {
		new Choices(currentValue, {
			searchEnabled: false,
			shouldSort: false,
			allowHTML: true
		});
	});
	
	const searchChoices = document.querySelectorAll('[search-choices]');
	searchChoices.forEach(function(currentValue) {
		new Choices(currentValue, {
			searchEnabled: true,
			allowHTML: true
		});
	});

	document.getElementById('textFontControl').addEventListener('showDropdown', function() {
		const fontChoices = document.querySelectorAll('[id^=choices--textFontControl-item-choice]');
		fontChoices.forEach(function(currentValue) {
			currentValue.style.fontFamily = currentValue.getAttribute('data-value');	
		});
	}, false); 
	
	document.getElementById('textFontControl').addEventListener('search', function() {
		const fontChoices = document.querySelectorAll('[id^=choices--textFontControl-item-choice]');
		fontChoices.forEach(function(currentValue) {
			currentValue.style.fontFamily = currentValue.getAttribute('data-value');	
		});
	}, false); 
	
	console.log('Initialised');
}

document.getElementById("download").addEventListener("click", function() {
htmlToImage.toPng(document.getElementById('preview-button'), { quality: 1, height: 244, width: 244 })
.then(function (dataUrl) {
	var link = document.createElement('a');
	link.download = document.getElementById('textTextControl').value + '.png';
	link.href = dataUrl;
	link.click();
});
});



function saveAs(uri, filename) {
	var link = document.createElement('a');
	if (typeof link.download === 'string') {
		link.href = uri;
		link.download = filename;
		//Firefox requires the link to be in the body
		document.body.appendChild(link);
		//simulate click
		link.click();
		//remove the link when done
		document.body.removeChild(link);
	} else {
		window.open(uri);
	}
}

function getBase64(file) {
   var reader = new FileReader();
   reader.readAsDataURL(file);
   reader.onload = function () {
   };
   reader.onerror = function (error) {
	 console.log('Error: ', error);
   };
}