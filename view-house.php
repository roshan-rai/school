<h1>Houses</h1>

<div class="card-deck">
    <?php
    $count = 0;
    while ($house = $houses->fetch_assoc()) {
        if ($count % 2 == 0) {
            echo '<div class="row">';
        }
    ?>

        <div class="col-md-6">
            <div class="card" style="width: 18rem;">
                <img src="aboutimage.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $house['house_name']; ?></h5>
                    <p class="card-text">Captain: <?php echo $house['house_captain']; ?></p>
                    <p class="card-text">Color: <?php echo $house['house_color']; ?></p>
                    <a href="house.php?id=<?php echo $house['house_id']; ?>" class="btn btn-primary">Students</a>
                </div>
            </div>
        </div>

    <?php
        if ($count % 2 == 1 || $count == $total_houses - 1) {
            echo '</div>';
        }
        $count++;
    }
    ?>
</div>
