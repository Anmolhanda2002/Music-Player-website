
<?php
include('header.php');
if(isset($_REQUEST['id'])){
    $id=$_REQUEST['id'];
    include('config.php');
    $q ="SELECT songs.*, category.category_name, artists.artist_name FROM `songs` INNER JOIN `category` on songs.category=category.id INNER JOIN `artists` on songs.artist=artists.id where songs.id  ='$id'";
    $res = mysqli_query($conn,$q);
    $d = mysqli_fetch_array($res);

?>
<div class="container">
    <div class="albums row">
        <div class="tittle-head row">
            <h3 class="tittle col-md-10">Songs <span class="new">New</span></h3>
            <div class="clearfix"> </div>
        </div>
        <?php
        if(isset($_GET['msg'])){
        ?>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 alert alert-primary">
                <?php echo $_GET['msg'] ?>
            </div>

        </div>
        <?php } ?>
        <div class="row">
            <div class="col-md-8 ">
            <iframe <?php 
            if($d['song_link']=="")
            {
                ?>
                src="category/<?php echo $d['upload_song']?>"
                <?php
            }
            else{
                ?>
                src="<?php echo $d['song_link']?>"
                <?php
            }
            ?> frameborder="0" width="700px" height="400px" ></iframe>
            </div>
            
            <div class="col-md-4">
                <h1><?php echo $d['song_title']?></h1>
                <img src="category/<?php echo $d['thumbnail']?>" height="200px" width="200px">
                <h2>Artist:<?php echo $d['artist_name']?></h2>
                <a href="add_playlist.php?id=<?php echo $d['id']?>" class="btn btn-primary">Add to playlist</a>
            </div>
        </div>
        
    </div>
</div>					
<?php
include('footer.php');
}
?>