<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="style1.css">
    <meta name="google-signin-client_id" content="425603847448-l3g5takj0e4rotkj8sgn18ml2l69v4hk.apps.googleusercontent.com">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://apis.google.com/js/platform.js" async defer></script>
    <link href="https://fonts.googleapis.com/css?family=Spectral+SC|VT323" rel="stylesheet">
</head>
<script type="text/javascript">
    $(document).ready(function(){
        $(".inp").css("margin","10px");

        $(".slideshow > div:gt(0)").hide();
        $(".panel").css({"background-color":"rgba(0,128,255,0.7)","color":"red","font-size":"80px"});

        setInterval(function()
        {
            $(".slideshow > div:first").fadeOut(1000).next().fadeIn(1000).end().appendTo(".slideshow");
        },3000);


    });
	function validate(){
		var name= document.forms["register form"]["name"].value;
		var user= document.forms["register form"]["user_name"].value;
		var mobile= document.forms["register form"]["mob"].value;
		var college= document.forms["register form"]["coll"].value;
		var pass= document.forms["register form"]["pass"].value;
		var cpass= document.forms["register form"]["conf"].value;
		console.log(mobile);
		var letters = /^[A-Za-z ]*$/;
		if(name.length<1||!(name.match(letters)))
		{
			alert("Enter valid name");
			return false;
		}
		var letter = /^[0-9a-z_A-Z ]*$/;
		if(user.length<8||user.length>13||!(user.match(letter)))
		{
			alert("Enter valid username(Username must be between 8 to 13 characters and must not contain special characters)");
			return false;
		}
		if((mobile.toString().length)!=10)
		{
			alert("Enter valid mobile number");
			return false;
		}
		if((college).length<1||(college).length>80||!((college).match(letters)))
		{
			alert("Enter valid college name");
			return false;
		}
		if(pass.length<8||pass.length>13)
		{
			alert("Enter valid password(minimum 8 and maximum 13 characters)");
			return false;
		}
		if(pass!=cpass)
		{
			alert("Paswords do not match");
			return false;
		}
	}

</script>
<body>
<div id="fb-root"></div>

    
    <div class="jumbotron" style="background: url(http://res.cloudinary.com/dvxx5f4hr/image/upload/v1507895765/Best-Website-Background-Images28_ds5ral.jpg) no-repeat center fixed;
    height:830px;">

            <div class="row">
                <div class="col-xs-6 col-xs-offset-3">
                    <img src="logo.png" alt="logo image" class="img-responsive img">
                </div>
            </div>
            <div class="row text-center"  style="font-family: 'Spectral SC', serif;">
                <h2 style="font-family: 'VT323', monospace;font-size: 180px;font-stretch: expanded;">LEARN TO HACK</h2>

                <h3 style="font-size: 50px;text-decoration: underline;">Get notified about the latest Hackathons.
                    <br>Learn to code ,over dozen of choices.</h3>
            </div>
    </div>
    <div>
        <a href="ABOUT.html" class="btn btn-default fix" target="_blank" title="ABOUT US"><i class="fa fa-plus-square" style="font-size:50px;"></i></a>
    </div>
    <div class="panel">
        <h2 class="text-center">HACK WITH HACKYOU!</h2>
    </div>
    




<div class="jumbotron" style="background: url(http://res.cloudinary.com/dvxx5f4hr/image/upload/v1507895764/Best-Website-Background-Images4_pr78x9.jpg) no-repeat center fixed;">
    <div class="container">
        <div class="row">
                <div class="col-xs-8 col-xs-offset-2" style="background-color: rgba(200,200,200,0.8);height: 250px;">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 text-center" >
                                <h2  style="font-family: 'Spectral SC', serif;">Sign In</h2>
                            </div>
                        </div>
                        <hr style="color: black;">
                        <div class="row">
                            <div class="col-xs-6" style="margin-top:5%;font-family: 'Spectral SC', serif;">
                                
                                <button class="btn btn-danger btn-active" style="margin-bottom:2px;width:15vw;"><div class="g-signin2" data-onsuccess="onSignIn">Sign In with Google</div></button>

                            </div>

                            <div class="col-xs-5" style="margin-top: 5%;">
                                <form action="./login.php" method="post">
                                    <input type="text" name="user_name" placeholder="Username" size="15px" required>
                                    <input type="password" name="pass" placeholder="Password" size="15px" required>
                                    <div style="display: flex;">
                                    <button type="submit" class="btn btn-active btn-success" style="margin-top: 2px;">Sign In</button>

                                    <button class="btn btn-warning btn-active" data-target="#openModal" data-toggle="modal" name="done" style="margin-top: 2px;" type="button">Sign Up</button>
                                </div>
                                
                                </form>
                                



                                <div class="modal fade" id="openModal">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h2 class="modal-title text-center">SIGN UP WITH US!</h2>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container">
                                                    <form name="register form" action="register.php" method="post" onsubmit="return validate()" >
                                                        <div class="form-group ">
                                                        <label for="name">Name</label>
                                                        <input type="text" name="name" id="name" class="form-control" placeholder="name" required>
                                                        </div>
                                                        <div class="form-group ">
                                                        <label for="User">User Name</label>
                                                        <input type="text" name="user_name" id="user" class="form-control" placeholder="User Name" required>
                                                        </div>
                                                        <div class="form-group">
                                                        <label for="mob">Mobile Number</label>
                                                        <input type="number" name="mob" id="mob" class="form-control" placeholder="Mobile Number" required>
                                                        </div>
                                                        <div class="form-group ">
                                                        <label for="coll">College</label>
                                                        <input type="text" name="coll" id="coll" class="form-control" placeholder="College" required>
                                                        </div>
                                                        <div class="form-group ">
                                                        <label for="pass">Password</label>
                                                        <input type="password" name="pass" id="pass" class="form-control" placeholder="Password" required>
                                                        </div>
                                                        <div class="form-group ">
                                                        <label for="conf">Confirm Password</label>
                                                        <input type="password" name="conf" id="conf" class="form-control" placeholder="confirm password" required>
                                                        </div>

                                                    </div>

                                                    <button type="submit" class="btn btn-success btn-active">SIGN UP</button>
                                                    </form>

                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-default" data-dismiss="modal" type="button">CLOSE</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>

</div>

<div class="panel">
    <h2 class="text-center">WHAT WE DO!!</h2>
</div>
<div class="container">
    <div class="slideshow col-xs-9 col-xs-offset-2">
        <div>
            <img src="http://res.cloudinary.com/dvxx5f4hr/image/upload/v1511114172/1-aM1KkhdoJH503iWID_WJ8A_drn8vt.png" class="img-responsive img-rounded">
        </div>
        <div>
            <img src="http://res.cloudinary.com/dvxx5f4hr/image/upload/c_scale,w_798/v1511113509/think201-bluemix-yourstory-hackathon_yridtl.jpg" class="img-responsive img-rounded">
        </div>
        <div>
            <img src="http://res.cloudinary.com/dvxx5f4hr/image/upload/v1511113507/dc-Cover-8a6l6u3h2dijkk47u723s51576-20160523204747.Medi_qvjyih.jpg" class="img-responsive img-rounded">
        </div>
        <div>
            <img src="http://res.cloudinary.com/dvxx5f4hr/image/upload/c_scale,w_874/v1511114120/Jugaadathon1_wkvdad.jpg" class="img-responsive img-rounded">
        </div>

    </div>
</div>



</body>


</html>
