<!DOCTYPE html>
<html>
<head>
	<title>Contact Form</title>
</head>
<body>
<form method="post" action="Display.php" >
<!-- Title -->
<label for="title">Title <span>*</span></label> 
<select name="title">
  <option value="Mr">Mr</option>
  <option value="Mrs">Mrs</option>
  <option value="Ms">Ms</option>
</select>
<br><br>
<!-- First Name -->
<label for="fname">First Name <span>*</span></label> 
<input type="text" id="fname" name="fname" required><br><br>
<!-- Last Name -->
<label for="lname">Last Name <span>*</span></label> 
<input type="text" id="lname" name="lname" required><br><br>
<!-- Date Of Birth -->
<label for="date">Date of birth:</label>
<input type="date" id="date" name="date"><br><br>
<!-- Telephone Number -->
<label for="Tel num ">Telephone number <span>*</span></label> 
<input type="tel" id="Tel_num" name="Tel num" pattern="[0-9]{10}" required><br><br>

<!-- File Upload -->
<label for="fileToUpload">File Upload: </label>
<input type="file"name="fileToUpload" accept=".pdf, image/jpeg, image/png" ><br><br>
<!-- Email -->
<label for="email">Enter your email: <span>*</span></label>
<input type="email" id="email" name="email" required><br><br>
<!-- Message -->
<label for="message">Message:</label><br>
<textarea id="message" name="message" maxlength="300" ></textarea><br><br>

<!-- Submit Button -->
<input type="submit" value="submit" name="submit" >


</form>
</body>
</html>