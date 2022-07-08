<?php
if(isset($_POST['sub'])){
	$num1=$_POST['n1'];
	$num2=$_POST['n2'];
	$oprnd=$_POST['sub'];
	if($oprnd=="+")
		$ans=$num1+$num2;
	else if($oprnd=="-")
		$ans=$num1-$num2;
	else if($oprnd=="x")
		$ans=$num1*$num2;
	else if($oprnd=="/")
		$ans=$num1/$num2;
}?>
<html>
<head>
	<title>Calculator code Weekend</title>
	<style type="text/css">
		.container
		{
			left: 25%;
			padding: 100px;
			text-align: center;
			border: 1px solid blue;
			
		}
		input, select {
  			width: 40%;
  			padding: 12px 20px;
  			margin: 8px 0;
  			display: inline-block;
  			border: 1px solid blue;
  			border-radius: 4px;
  			box-sizing: border-box;
		}
		h1{
			color: blue;
		}

		input[type=submit] {
  			width: 5%;
 		 	background-color: blue;
  			color: white;
  			padding: 14px 20px;
  			margin: 8px 0;
  			border: none;
	 	 	border-radius: 4px;
  			cursor: pointer;
}
	</style>
</head>
<body>
	<div class="container">
		<table align="center" border='1' width="100%">
<?php
$num = 10;

for($i = 1; $i <= 10; $i++)
{	
    echo "<tr>";
	
	for($j =1; $j <= $num; $j++)
	{
		$multiplication_table = ($i * $j);
		echo "<td>$j  x $i =  $multiplication_table </td>";
	}
	
	echo "<tr/>";
}

?></table><br><br>
</div>
<div class="container">
<form method="post" action="">
<h1>Calculator Code-Weekend</h1>
<br>
First Number:<br><input name="n1" value="">
<br>
Second Number:<br><input name="n2" value="">
<br>
<input type="submit" name="sub" value="+">
<input type="submit" name="sub" value="-">
<input type="submit" name="sub" value="x">
<input type="submit" name="sub" value="/">
<br>
<br>Result:<br><input type='text' value="<?php echo $ans; ?>"><br>
</form>
</div>


<div class="container">
<?php
function print_rectangle($n, $m)
{
    $i=0;
    $j=0;
    for ($i = 1; $i <= $n; $i++)
    {
        for ($j = 1; $j <= $m; $j++)
        {
            if ($i == 1 || $i == $n ||
                $j == 1 || $j == $m)        
                echo("*");        
            else
                echo("&nbsp;&nbsp;");        
        }
        echo("<br>");
    }
}
    $rows = 6;
    $columns = 20;
    print_rectangle($rows, $columns);
?>
</div>
</body>
</html>