!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
</head>
<body>
	
					<td colspan="2" height="80px" align="right">		
					</td>
				</tr>
				<tr align="left" height="300px">
					<td colspan="3">
						
							<legend align="center"><h1><u>Create New User</u></h1></legend>
							<table align="center">
								<tr>
									<td><span>User Name</span> </td>
									<td><input type="text" name="username" value="" placeholder="User Name"></td>
									<td rowspan="3" align="left">
										<Table>
											<tr>
												
											</tr>
										</Table>
									</td>
								</tr>
								<tr>
									<td><span>Password</span> </td>
									<td><input type="password" name="password" value="" placeholder="Password"></td>
								</tr>
								<tr>
									<td><span>Confirm Password</span> </td>
									<td><input type="password" name="repass" value="" placeholder="Confirm Password"></td>
								</tr>
								<tr>
									<td>Date Of Birth </td>
									<td> <input type="date" name="dob" value="" > </td>
								</tr>
								<tr>
									<td><span>Gender</span></td>
									<td><input type="radio" name="gender" value="male">Male <br>
										<input type="radio" name="gender" value="female">Female <br>
										<input type="radio" name="gender" value="other">Other
									</td>	
								</tr>
								<tr>
									<td>Email</td>
									<td><input type="email" name="email" value="" placeholder="Email"></td>
								</tr>
								<tr>
									<td>Phone</td>
									<td> <input type="text" name="phone" placeholder ="Number"> </td>
								</tr>
								<tr>
									<td>Address</td>
									<td> <textarea name="address"></textarea> </td>
								</tr>
								<tr>
									<td>Type</td>
									<td><input type="radio" name="type" value="addmin">Admin
										<input type="radio" name="type" value="seller">Seller
										<input type="radio" name="type" value="customer">Customer <br>
										<input type="radio" name="type" value="member">Member
										<input type="radio" name="type" value="accountent">Accountent
									</td>	
								</tr>
								<tr>
									<td>Profile Picture</td>
									<td>
										<input type="file" name="profilePicture" >
									</td>	
								</tr>
								<tr>
									<td>___________</td>
									<td>______________________</td>
								
								</tr>
								<tr>
									<td></td>
									<td>
										<input type="submit" name="create" value="Create"> 
									</td>
								
								</tr>
							</table>
						
					</td>
				</tr>
			
				
			</table>
		</fieldset>
	</form>
</body>
</html>