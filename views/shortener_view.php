<h1>URL Shortener</h1><?

if ($data->error == 1)
    echo 'Error: Invalid URL';
    
if ($data->error == 2)
    echo 'Error: URL cannot be empty!';

?><div class="inputblock">
	<h2>Please enter a URL to be shortened</h2>
	<form action="createurl.php" method="POST">
		<input type="text" type="url" name="shorten">
		<br>
		<button type="submit">Submit</button>
	</form>

<br>