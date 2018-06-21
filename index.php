<?php 

require "vendor/autoload.php";

$qrcode = new Zxing\QrReader('images/1.jpg');

$text = $qrcode->text(); //return decoded text from QR Code

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-xs-12">
		
		<div class="well">
		<?php echo $text; ?>
		</div>
		
		<iframe src="<?php echo $text; ?>" frameborder="0" style="width:100%; height:80vh;" ></iframe>

		</div>		
</div>	
</div>	
</body>
</html>