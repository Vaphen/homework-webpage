<!DOCTYPE html>
<html lang="de">
	<head>
		<meta charset="utf-8">
		<title>UMP</title>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function () {	
				$(".menueItem").mouseenter(function () {
					$(this).animate({paddingTop: "+=50px"}, 150);
				});
				$(".menueItem").mouseleave(function () {
					$(this).animate({paddingTop: "-=50px"}, 150);	
				});
				$(".menueImg").mouseenter(function () {
					$(this).fadeTo("fast", 1);
					$(this).dequeue();
				});
				$(".menueImg").mouseleave(function () {
					if($(this).attr("src") != $("#switcherImage").attr("src")) {
						$(this).fadeTo("fast", 0.5);
					}
				});
				$(".menueImg").click(function () {
					var newImg =  $(this).attr("src");
					$("#switcherImage").attr("src", newImg);
					$(".menueImg").each(function() {
						if($(this).attr("src") != $("#switcherImage").attr("src")) {
							$(this).fadeTo("fast", 0.5);
						}
					});
				});
				
				$("#firstPic").click(function () {
					$("#descriptorText").text('Unter „Fächer” können neue Aufgaben zu den bereits eingetragenen Fächern hinzugefügt werden.');
				});
				
				$("#secondPic").click(function () {
					$("#descriptorText").text('Unter „Einstellungen” können neue Aufgaben hinzugefügt werden, sowie Standardprogramme wie z.B. ein PDF-Betrachter definiert werden.');
				});
				$("#thirdPic").click(function () {
					$("#descriptorText").text('Unter „Klausuren” kann man erreichte Punkte, sowie Daten an denen Klausuren geschrieben werden, eintragen.');
				});
			});
		</script>
	</head>
	<body>
		<nav>
			<ul>	
				<li>
					<a href="#" class="menueItem" id="logoMenuePoint"><img src="img/logo.png" alt="UMP-Logo" /></a>
				</li>
				<li>
					<a href="download.html" class="menueItem">Download</a>
				</li>
				<li>
					<a href="#" class="menueItem">Onlineversion</a>
				</li>
			</ul>		
		</nav>	
		<section>
			<article>
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
					<span id="description">Unter „Fächer” können neue Aufgaben zu den bereits eingetragenen Fächern hinzugefügt werden.</span>
				</div>
			</article>
		</section>
		<link rel="stylesheet" type="text/css" href="css/page.css">
	</body>
</html>