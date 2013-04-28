<style>
<?php
	$dir = base_url().'assets/images/themes/'.$theme->name;
?>
body {
	margin: 0px;
	padding: 0px;
	color: #525252;
	font-family: Tahoma, Geneva, sans-serif;
	font-size: 13px;
	line-height: 1.5em; 
	background-color: #cccccc;
	background-repeat: repeat-x;
	background-position: top;
	scrollbar-arrow-color: #525252;
	scrollbar-track-color: #525252;
	scrollbar-face-color: #525252;
	scrollbar-highlight-color: #777777;
	scrollbar-3dlight-color: #525252;
	scrollbar-shadow-color: #777777;
	scrollbar-darkshadow-color: #525252;
}
::-webkit-scrollbar {
width: 15px;
height: 15px;
}


::-webkit-scrollbar-track-piece  {
background-color: #525252;
}

::-webkit-scrollbar-thumb:vertical {
height: 30px;
background-color: #777777;
}
a, a:link, a:visited { color: #06C; text-decoration: none; }
a:hover { color: #C00; text-decoration: underline; }

p { margin: 0 0 10px 0; padding: 0; }
img { border: none; }

h1, h2, h3, h4, h5, h6 { color: #000; }
h1 { font-size: 40px; font-weight: normal; margin: 0 0 30px 0; padding: 5px 0; }
h2 { font-size: 28px; font-weight: normal; margin: 0 0 30px 0; color: #d20000; font-weight: normal; }
h3 { font-size: 20px; margin: 0 0 15px 0; padding: 0; padding: 0; font-weight: normal;  }
h4 { font-size: 18px; margin: 0 0 15px 0; padding: 0; }
h5 { font-size: 16px; margin: 0 0 10px 0; padding: 0; }
h6 { font-size: 14px; margin: 0 0 5px 0; padding: 0; }

cite { font-weight: bold; color:#333; }
cite span { color: #525252; }



#wrapper {
	width: 840px;
	padding: 0px;
	margin: 0 auto;
}


/* footer */
#footer {
	width: 840px;
	font-size: 11px;
	text-align: center;
	color: #777;
	padding: 30px 0 10px 0;
	margin-top: -30px;
}

#footer a { color: #444; }


#header {
	width: 840px;
	height: 100px;
	margin-top: -10px;
	background: url(<?=$dir?>/header.jpg) no-repeat;	
	z-index: 4;
}

#header #sitetite {
	float: left;
	width: 240px;
	height: 65px;
	padding-top: 20px;
	margin-right: 80px;
	text-align: center;
}

#header #sitetite h1 {
	margin: 0;
	padding: 0;
}

#header #sitetite a {
	margin: 0px;
	padding: 0px;
	font-size: 30px;
	color: #edecec;
	font-weight: normal;
	text-decoration: none;
}

#header #sitetite a span {
	display: block;
	font-size: 12px;
	color: #edecec;
	font-weight: normal;
	margin-top: 5px;
	margin-left: 5px;
}


.content_area {
    height: 530px;
    width: 840px;
    overflow: auto;
    position: relative;
    clear: left;
    background: url(<?=$dir?>/content.jpg) repeat-y;
}

.scrollContainer div.panel {
    padding: 20px 50px;
    height: 440px;
    width: 840px;
}

ul.navigation {
	float: left;
	width: 480px;
	height: 40px;
    list-style: none;
    margin: 22px 0 0 0;
    padding: 0;
	cursor:pointer;
}

ul.navigation li {
    display: inline;
    margin-right: 10px;
}

ul.navigation a {
	float: left;
	display: block;
	width: 104px;
	height: 30px;
	padding-top: 9px;
	color: #fff;
	font-size: 14px;
	font-weight: bold;
	text-align: center;
    text-decoration: none;
}

ul.navigation a:hover, ul.navigation a.selected {
	color: #000;
}

ul.navigation a:focus {
    outline: none;
}

.scrollButtons {
    position: absolute;
    top: 300px;
    cursor: pointer;
}

.scrollButtons.left {
    left: -50px;
}

.scrollButtons.right {
    right: -50px;
}

.hide {
    display: none;
}


#left-panel{
	height: 100%;
	width: 200px;
	overflow-x: hidden;
	overflow-y: hidden;
	border-right: 1px solid #C0C0C0	;
	background-color:#525252;
}

#right-panel{
	margin-left: 200px;
	margin-top: -530px;
	height: 478px;
	width: 640px;
}
#searchBox{
	position:absolute;
	margin-top: 8px;
	left: -299px;
	color:#AAA;
	background-color: #303030;
	border: 1px solid #444444;
	border-style: inset;
	z-index: 9;
}
#searchInput{
	width: 124px;
	height: 20px;
	color:#888888;
	text-align: left;
	background-color: #494949;
	border: none;
}
input:focus{
    outline: none;
}


</style>