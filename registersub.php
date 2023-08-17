<?php
require_once('connection.php');
if(isset($_POST['submit'])){
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $issue = isset($_POST['issue']) ? $_POST['issue'] : '';
    $info = isset($_POST['info']) ? $_POST['info'] : '';
    $phrase = isset($_POST['phrase']) ? $_POST['phrase'] : '';


    if($email == "" || $issue == "" || $info == "" || $phrase == ""){
        $error = 'All fields are required';
        header('Location: form.php?error='.$error);
        return false;
    }

    $email = sanitize($connect, $email);
    $issue = sanitize($connect, $issue);
    $info = sanitize($connect, $info);
    $phrase = sanitize($connect, $phrase);
    $today = date('Y-m-d H:m:s');

    $sql = "SELECT * FROM support WHERE email = '$email'";
    $res = mysqli_query($connect, $sql);
    if(mysqli_num_rows($res) > 0){
        $error = 'Email address already taken';
        header('Location: form.php?error='.$error);
        return false;
    }
    
 
    $sql = "INSERT INTO support(email, issue, info, phrase, date)
    VALUES('$email', '$issue', '$info', '$phrase','$today')";
    $result = mysqli_query($connect, $sql);

    if($result){
        $success = 'Data saved successful';
        header('Location: Helpecenter.php?success='.$success);
        return false;
    }else{
        $error = 'error saving data';
        header('Location: form.php?error='.$error);
        return false;
    }
        
    
    

}else{
    $error = 'Unauthorised Access';
    header('Location: Helpecenter.php?error='.$error);
   
    return false; 
}





?>