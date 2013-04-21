<style>
			#songInfoBar-wrapper{
				height: 150px;
				width: 100%;
				background-color:<?=$theme->bgColor->songInfoBar?>;
				padding: 7px 0px 0 0px;
			}
			.songCard{
				height: 140px;
				width: 180px;
				float: left;
				background-color:<?=$theme->bgColor->songCard?>;
				margin-left: 10px;
			}
			#controller-wrapper{
				width: 640px;
				height: 40px;
				position:absolute;
				margin-top: 76px;
				margin-left: 300px;
				background-color: <?=$theme->bgColor->controllerWrapper?>;
				z-index: 8;
			}
			#songInfoBar-wrapper:hover #left-arrow .arrow-icon{
				display: block;
			}
			#songInfoBar-wrapper:hover #right-arrow .arrow-icon{
				display: block;
			}
			#left-arrow{
				float: left;
				position: relative;
				width: 30px;
				height: 140px;	
				z-index: 9;
			}
			#right-arrow{
				float: right;
				position: relative;
				width: 30px;
				height: 140px;
				z-index: 9;
			}
			.arrow-icon{
				position: relative;
				display:none;
				margin-top: 50px;
				width: 30px;
				cursor: pointer;
				z-index: 9;
			}
			.arrow-icon:active{
				opacity: 0.3;
			}
			#songCard-wrapper{
				margin: auto; 
				text-align: center; 
				position: relative;
				margin-bottom: 20px !important;
				z-index: 5;
			}
			.scrolls{
				overflow-x: hidden;
				overflow-y: hidden;
				
			}
			.scrollDiv{	
				margin: 0;
    			height: 100%;
			}
</style>
