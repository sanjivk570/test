</!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
   <?php foreach ($orders as $key => $value) {
   	//print_r($value);

   	 echo $value->amout."=> ".$value->customer->name."<br>";
   } ?>
</body>
</html>