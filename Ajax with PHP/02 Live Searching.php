
<html>
<head>

	<title>Live searching using ajax with php</title>
	
	<script>
			function perform(){
				if(window.XMLHttpRequest){
					xmlhttp=new XMLHttpRequest();
				}
				else{
					xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
				}
				
				xmlhttp.onreadystatechange=function(){
					if(xmlhttp.readyState==4 && xmlhttp.status==200){
						document.getElementById('display').innerHTML=xmlhttp.responseText;
					}
				}
				
				xmlhttp.open('GET','02.1search_Operation.php?stext='+document.search.stext.value, true);
				xmlhttp.send();
				
			}
	</script>
	
	</head>
<body>

		<form name="search">
				<input type="text" name="stext" onkeyup="perform();">
		</form>
		
		<div id="display"></div>
	
</body>
</html>