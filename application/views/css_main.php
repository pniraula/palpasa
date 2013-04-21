<style>
<?php
	$dir = base_url().'assets/images/themes/'.$theme->name;
?>
body {
	margin: 0px;
	padding: 0px;
	color: #666;
	font-family: Tahoma, Geneva, sans-serif;
	font-size: 13px;
	line-height: 1.5em; 
	background-color: #cccccc;
	background-repeat: repeat-x;
	background-position: top;
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
cite span { color: #666; }



#wrapper {
	width: 940px;
	padding: 10px;
	margin: 0 auto;
}

#top {
	width: 100%;
	height: 15px;
}

#contact_form form .submit_button { 
	color: #666;
	background: #FFF;
	border: 1px solid #CCC;
	padding: 8px 18px;
	font-weight: bold;
}


/* footer */
#footer {
	width: 940px;
	font-size: 11px;
	text-align: center;
	color: #777;
	background: url(<?=$dir?>/footer.jpg) top no-repeat;
	padding: 30px 0 10px 0;
}

#footer a { color: #444; }


#header {
	width: 960px;
	height: 100px;
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
    height: 480px;
    width: 940px;
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
	width: 560px;
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
	background: url('<?=$dir?>/menu_hover.jpg') no-repeat;
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
	height: 478px;
	width: 300px;
	border-right: 1px solid #C0C0C0	;
}
#right-panel{
	margin-left: 300px;
	margin-top: -478px;
	height: 478px;
	width: 640px;
}

#station-wrapper{

}
</style>