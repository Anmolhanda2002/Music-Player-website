<?php
include_once("header.php");
$id = $_REQUEST["id"];
include("config.php");
$q = "select * from `category` where `id`='$id'";
$res = mysqli_query($conn,$q);
if($d = mysqli_fetch_array($res)){
    $c_name = $d['category_name'];
    $c_image = $d['thumbnail'];
}
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
           <strong><h1>Edit Category</h1></strong>
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
            <form  method="post" enctype="multipart/form-data">

                <input type="hidden" name="id" value="<?php echo $id; ?>">

                <div class="form-group">
                    <label for="">Category Name</label>
                    <input type="text" class="form-control" name="category_name" value="<?php echo $c_name; ?>">
                </div>
                <div class="form-group">
                    <label for="">Thumbnail</label>
                    <input type="file" class="form-control" name="thumbnail">

                    <!-- only for file uploading start -->
                    <input type="hidden" name="hidden_image" value="<?php echo $c_image; ?>">
                    <!-- only for file uploading End -->

                </div>
                <button type="submit" class="btn btn-success my-2" name="submit">Submit</button>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
</div>
<?php
include_once("footer.php");
?>

<?php
if(isset($_REQUEST["submit"]))
{
    $category_name = $_REQUEST["category_name"];
    $id = $_REQUEST["id"];
    
    // Only for file uploading start 
    if($_FILES["thumbnail"]["name"])
    {
        $file_name = $_FILES["thumbnail"]["name"];
        $file_tmp_path = $_FILES["thumbnail"]["tmp_name"];
        $file_type = $_FILES["thumbnail"]["type"];
        $file_sizes = $_FILES["thumbnail"]["size"];

        $new_name = rand().$file_name;
        move_uploaded_file($file_tmp_path,'category/'.$new_name);
    }
    else{
        $new_name = $_REQUEST["hidden_image"];
    }
    // File uploading End

    //connect with database
    include("config.php");

    //insert query
    $query = "update `category` set `category_name`='$category_name', `thumbnail`='$new_name' where `id`='$id'";

    //Execute 
    $result = mysqli_query($conn,$query);

    if($result>0)
    {
       
        echo "<script>window.location.assign('manage_category.php?msg=Record Updated')</script>";
    }
    else{
        echo mysqli_error($conn);
        echo "<script>window.location.assign('manage_category.php?msg=Try again')</script>";
    }
}
?>