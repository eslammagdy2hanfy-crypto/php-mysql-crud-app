<?php
    include('header.php');
    include('crud_db.php');
?>

    <?php

        if(isset($_GET['id'])){
            $id = $_GET['id'];

            $query = "delete from `students` where `id` = '$id'";
            $result = mysqli_query($connection,$query);
            
            if(!$result){
                die('query failed'.mysqli_error());
            }
            else{
                header('location:index.php?delete-message=You have successfully delete student.');
                exit();
            }
        }

    ?>

<?php
    include('footer.php');
?>