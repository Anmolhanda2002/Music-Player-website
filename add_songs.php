<?php
include_once("header.php");
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
           <strong><h1>Add Songs</h1></strong>
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
           <form  method="post" action="add_songs_db.php" enctype="multipart/form-data">
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
                             <option value='<?php echo $data['id'] ?>'><?php echo $data['category_name']?></option>";
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
                             <option value='<?php echo $data['id'] ?>'><?php echo $data['artist_name']?></option>";
                            <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Song Title</label>
                    <input type="text" class="form-control" name="song_title" required>
                </div>
                <div class="form-group">
                    <label for="">Thumbnail</label>
                    <input type="file" class="form-control" name="thumbnail" required>
                </div>
                <div class="form-group">
                    <label for=""></label>
                    <select name="mode" id="mode" onchange="hit()" class="form-control" >
                        <option value="" selected disabled>Mode</option>
                       <option>Online</option>
                       <option>Offline</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Song link</label>
                    <input type="text" id="link" class="form-control" name="song_link">
                </div>
                <div class="form-group">
                    <label for="">Upload Song</label>
                    <input type="file" id="upload" class="form-control" name="addsong">
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <textarea  class="form-control" name="description" required></textarea>
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

