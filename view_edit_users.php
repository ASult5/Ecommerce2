

                <!-- /.container-fluid -->



                <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">View Edit Users</h1>
<p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
    For more information about DataTables, please visit the <a target="_blank"
        href="https://datatables.net">official DataTables documentation</a>.</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                    <th>First Name</th>
                <th>Last Name</th>
                <th>Email ID</th>
                <th>Password</th>
                <th>Type</th>
                <th>Update</th>
                <th>Delete</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                    <th>First Name</th>
                <th>Last Name</th>
                <th>Email ID</th>
                <th>Password</th>
                <th>Type</th>
                <th>Update</th>
                <th>Delete</th>
                    </tr>
                </tfoot>
                <tbody>


                <?php

            include("dbcon.php");

            $query = "select * from `users`";

            $result = mysqli_query($connection, $query);

            if (!$result) {
                die("query failed");
            } else {

                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                    <tr>
                        <td><?php echo $row['first_name']; ?></td>
                        <td><?php echo $row['last_name']; ?></td>
                        <td><?php echo $row['email_id']; ?></td>
                        <td><?php echo $row['password']; ?></td>
                        <td><?php 
                        
                        $status =  $row['isGuest']; 
                        
                        if( $status == 1) {
                            echo "Guest User";
                        }

                        else{
                            echo "Registered User";
                        }
                        
                        ?></td>
                        <td><a href="update_users.php?id=<?php echo $row['id']; ?>" class="btn btn-success">Update</a></td>
                        <td><a href="delete_users.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
                    </tr>

            <?php



                }
            }
            ?>


                    
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>



                <!-- /.container-fluid -->




                <!-- /.container-fluid -->

           