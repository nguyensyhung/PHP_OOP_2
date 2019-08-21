<?php 
    require_once('../private/initialize.php');
    include(SHARED_PATH . '/header.php');
?>
    <div class="menu-store">
        <div class="container">
            <div class="row">
                <div class="col-6 col-sm-12 text-center">
                    <ul class="sub-menu ">
                        <li class="main1 wow fadeInLeftBig">
                            <a class="m" href="<?php echo url_for('/iventory.php'); ?>">View Our Inventory</a>
                        </li>
                        <li class="main2 wow fadeInRightBig">
                            <a class="m" href="<?php echo url_for('/about.php'); ?>">About VN</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- END Menu -->
    <?php $super_image = 'bike4.jpg'; ?>
    <?php include(SHARED_PATH . '/footer.php'); ?>