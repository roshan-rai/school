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
                <a href="house.php?id=<?php echo $house['house_id']; ?>" class="btn btn-primary">Students</a>
                   <div>
                        <form method="post" action="students-by-house.php">
                        <input type="hidden" name="hid" value="<?php echo $house['house_id'];?>"/>
                        <button type="submit" class="btn btn-primary">Students</button>
                        </form>
                    </div>
  </div>
</div>
    <?php
    }
    ?>
</div>
