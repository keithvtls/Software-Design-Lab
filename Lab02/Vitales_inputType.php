<html> <head> <title> Use of Input Types Form Tag in PHP </title> </head>
<body bgcolor="99ffff">
<form action="input_types.php" method="post">
<b> TextFields </b> <br>
Enter Your Name:
<input type="text" name="name"> <br>
Enter Your Age: <input type="text" name="age"> <br> <br>
<b> Checkbox </b> <br>
Have you eaten an apple? <br>
<input type="checkbox" name="choice"> Yes <br> <br>
<b> Multiple Checkboxes </b> <br>
Have you experienced: <br>
<input type="checkbox" name="choice1" value="Diving in Anilao"> Diving in Anilao? <br>
<input type="checkbox" name="choice2" value="Surfing in Siargao"> Surfing in Siargao? <br>
<input type="checkbox" name="choice3" value="Eating a cockroach"> Eating a cockroach?
<br> <br>
<b> Radio Buttons </b> <br>
Which do you prefer most? <br>
<input type="radio" name="q1" value="Microsoft"> Microsoft <br>
<input type="radio" name="q1" value="Open Source"> Open Source <br>
<input type="radio" name="q1" value="No comment"> No comment <br> <br>
<b> List Boxes </b> <br>
Which prices do you prefer most in shopping for clothings? <br>
<select name="price">
<option> Under P200 </option>
<option> P300-P500 </option>
<option> P500-P1000 </option>
<option> Over P1000 </option>
</select> <br> <br>
What size are you in Pants? <br>
<select name="pantsSize[]" multiple>
<option> Small </option>
<option> Medium </option>
<option> Large </option>
<option> Extra Large </option>
</select> <br> <br>
<b> TextArea </b> <br>
Enter comments here: <br>
<textarea name="w" cols="50" rows="5"> </textarea> <br> <br>
<input type="submit" value="See Results">
<input type="reset" value="Clear">
</form>
</body>
</html>