
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
           <strong><h1>User Register</h1></strong>
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
            <form method="post" class="my-5" enctype="multipart/form-data">
                <div class="row form-group">
                    <div class="col-md-2">
                        <label>User Name</label>
                    </div>
                    <div class="col-md-8">
                        <input class="form-control" type="text"  name="user_name"  placeholder=" " required="">
                    </div>
                </div>
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
                <div class="row form-group">
                    <div class="col-md-2">
                        <label>Contact</label>
                    </div>
                    <div class="col-md-8">
                        <input class="form-control" type="number" min="0"  name="contact"  placeholder=" " required="">
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
    $user_name = $_REQUEST["user_name"];
    $email = $_REQUEST["email"];
    $password = $_REQUEST["password"];
    $contact = $_REQUEST["contact"];
    include("config.php");
    $query = "INSERT INTO `users`(`user_name`, `password`, `email`,`contact`) VALUES ('$user_name','$password','$email','$contact')";

    //Execute 
    $result = mysqli_query($conn,$query);

    if($result>0)
    {
        echo "<script>window.location.assign('user_register.php?msg=Record Inserted')</script>";
    }
    else{
        echo mysqli_error($conn);
        echo "<script>window.location.assign('user_register.php?msg=Try again')</script>";
    }
}
?>
