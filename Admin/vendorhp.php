<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skincarely | Sign Up</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Calistoga' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" >
    <!-- Font awesome icons -->
    <script src="https://kit.fontawesome.com/d9fb1896a3.js" crossorigin="anonymous"></script>

    <link href="css/style.css" rel="stylesheet" >

<style>
    
    </style>


</head>
<body style="background-color: #f7f3f2;">

<div class="sidenav">
    <img src="img/SKINCARELY.png" style="width: 100%;">
    <br><hr style="width: 50%; margin:auto; color: #FBF7EA"><br>
    <a href="vendorhp.php">Dashboard</a>
    <button class="dropdown-btn">Business Insights 
    <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
        <a href="#">Ratings</a>
        <a href="#">Followers</a>
        <a href="#">Page Engagement</a>
        <a href="#">Product Engagement</a>
    </div>
    <button class="dropdown-btn">My Products 
    <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
        <a href="#">Product List</a>
        <a href="#">Reviews</a>
    </div>
    <a href="#services">Shop Profile</a>
    <a href="skincarely.php">Temp Logout</a>
</div>

<div class="main">
    <br><br>
  <h2>Merchant Dashboard</h2>
</div>  
  

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