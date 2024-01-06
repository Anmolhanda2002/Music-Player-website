<?php
include_once("header.php");
?>
<div class="container-fluid my-5">
    <div class="row my-5 ">
        <div class="col-md-2"></div>
        <div class="col-md-8">
           <strong><h1>View Users</h1></strong>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <?php
            if(isset($_REQUEST["msg"]))
            {
                echo $_REQUEST["msg"];
            }
            ?>
            <table class="table table-striped table-hover">
                <tr>
                    <th>#</th>
                    <th>User Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Contact</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                <?php
                    $sno = 1; 
                    include("config.php");
                    $query = "SELECT * FROM `users`";
                    $result = mysqli_query($conn,$query);
                    while($data = mysqli_fetch_array($result))
                    {
                ?>
                    <tr>
                        <td><?php echo $sno; ?></td>
                        <td><?php echo $data['user_name']; ?></td>
                        <td>
                        <?php echo $data['email']; ?>
                            
                        </td>
                        <td>
                        <?php echo $data['password']; ?>
                            
                        </td>
                        <td>
                        <?php echo $data['contact']; ?>
                            
                        </td>
                        <td>
                            <a href="edit_users.php?id=<?php echo $data['id']?>">
                                <i class="fa fa-edit text-success fa-2x"></i>
                            </a>
                        </td>
                        <td>
                            <a href="delete_users.php?id=<?php echo $data['id']?>">
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