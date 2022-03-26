<?php
$con= mysqli_connect('localhost','root','','registration');
$query= "SELECT * FROM user_data" ;
$run=mysqli_query($con,$query);
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Birthday</th>
      <th scope="col">Gender</th>
      <th scope="col">Email</th>
      <th scope="col">Contact</th>
      <th scope="col">Qualification</th>
    </tr>
  </thead>
  <tbody>
      <?php $i=1; while($data=mysqli_fetch_assoc($run)){ ?>
    <tr>
      <th scope="row">1</th>
      <td><?php echo $data['fname'];?></td>
      <td><?php echo $data['lname'];?></td>
      <td><?php echo $data['dob'];?></td>
      <td><?php echo $data['gender'];?></td>
      <td><?php echo $data['email'];?></td>
      <td><?php echo $data['number'];?></td>
      <td><?php echo $data['qualification'];?></td>
  <td><a href="Edit.php?id=<?php echo $data['id'];?>" class="btn btn-outline-success">Edit</a></td>


    </tr>
    <?php } ?>
  </tbody>
</table>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>