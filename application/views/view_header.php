
<?php $baseImg = base_url().'assets/images/controls/';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="<?=base_url()?>assets/js/libraries/jquery-1.9.1.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/libraries/custom-query.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/libraries/jquery.nicescroll.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/libraries/share.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/infoBar.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/main.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/search.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/player.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/controller.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/main.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/songbar.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/bootstrap-responsive.min.css">

<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.10/themes/base/jquery-ui.css" type="text/css" media="all" />
<title>Palpasa.com</title>
</head>
<body>

<div id="wrapper">
	<div id="controller-wrapper">
		<div id="searchBox-wrapper">
			<div id="searchBox">
				<label>New Station</label>
				<input id="searchInput" type="text" autocomplete="on" value="type in artist or genre"/>
			</div>
			<div id="searchSuggestion">
				
			</div>
		</div>
		<div id="userInfo-wrapper">
			<div id="username">
				<span class="username-arrow"></span>
				<span>Prabesh Nirauladdddddddddd</span>
			</div>
			<div id="userControls">
				<div class="userControlOption" id="setting"><span class="conrollOption-arrow"></span>My Profile</div>
				<div class="userControlOption" id="setting"><span class="conrollOption-arrow"></span>Settings</div>
				<div class="userControlOption" id="setting"><span class="conrollOption-arrow"></span>Help</div>
				<div class="userControlOption" id="signOutButton">Sign out</div>
			</div>
		</div>
		<div id="music_player">
			<div id="music-controller">
				<div id="controllers-icon">
					
					<img class="controller-icon" id="previous-icon" src="<?=$baseImg?>previous.png">
					<img class="controller-icon" id="play-icon" src="<?=$baseImg?>play.png">
					<img class="controller-icon" id="forward-icon" src="<?=$baseImg?>forward.png">
					<div id="volume-cont">
						<img class="controller-icon" id="volume-icon" src="<?=$baseImg?>volume.png">
						<div id="slider"></div>
						<img class="controller-icon" id="volume-max-icon" src="<?=$baseImg?>volume.png">
					</div>
				</div>
				<div id="playing-info">
					<div id="progress">
						<div id="prog"></div>
					</div>
				</div>
			</div>					
		</div>	
	</div>
	<div id="loading">
		<div id="loading_message"></div>
		<img src="<?=base_url().'assets/images/tLoading.gif'?>"/>
	</div>
