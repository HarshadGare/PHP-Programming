
<html>
<head>
	<title>Ajax with php</title>
	<script type="text/javascript">
		function load(){
			if(window.XMLHttpRequest){ 
				 xmlhttp = new XMLHttpRequest();
			}
			else{
				xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
			} 
			
			xmlhttp.onreadystatechange = function(){
				if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
					document.getElementById("div1").innerHTML = xmlhttp.responseText;
				}
			}
			
			xmlhttp.open('GET' , '01.1include.php' , true);
			xmlhttp.send();
			
		}
	
	</script>
	
	 
</head>
<body>
	
	<input type="submit" value="click" onclick="load();">
	
	<div id="div1"></div>
</body>
</html>