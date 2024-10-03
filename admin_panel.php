<?php include("admin_header.php"); ?>
<?php include("sidebar.php"); ?>

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">
        <?php include("topbar.php"); ?>

        <div id="pagecontent" class="">
            <?php include("pagecontent.php"); ?>
        </div>

        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <?php include("footer_admin.php"); ?>

</div>
<!-- End of Content Wrapper -->

<!-- Scroll to Top Button-->
<?php include("scroll_to_top.php"); ?>

<!-- Logout Modal-->
<?php include("logout_admin.php"); ?>

<?php include("scripts_admin.php"); ?>



<!-- function for updating page content -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).on('click', '.load-content', function(e) {
        e.preventDefault(); 
        var file = $(this).data('file');

        $.ajax({
            url: 'load_content.php', 
            type: 'POST',
            data: { file: file }, 
            success: function(response) {
                $('#pagecontent')
                .html(response); 
            },
            error: function() {
                $('#pagecontent').html('<p>Error loading content. Please try again.</p>');
            }
        });
    });
</script>

</body>
</html>
