<style>
body,
html {
  height: 100%;
}

ul.nav a:hover {
  color: white !important; 
  background-color: #8C5652; 
}

.bgCenter{
  height: 350px; 
  margin-top:-20px;
  font-family: 'Poppins';
  padding-top: 60px;
}

.bgImgCenter{
    background-image: url('../Admin/img/dashboard.jpg');
    background-repeat: no-repeat;
    background-position: center; 
    position: relative;
    background-size: 100%;
}

.bgImgCenter1{
    background-image: url('../Admin/img/shopprofile.jpg');
    background-repeat: no-repeat;
    background-position: center; 
    position: relative;
    background-size: 100%;
}

.bgImgCenter2{
    background-image: url('../Admin/img/myproducts.jpg');
    background-repeat: no-repeat;
    background-position: center; 
    position: relative;
    background-size: 100%;
}

.customBtn{
  background-color: #8C5652; 
  color:white;
  border:none;
}

table{
    padding: 13px 15px;
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    margin-bottom: 50px;
}

table thead tr{
    background-color: #8C5652;
    color: #ffffff;
    text-align: left;
}

table th,
table td {
    text-align: center;
}

table tbody tr {
    border-bottom: thin solid #dddddd;
}

table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

table tbody tr:last-of-type {
    border-bottom: 2px solid #8C5652;
}

table tbody tr:hover {
    font-weight: bold;
    color: #8C5652;
}

.count{
  border-radius: 7px;
  height: 192px;
}

.active,
.dot:hover {
  background-color: white;
}

.navbar a{
  color: white;
}

.navbar a:hover {
  background: none;
  color: black;
}

li a:hover{
  color: black;
}

.product-image{
  min-height: 250px;
  max-height: 250px;
}

.businessTitle{
  padding-left:15px;
}

.individual-review{
  width: 100%;
  display: flex;
  margin-bottom: 20px;
}

.user-panel{
  padding-top: 10px;
  width: 56px;
  height: 100%;
}

.reviews{
  width: 100%;
  height: 100%;
  padding: 10px;
}

.avatar{
  height: 56px;
  width: 56px;
  background-color: #f5f5f5;
  border-radius: 50%;
  background: url(./img/avatar-placeholder.png);
  background-position: center; 
  background-size: cover;
  background-repeat: no-repeat;
}
</style>

<nav class="navbar navbar-expand-lg navbar-static-top" style="background-color: #8C5652; font-family:Poppins">

  <div class="container-fluid" style="background-color: #8C5652;">

    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="background-color: #8C5652;">

      <a class="navbar-brand mt-2 mt-lg-0" href="#">
      <i class="fas fa-crow fa-1x me-3" style="padding: 0 1rem 0;"></i>
      Skincarely
      </a>

      <ul class="nav navbar-nav" style="background-color: #8C5652; text-decoration: none;">
        <li><a href="merchant_dashboard.php">Dashboard</a></li>
        <li><a href="shop_verification.php">Shop Profile</a></li>
        <li><a href="myproducts_verification.php">My Products</a></li>
      </ul>
      
    </div>

    <ul class="nav navbar-nav navbar-right" style="background-color: #8C5652;">
      <li><a style="color: white;" href="logout.php"><span class="glyphicon glyphicon-log-out" style="padding: 0 1rem 0;"></span> Logout </a></li>
    </ul>

  </div>

</nav>