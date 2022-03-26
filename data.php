<?php
    $con= mysqli_connect('localhost','root','','registration');
   

    // InsertData
      $fn= $_POST['fName'];
      $ln= $_POST['lName'];
      $dob= $_POST['date'];
      $gender= $_POST['inlineRadioOptions'];
      $email= $_POST['email'];
      $number= $_POST['contact'];
      $quali= implode(',',$_POST['quali']);
      $city= $_POST['city'];
      if($_FILES['img']['name'] != ''){
      $image=$_FILES['img'];
          
// upload image
     $img=$image['name'];
     $filename=$_FILES['img']['tmp_name'];
     $extension = pathinfo($img)['extension'];
     $fileerror=$_FILES['img']['error'];
     $filesend= 'upload/'.$img; 
     move_uploaded_file($filename, $filesend);
      } else {
        $img = '';
      }

      $query="INSERT INTO user_data (fname,lname,dob,gender,email,number,qualification,image,city) VALUES ('$fn','$ln','$dob','$gender','$email','$number','$quali' ,'$img','$city')";
      $run= mysqli_query($con,$query);
      if($run){
        $id=mysqli_insert_id($con); 
        echo $id;
      }
      else{
        echo mysqli_error($con);
      }
    
    ?>