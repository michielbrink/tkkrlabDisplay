<html>
	<head>
		<meta charset="utf-8">
		<script type="text/javascript">
			<!--
			var slideNumber = 1;
				function replaceIframeURL(nm, url)
				{
				    window.frames[nm].location.replace(url);
				}
				function delayer()
				{
					++slideNumber;
					
					xmlhttp=new XMLHttpRequest();
					xmlhttp.open("HEAD", 'slides/slide' + (slideNumber+1) + '.html', true);
					xmlhttp.onreadystatechange = function()
					{
						if (xmlhttp.readyState == 4)
						{
							if (xmlhttp.status==404)
							{
								slideNumber = 0;
							}
						}
					}
					xmlhttp.send(null);

				    replaceIframeURL('myIframe', 'slides/slide' + slideNumber + '.html'); 
				    setTimeout('delayer()', 1000);
				}
			//-->
		</script>
	</head>
	<body onLoad="setTimeout('delayer()', 1000)">

		<iframe src="slides/slide1.html" scrolling="auto" allowtransparency="true" name="myIframe" style="border:0;width:100%;height:100%;background-image:url(backgrounds/black_one.jpg)"> </iframe>

	</body>

</html> 


	