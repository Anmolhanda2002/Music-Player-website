
<?php

include('header1.php');
?>
<style>
    .borderbox{
	box-shadow: 5px 5px 10px seagreen;
	margin-top:100px;
    margin-left:200px;
	padding:20px;
}
</style>
<div class="container borderbox" >
    <div class="row my-5 box-3">
        <div class="col-md-2"></div>
        <div class="col-md-8">
           <strong><h1>User Login</h1></strong>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <?php
            if(isset($_REQUEST["msg"]))
            {
                echo $_REQUEST["msg"];
            }
            ?>
        </div>
    </div>
    <div class="row my-5">
        <div class="col-md-2"></div>
        <div class="col-md-8 ">
            <form method="post" class="my-5">
                <div class="row form-group">
                    <div class="col-md-2">
                        <label>Email</label>
                    </div>
                    <div class="col-md-8">
                        <input class="form-control" type="email"  name="email"  placeholder=" " required="">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-2">
                        <label>Password</label>
                    </div>
                    <div class="col-md-8">
                        <input class="form-control" type="password"  name="password"  placeholder=" " required="">
                    </div>
                </div>
                <center><button type="submit" class="btn btn-primary" name="submit">Submit</button></center>
            </form>
        </div>   
    </div>
</div>
</div>
</div>              
<?php
include('footer.php');
?>

<?php
if(isset($_REQUEST["submit"]))
{
    $email = $_REQUEST["email"];
    $password = $_REQUEST["password"];
    include("config.php");
    $query = "SELECT * from `users` where `password`='$password' and `email`='$email'";
    $result = mysqli_query($conn,$query);
    $data=mysqli_fetch_array($result);
    if(mysqli_num_rows($result)>0)
    {
		
		$_SESSION['email']=$data['email'];
		$_SESSION['user']='Users';
        echo "<script>window.location.assign('index11.php?msg=Login Successfully')</script>";
    }
    else{
        echo mysqli_error($conn);
        echo "<script>window.location.assign('login.php?msg=Try again')</script>";
    }
}
?>
