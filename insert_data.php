<?php
    include('crud_db.php');

    if(isset($_POST['add-student'])){
        
        $fName = $_POST['f_name'];
        $lName = $_POST['l_name'];
        $age = $_POST['age'];
        $phone = $_POST['phone'];

        $flag = true;
        
        if($fName == "" || empty($fName)){
            header('location:index.php?message=You need to fill the first name!');
            exit();
        }
        if($lName == "" || empty($lName)){
            header('location:index.php?message=You need to fill the last name!');
            exit();
        }
        if($phone[0] != "0" || $phone[1] != "1" || !($phone[2] == "0" || $phone[2] == "1" || $phone[2] == "2" || $phone[2] == "5")){
            header('location:index.php?message=You should input a valid phone number!');
            exit();
        }

        for($i = 0;$i < strlen($fName);$i++){
            if($fName[$i] >= "0" && $fName[$i] <= "9"){
                $flag = false;
                break;
            }
        }

        if(!$flag){
            header('location:index.php?message=You shouldn\'t input numbers in the first name !');
            exit();

        }

        for($i = 0;$i < strlen($lName);$i++){
            if($lName[$i] >= "0" && $lName[$i] <= "9"){
                $flag = false;
                break;
            }
        }

        if(!$flag){
            header('location:index.php?message=You shouldn\'t input numbers in the last name !');
            exit();

        }

        for($i = 0;$i < strlen($age);$i++){
            if(!($age[$i] >= "0" && $age[$i] <= "9")){
                $flag = false;
                break;
            }
        }

        if(!$flag){
            header('location:index.php?message=You shouldn\'t input characters in the age !');
            exit();

        }

        for($i = 0;$i < strlen($phone);$i++){
            if(!($phone[$i] >= "0" && $phone[$i] <= "9")){
                $flag = false;
                break;
            }
        }

        if(!$flag){
            header('location:index.php?message=You shouldn\'t input characters in the phone number !');
            exit();

        }

        else{
            $query = "insert into `students` (`firstName`,`lastName`,`age`,`phone`) values ('$fName','$lName','$age','$phone')";
            $result = mysqli_query($connection,$query);

            if(!$result){
                die("Query Failed: ". mysqli_error($connection));
            }
            else{
                header("location:index.php?success-message=Your student has been added successfully");
                exit();
            }
        }

        

    }


?>