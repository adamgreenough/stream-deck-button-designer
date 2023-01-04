<!doctype html>
<html lang="en" class="pattern-checks-md">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Stream Deck Button Designer</title>

	<meta name="author" content="Addy Codes">
	<meta name="description" content="Button designer for Elgato Stream Deck, design your own custom buttons with FontAwesome/Material Design icons or upload your own!">

	<meta property="og:title" content="Stream Deck Button Designer">
	<meta property="og:description" content="Button designer for Elgato Stream Deck, design your own custom buttons with FontAwesome/Material Design icons or upload your own!">
	<meta property="og:image" content="/card.png">
	<meta property="og:site_name" content="Addy Codes">
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:image:alt" content="image description">

	<meta name="theme-color" content="#4285f4">	
	<link rel="icon" type="image/png" href="/favicon.png">
	<link rel="apple-touch-icon" href="/favicon.png">
	
	<link href="css/style.css" rel="stylesheet">
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css" crossorigin="anonymous" >
	<script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js" crossorigin="anonymous" ></script>
	<link href="https://unpkg.com/pattern.css" rel="stylesheet" crossorigin="anonymous" >
	<script src="https://kit.fontawesome.com/c4310f19a6.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,600,0,200" crossorigin="anonymous" />
	
	<!-- Matomo -->
	<script>
	  var _paq = window._paq = window._paq || [];
	  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
	  _paq.push(['trackPageView']);
	  _paq.push(['enableLinkTracking']);
	  (function() {
		var u="//reporting.adgr.dev/";
		_paq.push(['setTrackerUrl', u+'matomo.php']);
		_paq.push(['setSiteId', '18']);
		var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
		g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
	  })();
	</script>
	<!-- End Matomo Code -->
</head>
<body>
	<header>
		<div class="wrapper">
			<h1>Stream Deck <strong>Button Designer</strong></h1>
		</div>
	</header>
	
	<main>
		<section id="controls">
			<div class="controls-tabs">
			<details open>
				<summary>Text <i class="fa-solid fa-font"></i></summary>
				<article>
					<label for="textTextControl">Text <i class="fa-solid fa-pencil"></i></label>
					<input id="textTextControl" type="text" oninput="controlTextText()" value="My Button">
					
					<label for="textFontControl">Font <i class="fa-solid fa-font"></i></label>
					<select id="textFontControl" search-choices onchange="controlTextFont()">
						<!-- Web safe -->
						<option value="Arial">Arial</option>
						<option value="Verdana">Verdana</option>
						<option value="Tahoma">Tahoma</option>
						<option value="Trebuchet MS">Trebuchet MS</option>
						<option value="Courier New">Courier New</option>
						<option value="Garamond">Garamond</option>
						<option value="Georgia">Georgia</option>
						<option value="Comic Sans MS">Comic Sans MS</option> 
						<option value="Brush Script MT">Brush Script MT</option>
						<option value="Impact">Impact</option>
						<!-- Custom -->
						<option value="Mona Sans" selected>Mona Sans</option>
						<option value="Hubot Sans">Hubot Sans</option>
						<option value="Bangers">Bangers</option>
						<option value="Bebas Neue">Bebas Neue</option>
						<option value="Lobster">Lobster</option>
						<option value="Montserrat">Montserrat</option>
						<option value="Pacifico">Pacifico</option>
						<option value="Permanent Marker">Permanent Marker</option>
						<option value="Righteous">Righteous</option>
						<option value="Roboto">Roboto</option>
						<option value="Sue Ellen Francisco">Sue Ellen Francisco</option>
					</select>
					
					<label for="textSizeControl">Text Size <i class="fa-solid fa-text-height"></i></label>
					<select id="textSizeControl" default-choices onchange="controlTextSize()">
						<option value="22px">Smol</option>
						<option value="32px">Small</option>
						<option value="41px" selected>Medium</option>
						<option value="52px">Large</option>
						<option value="84px">Lorge</option>
					</select>
					
					<label for="textColourControl">Text Colour <i class="fa-solid fa-palette"></i></label>
					<input id="textColourControl" type="color" value="#ffffff" oninput="controlTextColour()">
				</article>
			</details>
			
			<details>
				<summary>Icon <i class="fa-solid fa-icons"></i></summary>
				<article>
					<label for="iconTypeControl">Icon Type <i class="fa-regular fa-circle"></i></label>
					<select id="iconTypeControl" default-choices onchange="controlIconType()">
						<option value="none">No Icon</option>
						<option value="md" selected>Material Design (2,115 icons)</option>
						<option value="fa">FontAwesome (2,022 icons)</option>
						<option value="char">Character/Emoji</option>
						<option value="upload">Upload</option>
					</select>
					
					<div class="charIconOptions">
						<label for="iconTextControl">Icon Character <i class="fa-solid fa-pencil"></i></label>
						<input id="iconTextControl" type="text" oninput="controlIconType()" value="😄" maxlength="2">
					</div>
					
					<div class="charIconOptions uploadIconOptions faIconOptions mdIconOptions">
						<label for="iconSizeControl">Icon Size <i class="fa-solid fa-text-height"></i></label>
						<select id="iconSizeControl" default-choices onchange="controlIconType()">
							<option value="60px">Smol</option>
							<option value="90px">Small</option>
							<option value="120px">Medium</option>
							<option value="150px" selected>Large</option>
							<option value="190px">Lorge</option>
						</select>
					</div>
					
					<div class="charIconOptions uploadIconOptions faIconOptions mdIconOptions">
						<label for="iconPositionControl">Icon Position <i class="fa-solid fa-align-justify"></i></label>
						<select id="iconPositionControl" default-choices  onchange="controlIconType()">
							<option value="inline" selected>Inline</option>
							<option value="behind">Behind</option>
						</select>
					</div>
					
					<div class="charIconOptions faIconOptions mdIconOptions">
						<label for="iconColourControl">Icon Colour <i class="fa-solid fa-palette"></i></label>
						<input id="iconColourControl" type="color" value="#ff9ef2" oninput="controlIconType()">
					</div>
					
					<div class="uploadIconOptions">
						<label for="iconUploadControl">Select Icon (.png/.svg/.gif)<i class="fa-solid fa-camera"></i></label>
						
						<input type="file" id="iconUploadControl" accept="image/png, image/jpeg, image/svg, image/gif" onchange="controlIconType()">
						<a href="https://toolkit.addy.codes/tag/icons/" target="_blank" style="font-size: 0.8rem; color: lightblue; margin-top: 0.5rem; display: block;">Discover more icons on my Toolkit!</a> 
					</div>
				</article>
				
				<div id="iconPicker-fa" class="faIconOptions">
					<input type="search" placeholder="Search FontAwesome" oninput="iconSearch(this)">
					
					<?php
						$dir = new DirectoryIterator(dirname(__DIR__ . '/assets/icons/fa-brands/index.html'));
						foreach ($dir as $fileinfo) {
							if (!$fileinfo->isDot()) {
								$fileFull = $fileinfo->getFilename();
								$fileName = str_replace('.svg', '', $fileinfo->getFilename());
								$fileTitle = str_replace('_', ' ', $fileName);
								$fileHyphen = str_replace('_', '-', $fileName);
								
								echo '<i data-search="' . $fileName . ' ' . $fileTitle . ' ' . $fileHyphen .'" class="icon fab fa-'. $fileTitle . '" data-icon-url="fa-brands fa-'. $fileTitle . '" onclick="controlIconType(this)"></i>';
							}
						}
						
						$dir = new DirectoryIterator(dirname(__DIR__ . '/assets/icons/fa-regular/index.html'));
						foreach ($dir as $fileinfo) {
							if (!$fileinfo->isDot()) {
								$fileFull = $fileinfo->getFilename();
								$fileName = str_replace('.svg', '', $fileinfo->getFilename());
								$fileTitle = str_replace('_', ' ', $fileName);
								$fileHyphen = str_replace('_', '-', $fileName);
								
								echo '<i data-search="' . $fileName . ' ' . $fileTitle . ' ' . $fileHyphen .'" class="icon far fa-'. str_replace('.svg', '', $fileinfo->getFilename()) . '" data-icon-url="fa-regular fa-'. $fileTitle . '" onclick="controlIconType(this)"></i>';
							}
						}
						
						$dir = new DirectoryIterator(dirname(__DIR__ . '/assets/icons/fa-solid/index.html'));
						foreach ($dir as $fileinfo) {
							if (!$fileinfo->isDot()) {
								$fileFull = $fileinfo->getFilename();
								$fileName = str_replace('.svg', '', $fileinfo->getFilename());
								$fileTitle = str_replace('_', ' ', $fileName);
								$fileHyphen = str_replace('_', '-', $fileName);
								
								echo '<i data-search="' . $fileName . ' ' . $fileTitle . ' ' . $fileHyphen .'" class="icon fas fa-'. str_replace('.svg', '', $fileinfo->getFilename()) . '" data-icon-url="fa-solid fa-'. $fileTitle . '" onclick="controlIconType(this)"></i>';
							}
						}
					?>
				</div>
				
				<div id="iconPicker-md" class="mdIconOptions">
					<input type="search" placeholder="Search Material Design" oninput="iconSearch(this)">
					<p>For more broad search results, try <a href="https://fonts.google.com/icons" target="_blank" rel="noopener">searching on the MD site</a> then search here with icon name.</p>
					
					<?php
						$dir = new DirectoryIterator(dirname(__DIR__ . '/assets/icons/md/index.html'));
						foreach ($dir as $fileinfo) {
							if (!$fileinfo->isDot()) {
								$fileFull = $fileinfo->getFilename();
								$fileName = str_replace('.svg', '', $fileinfo->getFilename());
								$fileTitle = str_replace('_', ' ', $fileName);
								$fileHyphen = str_replace('_', '-', $fileName);
								
								echo '<span data-search="' . $fileName . ' ' . $fileTitle . ' ' . $fileHyphen .'" class="icon material-symbols-outlined" data-icon-url="' . $fileName . '" onclick="controlIconType(null, this)">' . $fileName . '</span>';
							}
						}
					?>
				</div>
			</details>
			
			<details>
				<summary>Background <i class="fa-solid fa-image"></i></summary>
				<article>
					<label for="backgroundStyleControl">Background Style <i class="fa-solid fa-paint-roller"></i></label>
					<select id="backgroundStyleControl" default-choices onchange="controlBackgroundStyle()">
						<!-- Web safe -->
						<option value="solid" selected>Solid Colour</option>
						<option value="gradient">Gradient</option>
						<option value="image">Image</option>
					</select>
					
					<div id="backgroundSolidOptions">
						<label for="backgroundColourControl">Background Colour <i class="fa-solid fa-palette"></i></label>
						<input id="backgroundColourControl" type="color" value="#94008F" oninput="controlBackgroundStyle()">
					</div>
					
					<div id="backgroundGradientOptions">
						<label for="backgroundGradientControl">Gradient Style <i class="fa-solid fa-lines-leaning"></i></label>
						<select id="backgroundGradientControl" default-choices onchange="controlBackgroundStyle()">
							<!-- Web safe -->
							<option value="horizontal" selected>Horizontal</option>
							<option value="vertical">Vertical</option>
							<option value="radial">Radial</option>
						</select>
						
						<label for="backgroundColour1Control">Colour 1 <i class="fa-solid fa-palette"></i></label>
						<input id="backgroundColour1Control" type="color" value="#94008F" oninput="controlBackgroundStyle()">
						
						<label for="backgroundColour2Control">Colour 2 <i class="fa-solid fa-palette"></i></label>
						<input id="backgroundColour2Control" type="color" value="#000000" oninput="controlBackgroundStyle()">
					</div>
					
					<div id="backgroundImageOptions">
						<label for="backgroundImageControl">Select Image (.png/.jpeg/.svg/.gif)<i class="fa-solid fa-camera"></i></label>
						
						<input type="file" id="backgroundImageControl" accept="image/png, image/jpeg, image/svg, image/gif" onchange="controlBackgroundStyle()">
					</div>
				</article>
			</details>
			
			<details>
				<summary>Border <i class="fa-regular fa-square"></i></summary>
				<article>
					<label for="borderWidthControl">Border Width <i class="fas fa-expand-alt"></i></label>
					<select id="borderWidthControl" default-choices onchange="controlBorderWidth()">
						<!-- Web safe -->
						<option value="0px" selected>None</option>
						<option value="4px">Small</option>
						<option value="8px">Medium</option>
						<option value="14px">Thick</option>
					</select>
					
					<label for="borderColourControl">Border Colour <i class="fa-solid fa-palette"></i></label>
					<input id="borderColourControl" type="color" value="#ffffff" oninput="controlBorderColour()">
				</article>
			</details>
			
			<details>
				<summary>Extras <i class="fa-solid fa-spray-can-sparkles"></i></summary> 
				<article>
					<label for="overlayControl">Overlay <i class="fa-solid fa-paint-roller"></i></label>
					<select id="overlayControl" default-choices onchange="controlOverlay()">
						<option value="none.png" selected>None</option>
						<option value="gloss-over.png">Gloss</option>
					</select>
					
					<label for="textShadowControl">Text Shadow <i class="fa-solid fa-highlighter"></i></label>
					<select id="textShadowControl" default-choices onchange="controlTextShadow()">
						<option value="none">None</option>
						<option value="shadow" selected>Drop Shadow</option>
					</select>
				</article>
			</details>
			</div>
			<button id="download">Download Button</button>
		</section>
		
		<section id="preview">
			<div class="preview-dots pattern-diagonal-stripes-sm"></div>
			<div id="preview-button-container">
				<div id="preview-button">
					<div id="buttonBackground"></div>
					<div id="buttonIcon">
						<div id="buttonIconInner"></div>
					</div>
					<div id="textPreview">My Button</div>
					<img id="buttonOverlay" src="assets/overlays/none.png">
				</div> 
			</div>
		</section> 
	</main>
	<script src="js/html2canvas.min.js"></script>
	<script src="js/script.js?v=2"></script>
	<script>init();</script>
	<link href="https://fonts.googleapis.com/css2?family=Bangers&family=Bebas+Neue&family=Lobster&family=Montserrat:wght@700&family=Pacifico&family=Permanent+Marker&family=Righteous&family=Roboto:wght@700&family=Sue+Ellen+Francisco&display=swap" rel="stylesheet" crossorigin="anonymous" >
	
	<script data-name="BMC-Widget" data-cfasync="false" src="https://cdnjs.buymeacoffee.com/1.0.0/widget.prod.min.js" data-id="addycodes" data-description="Support me on Buy me a coffee!" data-message="Hope this helps jazz up your deck! If you've found this helpful, please consider a tip to fund more development. Thank you!" data-color="#FF813F" data-position="Right" data-x_margin="18" data-y_margin="18"></script>
</body>
</html>