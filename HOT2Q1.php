<html>
<body>
<head>
<style>
body
{
	margin:0 auto;
	width:800px;
}
table
{
	border-style:ridge;
    border-color:Blue;
	padding:10px 10px 10px 10px;
	width:800px;
}
</style>
</head>
<?php include 'HOT2header.html'; ?>
<table>
<form action="HOT2Q2.php" method="post">

<tr> 
<td>Name:</td> 
<td> <input type="text" name="name">(max 10 characters a-z and A-Z) </td> 
</tr>
<tr> 
<td>Title: </td> <td>
<select name= "title">
<option> Professor </option>
<option> Dr </option>
<option> Mr </option>
<option> Ms </option>
</select>
</td> 
</tr>

<tr> 
<td>Position: </td> <td> <input name="position" type = "radio" value =
"Participant"> Participant
<input name="position" type = "radio" value = "Presenter"> Presenter </td> 
</tr>

<tr> 
<td>How do you know about us? : </td>
 <td>
<select name= "how[]" multiple id="how[]">
<option> Internet </option>
<option> Email </option>
<option> Friends </option>
<option> Others </option>
</select>
</td> 
</tr>

<tr> 
<td>Please rate your overall satisfaction with the conference. </td>
</tr>

<tr>
<td>Overall Conference :</td>
<td> <input name="conference" type = "radio" value =
"1-Dissatisfied"> 1-Dissatisfied
<input name="conference" type = "radio" value = "2-Satisfied"> 2-Satisfied </td> 
</tr>

<tr>
<td>Meeting Rooms:</td>
<td> <input name="room" type = "radio" value =
"1-Dissatisfied"> 1-Dissatisfied
<input name="room" type = "radio" value = "2-Satisfied"> 2-Satisfied </td> 
</tr>

<tr>
<td>Date and Time of the Conference:</td>
<td> <input name="date" type = "radio" value =
"1-Dissatisfied"> 1-Dissatisfied
<input name="date" type = "radio" value = "2-Satisfied"> 2-Satisfied </td> 
</tr>

<tr> <td colspan="2"> <input type="submit" value="Submit"> </td> </tr>

</form>
</table>
</body>
</html> 
