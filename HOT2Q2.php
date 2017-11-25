<html>
<body>
<head>
<style>
body
{
	margin:0 auto;
	width:800px;
}
p
{	
	font-style:italic;
	color: steelblue;	
}
</style>
</head>
<?php include 'HOT2header.html'; ?>

<center>
<table>
<form>
<p><?php echo "Thank you ".$_POST["title"]."".$_POST["name"].", for your comments!"?></p>
<tr>
<td> Name Length</td> 
<td>: <?php echo strlen($_POST["name"]);?> </td> 
</tr>

<tr>
<td> Postion </td> 
<td>: <?php echo ($_POST["position"]);?> </td> 
</tr>

<tr>
<td> How do you know about us </td> 
<td>:
<?php 
foreach ($_POST['how'] as $what)
{
	echo $what,"<br>";
}
?> </td> 
</tr>

<tr>
<td> Overall Conference </td> 
<td>: <?php echo ($_POST["conference"]);?> </td> 
</tr>

<tr>
<td> Meeting Room </td> 
<td>: <?php echo ($_POST["room"]);?> </td> 
</tr>

<tr>
<td> Date and Time of the Conference </td> 
<td>: <?php echo ($_POST["date"]);?> </td> 
</tr>

</form>
</table>
</center>
</body>
</html>


