<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skincarely | Create Shop</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Calistoga' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" >
    <!-- Font awesome icons -->
    <script src="https://kit.fontawesome.com/d9fb1896a3.js" crossorigin="anonymous"></script>

    <link href="css/style.css" rel="stylesheet" >

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body style="background-color: #f7f3f2;">

<?php include('navigation.php'); ?>

<!--------- CONTENT -------------------->

<div class="container" style="font-family: Poppins;">
  <h1 class class="display-1">Create Shop Profile</h1>
    <br>
    <p> Create your shop profile first. </p>          
    <br> 
</div>

<br>

<hr class="my-4">

<br>

<div class="container" style="font-family: Poppins;">
    <form action="shop_creation.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="shopname">Shop Name</label>
          <input type="text" class="form-control" id="shopname" name="shopname">
        </div>

        <div class="form-group">
          <label for="shopdescription">Shop Description</label>
          <textarea class="form-control" id="shopdescription" rows="3" name="shopdescription"></textarea>
        </div>

        <div class="form-group">
          <label for="shoplogo">Shop Logo</label>
          <input type="file" class="form-control-file" id="shoplogo" name="shoplogo">
        </div>

        <div class="form-group">
          <label for="mainbranch">Main Branch</label>
        </div>

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="openinghours">Opening Hours</label><br>
            <input type="time" id="openinghours" openinghours="appt" style="width: 100%; text-align:center" class="form-control" name="openinghours">
          </div>
          <div class="form-group col-md-6">
            <label for="closinghours">Closing Hours</label><br>
            <input type="time" id="closinghours" name="closinghours" style="width: 100%; text-align:center;" class="form-control" name="closinghours">
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="landline">Landline No.</label>
            <input type="text" class="form-control" id="landline" name="landline">
          </div>
          <div class="form-group col-md-6">
            <label for="mobile">Mobile No.</label>
            <input type="text" class="form-control" id="mobile" name="mobile">
          </div>
        </div>

        <div class="form-group">
          <label for="socials">Social Media Link</label>
          <input type="text" class="form-control" id="socials" name="socials">
        </div>

        <button type="submit" class="btn btn-primary">Create</button>

    </form>
</div>


<br>



<!-- dito lalabas how the shop looks like -->
<!-- also, verif if there is a shop created for the vendor already or wala pa - change create shop button accordingly -->

  

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
<script>
    var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>

</body>
</html>