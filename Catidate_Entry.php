
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: #04AA6D;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
    margin-top:  10px;
  margin-bottom: 0px;
  background-color: white;
  border-radius: 15px;
  align-items: center;
  justify-content: center;

}
.select{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: 2px solid #04AA6D;
  border-radius: 10px;
  background: #f1f1f1;
  outline: none;
}
.select:focus,
.select:hover{
  outline: none;
  border:3px solid #04AA6D;
}
.select option{
  background: #ffffff;
}
/* Full-width input fields */

input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: 2px solid #04AA6D;
  border-radius: 10px;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
input[type=text]:hover, input[type=password]:hover {
  outline: none;
  border:3px solid #04AA6D;
}
.upload
{
  font-size: 16px;
  background: white;
  border-radius: 50px;
  box-shadow: 5px 5px 10px black;
  width: 100%;
  outline: none;
  margin-top: 4px;
}
::-webkit-file-upload-button{
  color: white;
  background: #04AA6D;
  padding: 15px;
  border: none;
  border-radius: 50px;
  box-shadow: 1px 0 1px 1px #6b4559;
  outline: none;
}
::-webkit-file-upload-button:hover{
  background: #1d7555;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  font-size: 25px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
  border-radius: 10px;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}
p {
  color: red;
}
.dvpr  {
  color: black;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #10c482;
  text-align: center;
  margin-top: 3px;
  color: #FFFFFF;
  border-radius: 100px;
  margin-bottom: 350px;
}
</style>
</head>
<body>

<form action="fetch_cd.php" method="POST" enctype="multipart/form-data">
  <div class="container">
    <h1>Candidate Entry Election 2022-23 </h1>
    <p class="dvpr">Please fill this form to add your details with voting portal....</p>
    <hr>

    

    <label><b>Admission Number</b></label>
    <input type="text" placeholder="Enter Admission Number" name="ad_no" required>

    <label ><b>Candidate Name</b></label>
    <input type="text" placeholder="Enter Candidate Name"required name="c_name">
    <label ><b>Candidate Position....(Enter 1 for first cadidate enter 2 for second candidate and so on).This will be the cadidate positioning in voting portal</b></label>
    <input type="text" placeholder="Enter your positon"required name="cptn">
    <label><b>Class</b></label>
    <br>
    <select class="select" required name="c_class" >
      <option value="">Select Class</option>
      <option value="J1">J1</option>
      <option value="J2">J2</option>
      <option value="J3">J3</option>
      <option value="J4">J4</option>
      <option value="J5">J5</option>
      <option value="J6">J6</option>
      <option value="S1">S1</option>
      <option value="S2">S2</option>
      <option value="S3">S3</option>
      <option value="S4">S4</option>
      <option value="S5">S5</option>
      <option value="S6">S6</option>
    
    </select><br>
    <label ><b>Candidate Image</b></label><br>
    <input type="file" class="upload" name="file" required>
    <hr>

    <p>Fill the details carefully , Any mistakes here will affect your election results... </p>

    <button type="submit" name="fbtn" class="registerbtn" >Register</button>
  </div>
  
  <div class="container signin">
    <p class="dvpr">Developed by JASIR P T</p>
  </div>
</form>

</body>
</html>
