<!DOCTYPE html>
<html lang="en-US">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ImageAbstractor</title>
	<link rel="stylesheet" href="style.css" type="text/css" media="all">
</head>

<body>

    <?php
		require 'vendor/autoload.php';

		use League\ColorExtractor\Color;
		use League\ColorExtractor\ColorExtractor;
		use League\ColorExtractor\Palette;

		$palette = Palette::fromFilename('./images/flags.png');
		$extractor = new ColorExtractor($palette);

		use AlistairShaw\NameTheColor\ColorMaker;

	?>

	<header class="masthead">
		<div class="site-branding">
			<h1 class="site-title">ImageAbstractor</h1>
			<p class="site-description">Pull the most dominant colors from an image.</p>
		</div><!-- .site-title -->
	</header><!-- .masthead -->

	<section class="the-grid">

		<ul class="colors">

			<?php

				$colors = $extractor->extract(15);
				//$colors = $palette->getMostUsedColors(15);
				
                //loop through array and show each color as a list item
				foreach( $colors as $color){
					$colorHex = Color::fromIntToHex($color);
					$colorObject = ColorMaker::fromHex($colorHex)->getColor();
					$colorName = $colorObject->getName();
					echo '<li style="background-color:' .  $colorHex . '">' . $colorName . '</li>';
				}


			?>

		</ul>

	</section><!-- .the-grid -->

</body>

</html>