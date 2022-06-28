<?php
  require_once('functions/function.php');
  needtologin();
  get_header();
  get_sidebar();
 
  
  if($_SESSION['success_alert']=='8'){
  ?>
    <script>
      swal({title: "Opps!", text: "Change password failed! Password confirmation didn't match.", icon: "error", button: "OK",});
    </script>
<?php
    
    $_SESSION['success_alert']='0';
  }elseif($_SESSION['success_alert']=='9'){
?>
    <script>
      swal({title: "Opps!", text: "Change password failed! Current password didn't match.", icon: "error", button: "OK",});
    </script>
<?php
    $_SESSION['success_alert']='0';
  }elseif($_SESSION['success_alert']=='10'){
?>
    <script>
      swal({title: "Done!", text: "Password changed successfully!", icon: "success", button: "OK",});
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
                <b>Change Password</b>
              </div>
              <div class="col-md-2 card_header_for_one_button">
                
              </div>
            </div>
          </div>
          <form method="post" action="submit-change-password.php" enctype="multipart/form-data">
            
          <div class="card-body">
          <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label">Current Password <span class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="password" class="form-control" id="current_password" name="current_password" required>
                </div>
                <div class="col-sm-1"></div>
              </div>
              <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label">New Password <span class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="password" class="form-control" id="password" name="new_password" required>
                </div>
                <div class="col-sm-1"></div>
              </div>
              <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label">Confirm Password <span class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="password" class="form-control" id="repassword" name="confirm_new_password" required>
                </div>
                <div class="col-sm-1"></div>
              </div>
          </div>
          
          <div class="card-footer text-muted text-center">
            <button type="submit" class="btn btn-success">Save</button>
          </div>
          </form>
        </div>
      </div>        
      <!-- /.content -->
      </div>
    <!-- /.content-wrapper -->
  <script>
    $(document).ready(function(){
      $('#dataTable').DataTable();
    });
  </script>
<?php
  get_footer();
?>