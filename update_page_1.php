<?php
    include('header.php');
    include('crud_db.php');
?>

    <?php

        if(isset($_GET['id'])){
            $id = $_GET['id'];

            $query = "select * from `students` where `id` = '$id'";

            $result = mysqli_query($connection,$query);

            if(!$result){
                die("query failed".mysqli_error());
            }
            else{
                $row = mysqli_fetch_assoc($result);
            }
        }  

    ?>

    <?php
    
        if(isset($_POST['update-student'])){
            if(isset($_GET['id'])){
                $id = $_GET['id'];
            }
            $fname = $_POST['f_name'];
            $lname = $_POST['l_name'];
            $age = $_POST['age'];
            $phone = $_POST['phone'];

            $query = "update `students` set `firstName` = '$fname', `lastName` = '$lname', `age` = '$age', `phone` = '$phone' where `id` = '$id'";

            $result = mysqli_query($connection,$query);
            
            if(!$result){
                die('query failed'.mysqli_error());
            }
            else{
                header('location:index.php?update-message=You have successfully updated the data.');
                exit();
            }

        }

        $row = [];
        if(isset($id)){$query = "select * from `students` where `id` = '$id'";
            $result = mysqli_query($connection,$query);

            if(!$result){
                die("query failed" . mysqli_error($connection));
            }
            else{
                $row = mysqli_fetch_assoc($result);
            }
        }
    
    ?>
    
    
        <form action="update_page_1.php?id=<?php echo isset($id) ?$id : ''; ?>" method="POST">        
            <div class="update-form-group">
                <label for="f_name" class="mb-1">First Name</label>
                <input type="text" name="f_name" class="form-control" minlength="3" maxlength="20" required value="<?php echo $row['firstName']?>">

                <label for="l_name" class="mb-1 mt-4">Last Name</label>
                <input type="text" name="l_name" class="form-control" minlength="3" maxlength="20" required value="<?php echo $row['lastName']?>">

                <label for="age" class="mb-1 mt-4">Age</label>
                <input type="text" name="age" class="form-control" maxlength="3" required value="<?php echo $row['age']?>">

                <label for="phone" class="mb-1 mt-4">Phone</label>
                <input type="text" name="phone" class="form-control" minlength="11" maxlength="11" required value="<?php echo $row['phone']?>">

            </div>
        
            <div class="d-flex justify-content-end mt-4">
                <input type="submit" class="btn btn-success" name="update-student" value="UPDATE">
            </div>
        
        </form>

<?php
    include('footer.php');
?>  