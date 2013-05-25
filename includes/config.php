<?php 

	//bdd
	$link=mysql_connect( "localhost","root","");
	mysql_select_db('social');
	
	//assignation des pages/templates
	$pages =array 
	(
		'enter' => 'enter',
		'connect' => 'connect',
		'activate' => 'activate',
		'home' => 'home',
		'profile' => 'profile',
		'explore' => 'explore',
		'invitation' => 'invitation',
		'policy' => 'policy',
		'status' => 'status',
		'pm' => 'pm',
		'friends' => 'friends',
		'register' => 'register',
		'upload' => 'upload',
		'gallery' => 'gallery',
		'galleryFriends' => 'galleryFriends',
		'pmSend' => 'pmSend',
		'pmRead' => 'pmRead',
		'pmDelete' => 'pmDelete'
	);

	//assignation des actions
	$actions =array 
	(
		'connect' => 'connect',
		'activate' => 'activate',
		'register' => 'register',
		'upload' => 'upload',
		'gallery' => 'gallery',
		'add' => 'add',
		'invite' => 'invite',
		'friends' => 'friends',
		'deco' => 'deco'
	);

?>