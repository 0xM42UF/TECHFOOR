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
  height: 100%;

  background-image: linear-gradient(to bottom right, red, yellow);
}

.main {
  max-width: 800px;
  display: flex;
  align-items: center;
  justify-content: center;
  
  width: 70vw;  
  margin-top: -195px;

  margin-bottom: -196px;
  height: 90vh;

}


.search{


  max-width: 800px;  
  align-items: center;
  
  justify-content: center;
  width: 70vw;
  
  
  height: 100%;

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

</style>
    

<?php

require_once('functions/function.php');

if(!empty($_GET))
{
  
  $search = $_GET['search'];
  
  $select="SELECT * FROM search_engine_data WHERE seo_keyword1 LIKE '%".$search."%' OR seo_keyword2 LIKE '%".$search."%' OR seo_keyword3 LIKE '%".$search."%' OR seo_keyword4 LIKE '%".$search."%' OR seo_keyword5 LIKE '%".$search."%'";
  
  
  $query=mysqli_query($con,$select);
              
  if($query){

  }else{
  
    echo "no data";
  }
  
}
?>

    <form method="get" action="search.php">
    

      <div class="main">      
        <input name="search" placeholder="Search .." class="s_input" required /><button type="submit" id="" class="b_button"><i class="fas fa-search"></i></button>

      </div>
    </form>
    
    <?php
      foreach($query as $data){
    
    ?>

    
    <div class="search">
      <?php $description = $data['description']; ?>
    
      <?php $title = $data['title']; ?>
  
    
      <a href="<?= $data['websites']; ?>"><h3 class="text-white"><?php echo mb_strimwidth($title, 0, 50, "....."); ?></h3></a>
      <?php echo mb_strimwidth($description, 0, 300, "....."); ?>
      
    </div>    
    <hr>

  
    <?php

      
      }

    
    ?>

    <!-- js -->
    


        <script src="websites-assets/js/bootstrap.min.js"></script>

        <script src="websites-assets/js/bootstrap.bundle.min.js"></script>





      </body>


</html>






