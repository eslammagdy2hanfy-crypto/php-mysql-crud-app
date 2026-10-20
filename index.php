<?php include('header.php');?>
<?php include('crud_db.php');?>

        <div class="box1">
        
            <h2>ALL STUDENTS</h2>
            <button class="btn btn-primary mb-2" data-toggle="modal" data-target="#add-students"> ADD STUDENTS </button>
        
        </div>

        <?php
            if(isset($_GET['message'])){
                echo "<h6 id='error-message'>" . $_GET['message'] . "</h6>";
            }
            if(isset($_GET['success-message'])){
                echo "<h6 id='success-message'>" . $_GET['success-message'] . "</h6>";
            }
            if(isset($_GET['update-message'])){
                echo "<h6 id='update-message'>" . $_GET['update-message'] . "</h6>";
            }
            if(isset($_GET['delete-message'])){
                echo "<h6 id='delete-message'>" . $_GET['delete-message'] . "</h6>";
            }
        ?>

        <table class="table table-hover table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Age</th>
                    <th>Phone</th>
                    <th>UPDATE</th>
                    <th>DELETE</th>
                </tr>
            </thead>
            <tbody>
                <?php

                    $query = "select * from `students` ";

                    $result = mysqli_query($connection,$query);

                    if(!$result){
                        die("query failed".mysqli_error());
                    }
                    else{
                        $counter = 1;
                        while($row = mysqli_fetch_assoc($result)){
                            ?>
                                <tr>
                                    <td><?php echo $counter++;?></td>
                                    <td><?php echo $row['firstName'];?></td>
                                    <td><?php echo $row['lastName'];?></td>
                                    <td><?php echo $row['age'];?></td>
                                    <td><?php echo $row['phone'];?></td>
                                    <td> <a href="update_page_1.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm rounded" id="upd">update</a> </td>
                                    <td> <a href="delete_page.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm rounded" id="del">delete</a> </td>
                                </tr>
                            <?php
                        }
                    }

                ?>
            </tbody>
        </table>
         <form action="insert_data.php" method="POST">

            <div class="modal fade" id="add-students" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">ADD STUDENT</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                            <div class="form-group">
                                <label for="">First Name</label>
                                <input type="text" name="f_name" class="form-control" minlength="3" maxlength="20" required>

                                <label for="">Last Name</label>
                                <input type="text" name="l_name" class="form-control" minlength="3" maxlength="20" required>

                                <label for="">Age</label>
                                <input type="text" name="age" class="form-control" maxlength="3" required>

                                <label for="">Phone</label>
                                <input type="text" name="phone" class="form-control" minlength="11" maxlength="11" required>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-success" name="add-student" value="ADD">
                    </div>
                    </div>
                </div>
            </div>
        </form>



<?php include('footer.php');?>