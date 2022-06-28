<?php
  require_once('functions/function.php');
  needtologin();
  admin();
  if(!empty($_POST))
  {

     $slug=uniqid('SEARCH-ENGINE-DATA');

     $title=$_POST['title'];
     $description=mysqli_real_escape_string($con,$_POST['description']);
     $website=mysqli_real_escape_string($con,$_POST['website']);

     $seo_keyword1=$_POST['seo_keyword1'];
     $seo_keyword2=$_POST['seo_keyword2'];
     $seo_keyword3=$_POST['seo_keyword3'];
     $seo_keyword4=$_POST['seo_keyword4'];
     $seo_keyword5=$_POST['seo_keyword5'];
     
     $insert="insert into search_engine_data(title,description,websites,seo_keyword1,seo_keyword2,seo_keyword3,seo_keyword4,seo_keyword5,slug) 
     values ('$title','$description','$website','$seo_keyword1','$seo_keyword2','$seo_keyword3','$seo_keyword4','$seo_keyword5','$slug')";
  

     $Q=mysqli_query($con,$insert);

      if($Q){
      
        
       $_SESSION['success_alert']='1';
     
       header('Location: all-index-website.php');
      
      }else{
         
       $_SESSION['success_alert']='8';
       header('Location: index-website.php');
     
    }

  }    
?>



