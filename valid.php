<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
<script type="text/javascript">
 function validateForm()
  {
    var a=document.forms["valid"]["fname"].value;
    var b=document.forms["valid"]["lname"].value;
    var c=document.forms["valid"]["Address"].value;
    var d=document.forms["valid"]["pincode"].value;
    var e=document.forms["valid"]["Mobileno"].value;
    var f=document.forms["valid"]["jdate"].value;
    var g=document.forms["valid"]["emailid"].value;
    var h=document.forms["valid"]["bdate"].value;
    var i=document.forms["valid"]["GENDER"].value;
    var j=document.forms["valid"]["userid"].value;
    var k=document.forms["valid"]["password"].value;
    var l=document.forms["valid"]["conpassword"].value;
if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") && (d==null || d=="") && (e==null || e=="") && (f==null || f=="") && (g==null || g=="") && (h==null || h==""
) && (i==null || i=="") && (j==null || j=="") && (k==null || k=="") && (l==null || l==""))
    {
      alert("All Field must be filled out");
      return false;
    }
    if (a==null || a=="")
    {
      alert("FIRST NAME must be filled out");
      return false;
    }
    if (b==null || b=="")
    {
      alert("LAST NAME must be filled out");
      return false;
    }
    if (c==null || c=="")
    {
      alert("ADDRESS must be filled out");
      return false;
    }
    if (d==null || d=="" || d.length!="6")
    {
      alert("PINCODE must be filled out");
      return false;
    }
    if (e==null || e=="" || e.length!="10")
    {
      alert(" Valid MOBILENO must be filled out");
      return false;
    }
    if (f==null || f=="")
    {
      alert("joining date must be filled out");
      return false;
    }
    if (g==null || g=="")
    {
      alert("EMAIL ID must be filled out");
      return false;
    }
    if (h==null || h=="")
    {
      alert("BIRTH DATE must be filled out");
      return false;
    }
    if (i==null || i=="")
    {
      alert("GMAIL must be filled out");
      return false;
    }
     if (j==null || j=="")
    {
      alert("UserID must be filled out");
      return false;
    }
      if (k==null || k=="")
    {
      alert("Password must be filled out");
      return false;
    }
     if (k!=l)
    {
      alert("Password Dosen't Matched");
      return false;
    }
  }
</script>


<style>
div.col-25 {
  font-size: 20px;
}

div.a{
   font-size: 30px;
   color: #FF0066
}

body {
 background-image: url("123.jpg");
 background-size: cover;
}
body {
  color: white;
}



* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}


input[type=password], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 30px;
  border: 2px;
  border-radius: 4px;
  cursor: pointer;
  float: center;
}


}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}


.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}




/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}


@media screen and (max-width: 300px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>

<div class="a"><center><h2><u>NEW MEMBER REGISTRATION <u></h2></center></div>

<div class="container">
  <form name="valid" action="registration.php" onsubmit="return validateForm()" method="post">

 <div class="coloum">
    <div class="col-25">
      <label for="fname">First Name</label>
    </div>


    <div class="col-25">
      <input type="text" id="fname" name="fname" placeholder="Your name..">
    </div>
  </div>


  <div class="row">
    <div class="col-25">
      <b><label for="userid">UserID</label></b>
       <label for="userid">(Use NUM,SpecialChar,Char)</label>
    </div>


    <div class="col-25">
      <input type="text" id="userid" name="userid" placeholder="UserID">
    </div>
  </div>


  <div class="coloum">
    <div class="col-25">
      <label for="lname">Last Name</label>
    </div>

    <div class="col-25">
      <input type="text" id="lname" name="lname" placeholder="Your last name..">
    </div>
  </div>


  <div class="row">
    <div class="col-25">
      <b><label for="password">Password</label></b>
      <labe2 for="password">(Size Mustbe 6)</label>
    </div>

    <div class="col-25">
      <input type="password" id="password" name="password" placeholder="Enter Password" minlength="6" required>
    </div>
  </div>

    <div class="coloum">
    <div class="col-25">
 <label for="Address">Address</label>
    </div>
	<div class="col-25">
      		<input type="text" id="Address" name="Address" placeholder="Your address..">
    	</div>
  </div>

<div class="row">
    <div class="col-25">
 <b><label for="conpassword">Confirm Password</label></b>
    </div>
	<div class="col-25">
      		<input type="password" id="conpassword" name="conpassword" placeholder="Re-Enter Password">
    	</div>
  </div>


<div class="coloum">
    <div class="col-25">
 <label for="pincode">Pin Code</label>
    </div>
	<div class="col-25">
      		<input type="text" id="pincode" name="pincode" placeholder="pincode.." minlength="6" required>
    	</div>
  </div>

  <div class="row">
    <div class="col-25">
      <b><label for="pac">PACKAGE</label></b>
         <labe2 for="pac"><br/>(GOLD is valid for a year)</label>
         <labe2 for="pac"><br/>(SILVER is valid for 6 months)</label>
         <labe2 for="pac"><br/>(GENERAL is valid for a month)</label>
    </div>
      <b><div class="col-25">
      <select id="pac" name="pac"> 
  <option value='blue' align='center' style='color:orange; font-weight:bold; text-align:center;'>Select</option>
      <option value="1200">GOLD</option>
       <option value="600">SILVER</option> 
       <option value="300">GENERAL</option>   
    </select>
   </div>
  </div>

<div class="row">
    <div class="col-25">
 <label for="mobileno">Mobile Number</label>
    </div>
	<div class="col-25">
      		<input type="text" id="Mobileno" name="Mobileno" placeholder="Your mobileno..">
    	</div>
  </div>


<div class="row">
    <div class="col-25">
 <label for="jdate">Join Date</label>
    </div>
	<div class="col-25">
      		<input type="text" id="jdate" name="jdate" placeholder="YYYY-MM-DD">
    	</div>
  </div>

<div class="row">
    <div class="col-25">
 <label for="emailid">Email</label>
    </div>
	<div class="col-25">
      		<input type="text" id="emailid" name="emailid" placeholder="Your emailid..">
    	</div>
  </div>


<div class="row">
    <div class="col-25">
 <label for="bdate">Birth Date</label>
    </div>
	<div class="col-25">
      		<input type="text" id="bdate" name="bdate" placeholder="YYYY-MM-DD">
    	</div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="GENDER">GENDER</label>
    </div>
      <b><div class="col-25">
      <select id="GENDER" name="GENDER"> 
  <option value='blue' align='center' style='color:orange; font-weight:bold; text-align:center;'>Select</option>
      <option value="MALE">MALE</option>
       <option value="FEMALE">FEMALE</option>    
    </select>
   </div>
  </div>
  
      </div> 
  <div class="row">
   <input type="submit"  value="Submit">
  </div>
  </form>
</div>

</body>
</html>