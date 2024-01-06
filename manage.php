<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
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
<script src="js/jquery-2.1.4.js"></script>

<?php
include('header.php');
?>
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
                    <a href="#">Manage Category</a>
                </li>
            </ul>
        </div>
    </div>
</div>
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
            <table class="table table-striped table-hover">
                <tr>
                    <th>#</th>
                    <th>Category Name</th>
                    <th>Thumbnail Image</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                <?php
                    $sno = 1; 
                    include("connection.php");
                    $query = "SELECT * FROM `category`";
                    $result = mysqli_query($con,$query);
                    while($data = mysqli_fetch_array($result))
                    {
                ?>
                    <tr>
                        <td><?php echo $sno; ?></td>
                        <td><?php echo $data['category_name']; ?></td>
                        <td>
                            <img src="category/<?php echo $data['thumbnail']; ?>" alt="" class="img img-thumbnail" width="150px">
                            
                        </td>
                        <td>
                        <a href="edit_category.php?id=<?php echo $data['id']; ?>">
                            <!-- <button class="btn btn-success">Edit</button> -->
                            <i class="fa fa-edit text-success fa-2x"></i>
                        </td>
                        <td>
                        <a href="delete_category.php?id=<?php echo $data['id']; ?>">
                            <i class="fa fa-trash text-danger fa-2x"></i>
                        </td>
                    </tr>
                <?php
                    $sno++;
                    }
                ?>
            </table>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>

    
    
</body>
</html>

<?php
// include('sidebar.php');
?>

<style>
.myForm {
font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
font-size: 0.8em;
width: 30em;
padding: 1em;
}

.myForm * {
box-sizing: border-box;
}

.myForm label {
padding: 0;
font-weight: bold;
text-align: right;
display: block;
}

.myForm input,
.myForm select,
.myForm textarea {
margin-left: 2em;
float: right;
width: 20em;
border: 1px solid #ccc;
font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
font-size: 0.9em;
padding: 0.3em;
}

.myForm textarea {
height: 100px;
}
.all{

    position: relative;
    margin-left:470px;
    margin-top:10px;
    width:50%;
}
.myForm button {
padding: 1em;
border-radius: 0.5em;
background: #eee;
border: none;
font-weight: bold;
margin-left: 14em;
margin-top: 1.8em;
}
.al{
    width:50%;
    
    margin-left:620px;
    margin-top:200px;
}
.ai{
    margin: left 100px;
}
.myForm button:hover {
background: #ccc;
cursor: pointer;
}
</style>

</head>


                  
                        





<?php

if(isset($_REQUEST["submit"]))
{
    $category_name = $_REQUEST["_name"];
    
    $file_name = $_FILES["thumbnail"]["name"];
    $file_tmp_path = $_FILES["thumbnail"]["tmp_name"];
    $file_type = $_FILES["thumbnail"]["type"];
    $file_sizes = $_FILES["thumbnail"]["size"];

    $new_name = rand().$file_name;
    
    //connect with database
    include("connection.php");

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
