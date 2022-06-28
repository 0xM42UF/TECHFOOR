<?php
  require_once('functions/function.php');
  needtologin();
  get_header();
  get_sidebar();
  admin();

  $select='SELECT * FROM search_engine_data ORDER BY id DESC';
  $Query=mysqli_query($con,$select);

  if($_SESSION['success_alert']=='1'){
  ?>
  <script>
    swal({title: "Done!", text: "Website Successfully Indexed!", icon: "success", button: "OK",});
  </script>
  <?php
    $_SESSION['success_alert']='0';
  }elseif($_SESSION['success_alert']=='2'){
  ?>
  
  <script>
    
    
    swal({title: "Done!", text: "Indexed Website Information Updated Successfully!", icon: "success", button: "OK",});
  
  </script>
  
  
  <?php
    $_SESSION['success_alert']='0';
  }elseif($_SESSION['success_alert']=='3'){
  ?>
  <script>
  
    swal({title: "Done!", text: "Website Deleted Successfully!", icon: "success", button: "OK",});
  </script>
  
  <?php
    $_SESSION['success_alert']='0';
  }
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
                    <b>All Indexed Websites</b>
                  
                  </div>
                  <div class="col-md-2 card_header_for_one_button">
                    
                  </div>
                </div>

              </div>
              
              
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped table-bordered" id="dataTable">
              
                    <thead>
                
                      <tr>
                        <th>Title</th>
                        <th>Website</th>
                        <th>Manage</th>
                      </tr>
                    
                    
                    
                    
                    </thead>
                    
                    <tbody>
                      <?php
                        foreach($Query as $data){
                      ?>
                        <tr>
                          <td><?= $data['title']; ?></td>
                          
                          <td><a href="<?= $data['websites']; ?>"><?= $data['websites']; ?></a></td>
                          <td>
                            <a href="view-index-website.php?v=<?= $data['slug']; ?>"><i class="fas fa-plus-square"></i></a>
                            <a href="edit-index-website.php?e=<?= $data['slug']; ?>"><i class="fas fa-edit"></i></a>
                            <a href="delete-index-website.php?d=<?= $data['slug']; ?>"><i class="fas fa-trash-alt"></i></a>
                          </td>
                        </tr>
                      <?php
                        
                        }
                      ?>
                    
                  
                    </tbody>
                  
                  
                  </table>
                </div>
              
              </div>
              
              <div class="card-footer text-muted">

              
              </div>
            </div>
          </div>
        </div>
      </div> 
    
    </section>         
    <!-- /.content -->
  
  </div>
<!-- /.content-wrapper -->

<?php
  get_footer();


?>

<script>
    

    $(document).ready(function(){
      $('#dataTable').DataTable();


    });

</script>



