
<?php $baseImg = base_url().'assets/images/controls/';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="<?=base_url()?>assets/js/libraries/jquery-1.9.1.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/libraries/custom-query.js"></script>
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/index.css">
<title>Palpasa.com</title>
</head>
<body>
	<div id="wrapper">
		<div id="index_container">
			<div id="left-pane">
				<div id="logo">
					<img class="controller-icon" id="previous-icon" src="<?=base_url()?>/assets/images/logo.png">
				</div>
				<div id="sign_in">
					<label class="gen-label">Sign In</label>
					<div class="input-wrap" id="username-wrap">
						<label class="inputLabel">Username</label>
						<input class="inputBox" id="usernameInput" type="text" autocomplete="on" value=""/>
					</div>
					<div class="input-wrap" id="password-wrap">
						<label class="inputLabel">Password</label>
						<input class="inputBox" id="passwordInput" type="text" autocomplete="on" value=""/>
					</div>
					<div id="botton-wrap">
						<label class="index-link">forgot your password?</label><button id="sign-in" class="index-button">Sign In</button>
					</div>
				</div>
				<div id="sign_up">
					<label class="gen-label">Sign Up</label>
					<div class="input-wrap" id="username-wrap">
						<label class="inputLabel">First Name</label>
						<input class="inputBox" id="firstName" type="text" autocomplete="on" value=""/>
					</div>
					<div class="input-wrap" id="username-wrap">
						<label class="inputLabel">Last Name</label>
						<input class="inputBox" id="lastName" type="text" autocomplete="on" value=""/>
					</div>
					<div class="input-wrap" id="password-wrap">
						<label class="inputLabel">Email Id</label>
						<input class="inputBox" id="emailId" type="text" autocomplete="on" value=""/>
					</div>
					<div class="input-wrap" id="password-wrap">
						<label class="inputLabel">Password</label>
						<input class="inputBox" id="passwordInput" type="text" autocomplete="on" value=""/>
					</div>
					<div class="input-wrap" id="password-wrap">
						<label class="inputLabel">Re-Password</label>
						<input class="inputBox" id="re-passwordInput" type="text" autocomplete="on" value=""/>
					</div>
					<div id="botton-wrap">
						<button class="index-button" id="clear">clear</button><button id="sign-up" class="index-button">Sign Up</button>
					</div>
				</div>
			</div>
			<div id="right-pane">
				<h1>Listen to free Nepali Music</h1>
				<div id="radio-cont">
					<img id="radio" src="<?=base_url()?>/assets/images/radio.png">
				</div>
				<div id="information">
					<table>
						<tr>
							<td><img class="info-ico" src="<?=base_url()?>/assets/images/free.png"/></td>
							<td>No money, no problem. Palpasa is free and always will be free.</td>
						</tr>
						<tr>
							<td><img class="info-ico" src="<?=base_url()?>/assets/images/unlimited.png"/></td>
							<td>Get instant access to thousands of Nepali songs, lyrics and videos.</td>
						</tr>
						<tr>
							<td><img class="info-ico" src="<?=base_url()?>/assets/images/personalize.png"/></td>
							<td>Creating unlimited stations and personalizing them is easy.</td>
						</tr>
						<tr>
							<td><img class="info-ico" src="<?=base_url()?>/assets/images/likedislike.png"/></td>
							<td>Like/dislike songs for better experience.</td>
						</tr>
						<tr>
							<td><img class="info-ico" src="<?=base_url()?>/assets/images/share.png"/></td>
							<td>Share music with your friends and family.</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
