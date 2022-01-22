
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Registration form</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="RegisNo.css">
  <!-- <link rel="stylesheet" type="text/css" href="cssExternal.csss"> -->
  <!-- Fav icon -->
  <link rel="shortcut icon" type="text/css" href="icon/WAQAR.jpg">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="Regis">
  <nav class="navbar navbar-expand-sm  HomeNav" style="background-color: black;">
    <a href="HomePage.php" class="navbar-brand">
      <a href="HomePage.php"> <img src="bgImage/Loginlogo.png" height="85px" width="220px"></a>
    </a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#listCollapse"
      style="background-color: #343a40;height: 40px;"><span style="color: white;"><i class="fa fa-bars"></i>Menu</span>
    </button>&nbsp &nbsp
    <div id="listCollapse" class="collapse navbar-collapse">
      <ul class="navbar-nav ml-auto" id="nav-ul">
        <li class="nav-item "> <a href="HomePage.html" class="nav-link LoginNav" id="nav-li-a"
            style="color: rgb(236, 159, 104);"><span class="RegisHome"><i class="fa fa-home"></i>
              Home</span></a> </li>
        <li class="nav-item"> <a href="LoginP.php" class="nav-link LoginNav" id="nav-li-a"
            style="color: rgb(236, 159, 104);"><span class="RegisHome"><i class="fa fa-user"></i>
              Login</span></a> </li>
        <li class="nav-item"> <a href="About us.html" class="nav-link LoginNav" id="nav-li-a"
            style="color: rgb(236, 159, 104);"><span class="RegisHome"><i class="fa fa-university"></i>
              About Us</span></a> </li>
        <li class="nav-item"> <a href="RegisNew.php" class="nav-link LoginNav" id="nav-li-a"
            style="color: rgb(236, 159, 104);"><span class="RegisHome" style="color:cornsilk;"><i
                class="fa fa-registered"></i>
              Registration</span></a> </li>
        <li class="nav-item"> <a href="Help.html" class="nav-link LoginNav" id="nav-li-a"
            style="color: rgb(236, 159, 104);">
            <span class="RegisHome"><i class="fa fa-question"></i>
              Help</span>
          </a> </li>
      </ul>
    </div>
  </nav>




  <center>
    <div class="RegisDiv" style="height:960px">
      <div class="regis">
        <h1 class="Heading">Registration Form</h1>
      </div>
      <form class="forms" onsubmit="return validation()" id="login" action="server22.php" method="post">
        <h6>UserName:</h6>
        <p> <input type="text" id="Username" name="username" size="58px"  class="input Hinput" onclick="ONClICK(this)"
            onmouseleave="onMouseLeave(this)" required> <span id="message1" style="background:yellow;border-radius:5px;"></span> <br></p>
        <h6>Email:</h6>
        <p> <input type="email" id="email" name="email" size="58px"  class="input Hinput" onclick="ONClICK(this)"
            onmouseleave="onMouseLeave(this)" required><span id="message2" style="background:yellow;border-radius:5px;"></span><br>
        </p>
        <h6>Password:</h6>
        <p><input type="password" id="password" name="password" size="58px"  class="input Hinput" onclick="ONClICK(this)"
            onmouseleave="onMouseLeave(this)" required><span id="message3" style="background:yellow;border-radius:5px;"></span><br></p>
        <h6>Confirm password:</h6>
        <p> <input type="password" id="ComPassword" name="ComPassword" size="58px" class="input Hinput"
            onclick="ONClICK(this)" onmouseleave="onMouseLeave(this)" required><span id="message4" style="background:yellow;border-radius:5px;"></span><br></p>
        <h6>Mobile Number:</h6>
        <p> <input type="phone" id="Phone" name="Phone" size="58px"  class="input Hinput" onclick="ONClICK(this)"
            onmouseleave="onMouseLeave(this)" required><span id="message5" style="background:yellow;border-radius:5px;"></span><br></p>
        <h6>Address:</h6>
        <p> <input type="text" id="Address" name="address" size="58px"  class="input Hinput" onclick="ONClICK(this)"
            onmouseleave="onMouseLeave(this)" required><br></p>

        <h6>Gender:</h6>
        <input type="radio" name="Gender" value="male" required><span> Male</span> <input type="radio" name="Gender"
          value="female" class="input" required><span>Female</span><br>
        <h6>Country:</h6>
        <select name="country" class="input Hinput" onmouseleave="onMouseLeave(this)" id="Country">
          <option selected="selected" value="Default">Country</option>
          <option value="Pakistan">Pakistan</option>
          <option value="India">India</option>
          <option value="China">China</option>
          <option value="UAE">UAE</option>33
          <option value="Bangladesh">Bangladesh</option>
        </select><span id="message7" style="background:yellow;border-radius:5px;"></span>
        <br>
        <p style="padding-top: 8px;font-size:20px;"> Already a member?<a href="loginP.php"> Login</a></p>
        <center> <input type="submit" name="submit" value="Submit" class="input" id="RBtn">&nbsp &nbsp<input
            type="reset" name="reset" value="Clear" class="input" id="RBtn"></center> <br>

      </form>
    </div>>
  </center>
  <!-------------------------------------------------Javascript implementation--------------------------------------->
  <script type="text/javascript">
    function ONClICK(ele) {
      ele.style.background = "yellow";
      ele.style.color = "black";
    }

    function onMouseLeave(ele) {
      ele.style.background = "palegreen";
    }

    function validation() {
      var letter = /^[A-Za-z ]+$/;
      var AddressValid = /^[0-9a-zA-Z]+$/;
      var PhoneValid = /^\(?([0-9]{4})\)?[-. ]?([0-9]{7})$/;
      var EmailValid = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
      var uname = document.forms["login"]["Username"].value;
      var p1 = document.forms["login"]["password"].value;
      var Email = document.forms["login"]["email"].value;
      var Address = document.forms["login"]["address"].value;
      var country = document.forms["login"]["Country"].value;
      var p2 = document.forms["login"]["ComPassword"].value;
      var phone = document.forms["login"]["Phone"].value;
      var m=0;
      if (country == "Default") {

        document.getElementById('message7').innerHTML=" **please select country";
        m=1;
      }
      if (!(Email.match(EmailValid))){
        document.getElementById('message2').innerHTML=" **sorry invalid email";
        m=1;
      }
      if ((uname.length >= 30) || (uname.length <= 4)) {
        if ((uname.length) >= 30) {
          document.getElementById('message1').innerHTML=" **Sorry username is to large";
          m=1;
        } else {
          document.getElementById('message1').innerHTML=" **Sorry username is very samll";
          m=1;
        }
      }
      if (!(uname.match(letter))) {
    
        document.getElementById('message1').innerHTML=" **username must have alphabet only";
        m=1;
      }
      if (!(phone.match(PhoneValid))) {
      
        document.getElementById('message5').innerHTML=" **Phone no is invalid.";
        m=1;
      }
      if (p1.length >= 12) {
    
        document.getElementById('message3').innerHTML=" **Password Length is to large";
        m=1;
      }
      if (p1.length <= 5) {
      
        document.getElementById('message3').innerHTML=" **Password length is small";
        m=1;
      }
      if (p2.length >= 12) {
       
        document.getElementById('message4').innerHTML=" **Password Length is to large";
        m=1;
      }
      if (p2.length <= 5) {
        
        document.getElementById('message4').innerHTML=" **Password length is small";
        m=1;
      }
      if (p1 != p2) {
  
        document.getElementById('message4').innerHTML=" **Password is not match with confirm password";
        m=1;
      }
      if(true)
      {
        if(m==1)
        {
          return false;
        }
        else{
          return true;
        }
      }
    }
  </script>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/popper.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>

</html>