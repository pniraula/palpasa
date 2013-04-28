<style>
			#songInfoBar-wrapper{
				height: 190px;
				width: 100%;
				padding: 7px 0px 0 0px;
			}
			.songCard{
				height: 180px;
				width: 180px;
				float: left;
				background-color:#525252;
				margin-left: 10px;
			}
			#controller-wrapper{
				width: 540px;
				height: 40px;
				position:absolute;
				margin-top: 60px;
				margin-left: 300px;
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
				margin-top: 75px;
				width: 30px;
				cursor: pointer;
				z-index: 9;
			}
			.arrow-icon:active{
				opacity: 0.3;
			}
			#slidable{
				background-color: #292929;
				border: 1px solid #292929;
				border-style: inset;
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
			#station-wrapper{
				height: 300px;
				width: 200px;
				border-style: inset;
				border:none;
				border-top: 1px solid #292929;
				overflow-x: hidden;
				overflow-y: hidden;
			}
			.station{
				height: 30px;
				width: 100%;
				background-color: #525252;
				color: #aaa;
				margin-top: 1px;
				cursor: pointer;
				overflow-x: hidden;
				-webkit-box-sizing: border-box; /* Safari/Chrome, other WebKit */
				-moz-box-sizing: border-box;    /* Firefox, other Gecko */
				box-sizing: border-box;         /* Opera/IE 8+ */
				padding: 0px 10px;
				line-height: 30px;
			}
			.station:hover{
				background-color:#626262;
			}
			.station:active{
				background-color:#727272;
			}
			#advertisement{
				border-top: 2px solid #292929;
				height: 100%;
				width: 100%;
			}
</style>
