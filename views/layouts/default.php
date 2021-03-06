<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="apple-touch-icon" sizes="180x180" href="/img/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/img/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/img/favicon-16x16.png">
		<link rel="manifest" href="/manifest.json">

		<title><?= $titlePrefix ?> | URL-Shortener, by Skayo</title>

		<link rel="stylesheet" href="/css/site.css">
		<link rel="stylesheet" href="/css/background.css">

		<script defer src="/js/uikit.min.js"></script>
		<script defer src="/js/uikit-icons.min.js"></script>
		<?php $this->yield('scripts') ?>

		<script async defer data-domain="l.skayo.dev" src="https://analytics.skayo.dev/js/plausible.js"></script>
	</head>
	<body class="login uk-cover-container uk-background-secondary uk-flex uk-flex-center uk-flex-middle uk-height-viewport uk-overflow-hidden uk-light" uk-height-viewport>
		<div class="uk-position-cover uk-overlay-primary"></div>

		<div class="<?= isset($largeWidth) && $largeWidth ? 'uk-width-xxlarge' : 'uk-width-large' ?> uk-padding-small uk-position-z-index uk-animation-fade">
			<?php $this->yield('content') ?>
		</div>
	</body>
</html>