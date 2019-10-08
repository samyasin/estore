<?php
include_once '../includes/connection.php';

if(isset($_POST['submit'])){
	// get data from form 
	$email    = $_POST['email'];
	$password = $_POST['password'];
	$fullname = $_POST['fullname'];

	
	$query = "update admin set admin_email = '$email',
                             admin_password = '$password',
                             admin_fullname = '$fullname'
			       where admin_id = {$_GET['admin_id']}";
	mysqli_query($conn,$query);
  header("location:manage_admin.php");
}

// fetch Old Data
$query     = "select * from admin where admin_id = {$_GET['admin_id']}";
$result    = mysqli_query($conn,$query);
$adminSet  = mysqli_fetch_assoc($result);


 ?>
<?php include '../includes/admin_header.php'; ?>

        <div class="content">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Manage Admin</strong>
                            </div>
                            <div class="card-body">
                                <!-- Credit Card -->
                                <div id="pay-invoice">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center">Edit Admin</h3>
                                        </div>
                                        <hr>
                                        <form action="" method="post">
                                            
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Admin Email</label>
                                                <input id="cc-payment" name="email" type="text" class="form-control" value="<?php echo $adminSet['admin_email'] ?>">
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">password</label>
                                                <input id="cc-name" name="password" type="password" class="form-control cc-name valid"
                                                value="<?php echo $adminSet['admin_password'] ?>">
                                                
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Full Name</label>
                                                <input id="cc-number" name="fullname" type="text" class="form-control" value="<?php echo $adminSet['admin_fullname'] ?>">
                                                
                                            </div>
                                            
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block" name="submit">      
                                                    Update                                       
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div> <!-- .card -->

                    </div><!--/.col-->

</div>
</div>


<?php include '../includes/admin_footer.php'; ?>