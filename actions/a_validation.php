<?php

	$id = $_POST['concert_id'];
	$img_url = $_POST['img_url'];
	$name = $_POST['name'];
	$event_date = $_POST['event_date'];
	$event_time = $_POST['event_time'];
	$ticket_price = $_POST['ticket_price'];
	$website = $_POST['website'];
	$street = $_POST['street'];
	$postal_code = $_POST['postal_code'];
	$city = $_POST['city'];

	$error = false; //by default we assume that the input will be correct, ergo $error=false, however, we solely trust our validation:

	if(empty($img_url)){
		$error = true;
		$_SESSION['img_urlError'] = 'Or it won\'t attract a worm'; //each error message is stored in a seesion to be retrieved at a later state
	}
	if(empty($name)){
		$error = true;
		$_SESSION['nameError'] = 'Fatboy Slim\'s Slash Dot Dash Dot wouldn\'t be enough - rather be a Foo Fighter';
	}
	if(empty($event_date)){
		$error = true;
		$event_dateError = 'For a blind date go fire some tinder!';
	}
	if(empty($event_time)){
		$error = true;
		$event_timeError = 'No way to tell the time if YOU don\'t...';
	}
	if(empty($ticket_price)){
		$error = true;
		$ticket_priceError = 'Nothing is for free, 0 is nothing, so if it\'s free of charge it\'s at least 0';
	}
	if(empty($website)){
		$error = true;
		$_SESSION['websiteError'] = 'If you don\'t specify, it will rather lead to a tangled web site';
	}
	if(empty($street)){
		$error = true;
		$_SESSION['streetError'] = 'Whatever drives you, PoEms, though not streets, will inspire you.';
	}
	if(empty($postal_code)){
		$error = true;
		$_SESSION['postal_codeError'] = 'A person\'s postal code shouldn\'t decide their destiny';
	}
	if(empty($city)){
		$error = true;
		$_SESSION['cityError'] = 'I get you - "I would rather be amongst forest animals and the sounds of nature, than amongst city traffic and the noise of man"';
	}