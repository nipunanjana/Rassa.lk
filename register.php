
<!DOCTYPE HTML>
<html>
<head>
<title>Rassa.lk</title>
<link rel="icon" type="image/x-icon" href="images/logo2.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<!----font-Awesome----->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!----font-Awesome----->
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
	<div class="container">
	    <div class="navbar-header">
	        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
	        </button>
	        <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt=""/></a>
	    </div>
	    <!--/.navbar-header-->
	    <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
	        <ul class="nav navbar-nav">
				<li><a href="index.php">Jobs</a></li>
		        <li><a href="services.php">Services</a></li>
		        <li><a href="https://recruitme.lk/jobs-in-sri-lanka">Recruiters</a></li>
		        <li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">More<b class="caret"></b></a>
		            <ul class="dropdown-menu">
						<li><a href="features.php">Features</a></li>
			            <li><a href="terms.php">Terms of use</a></li>
						<li><a href="contact.php">Contact Us</a></li>
			            <li><a href="about.php">About Us</a></li>
		            </ul>
		        </li>
		        <li><a href="login.php">Login</a></li>
		        <li><a href="postjob.php">Post Job</a></li>
	        </ul>
	    </div>
	    <div class="clearfix"> </div>
	  </div>
	    <!--/.navbar-collapse-->
	</nav>
	
<div class="container">
    <div class="single">  
	   <div class="form-container">
        <h2>Register Form</h2>
        <form>
          <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="firstName">First Name</label>
                <div class="col-md-9">
                    <input type="text" path="firstName" id="firstName" class="form-control input-sm"/>
                </div>
            </div>
         </div>
         <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="lastName">Last Name</label>
                <div class="col-md-9">
                    <input type="text" path="lastName" id="lastName" class="form-control input-sm"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="lastName">Mobile Number</label>
                <div class="col-md-9">
                    <input type="text" path="lastName" id="lastName" class="form-control input-sm"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="sex">Sex</label>
                <div class="col-md-9" class="form-control input-sm">
                    <div class="radios">
				        <input type="radio" id="male" name="fav_language" value="male">
						<label for="php">Male</label><br>
						<input type="radio" id="female" name="fav_language" value="female">
					<label for="css">Female</label><br>
				        </label>
	                </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="dob">Date of birth</label>
                <div class="col-md-9">
                    <input type="date" data-date-inline-picker="true" path="dob" id="dob" class="form-control input-sm"/><!-- date of birth edited -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="email">Email</label>
                <div class="col-md-9">
                    <input type="text" path="email" id="email" class="form-control input-sm"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="district">District</label>
                <div class="col-md-9">
                    <select path="district" id="district" class="form-control input-sm">
                        <option value="">Select district</option>
                        <option value="">Ampara</option>
                        <option value="">Anuradhapura</option>
                        <option value="">Badulla</option>
                        <option value="">Batticaloa</option>
                        <option value="">Colombo</option> 
                        <option value="">Galle</option> 
                        <option value="">Gampaha</option> 
                        <option value="">Hambantota</option> 
                        <option value="">Jaffna</option> 
                        <option value="">Kalutara</option> 
                        <option value="">Kandy</option> 
                        <option value="">Kegalle</option> 
                        <option value="">Kurunegala</option>
                        <option value="">Mannar</option>  
                        <option value="">Matale</option> 
                        <option value="">Matara</option>
                        <option value="">Monaragala</option> 
                        <option value="">Mullaitivu</option>
                        <option value="">Nuwara Eliya</option>  
                        <option value="">Polonnaruwa</option> 
                        <option value="">Puttalam</option>  
                        <option value="">Ratnapura</option>
                        <option value="">Trincomalee</option>  
                        <option value="">Vavuniya</option> 
                        
                    </select>
                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="district">Work Experience</label>
                <div class="col-md-9">
                    <select path="district" id="district" class="form-control input-sm">
                        <option value="">Select</option>
                        <option value="">Fresher</option>
                        <option value="">0</option>
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option> 
                        <option value="">4</option> 
                        <option value="">5</option> 
                        <option value="">6</option> 
                        <option value="">7</option> 
                        <option value="">8</option> 
                        <option value="">9</option> 
                        <option value="">10</option> 
                        <option value="">11</option>
                        <option value="">12</option>  
                        <option value="">13</option>
                        <option value="">14</option>
                        <option value="">15</option>      
                    </select>
                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="country">Education</label>
                <div class="col-md-9">
                    <select path="country" id="country" class="form-control input-sm">
                        <option value="">Select</option>
                        <option value="">Bsc</option>
                        <option value="">BTech</option>
                        <option value="">Mca</option>
                        <option value="">BCA</option>
                        <option value="">Diploma</option> 
                        <option value="">Other</option> 
                    </select>
               </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="subjects">Subjects</label>
                <div class="col-md-9 sm_1">
                   <textarea cols="77" rows="6" value=" " onfocus="this.value='';" onblur="if (this.value == '') {this.value = '';}"> </textarea>
                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-actions floatRight">
                <input type="submit" value="Register" class="btn btn-primary btn-sm">
            </div>
        </div>
    </form>
    </div>
 </div>
</div>
<div class="footer">
	<div class="container">
		<div class="col-md-3 grid_3">
			<h4>Navigate</h4>
			<ul class="f_list f_list1">
				<li><a href="index.php">Home</a></li>
				<li><a href="login.php">Sign In</a></li>
				<li><a href="login.php">Join Now</a></li>
				<li><a href="about.php">About</a></li>
			</ul>
			<ul class="f_list">
				<li><a href="features.php">Features</a></li>
				<li><a href="terms.php">Terms of use</a></li>
				<li><a href="contact.php">Contact Us</a></li>
				<li><a href="postjob.php">Post a Job</a></li>
			</ul>
			<div class="clearfix"> </div>
		</div>
		<div class="col-md-3 grid_3">
			<h4>Social Medias</h4>
			<div class="footer-list">
			  <ul>
				<li><i class="fa fa-twitter tw1"> </i><p><span class="yellow"><a href="https://twitter.com/SLTechbro6">Twitter Support</a></span> Latest Updates trough Twitter</p></li>
				<li><i class="fa fa-facebook fb"> </i><p><span class="yellow"><a href="https://www.facebook.com/anjana.nipun.1">Facebook Support</a></span> Latest Updates trough Facebook</p></li>
				
			  </ul>
			</div>
		</div>
		<div class="col-md-3 grid_3">
			<h4>Rassa.lk</h4>
			<p>This is a system that allows job seekers and recruiters to communicate with each other. This is was online job portal for delivering job placements to employees who are looking for a job vacancies.</p>
		</div>
		<div class="col-md-3 grid_3">
			<h4>Contact Us</h4>
			<p>Contact Us trough Email, Mobile, Telephone or Fax</p>
			<form>
		
				<button type="button" class="btn "><span class="yellow"> <a href="contact.php">Contact Now!</a></span></button>
		    </form>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>

<div class="footer_bottom">	
	<div class="container">
  
		<div class="clearfix"> </div>
	  <div class="copy">
		  <p>Copyright © 2022 Rassa.lk <a href="#" target="_blank"></a> </p>
	  </div>
	</div>
  </div>
  </body>
  </html>	