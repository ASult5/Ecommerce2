

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">View Current Orders</h1>
<p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
    For more information about DataTables, please visit the <a target="_blank"
        href="https://datatables.net">official DataTables documentation</a>.</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Current Orders Table</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                    <th>Order ID</th>
                <th>Order Date</th>
                <th>Total Amount</th>
                <th>Order Status</th>
                <th>Ordered By</th>
                <th>Order Details</th>
                <th>Mark Order as Completed</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                    <th>Order ID</th>
                <th>Order Date</th>
                <th>Total Amount</th>
                <th>Order Status</th>
                <th>Ordered By</th>
                <th>Order Details</th>
                <th>Mark Order as Completed</th>
                    </tr>
                </tfoot>
                <tbody>


                <?php

            include("dbcon.php");

            $query = "select * from `orders`";

            $result = mysqli_query($connection, $query);

            if (!$result) {
                die("query failed");
            } else {

                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <td><?php echo $row['order_id']; ?></td>
                        <td><?php echo $row['order_date']; ?></td>
                        <td><?php echo $row['total_amount']; ?></td>
                        <td><?php echo $row['order_status']; ?></td>
                        <td>
                            <?php 
                            $user_id = $row['user_id']; 
                            
                            $user_query = "SELECT * FROM `users` WHERE `id` = '$user_id'";
                            $user_result = mysqli_query($connection, $user_query);
                
                            if ($user_result) {
                                $user_row = mysqli_fetch_assoc($user_result);
                                $fname = $user_row["first_name"];
                                $lname = $user_row["last_name"];
                                echo $fname . " " . $lname; 
                            } else {
                                echo "User not found.";
                            }
                            ?>
                        </td>
                        <td>
                            <a href="order_details.php?id=<?php echo $row['order_id']; ?>" class="btn btn-primary">Order Details</a>
                        </td>
                        <td>
                            <a href="order_mark_complete.php?id=<?php echo $row['order_id']; ?>" class="btn btn-success">Mark Completed</a>
                        </td>
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

            