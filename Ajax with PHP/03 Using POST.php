
<html>
<head>
	<title>Ajax with PHP</title>
	
	<script>
			function perform(){
				if(window.XMLHttpRequest){
					xmlhttp=new XMLHttpRequest();
				}
				else{
					xmlhttp=new ActiveXObject('Microsoft.XMLHTTP');
				}
				
				xmlhttp.onreadystatechange=function(){
					if(xmlhttp.readyState==4 && xmlhttp.status==200){
						document.getElementById('print').innerHTML=xmlhttp.responseText;
					}
				}
				
				data='text='+document.getElementById('text').value;
				
				xmlhttp.open('POST','03.1 post.php',true);
				xmlhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');
				xmlhttp.send(data);
				
			}
	
	</script>
	
	
</head>
<body>
	
		<input type="text" id="text"><br>
		<input type="submit" value="submit" onclick="perform();">
		
		<div id="print"></div>
		
</body>
</html>