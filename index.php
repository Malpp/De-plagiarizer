<html lang="en">

	<head>
	
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<meta charset="utf-8"/>
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	
	</head>

	<body>
		
		<div class="container-fluid col-xs-8 col-xs-offset-2">
		
			<div class="row text-center">
			
				<h1>De-plagiarizer</h1>
			
			</div>
			
			<div class="row" style="margin-top:50px;">
			
				<div class="col-xs-6">
					
					<p class="text-center">Plagiarized text</p>
					
					<textarea id="good" class="form-control" rows="20" style="resize:none;" onchange="clean()"></textarea>
					
				</div>
				
				<div class="col-xs-6">
				
					<p class="text-center">De-plagiarized text</p>
				
					<textarea id="bad" class="form-control" rows="20" style="resize:none;"></textarea>
				
				</div>
			
			</div>
			
			<div class="row text-center" style="margin-top:50px;">
			
				<p>If you want to try it yourself, go to <a href="http://smallseotools.com/plagiarism-checker/" target='_blank'>http://smallseotools.com/plagiarism-checker/</a> and take the sample text.</p>
			
			</div>
			
		</div>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	
	<script>
	
	function clean(){
		
		$.get( "clean.php", { t: btoa(unescape(encodeURIComponent(document.getElementById("good").value))) } ).done(function( data ) {
			
			document.getElementById("bad").value = data;
			
		});
		
	}
	
	
	</script>
	
	</body>
	
</html>