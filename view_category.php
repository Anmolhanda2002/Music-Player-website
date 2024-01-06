<?php
include('header1.php');
?>
<div class="container">
    <div class="browse">
            <div class="tittle-head two">
                <h3 class="tittle">New Releses <span class="new">New</span></h3>
                    <a href="browse.php"><h4 class="tittle third">See all</h4></a>
                <div class="clearfix"> </div>
            </div>
            
            <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                <ul id="myTab" class="nav nav-tabs" role="tablist">
                <li role="presentation" class=""><a href="#" id="3456" onclick="getData(this.id)" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">ALL</a></li>
                <?php      
                    include("config.php");
                    $query = "SELECT * FROM `category`";
                    $result = mysqli_query($conn,$query);
                    while($d = mysqli_fetch_array($result))
                    {
                    ?>
                <li role="presentation" class=""><a href="#" id="<?php echo $d['id']?>" onclick="getData(this.id)" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true"><?php echo $d['category_name']?></a></li>
                <?php
                    }
                ?>
            </ul>
            <div >
                <div  class="container "  >
                    <div class="row" id="id1"> 
                        <?php           
                    include("config.php");
                    $query = "SELECT * from `songs`";
                    $result = mysqli_query($conn,$query);
                    while($data = mysqli_fetch_array($result))
                    {
                    ?>
                    <div class="col-md-4 artist-grid">
                        <a  href="song_category.php?id=<?php echo $data['id']?>"><img src="category/<?php echo $data['thumbnail']?>" title="allbum-name"></a>
                            <a href="song_category.php?id=<?php echo $data['id']?>"><i class="glyphicon glyphicon-play-circle"></i></a>
                        <a class="art" href="song_category.php?id=<?php echo $data['id']?>"><center><span><?php echo $data['song_title'] ?></span></center>
                    <i class="fa fa-play-circle-o" style="font-size:20px"></i>
                    </a>
                    </div>
                <?php
            }
            ?>
                    </div>
                </div>
            </div>
    </div>
</div>	
                </div>
                </div>
                </div>
                <script>
			function getData(vals)
				{
					//alert(vals);
				
				var obj;
				var url="getcategory.php?x="+vals;
				if(window.XMLHttpRequest)
					{
					obj=new XMLHttpRequest();
					}
					else
					{
						obj= new ActiveXObject("Microsoft.XMLHTTP");
					}
					obj.open("GET",url,true);
					obj.send();
					obj.onreadystatechange=function()
					{
						if(obj.readyState == 4 && obj.status==200)
						{
							var res=obj.responseText;
							
							document.getElementById("id1").innerHTML=res;
						}
					}
				}
				function changebg(val){
					document.getElementById(val).style.backgroundColor='#02A388';
					document.getElementById(val).style.color='white';
				}
				function changebg1(val){
					document.getElementById(val).style.backgroundColor='';
				}
		</script>				
<?php
include('footer.php');
?>
    

