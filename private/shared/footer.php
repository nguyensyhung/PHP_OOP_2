<?php 
    if (isset($super_image)) { ?>
    <div class="image2">
        <div class="image">
        <?php $image_url = url_for('/images/' . $super_image); ?>
        <img id="super-hero-image" src="<?php echo $image_url; ?>" />
        </div>
        <div class="nen"></div>
    </div>
    <!-- END Image -->
        <?php include(SHARED_PATH . '/public_copyright.php'); ?>
    
<?php } else { ?>
    <?php include(SHARED_PATH . '/public_copyright.php'); ?>
<?php }?>
