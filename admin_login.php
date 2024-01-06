
<?php

include_once('header1.php');

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
    <div class="row my-5 ">
        <div class="col-md-2"></div>
        <div class="col-md-8">
           <strong><h1>Admin Login</h1></strong>
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
                        <input type="email" name="email" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-2">
                        <label>Password</label>
                    </div>
                    <div class="col-md-8">
                        <input type="password" name="password" class="form-control">
                    </div>
                </div>
                <center><button type="submit" class="btn btn-primary" name="submit">Login</button></center>
            </form>
        </div>   
    </div>
</div>
</div>
<?php
if(isset($_REQUEST["submit"]))
{
    $email = $_REQUEST["email"];
    $password = $_REQUEST["password"];

    //connection
    include("config.php");

    $query = "select * from `admin` where `email`='$email' and `password`='$password'";

    $result = mysqli_query($conn,$query);
    $data = mysqli_fetch_array($result);
    if(mysqli_num_rows($result)>0){

        // session create 
        
        $_SESSION["email"] = $data['email'];
		$_SESSION['user']='Admin';
        echo "<script>window.location.assign('admin.php')</script>";
    }
    else{
		// echo mysqli_error($conn);
		// die();
        echo "<script>window.location.assign('admin_login.php?msg=Invalid email or password')</script>";
    }
}
?>

<?php
include_once('footer.php');
?>