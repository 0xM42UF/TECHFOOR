<?php
  require_once('functions/function.php');
  needtologin();
  get_header();
  get_sidebar();
  admin();

  $slug=$_GET['v'];
  $select="SELECT * FROM search_engine_data where slug='$slug'";

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
                <b>View Indexed Website Information</b>
              </div>
              <div class="col-md-2 card_header_for_one_button">
                
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
              <table class="table table-striped table-bordered view_table">
                <tr>
                  <td>Title</td>
                  <td>:</td>
                  <td>
                      <?=$data['title']?>
                  </td>
                </tr>
                <tr>
                  <td>Description</td>
                  <td>:</td>
                  <td>
                      <?=$data['description']?>
                  </td>
                </tr>
                <tr>
                  
                  <td>Website</td>
                  
                  
                  <td>:</td>
                  <td>
                  
                    <a href="<?=$data['websites']?>"><?=$data['websites']?></a>
                  </td>
                
                </tr>
                <tr>
                 
                  <td>SEO Keyword 1</td>
                  <td>:</td>
                  
                  <td>
                      
                  
                    <?=$data['seo_keyword1']?>
                  </td>
                </tr>
                
                <tr>
                  
                  <td>SEO Keyword 2</td>
                  <td>:</td>
                  <td>                      
                    <?=$data['seo_keyword2']?>
                  </td>
                </tr>
                
                <tr>
    
                  <td>SEO Keyword 3</td>  
                  <td>:</td>
                  <td>    
                    <?=$data['seo_keyword3']?>
                  </td>
                </tr>
                <tr>
                  <td>SEO Keyword 4</td>
                  
                  <td>:</td>
                  <td>    
                    <?=$data['seo_keyword4']?>
                  </td>
                </tr>
                <tr>
                  <td>SEO Keyword 5</td>
                  <td>:</td>
                  <td>
                      
                    <?=$data['seo_keyword5']?>
                  
                  </td>
                </tr>


              </table>
            </div>
            
            <div class="col-md-2"></div>
            
            </div>
          
          
          </div>
          <div class="card-footer text-muted">

          </div>
        </div>
      
      </div>        
      <!-- /.content -->
      
    </div>
    <!-- /.content-wrapper -->
  
<?php
  

  get_footer();

?>

