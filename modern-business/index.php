<!DOCTYPE html>
<html lang="en">
	<?php include('module/head.php'); ?>
	<body class="demo">
        <div id="loader-wrapper">
            <div id="loader"></div>
            <div class="loader-section section-left">
            </div>
            <div class="loader-section section-right">
            </div>
        </div>
        <?php $PageNo = 'home'; ?>
		<?php include('module/header.php'); ?>
		<!-- Specific for every pages -->
        <dev class="container">
        <dev class="main onepage-wrapper" >
            <!-- Page 1 -->
            <section>
                <?php include('module/header_carousel.php'); ?>
            </section>
            <!-- Page 2 -->
            <section style="background-image: url('BF.jpg') ; background-size: 1500px 800px;background-repeat: no-repeat;background-position: center center; ">
                <?php include('module/index-page-2.php'); ?>
            </section>
            <!-- Page 3 -->
            <section style="background-color: #1F2123">
                <?php include('module/index-page-3.php'); ?>
                <?php include('module/footer.php'); ?>
            </section>
        </div> <!-- End of main-->
    </div>
	</body>
	<?php include('js/script_include.php'); ?>
</html>
