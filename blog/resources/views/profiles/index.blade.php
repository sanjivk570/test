<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
   
   	<?php 
    foreach ($profiles as $profileItem) {
    	echo 'Full Name => '.$profileItem->fullname.', Phone => '.$profileItem->phone.' Email => '.$profileItem->user->email.'   <a href="profiles/'.$profileItem->id.'" >View</a><br>';
    }
   	?>
</body>
</html>
