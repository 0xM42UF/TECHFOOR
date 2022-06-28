<?php
  require_once('functions/function.php');
  needtologin();
  get_header();
  get_sidebar();
  admin();

  $slug=$_GET['e'];
  $select="SELECT * FROM search_engine_data WHERE slug='$slug'";

  $Query=mysqli_query($con,$select);
  $data=mysqli_fetch_assoc($Query);
    
?>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Main row -->
        <div class="row">
        <div class="col-md-12">
        <div class="card">
          
        
          <div class="card-header bg-light">
           
            <div class="row">
              
            
              <div class="col-md-10 card_header_text">
                <b>Update Indexed Website Information</b>
              </div>
              
              
              
              <div class="col-md-2 card_header_for_one_button">
              </div>
            </div>
          </div>
          <form method="post" action="submit-edit-index-website.php" enctype="multipart/form-data">
          <input type="hidden" class="form-control" id="" name="slug" value="<?= $slug ?>" required>
            <div class="card-body">  
            <div class="form-group row">
              
            <label for="" class="col-sm-3 col-form-label">Title <span class="text-danger">*</span></label>    
              <div class="col-sm-8">

                <input type="text" class="form-control" id="" name="title" value="<?=$data['title']?>" required>            
                </div>
              
                <div class="col-sm-1"></div>
              </div>
              
              <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label">Description <span class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="" name="description" value="<?=$data['description']?>" required>
                </div>
                <div class="col-sm-1"></div>
              </div>
              <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label">Website <span class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="" name="website" value="<?=$data['websites']?>" required>
                </div>
                <div class="col-sm-1"></div>
              </div>
              <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label">SEO Keyword 1 </label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="" name="seo_keyword1" value="<?=$data['seo_keyword1']?>">
                </div>
                <div class="col-sm-1"></div>
              </div>


              <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label">SEO Keyword 2 </label>
                <div class="col-sm-8">
                  
                  <input type="text" class="form-control" id="" name="seo_keyword2" value="<?=$data['seo_keyword2']?>">
                
                </div>
                <div class="col-sm-1"></div>
              </div>
              <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label">SEO Keyword 3 </label>
                <div class="col-sm-8">
                
                  <input type="text" class="form-control" id="" name="seo_keyword3" value="<?=$data['seo_keyword3']?>">
                
                </div>
                <div class="col-sm-1"></div>
              </div>
              <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label">SEO Keyword 4 </label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="" name="seo_keyword4" value="<?=$data['seo_keyword4']?>">
                </div>
                <div class="col-sm-1"></div>
              </div>
              <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label">SEO Keyword 5 </label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="" name="seo_keyword5" value="<?=$data['seo_keyword5']?>">
                </div>
                <div class="col-sm-1"></div>
              </div>
          </div>
          
          <div class="card-footer text-muted text-center">
            
            <button type="submit" class="btn btn-success">Update</button>
          </div>
          
        
          </form>
        </div>
      
      </div>        
      
      <!-- /.content -->
      
    
    </div>
    <!-- /.content-wrapper -->
  
<?php

  get_footer();


?>


