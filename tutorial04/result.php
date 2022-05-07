<?php
 $principle = $_GET['principle'];
 $roi = $_GET['roi'];
 $noy = $_GET['noy']; 
 $amount =($principle * $roi * $noy) /100;
 echo "Interest Amount is:".$amount;
?> 

<html lang="en">
<head>
<style type="text/css">
body
{
 background-image: linear-gradient(#00FFFF,#0041C2);
}
</style>
</head>
</html>
