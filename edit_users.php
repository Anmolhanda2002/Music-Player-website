<?php
include_once("header.php");
$id = $_REQUEST["id"];
include("config.php");
$q = "select * from `users` where `id`='$id'";
$res = mysqli_query($conn,$q);
$d = mysqli_fetch_array($res);

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
           <strong><h1>Update Users</h1></strong>
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
            <form method="post" action="edit_user_db.php" class="my-5" enctype="multipart/form-data">
                <div class="row form-group">
                    <div class="col-md-2">
                        <label>User Name</label>
                    </div>
                    <div class="col-md-8">
                        <input class="form-control" type="text" value="<?php echo $d['user_name']?>" name="user_name"  placeholder=" " required="">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-2">
                        <label>Email</label>
                    </div>
                    <div class="col-md-8">
                        <input class="form-control" type="email"  name="email"  placeholder=" " required="" value="<?php echo $d['email']?>">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-2">
                        <label>Password</label>
                    </div>
                    <div class="col-md-8">
                        <input class="form-control" type="password"  name="password"  placeholder=" " required="" value="<?php echo $d['password']?>">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-2">
                        <label>Contact</label>
                    </div>
                    <div class="col-md-8">
                        <input class="form-control" type="number" min="0"  name="contact"  placeholder=" " required="" value="<?php echo $d['contact']?>">
                        <input class="form-control" type="hidden" min="0"  name="id"  placeholder=" " required="" value="<?php echo $d['id']?>">
                    </div>
                </div>
                <center><button type="submit" class="btn btn-primary" name="submit">Submit</button></center>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
</div>
<?php
include_once("footer.php");
?>

