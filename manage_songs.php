<?php
include_once("header.php");
?>

<!--//breadcrumbs ends here-->
<div class="container-fluid my-5">
    <div class="row my-5 ">
        <div class="col-md-2"></div>
        <div class="col-md-8">
           <strong><h1>Manage Songs</h1></strong>
        </div>
    </div>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-8">
            <?php
                if(isset($_REQUEST["msg"]))
                {
                    ?>
            <div class="row alert" style="border:1px solid blue">
            
                   <?php echo $_REQUEST["msg"];?>
            </div>
                    <?php
                }
              
            ?>
            
           
           
            <table class="table table-striped table-hover">
                <tr>
                    <th>#</th>
                    <th>Category Name</th>
                    <th>Song Title</th>
                    <th>Thumbnail </th>
                    <th>Mode</th>
                    <th>Song Link</th>
                    <th>Upload Song</th>
                    <th>Description</th>
                   
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                <?php
                    $sno = 1; 
                    include("config.php");
                     $query = "SELECT songs.*, category.category_name, artists.artist_name FROM `songs` INNER JOIN `category` on songs.category=category.id INNER JOIN `artists` on artists.id=songs.artist";
                    $result = mysqli_query($conn,$query);
                    while($data = mysqli_fetch_array($result))
                    {
                ?>
                    <tr>
                        <td><?php echo $sno; ?></td>
                        <td><?php echo $data['category_name']; ?></td>
                        <td><?php echo $data['song_title']; ?></td>
                        <td>
                            <img src="category/<?php echo $data['thumbnail']; ?>" alt="" class="img img-thumbnail" width="200px">
                            
                        </td>
                        <td><?php echo $data['mode']; ?></td>
                        <td>
                        <?php if($data['song_link']!=""){
                            ?>
                               <a href="category/<?php echo $data['song_link']; ?>" alt="" >Click to view</a>
                               <?php
                        }  
                        else{
                           echo "Nothing to show"; 
                        }
                         ?></td>
                        <td>
                        <?php if($data['upload_song']!=""){
                            ?>
                               <a href="category/<?php echo $data['upload_song']; ?>" alt="" >Click to view</a>
                               <?php
                        }  
                        else{
                           echo "Nothing to show"; 
                        }
                            ?>
                            
                        </td>
                        <td><?php echo $data['description']; ?></td>
                        
                        <td>
                            <a href="edit_songs.php?id=<?php echo $data['id']?>">
                                <i class="fa fa-edit text-success fa-2x"></i>
                            </a>
                        </td>
                        <td>
                            <a href="delete_songs.php?id=<?php echo $data['id']?>">
                                <i class="fa fa-trash text-danger fa-2x">Delete</i>
                            </a>
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
</div>
<?php
include_once("footer.php");
?>