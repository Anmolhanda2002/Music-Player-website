<?php
if(isset($_REQUEST["submit"]))
{
    $category_name = $_REQUEST["category_name"];
    $song_title =$_REQUEST["song_title"]; 
    $artist=$_REQUEST['artist'];
    $file_name = $_FILES["thumbnail"]["name"];
    $file_tmp_path = $_FILES["thumbnail"]["tmp_name"];
    $file_type = $_FILES["thumbnail"]["type"];
    $file_sizes = $_FILES["thumbnail"]["size"];

    $new_name = rand().$file_name;

    $mode=$_REQUEST["mode"];
    
    if(isset($_FILES['addsong'])){
        $file_names = $_FILES["addsong"]["name"];
        $file_tmp_paths = $_FILES["addsong"]["tmp_name"];
        $file_types = $_FILES["addsong"]["type"];
        $file_sizess = $_FILES["addsong"]["size"];
         $upload_song=rand().$file_names;
    }
    else{
        $upload_song="";
    }
    if(isset($_REQUEST['song_link'])){
        $song_link=$_REQUEST["song_link"];
    }
    else{
        $song_link="";  
    }
    
    $description=$_REQUEST["description"];
    include("config.php");
    $query="INSERT INTO `songs`(`song_title`, `category`, `artist`, `thumbnail`, `upload_song`, `song_link`, `mode`, `description`) VALUES ('$song_title','$category_name','$artist','$new_name','$upload_song','$song_link','$mode','$description')";
    $result = mysqli_query($conn,$query);
    if($result>0){
        move_uploaded_file($file_tmp_path,'category/'.$new_name);
        move_uploaded_file($file_tmp_paths,'category/'.$upload_song);
        echo "<script>window.location.assign('add_songs.php?msg=Inserted Successfully')</script>";
    }
    else{
        echo "<script>window.location.assign('add_songs.php?msg=Error, Try again later')</script>";
    }
}
?>
