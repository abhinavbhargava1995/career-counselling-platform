<?php
if(isset($_POST['submit'])){
	$conn = mysqli_connect("localhost","root","","temp");//update server,dbuser,dbpass,dbname
	$name = $_POST['name'];
	$age = $_POST['age'];
	$email = $_POST['email'];
	$class = $_POST['class'];
	$interest = $_POST['interest'];
	$description = $_POST['description'];
	$query = "insert into form values(0,'".$name."',".$age.",'".$email."','".$class."','".$interest."','".$description."')";
	mysqli_query($conn,$query) or die(mysqli_error($conn));
}
?>
<!Doctype html>
<html>
	<head>
		<title>Query</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<!--My custom stylesheet -->
	<link rel="stylesheet" href="index.html">	
    <!--My custom stylesheet -->
    <link rel="stylesheet" href="index.html">    
    <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/secondarystyle.css">
  <link rel="stylesheet" href="secondary.html">
  <link rel="stylesheet" href="css/seniorsecondarystyle.css">
  <link rel="stylesheet" href="seniorsecondary.html">
  <link rel="stylesheet" href="sss.html">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="
		anonymous"></script>
	</head>
	<body>
        <!--HEADER STARTS HERE-->    
    <header class="row header-container">   
        <div class="col-md-2 col-xs-12 menu-bar">
            <div class="dropdown">
              <button class="dropbtn"><img src="http://www.symbols.com/gi.php?type=1&id=3005"></button>
              <div class="dropdown-content">
               <a href="index.html">Home</a>
               <a href="index.html#about">About</a>
               <a href="secondary.html">Secondary</a>
               <a href="seniorsecondary.html">Senior Secondary</a>
               <a href="index.html#contact">Contact Us</a>
               <a href="query.php">Any Query?</a>               
             </div>
            </div>
        </div>
        <div class="col-md-8 col-xs-12 logo-text">
          Career Counselling
        </div>
        <div class="col-md-2 col-xs-12 logo-img">
            <img src="http://zoondy.com/blog/wp-content/uploads/2013/07/careerpath.jpg">
        </div>
    <hr>    
    </header>   
    <!-- HEADER ENDS HERE -->
     <section class="row about-container section-container" id="about">
      <div class="row">
        <div class="col-md-6 col-md-offset-3 col-xs-10 col-xs-offset-1 section-heading">Any Query???</div>
      </div>
      <div class="row">
        <div class="col-md-2 col-md-offset-5 col-xs-8 col-xs-offset-2">
      </div>
    </section>
  </br>
</br>
    <form id="contactForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <fieldset>                      
                    <p>
                        <label for="S_Name" >Student Name</label>
                        <input name="name"  id="name" type="text" class="form-poshytip" title="Enter your full name" />
                    </p>
                    <p>
                        <label for="S_Age" >Student Age</label>
                        <input name="age"  id="email" type="text" class="form-poshytip" title="Enter your email address" />
                    </p>
                    <p>
                        <label for="email_id">Email ID</label>
                        <input name="email"  id="web" type="text" class="form-poshytip" title="Enter your website" />
                    </p>
                    <p>
                        <label for="Present_Class">Present Class</label>
                        <input  name="class"  id="comments" type="text" class="form-poshytip" title="Enter your comments" />
                    </p>
                    <p>
                        <label for="Area_of_Interest">Area of Interest</label>
                        <textarea  name="interest"  id="comments" rows="3" cols="20" class="form-poshytip" title="Enter your comments"></textarea>
                    </p>
                    <p>
                        <label for="Description_or_Query">Description or Query</label>
                        <textarea  name="description"  id="comments" rows="4" cols="20" class="form-poshytip" title="Enter your comments"></textarea>
                    </p>
                    <input type="submit" name="submit" value="Submit">
                </fieldset>
            </form>
            <script>
function myFunction() {
    alert("I am an alert box!");
}
</script>
<style>
form{
    text-align: center;
}
p{
    color: #890916;
    font-size: 17px;
}
</style>         
</body>
</html>