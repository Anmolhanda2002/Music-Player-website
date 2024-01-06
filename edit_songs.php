<?php
include_once("header.php");
?>
<?php
if(isset($_REQUEST['id'])){
$id = $_REQUEST["id"];
include("config.php");
 $q ="SELECT songs.*, category.category_name, artists.artist_name FROM `songs` INNER JOIN `category` on songs.category=category.id INNER JOIN `artists` on artists.id=songs.artist where songs.id  ='$id'";
$res = mysqli_query($conn,$q);
$d = mysqli_fetch_array($res);
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
           <strong><h1>Edit Songs</h1></strong>
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
           <form  method="post"  enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Choose Category</label>
                    <select name="category_name" required class="form-control">
                        <option value="" selected disabled>Select Category</option>
                        <?php
                        include("config.php");
                        $query = "SELECT * FROM `category`";
                        $result = mysqli_query($conn,$query);
                        while($data = mysqli_fetch_array($result))
                        {
                            ?>
                                <option value='<?php echo $data['id'] ?>' <?php if($d['category']=$data['id']){?>
                                selected <?php } ?> > <?php echo $data['category_name']?></option>"
                            <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Choose Artist</label>
                   
                    <select name="artist" required class="form-control">
                        <option value="" selected disabled>Select Artist</option>
                        <?php
                        include("config.php");
                        $query = "SELECT * FROM `artists`";
                        $result = mysqli_query($conn,$query);
                        while($data = mysqli_fetch_array($result))
                        {
                            ?>
                             <option value='<?php echo $data['id'] ?>' <?php if($d['artist']=$data['id']){?>
                                selected <?php } ?> > <?php echo $data['artist_name']?></option>"
                            <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Song Title</label>
                    <input type="text" class="form-control" name="song_title" value="<?php echo $d['song_title']?>" required>
                </div>
                <div class="form-group">
                    <label for="">Thumbnail</label>
                    <input type="file" class="form-control" name="thumbnail" >
                    <input type="hidden" class="form-control" name="hiddenimg" value="<?php echo $d['thumbnail']?>">
                    <input type="hidden"  class="form-control" name="id" value="<?php echo $d['id']?>">
                </div>
                <div class="form-group">
                    <label for=""></label>
                    <select name="mode" id="mode" onchange="hit()" class="form-control" >
                    <?php
                        if($d['mode']=='Online'){
                        ?>
                       <option selected>Online</option>
                       <option>Offline</option>
                       <?php
                       }elseif ($d['mode']=='Offline'){
                        ?>
                        <option >Online</option>
                       <option selected>Offline</option>
                       <?php
                       }else{
                        ?>
                         <option value="" selected disabled>Mode</option>
                         <option >Online</option>
                       <option >Offline</option>
                        <?php
                       }
                       ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Song link</label>
                    <input type="text" id="link" class="form-control" value="<?php echo $d['song_link']?>" name="song_link">
                </div>
                <div class="form-group">
                    <label for="">Upload Song</label>
                    <input type="file" id="upload" class="form-control" name="addsong">
                    <input type="hidden" class="form-control" name="addsong1" value="<?php echo $d['upload_song']?>">
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <textarea  class="form-control" name="description" required><?php echo $d['description']?></textarea>
                </div>
                <button type="submit" class="btn btn-primary my-2" name="submit">Submit</button>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
</div>
<?php
include_once("footer.php");
?>
<script>
    var mode=document.getElementById('mode').value;
        //console.log(mode);
        if(mode=='Online'){
            //console.log('hi');
            document.getElementById('link').disabled=false;
            document.getElementById('upload').disabled=true;
        }
        else{
            //console.log('hfghji');
            document.getElementById('upload').disabled=false;
            document.getElementById('link').disabled=true;
        }
    function hit(){
        var mode=document.getElementById('mode').value;
        //alert(mode);
        if(mode=='Online'){
            document.getElementById('link').disabled=false;
            document.getElementById('upload').disabled=true;
        }
        else{
            document.getElementById('upload').disabled=false;
            document.getElementById('link').disabled=true;
        }
    }
   
</script>
<?php
if(isset($_REQUEST["submit"]))
{
    $category_name = $_REQUEST["category_name"];
    $song_title =$_REQUEST["song_title"]; 
    if($_FILES["thumbnail"]["name"]){
        $file_name = $_FILES["thumbnail"]["name"];
        $file_tmp_path = $_FILES["thumbnail"]["tmp_name"];
        $file_type = $_FILES["thumbnail"]["type"];
        $file_sizes = $_FILES["thumbnail"]["size"];
    $new_name = rand().$file_name;
    }
    else{
        $new_name=$_REQUEST['hiddenimg'];
    }
    

    $mode=$_REQUEST["mode"];
    if(isset($_FILES['addsong'])){
    if($_FILES['addsong']['name']){
        $file_names = $_FILES["addsong"]["name"];
        $file_tmp_paths = $_FILES["addsong"]["tmp_name"];
        $file_types = $_FILES["addsong"]["type"];
        $file_sizess = $_FILES["addsong"]["size"];
         $upload_song=rand().$file_names;
    }}
    else{
        $upload_song=$_REQUEST['addsong1'];
    }


    if(isset($_REQUEST['song_link'])){
        $song_link=$_REQUEST["song_link"];
    }
    else{
        $song_link="";  
    }
    $id=$_REQUEST['id'];
    $description=$_REQUEST["description"];
    $artist=$_REQUEST["artist"];
    //connect with database
    include("config.php");
     $query="UPDATE `songs` SET `song_title`='$song_title',`category`='$category_name',`artist`='$artist',`thumbnail`='$new_name',`upload_song`='$upload_song',`song_link`='$song_link',`mode`='$mode',`description`='$description'  where `id`='$id'";
     
    $result = mysqli_query($conn,$query);
    if($result>0){
        move_uploaded_file($file_tmp_path,'category/'.$new_name);
        move_uploaded_file($file_tmp_paths,'category/'.$upload_movie);
        echo "<script>window.location.assign('manage_songs.php?msg=Updated Successfully')</script>";
    }
    else{
        echo "<script>window.location.assign('manage_songs.php?msg=Error, Try again later')</script>";
    }
}
?>
