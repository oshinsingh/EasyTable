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
	<form class="form-inline" action="chkuser.php" method="post">
  <div class="form-group">
    <label class="sr-only" for="userid">USERID</label>
    <input type="text" class="form-control" id="userid" name="username" placeholder="Enter UserId">
  </div>
  <div class="form-group">
    <label class="sr-only" for="exampleInputPassword3">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword3" placeholder="Password">
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
<?php
include 'db.php';
$confid=$_GET['confid'];
$subcatid= null;
$c=mysqli_query($connection,"SELECT * FROM conference WHERE confid='$confid' and curdate() between startdate and enddate");

if(mysqli_num_rows($c) == 0)
	{
		echo "Conference unavailable";
	}	
else {
?>

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
    <input type="text" class="form-control" id="tf1" required placeholder="Enter NAME" name="name">
      </div>
  </div>
 <!--instname-->     
  <div class="form-group">
    <label for="InstituteName"class="col-sm-2 control-label" >INSTITUTE NAME*</label>
       <div class="col-sm-10">
    <input type="text" class="form-control" id="tf2" required name="instname" placeholder="Enter INSTITUTE NAME">
        </div>
  </div>
 <!--address-->    
  <div class="form-group">
      <label for="Address"class="col-sm-2 control-label">ADDRESS*</label>
      <div class="col-sm-10">
      <input type="text" class="form-control" id="tf3" name="address" required>
      </div>
</div>
<!--email-->    
<div class="form-group">
    <label for="exampleInputEmail1"class="col-sm-2 control-label">Email address*</label>
     <div class="col-sm-10">
    <input type="email" class="form-control" name="tf4" required id="exampleInputEmail1" placeholder="Enter email">
    </div>
</div>
<!--phone-->    
<div class="form-group">
    <label for="ContactNo."class="col-sm-2 control-label">CONTACT NO.</label>
     <div class="col-sm-10">
    <input type="tel" class="form-control" id="tf5" required name="phone">
    </div>
</div>




 <!--PAPER INFOtitle-->    
  <div class="form-group">
    <label for="Title" class="col-sm-2 control-label">TITLE*</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="title" required placeholder="Enter TITLE OF THE PAPER" name="title">
      </div>
  </div>
  <!--abstract-->    
  <div class="form-group">
    <label for="aabstract" class="col-sm-2 control-label" >ABSTRACT*</label>
       <div class="col-sm-10">
        <textarea id="aabstract" name="aabstract" rows=10 cols=70 class="form-control"></textarea>
        <!--<input type="text-area" row=5 class="form-control" id="abstract" required name="aabstract" placeholder="Enter Abstract">-->
        </div>
  </div>
 <!--cast/subcat-->    


 <!--new beg-->
 <div class="form-group" id="sneha">
      <label for="category" class="col-sm-2 control-label">CATEGORY</label>
      <div class="col-sm-10">
     <select name="catid">
      

     <?php


     $sql="SELECT category_name,catid FROM category natural join conf_category WHERE confid='$confid'";

     if ($result=mysqli_query($connection,$sql))
     {
     // Fetch one and one row
     while ($row=mysqli_fetch_row($result))
     {
    
     ?>
      <option  value="<?php echo $row[1];?>"> <?php echo $row[0];?></option>  
     <?php
     }
     // Free result set
        mysqli_free_result($result);
     }



     ?>

  </select>
      
        
  
      </div>
      
 </div>

 <!--new beg-->
 <div class="form-group" >
      <label for="category" class="col-sm-2 control-label">SUBCATEGORY</label>
      <div class="col-sm-10">
     <select name="subcatid">
      

     <?php


     $sql1="SELECT subcategory_name,subcatid FROM subcategory natural join conf_subcategory WHERE confid='$confid'";

     if ($result1=mysqli_query($connection,$sql1))
     {
     // Fetch one and one row
     while ($row1=mysqli_fetch_row($result1))
     {
    
     ?>
      <option  value="<?php echo $row1[1];?>"> <?php echo $row1[0];?></option>  
     <?php
     }
     // Free result set
        mysqli_free_result($result1);
     }



     ?>

  
      
        
  </select>
      </div>
      
 </div>      

     <!--keywords-->    
  <div class="form-group">
      <label for="keywords"class="col-sm-2 control-label">KEYWORDS*</label>
     <div class="col-sm-10">
        <input type="text" class="form-control" id="keywords" name="keywordsi" required>
      </div>
  </div>

<!--file-->    
 <div class="form-group">
      <label for="Attach file"class="col-sm-2 control-label">PDF</label>
     <div class="col-sm-10">
        <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
      <input name="userfile" type="file" id="userfile"><!--required-->
      </div>
</div>



<button type="submit" name="upload" class="btn btn-primary">Submit</button>
 
</form>
<script>
var data = {
    "tf1": "<?php echo "asas"; ?>",
    "tf2": "johndoe@mail.com",
    "tf3": "johndoe@mail.com",
    "tf4": "johndoe@mail.com",
    "tf5": "johndoe@mail.com",

    // always use "name" to find radio or checkbox multiple
    "lovejquery": "yes"
}
$("#f_findbyname .btn").bind("click", function() {
    $("#f_findbyname").autofill(data, {
        findbyname: false
    });
});
</script>
</div>
</div>




  

    
  

 
 
</div></div></div>

<?php
	}	
?>












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