
<?php
session_start();
if(!isset($_SESSION['username'])){
header("location:homepage.php");
}
?>

<!doctype html>
<html>
<head>
		<meta charset="utf-8">
		<meta name "viewport" content="width=device-width,initial-scale-1.0">
		<title>MNNIT-conference</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
     
  
</head>
<body>
	<div class="page-header no-margin row">
		
		<div class="col-md-2"><img src="images/mnnit1.png" height="90px" class="pull-left"></div>
		<div class="col-md-10"><h2 style="font-size:40px;"><strong>Motilal Nehru National Institute Of Technology</strong></h2></div>
	
</div>
<nav class="navbar navbar-default navbar-static-top" role="navigation">
	<div class ="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-mnnit-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      		<a class="navbar-brand " href="#">Conference Login</a>
	</div>
	<div class="collapse navbar-collapse navbar-right" id="bs-mnnit-navbar-collapse-1">
		<div class="container-fluid push-right">
		<div class="panel-body">	
	<form class="form-inline" action="chkuser.php">
  <div class="form-group">
    <label class="sr-only" for="userid">USERID</label>
    <input type="text" class="form-control" id="userid" placeholder="Enter UserId">
  </div>
  <div class="form-group">
    <label class="sr-only" for="exampleInputPassword3">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password">
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox"> Remember me
    </label>
  </div>
  <button type="submit" class="btn btn-default">Sign in</button>
</form>
</div>
</div>
	</div>
	</div>
</nav>

  <div class="container-fluid">
     <div class="row">
        <div class="col-md-offset-3 col-md-6 ">
          <div class="panel panel-default">
              <div class="panel-body">
              <form class="form-horizontal"  method="post" action="submit.php?confid=<?php echo $confid ?> " role="form" enctype="multipart/form-data">

<!--PERSONAL DETAILSname-->      
 <div class="form-group">
    <label for="Name" class="col-sm-2 control-label">NAME*</label>
      <div class="col-sm-10">
    <input type="text" class="form-control" id="Name" required placeholder="Enter NAME" name="name">
      </div>
  </div>
 <!--instname-->     
  <div class="form-group">
    <label for="InstituteName"class="col-sm-2 control-label" >INSTITUTE NAME*</label>
       <div class="col-sm-10">
    <input type="text" class="form-control" id="InstituteName" required name="instname" placeholder="Enter INSTITUTE NAME">
        </div>
  </div>
 <!--address-->    
  <div class="form-group">
      <label for="Address"class="col-sm-2 control-label">ADDRESS*</label>
      <div class="col-sm-10">
      <input type="text" class="form-control" id="Address" name="address" required>
      </div>
</div>
<!--email-->    
<div class="form-group">
    <label for="exampleInputEmail1"class="col-sm-2 control-label">Email address*</label>
     <div class="col-sm-10">
    <input type="email" class="form-control" name="email" required id="exampleInputEmail1" placeholder="Enter email">
    </div>
</div>
<!--phone-->    
<div class="form-group">
    <label for="ContactNo."class="col-sm-2 control-label">CONTACT NO.</label>
     <div class="col-sm-10">
    <input type="tel" class="form-control" id="ContactNo." required name="phone">
    </div>
</div>



<button type="submit" name="upload" class="btn btn-primary">Submit</button>
 
</form>
</div>
</div>




  

    
  

 
 
</div></div></div>













<footer class="site-footer navbar-fix-bottom ">
	<div class="container-fluid">
		<div class="row">
		<p>© 2015 All Rights Reserved</p>
		</div>

		<div class="bottom-footer navbar-fix-bottom ">
			<div class="col-md-6">© 2015 All Rights Reserved</div>
			<div class="col-md-6">
				<ul class="footer-nav">
					<li><a href="index.html">Home</a></li>
					<li><a href="blog.html">Blog</a></li>
					<li><a href="contact.html">Contact</a></li>
					<li><a href="link.html">Link</a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>





<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>



</html> 