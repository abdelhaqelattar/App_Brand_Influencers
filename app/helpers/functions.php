<?php

function show($stuff)
{
	echo "<pre>";
	print_r($stuff);
	echo "</pre>";
}

function loadController($controller, $function, $args = [])
{
	$filename = APP_FOLDER . "app/controllers/" . $controller . ".php";
	require_once $filename;

	$controller = new $controller;
	call_user_func_array([$controller, $function], $args);
}

function issued_date($start_date, $duration, $duration_unit)
{
	// $start_date = '2023-04-10'; // Replace this with your start_datetime value from the database
	// $duration = 7; // Replace this with your duration value from the database
	// $duration_unit = 'day'; // Replace this with your duration_unit value from the database

	// Create a new DateTime object with the start date
	$issued_date = new DateTime($start_date);

	// Add the duration to the issued date based on the duration unit
	$issued_date->modify("+{$duration} " . strtolower($duration_unit) . "s");

	// Format the issued date as a string
	return $issued_date->format('Y-m-d');
}

function compare_date($date_string, $date_string2)
{
	$date = new DateTime($date_string); // Create a DateTime object with the date string
	$date2 = new DateTime($date_string2); // Create a DateTime object with the date string

	$diff = $date->diff($date2);

	if ($diff->invert) {
		return -1;
	} else if ($diff->days === 0) {
		return 0;
	} else {
		return 1;
	}
}

function getTimeDiff($created_at)
{
	$created_at = new DateTime($created_at, new DateTimeZone('UTC'));
	$now = new DateTime('now', new DateTimeZone('UTC'));
	$interval = $created_at->diff($now);

	if ($interval->y > 0) {
		return $interval->format('%y years ago');
	} elseif ($interval->m > 0) {
		return $created_at->format('d M');
	} elseif ($interval->d > 1) {
		return $interval->format('%d days ago');
	} elseif ($interval->d == 1) {
		return 'Yesterday';
	} elseif ($interval->h > 0) {
		return $interval->format('%h hours ago');
	} elseif ($interval->i > 0) {
		return $interval->format('%i Min ago');
	} else {
		return 'Today';
	}
}
