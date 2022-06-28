<?php
  require_once('functions/function.php');
  needtologin();
  admin();
  if(!empty($_POST))
  {

    $slug=$_POST['slug'];
    $title=$_POST['title'];
    $description=$_POST['description'];
    $website=$_POST['website'];
    $seo_keyword1=$_POST['seo_keyword1'];
    
    $seo_keyword2=$_POST['seo_keyword2'];
    $seo_keyword3=$_POST['seo_keyword3'];
    $seo_keyword4=$_POST['seo_keyword4'];
    $seo_keyword5=$_POST['seo_keyword5'];

    $update="UPDATE search_engine_data SET title='$title',description='$description',websites='$website',seo_keyword1='$seo_keyword1',seo_keyword2='$seo_keyword2',seo_keyword3='$seo_keyword3',seo_keyword4='$seo_keyword4',seo_keyword5='$seo_keyword5' WHERE slug='$slug'";
  
    $Q=mysqli_query($con,$update);

  
    if($Q){
  
      $_SESSION['success_alert']='2';
  
  
      header('Location: all-index-website.php');

    }

  }    


?>

