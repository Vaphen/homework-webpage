<!DOCTYPE html>
<html lang="de">
	<head>
		<meta charset="utf-8">
		<title>UMP</title>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script type="text/javascript">
			$.ajax({url: "content/index.txt", success: function(result){
        		$("article").html(result);
   		}});
   		
			$(document).ready(function () {	
				$(".menueItem").mouseenter(function () {
					$(this).animate({paddingTop: "+=50px"}, 150);
				});
				$(".menueItem").mouseleave(function () {
					$(this).animate({paddingTop: "-=50px"}, 150);	
				});
				
				$("#downloadMenueItem").click(function () {
					$.ajax({url: "content/download.txt", success: function(result){
        				$("article").html(result);
   				}});
				});
				
				$("#logoMenueItem").click(function () {
					$.ajax({url: "content/index.txt", success: function(result){
        				$("article").html(result);
   				}});
				});
    
			});
		</script>
	</head>
	<body>
		<nav>
			<ul>	
				<li>
					<noscript><a href="index.php" class="menueItem" id="logoMenueItem"><img src="img/logo.png" alt="UMP-Logo" /></a></noscript>
					<a href="#" class="menueItem" id="logoMenueItem"><img src="img/logo.png" alt="UMP-Logo" /></a>
				</li>
				<li>
					<noscript><a href="download.html" class="menueItem">Download</a></noscript>
					<a id="downloadMenueItem" class="menueItem" href="#">Download</a>
				</li>
				<li>
					<a href="#" class="menueItem">Onlineversion</a>
				</li>
			</ul>		
		</nav>	
		<section>
			<article>
				<noscript>
					<div id="picMenueBar">
						<ul>
							<li>
								<img src="img/lessons.png" class="menueImg" id="firstPic" style="opacity: 1;" />
							</li>
							<li>
								<img src="img/settings.png" class="menueImg" id="secondPic" />
							</li>
							<li>
								<img src="img/exams.png" class="menueImg" id="thirdPic" />
							</li>
						</ul>				
					</div>				
					<img src="img/lessons.png" id="switcherImage" />
					<div id="descriptorText">
						<span id="description">Unter <span id="highlight">„Fächer”</span> können neue Aufgaben zu den bereits eingetragenen Fächern hinzugefügt werden.</span>
					</div>
				</noscript>
			</article>
		</section>
		<link rel="stylesheet" type="text/css" href="css/page.css">
	</body>
</html>