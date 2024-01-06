
<?php
if(isset($_REQUEST['id'])){
    $id=$_REQUEST['id'];
    include('config.php');
    $q ="SELECT songs.*, category.category_name, artists.artist_name FROM `songs` INNER JOIN `category` on songs.category=category.id INNER JOIN `artists` on artists.id=songs.artist where songs.artist  ='$id'";
    $res = mysqli_query($conn,$q);
include('header1.php');
?>
<div class="container">
    <div class="albums row">
        <div class="tittle-head">
            <h3 class="tittle">Songs <span class="new">New</span></h3>
            <div class="clearfix"> </div>
        </div>
        <?php     
            while($d = mysqli_fetch_array($res))
        {
        ?>
        <div class="col-md-4 content-grid">
            <a class="play-icon popup-with-zoom-anim" href="song_category.php?id=<?php echo $d['id']?>"><img src="category/<?php echo $d['thumbnail']?>" title="<?php echo $d['song_title']?>"></a>
            <h2><?php echo $d['song_title']?></h2>
            <a class="button play-icon popup-with-zoom-anim" href="song_category.php?id=<?php echo $d['id']?>">Listen now</a>
        </div>
        <?php 
        }
        ?>
        <div class="clearfix"> </div>
    </div>
</div>					
<?php
include('footer.php');
}
?>