<?php
include_once '../includes/connection.php';

if(isset($_POST['submit'])){
	// get data from form 
	$email    = $_POST['email'];
	$password = $_POST['password'];
	$fullname = $_POST['fullname'];

	
	$query = "insert into admin(admin_email,admin_password,admin_fullname)
			  values('$email','$password','$fullname')";
	mysqli_query($conn,$query);
}


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
                                            <h3 class="text-center">Create Admin</h3>
                                        </div>
                                        <hr>
                                        <form action="" method="post">
                                            
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Admin Email</label>
                                                <input id="cc-payment" name="email" type="text" class="form-control">
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">password</label>
                                                <input id="cc-name" name="password" type="password" class="form-control cc-name valid">
                                                
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Full Name</label>
                                                <input id="cc-number" name="fullname" type="text" class="form-control">
                                                
                                            </div>
                                            
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block" name="submit">      
                                                    Save                                       
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div> <!-- .card -->

                    </div><!--/.col-->

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Basic Table</strong>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                          <th scope="col">#</th>
                                          <th scope="col">Email</th>
                                          <th scope="col">Full Name</th>
                                          <th scope="col">Edit</th>
                                          <th scope="col">Delete</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                    $query  = "select * from admin";
                                    $result = mysqli_query($conn,$query);
                                    while($row = mysqli_fetch_assoc($result)){
                                 	   echo '<tr>';
                                 	   echo "<td>{$row['admin_id']}</td>";
                                 	   echo "<td>{$row['admin_email']}</td>";
                                 	   echo "<td>{$row['admin_fullname']}</td>";
                                 	   echo "<td><a href='edit_admin.php?admin_id={$row['admin_id']}' class='btn btn-warning'>Edit</a></td>";
                                 	   echo "<td><a class='btn btn-danger' href='delete_admin.php?admin_id={$row['admin_id']}'>Delete</a></td>";
                                 	   echo '</tr>';                                    	
                                	}


                                     ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

</div>
</div>
</div>


<?php include '../includes/admin_footer.php'; ?>