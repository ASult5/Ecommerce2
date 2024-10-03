<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">View Edit Products</h1>
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
                     <th>Product Image</th>
                     <th>Product Name</th>
                     <th>Product Price</th>
                     <th>Product Category</th>
                     <th>Product Description</th>
                     <th>Product Quantity</th>
                     <th>Update</th>
                     <th>Delete</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                     <th>Product Image</th>
                     <th>Product Name</th>
                     <th>Product Price</th>
                     <th>Product Category</th>
                     <th>Product Description</th>
                     <th>Product Quantity</th>
                     <th>Update</th>
                     <th>Delete</th>
                    </tr>
                </tfoot>
                <tbody>


                <?php

                include("dbcon.php");


            $query = "select * from `products`";

            $result = mysqli_query($connection, $query);

            if (!$result) {
                die("query failed");
            } else {

                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                    <tr>
                        <td class="product_img"><img src="<?php echo $row['product_image']; ?>" alt=""></td>
                        <td><?php echo $row['product_name']; ?></td>
                        <td><?php echo $row['product_price']; ?></td>
                        <td><?php echo $row['product_category']; ?></td>
                        <td><?php echo $row['product_description']; ?></td>
                        <td><?php echo $row['product_quantity']; ?></td>
                        <td><a href="update_products.php?id=<?php echo $row['id']; ?>" class="btn btn-success">Update</a></td>
                        <td><a href="delete_products.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
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

            