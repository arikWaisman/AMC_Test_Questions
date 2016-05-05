
<h1>Retrieve the current page URL:</h1>
<?php 
	
	echo $_SERVER['REQUEST_URI'];

?>

<h1>Retrieve the current page URL without the query parameter</h1>

<?php

	$url_array = explode('?', $_SERVER['REQUEST_URI'], 2);
	echo $url_array[0];

?>

<h1>Retrieve the current page URL and echo all the directory and page name separately on the page</h1>
<?php 

	$url_array = explode('?', $_SERVER['REQUEST_URI'], 2);
	$dir_array = explode('/', $url_array[0]);

	for ($i=0; $i < count($dir_array); $i++) { 
		echo $dir_array[$i].'<br>';
	}

?>

<h1>Create MYSQL DB </h1>
<p>CREATE DATABASE foo;</p>

<h1>Create MYSQL Table/Insert</h1>
<p>CREATE TABLE person (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(255) NOT NULL,
birthday VARCHAR(5) NOT NULL,
INDEX(name)
);</p>
<p>INSERT INTO person (name, birthday) VALUES ('Mary', '01-23');</p>

<h1>Create MYSQL Table/Insert Second Question</h1>
<p>CREATE TABLE travel_plans (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(255) NOT NULL,
transportation TEXT NOT NULL,
INDEX(name)
);</p>

<p>INSERT INTO travel_plans (id, name, transportation) VALUES ('100', Mary', 'car');</p>

<h1>Joining MYSQL tables third Question</h1>
<p>SELECT * FROM person, travel_plans WHERE name='Mary';</p>


