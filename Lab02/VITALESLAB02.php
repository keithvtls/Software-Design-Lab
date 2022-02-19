<html>
<head>
    <title>User Registration | PHP</title>
</head>
<body>
    <table align="center" width="70%">
		<tr align="center">
			<td colspan='2'><u>Register now while seats are available!</u></td>
		</tr>
		<tr>
			<td><label for="f_name"><b>First Name*</b></label>
			<td><input type="text" id="f_name" name="f_name" required="true"></td>
		
		
		<td>
			<table width="80%" align="center">
				<tr>
					<td colspan='2'><u>Lunch</u></td>
					
				<tr/>
					<td><label for="meal"><b>Meal Preference</b></label>
					<th align="left"><select name="state">
					<option> Vegetarian </option>
					<option> Low Calorie </option>
					<option> Seafood </option>
					<option> Nonlactose </option>
					</select></th>

			</table>

		
		<tr>
			
			<td><label for="l_name"><b>Last Name*</b></label>
			<td><input type="text" id="l_name" name="l_name" required="true"></td>
		
		
		<td>
			<table width="80%" align="center">
				<tr>
					<td colspan='2'><u>Payment Details</u></td>
					
				<tr/>
					<td><label for="payment"><b>Payment Mode</b></label>
					<td><input type="checkbox" name="choice1" value="Cash"> Cash <br></td>
					<td><td><input type="checkbox" name="choice2" value="Cheque"> Cheque<br></td></td>
					<td><input type="checkbox" name="choice3" value="Demand Draft"> Demand Draft</td>
					
				<td>
			</table>
			
		<tr>
			
			<td><label for="company"><b>Company/Institution*</b></label>
			<td><input type="text" id="company" name="company" required="true"></td>
		
		
		<td>
			<table width="80%" align="center">
				<tr>
					<td colspan='2'> </td>
					
				<tr/>
					<td><label for="cheque_no"><b>DD/Cheque No.</b></label>
					<th>
					<input type="cheque" id="cheque_no name="cheque_no" >
					</th>
				<td>
			</table>
			
		
		<tr>
			
			<td><label for="address"><b>Address*</b></label>
			<td><textarea name="w" cols="25" rows="5" required="true"> </textarea></td>
			
			
		<td>
			<table width="80%" align="center">
				<tr>
					<td colspan='2'> </td>
					
				<tr/>
					<td><label for="DrawnOn"><b>Drawn On (Bank Name)</b></label>
					<td><input type="BankName" id="DrawnOn" name="DrawnOn"></td>
				<td>
			</table>
			
		<tr>
			
			<td><label for="city"><b>City</b></label>
			<td><input type="text" id="city" name="city"></td>
			
		<td>
			<table width="80%" align="center">
				<tr>
					<td colspan='2'> </td>
					
				<tr/>
					<td><label for="pay"><b>Payable at</b></label>
					<th><th><th><th><th><th><th><th><th><th><th>
					<input type="Payable" id="pay" name="pay">
					</th></th></th></th></th></th></th></th>
				
			</table>
		
		<tr>
			
			<td><label for="state"><b>State/Province/Region</b></label>
			<td><select name="state">
			<option> -Select- </option>
			<option> National Capital Region (NCR) </option>
			<option> CALABARZON </option>
			<option> Bicol Region </option>
			<option> Soccsksargen </option>
			</select></td>
			
			
		<td>
			
			
		<tr>
			
			<td><label for="county"><b>Country</b></label>
			<td><select name="Country">
			<option> -Select- </option>
			<option> Philippines </option>
			</select></td>
			
		<td>
			
			
		<tr>
			
			<td><label for="email"><b>Email*</b></label>
			<td><input type="text" id="email" name="email" required="true"></td>
			
		<td>
			
			
		<tr>
			
			<td><label for="PhoneNumber"><b>Phone Number*</b></label>
			<td><input type="text" id="PhoneNumber" name="PhoneNumber" required="true"></td>
			
		<td>
			
			
	</table>
</body>
</html>