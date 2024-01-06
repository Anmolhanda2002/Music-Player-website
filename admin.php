<?php
include('header.php');
?>
<style>
    .container{
        margin-top:30px;
    }
	#welcome{
     
        width:100%;
        border:1px solid black;
        margin:10px;
        padding-top:90px;
        
    }
    .newone{
        border:2px solid #20A388;
        box-shadow: 5px 5px 9px #20A388;
        padding:40px;
        margin-top:20px;
        margin-bottom: 20px;;
    }
</style>
<div class="container">
	<div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8" id="welcome">
           <center> <h1>WELCOME ADMIN </h1></center>
           <div class="row">
                <div class="col-md-1"></div>
                <a href="manage_songs.php">
                    <div class="col-md-4 newone">
                        <center>Total Songs</center>
                        <center>
                            <?php
                            $query="SELECT * from `songs`";
                            include('config.php');
                            $res=mysqli_query($conn,$query);
                            $data=mysqli_num_rows($res);
                            echo $data;
                            ?>
                        </center>
                    </div>
                </a>
                <div class="col-md-2"></div>
                <a href="manage_category.php">
                    <div class="col-md-4 newone">
                        <center>Total Category</center>
                        <center>
                             <?php
                            $query="SELECT * from `category`";
                            include('config.php');
                            $res=mysqli_query($conn,$query);
                            $data=mysqli_num_rows($res);
                            echo $data;
                            ?> 
                        </center>
                    </div>
                </a>
           </div>
           <div class="row">
                <div class="col-md-1"></div>
                <a href="manage_artists.php">
                    <div class="col-md-4 newone">
                        <center>Total Artists</center>
                        <center>
                            <?php
                            $query="SELECT * from `artists`";
                            include('config.php');
                            $res=mysqli_query($conn,$query);
                            $data=mysqli_num_rows($res);
                            echo $data;
                            ?>
                        </center>
                    </div>
                </a>
                <div class="col-md-2"></div>
                <a href="view_users.php">
                    <div class="col-md-4 newone">
                        <center>Total Users</center>
                        <center>
                            <?php
                            $query="SELECT * from `users`";
                            include('config.php');
                            $res=mysqli_query($conn,$query);
                            $data=mysqli_num_rows($res);
                            echo $data;
                            ?>
                        </center>
                    </div>
                </a>
           </div>

        </div>
    </div>
</div>
</div>
<?php
include('footer.php');
?>