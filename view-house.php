

<h1>Houses</h1>

<div class="card-deck">
    <?php
    while ($house = $houses->fetch_assoc()) {
    ?>

    <div class="card" style="width: 18rem;">
        <img src="aboutimage.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php echo $house['house_name']; ?></h5>
            <p class="card-text">Captain: <?php echo $house['house_captain']; ?></p>
            <p class="card-text">Color: <?php echo $house['house_color']; ?></p>
            <div class="accordion accordion-flush" id="accordionFlushExample<?php echo $house['house_id']; ?>">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne<?php echo $house['house_id']; ?>" aria-expanded="false" aria-controls="flush-collapseOne<?php echo $house['house_id']; ?>">
                            Students
                        </button>
                    </h2>
                    <div id="flush-collapseOne<?php echo $house['house_id']; ?>" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample<?php echo $house['house_id']; ?>">
                        <div class="accordion-body">
                            <form id="houseForm<?php echo $house['house_id']; ?>" method="post" action="students-by-house.php">
                                <input type="hidden" name="hid" value="<?php echo $house['house_id']; ?>"/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Automatically submit the form when the accordion is expanded
        $('#flush-collapseOne<?php echo $house['house_id']; ?>').on('show.bs.collapse', function () {
            $('#houseForm<?php echo $house['house_id']; ?>').submit();
        });
    </script>

    <?php
    }
    ?>
</div>
