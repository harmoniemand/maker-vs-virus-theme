<!doctype html>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		{% seo %}
		{% feed_meta %}

        <link href="<?php echo get_template_directory_uri() ?>/style.css" rel="stylesheet">


		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() ?>/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri() ?>/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri() ?>/favicon-16x16.png">
		<link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri() ?>/favicon.ico" />
		<link rel="manifest" href="site.webmanifest">
		<link rel="mask-icon" href="safari-pinned-tab.svg" color="#4182e4">
		<meta name="msapplication-TileColor" content="#2d89ef">
		<meta name="theme-color" content="#ffffff">
		<meta name="google-site-verification" content="google-site-verification=xS8QJX0WlXVwL2mfyQGM-fJE5rYrc5EqonRzcwEql9k">

		{% if jekyll.environment == 'production' and site.google_analytics_key != '' %}
			<script>
				window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
				ga('create', '{{ site.google_analytics_key }}', 'auto');
				ga('send', 'pageview');
			</script>
			<script async src='https://www.google-analytics.com/analytics.js'></script>
		{% endif %}
	</head>
	<body>