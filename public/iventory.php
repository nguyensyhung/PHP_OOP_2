<?php 
    require_once('../private/initialize.php');
    include(SHARED_PATH . '/header.php');
?>
    <div class="content">
        <div class="container conten-bike">
            <div class="row block-tren">
                <div class="col-12 col-sm-3">
                    <img class="block-image" src="images/bike5.jpg" alt="">
                </div>
                <div class="col-12 col-sm-9 block-word">
                    <h4 class="fontroboto">Our Inventory of Used Bicycles</h4>
                    <p class="fontroboto">Choose the bike you love. <br/> We will deliver it to your door and let you try it before you buy it.
                    </p>
                </div>
            </div>
            <div class="row block-duoi">
                <div class="col-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Brand</th>
                                <th>Model</th>
                                <th>Year</th>
                                <th>Category</th>
                                <th>Gender</th>
                                <th>Color</th>
                                <th>Weigth</th>
                                <th>Condition</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                        <?php 
                        $parser = new ParseCSV(PRIVATE_PATH . '/used_bicycles.csv');
                        $bike_array = $parser->parse();
                            // echo "<pre>";
                            //     print_r($bike_array);
                            // echo "</pre>";
                        ?>
                        <?php foreach ($bike_array as $args) { ?>
                        <?php $bike = new Bike($args); ?>
                            <tr>
                            <td><?php echo $bike->brand; ?></td>
                            <td><?php echo $bike->model; ?></td>
                            <td><?php echo $bike->year; ?></td>
                            <td><?php echo $bike->category; ?></td>
                            <td><?php echo $bike->gender; ?></td>
                            <td><?php echo $bike->color; ?></td>
                            <td><?php echo $bike->weight_kg() . ' / ' . $bike->weight_lbs(); ?></td>
                            <td><?php echo $bike->condition(); ?></td>
                            <td><?php echo number_format($bike->price, 2) . " VND";  ?></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- END header Store -->
    <?php include(SHARED_PATH . '/footer.php'); ?>