<style>
body,
html {
  height: 100%;
}

ul.nav a:hover {
  color: white !important; 
  background-color: #8C5652; 
}

.bgImgCenter{
    background-image: url('../Admin/img/dashboard.jpg');
}

.bgImgCenter1{
    background-image: url('../Admin/img/shopprofile.jpg');
}

.bgImgCenter2{
    background-image: url('../Admin/img/myproducts.jpg');
}

.productImage{
  height: 350px;
  width: 350px;
}

.bgCenter{
  background-repeat: no-repeat;
  background-position: center; 
  position: relative;
  background-size: 100%;
  height: 350px;
  font-family: 'Poppins';
  padding-top: 60px;
}

@media (max-width: 770px) {
  .bgCenter{
    padding-top: 40px;
  }
  .welcomeTitle{
    font-size: 25px;
  }
}

@media (max-width: 635px) {
  .bgCenter{
    height: 309px;
  }
  .welcomeTitle{
    font-size: 20px;
  }
  .welcomeStatement{
    font-size: 14px;
  }
}

@media (max-width: 550px) {
  .bgCenter{
    height: 309px;
  }
  .welcomeTitle{
    font-size: 20px;
  }
  .welcomeStatement{
    font-size: 14px;
  }
}

@media (max-width: 425px) {
  .bgCenter{
    height: 234px;
    padding-top: 10px;
  }
  .welcomeTitle{
    font-size: 15px;
    margin-bottom: 0px;
  }
  .welcomeStatement{
    font-size: 12px;
  }
}

@media (max-width: 375px) {
  .bgCenter{
    height: 211px;
    padding-top: 0px;
  }
  .welcomeTitle{
    font-size: 15px;
    margin-bottom: 0px;
  }
  .welcomeStatement{
    font-size: 12px;
    margin-bottom: 0;
  }
  .productImage{
    height: 250px;
    width: 250px;
  }
}

@media (max-width: 320px) {
  .bgCenter{
    height: 176px;
  }
  .welcomeTitle{
    font-size: 12px;
  }
  .welcomeStatement{
    font-size: 8px;
  }
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
  height: 233px;
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

header {
  background-color: #8C5652;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  min-height: 104px;
  width: 100%;
  padding: 0px 20px;
}

@media (min-width: 820px) {
  header {
    padding: 0px 109px;
  }
}

nav {
  width: 100%;
  max-width: 500px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
}

@media (min-width: 820px) {
  nav {
    max-width: 1200px;
  }
}

.nav__logo span:nth-of-type(1) {
  color: #8C5652;
}

@media (min-width: 820px) {
  .nav__logo {
    max-width: 1200px;
  }
}

.nav__hamburger {
  border: 1px solid #FFF9F9;
  border-radius: 10px;
  padding: 10px 20px;
  color: #FFF9F9;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

@media (min-width: 931px) {
  .nav__hamburger {
    display: none;
  }
}

.nav__hamburger:hover {
  cursor: pointer;
  background-color: #FFF9F9;
  color: #8C5652;
  -webkit-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
          box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
}

.nav__hamburger:active {
  background-color: #FFFFFF;
}

.nav__links {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.nav__links a {
  color: #FFF9F9;
  text-decoration: none;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

.nav__links a:hover {
  color: #FFFFFF;
}

.nav__links a:not(:last-child) {
  margin-right: 30px;
}

.nav__links a:last-child {

  padding: 10px 20px;
  color: #FFF9F9;
  border: 1px solid #FFF9F9;
  padding: 10px 40px;
  border-radius: 10px;
  font-weight: 600;
  -webkit-box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
          box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
}

.nav__links a:last-child:hover {
  background-color: #FFFFFF;
  color: #8C5652;
  -webkit-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
          box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
}

.nav__links a:last-child:active {
  background-color: #51322F;
  -webkit-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
          box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
}

@media (max-width: 930px) {
  .nav__links {
    display: none;
  }
}

.hamburger__menu {
  width: 100%;
  position: absolute;
  top: 0;
  left: 0;
  background-color: #fafaff;
  -webkit-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
          box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
  border-radius: 5px;
  z-index: 100;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  padding: 0px 20px;
  height: 0px;
  overflow: hidden;
  -webkit-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
}

.hamburger__menu a {
  color: #04192e;
  text-decoration: none;
}

.hamburger__menu a:hover {
  color: #8C5652;
}

.hamburger__menu button {
  background-color: #FFF9F9;
  color: white;
  padding: 10px 40px;
  border-radius: 20px;
  font-weight: 600;
  border: 1px solid transparent;
  -webkit-box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
          box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
}

.hamburger__menu button:hover {
  background-color: #51322F;
  -webkit-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
          box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
}

.hamburger__menu button:active {
  background-color: #51322F;
}

@media (min-width: 930px) {
  .hamburger__menu {
    display: none;
  }
}

.welcome-container {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  background-color: #f6fafe;
  padding: 0px 20px;
  border-bottom-right-radius: 50px;
}

.welcome {
  width: 100%;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  position: relative;
}

@media (min-width: 820px) {
  .welcome {
    display: -ms-grid;
    display: grid;
    -ms-grid-columns: 1fr 1fr;
        grid-template-columns: 1fr 1fr;
    max-width: 1200px;
    gap: 50px;
  }
}

#brand-container{
  color: #FFF;
}

#brand-container:hover{
  cursor: pointer;
}

#skincarely-crow{
  color: #FFF;
}
</style>

<header>
  <nav>
      <a class="navbar-brand mt-2 mt-lg-0" href="merchant_dashboard.php" id="brand-container">
      <i class="fas fa-crow fa-1x me-3" style="padding: 0 1rem 0;" id="skincarely-crow"></i>
      Skincarely
      </a>

    <div class="nav__hamburger">Menu</div>

    <div class="nav__links">
      <a href="merchant_dashboard.php">Dashboard</a>
      <a href="shop_verification.php">Shop Profile</a>
      <a href="myproducts_verification.php">My Products</a>
      <a href="logout.php"><span class="glyphicon glyphicon-log-out" style="padding: 0 1rem 0;"></span> Logout </a>
    </div>
  </nav>
</header>

<div class="welcome-container">
  <section class="welcome">
    <div class="hamburger__menu">
      <a href="merchant_dashboard.php">Dashboard</a>
      <a href="shop_verification.php">Shop Profile</a>
      <a href="myproducts_verification.php">My Products</a>
      <a href="logout.php"><span class="glyphicon glyphicon-log-out" style="padding: 0 1rem 0;"></span> Logout </a>
    </div>
  </section>
</div>

<script src="navbar-script.js"></script>