
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.css" type='text/css' />
<!-- //lined-icons -->
 <!-- Meters graphs -->
<script src="js/jquery-2.1.4.js"></script><?php
include_once("header.php");
?>
<!-- breadcrumbs -->
<div class="crumbs text-center">
    <div class="container">
        <div class="row">
            <ul class="btn-group btn-breadcrumb bc-list">
                <li class="btn btn1">
                    <a href="index.php">
                        <i class="glyphicon glyphicon-home"></i>
                    </a>
                </li>
                <li class="btn btn2">
                    <a href="#">Add Category</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!--//breadcrumbs ends here-->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <?php
            if(isset($_REQUEST["msg"]))
            {
                echo $_REQUEST["msg"];
            }
            ?>
            <form action="#" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Choose Category</label>
                    <select name="catgeory" class="form-control">
                        <option value="" selected disabled>Select Category</option>
                        <?php
                        include("config.php");
                        $query = "SELECT * FROM `category`";
                        $result = mysqli_query($conn,$query);
                        while($data = mysqli_fetch_array($result))
                        {
                            echo "<option value='<?php echo $data[id] ?>'>".$data['category_name']."</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Category Name</label>
                    <input type="text" class="form-control" name="category_name">
                </div>
                <div class="form-group">
                    <label for="">Thumbnail</label>
                    <input type="file" class="form-control" name="thumbnail">
                </div>
                <button type="submit" class="btn btn-success my-2" name="submit">Submit</button>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
<?php
include_once("footer.php");
?>

<?php
if(isset($_REQUEST["submit"]))
{
    echo $catgeory = $_REQUEST["catgeory"];
    $category_name = $_REQUEST["category_name"];
    
    $file_name = $_FILES["thumbnail"]["name"];
    $file_tmp_path = $_FILES["thumbnail"]["tmp_name"];
    $file_type = $_FILES["thumbnail"]["type"];
    $file_sizes = $_FILES["thumbnail"]["size"];

    $new_name = rand().$file_name;
    die();
    //connect with database
    include("config.php");

    //insert query
    $query = "INSERT INTO `category`(`category_name`, `thumbnail`, `status`) VALUES ('$category_name','$new_name','Active')";

    //Execute 
    $result = mysqli_query($conn,$query);

    if($result>0)
    {
        move_uploaded_file($file_tmp_path,'category/'.$new_name);
        echo "<script>window.location.assign('add_category.php?msg=Record Inserted')</script>";
    }
    else{
        echo mysqli_error($conn);
        echo "<script>window.location.assign('add_category.php?msg=Try again')</script>";
    }
}
?>