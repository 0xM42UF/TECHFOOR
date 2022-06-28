<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title> TECHFOOR </title>
        <!-- add icon link -->
        <!-- css -->
        <link rel = "icon" href ="websites-assets/img/icon_logo.png" type = "image/x-icon">
        <link rel="stylesheet" href="websites-assets/css/all.min.css">
        <link rel="stylesheet" href="websites-assets/css/all.css">
        <link rel="stylesheet" href="websites-assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="websites-assets/css/style.css">
        <!--js--> 
        <script src="websites-assets/js/jquery-3.4.1.min.js"></script>
        <script src="websites-assets/js/sweetalert2.all.min.js"></script> 
        <script src="websites-assets/js/custom.js"></script> 
    </head>
    <body>    


<style>

* {
  margin: auto;
  padding: 0px;
  box-sizing: border-box;
}

body {
  height: 90vh;
  background-image: linear-gradient(to bottom right, red, yellow);
}

.main {
  max-width: 800px;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 70vw;
  
  margin-top: -59px;
  height: 90vh;

}
.s_input {

  height: 50px;
  border: none;
  
  outline: none;

  
  border-radius: 4px 0px 0px 4px;


  width: 100%;
  padding: 11px;
  
  font-size: 13pt;
}

.s_input::placeholder {
  color: black;

}
.b_button {

  height: 50px;
  border: none;
  
  outline: none;
  border-radius: 0px 4px 4px 0px;
  
  
  width: 3rem;

  color: black;


  background-color: white;


}

.btn_sign_in{

    padding-top: 30px;

    padding-left: 1220px;
}

</style>

    <div class="btn_sign_in">
        <a class="btn btn-warning btn-lg" href="login.php">Sign In</a>
    </div>
    
    <form method="get" action="search.php">

        <div class="main">
            
                <input name="search" placeholder="Search .." class="s_input" required /><button type="submit" id="" class="b_button"><i class="fas fa-search"></i></button>
    
        </div>


    </form>
    
    
    
    <!-- js -->


        <script src="websites-assets/js/bootstrap.min.js"></script>
        <script src="websites-assets/js/bootstrap.bundle.min.js"></script>

    </body>


</html>


