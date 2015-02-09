<!DOCTYPE html>
<html>
	<head>
		<title>Testpage - homework</title>
	</head>
	<body>
		<div id="root">
			<div id="menuebar">
				<ul>
					<li>
						<a href="./index.php?pid=1">Startseite</a>					
					</li>	
					<li>
						<a href="./index.php?pid=2">Download</a>						
					</li>
				</ul>	
			</div>
			<?php
				$curPage = $_GET['pid'];
				switch($curPage) {
					case 1: $include_page = "./mainpage.html";
							  break;
					case 2: $include_page = "./download.html";
							  break;
					default: $include_page = "./mainpage.html";				
				}
				include_once($include_page);
			?>
			</div>
		<!--
		-	Add stylesheets at the end of the page that the content is loaded before the style.
		-->
		<link rel="stylesheet" href="css/index.css"></style>
	</body>
</html>