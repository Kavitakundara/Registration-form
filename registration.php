<?php
// if(!empty($_POST['firstName'])){
// $name=$_POST['firstName'];
// unset($_SESSION['error']['name']);
// }
// else{
//   $_SESSION['error']['name']="Please Enter the name";
// }

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="ext.css">

    <title>Hello, world!</title>
  </head>
  <body>
  <section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>

    <form action="" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" name="fName" id="firstName" class="form-control form-control-lg" />
                   <span class="text-danger d-none" id="fspan">Plese Enter value</span>
                    <label class="form-label" for="firstName">First Name</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text"name="lName" id="lastName" class="form-control form-control-lg" />
                   <span class="text-danger d-none" id="lspan">Plese Enter value</span>
                    <label class="form-label" for="lastName">Last Name</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 d-flex align-items-center">

                  <div class="form-outline datepicker w-100">
                    <input
                      type="date"
                      name="date"
                      class="form-control form-control-lg"
                      id="birthdayDate"
                    />
                  <span class="text-danger d-none" id="datespan">Plese select value</span>
                  <label for="birthdayDate" class="form-label">Birthday</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <h6 class="mb-2 pb-1">Gender: </h6>

                  <div class="form-check form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="inlineRadioOptions"
                      id="femaleGender"
                      value="Female"
                      checked
                    />
                    <label class="form-check-label" for="femaleGender">Female</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="inlineRadioOptions"
                      id="maleGender"
                      value="Male"
                    />
                    <label class="form-check-label" for="maleGender">Male</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="inlineRadioOptions"
                      id="otherGender"
                      value="Other"
                    />
                   <span class="text-danger d-none" id="gspan">Plese Select value</span>
                    <label class="form-check-label" for="otherGender">Other</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="email" name="email" id="emailAddress" class="form-control form-control-lg" />
                    <span class="text-danger d-none" id="mailspan">Plese Enter value</span>
                    <label class="form-label" for="emailAddress">Email</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="tel" name="contact" id="phoneNumber" class="form-control form-control-lg" />
                    <span class="text-danger d-none" id="telspan">Plese Enter value</span>
                   
                    <label class="form-label" for="phoneNumber">Phone Number</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-6">
               <input type="checkbox" name="quali[]" value="bca" id="qualification">BCA </input>
               <input type="checkbox" name="quali[]" value="mca" id="qualification">MCA</input>
               <input type="checkbox" name="quali[]" value="ba" id="qualification">BA</input>
               <input type="checkbox" name="quali[]" value="mcom" id="qualification">MCOM</input>
               <input type="checkbox" name="quali[]" value="ca" id="qualification">CA</input>
                  <span class="text-danger d-none" id="span">Plese select value</span>
                 <label class="form-label select-label">Choose option</label>
                </div>


                <div class="col-6">
                  <input type="file" name="img" accept="image/png,image/jpeg">
                </div>
              </div>
            <div class="row">
              <div class="col-6">
              <select class="form-select form-select-sm" name="city" id="#selectct" aria-label=".form-select-sm example">
                  <option selected>City</option>
                  <option value="Delhi">Delhi</option>
                  <option value="Mumbai">Mumbai</option>
                  <option value="Kolkata">Kolkata</option>
                  <span class="text-danger d-none" id="ctspan">Plese select value</span>
              </select>
              </div>
            </div>
             
              <div class="mt-4 pt-2">
                <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script>
 $('form').submit(function(event) {
        event.preventDefault();//to stop the action functio in the form
        let form = $('form').serialize();//For sending all data together
        let name = $('#firstName').val();
        let lname = $('#lastName').val();
        let bdate = $('#date').val();
        let gender = $('#inlineRadioOptions').val();
        let number = $('#phoneNumber').val();
        let mail = $('#emailAddress').val();
        let quali = $('#qualification').val();
        let city = $('#selectct').val();

        let error = 0;
        let formData = new FormData($('form')[0]);

        if(name == '') {
          error++; 
          $('#firstName').addClass('bg-outline-danger');
          $('#fspan').removeClass('d-none');
        }
        if(lname == '') {
          error++;
          $('#lastName').addClass('bg-outline-danger');
          $('#lspan').removeClass('d-none');
        }
        if(bdate == '') {
          error++;
          $('#date').addClass('bg-outline-danger');
          $('#datespan').removeClass('d-none');
        }
        if(gender == '') {
          error++;
          $('#inlineRadioOptions').addClass('bg-outline-danger');
          $('#gspan').removeClass('d-none');
        }
        if(mail == '') {
          error++;
          $('#emailAddress').addClass('bg-outline-danger');
          $('#mailspan').removeClass('d-none');
        }
        if(number == '') {
          error++;
          $('#phoneNumber').addClass('bg-outline-danger');
          $('#telspan').removeClass('d-none');
        }
        if(quali == '') {
          error++;
          $('#qualification').addClass('bg-outline-danger');
          $('#qspan').removeClass('d-none');
        }
        if(city == '') {
          error++;
          $('#selectct').addClass('bg-outline-danger');
          $('#ctspan').removeClass('d-none');
        }
        if(error == 0) {
        $.ajax({
          method: 'post',
          url: 'data.php', // send data on this page
          data: formData,
          processData: false,
          contentType: false,
          success: function(response) {
            alert(response);
            $('form').trigger('reset');
          }
        });
      }
      });
  
  </script>
  </body>
</html>