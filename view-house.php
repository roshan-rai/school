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

                <div>
                    <form method="post" action="students-by-house.php">
                        <input type="hidden" name="hid" value="<?php echo $house['house_id']; ?>" />
                        <button type="submit" class="btn btn-primary" id="liveToastBtn">Students</button>
                    </form>
                </div>
                
                <!-- Like Section -->
                <div>
                    <span class="like" data-action="upvote" data-house-id="<?php echo $house['house_id']; ?>">👍</span>
                    <span class="like" data-action="downvote" data-house-id="<?php echo $house['house_id']; ?>">👎</span>
                    <span class="likes-count" id="likes-count-<?php echo $house['house_id']; ?>">0</span> likes
                </div>

                <!-- Comment Section -->
                <div>
                    <h5>Comments</h5>
                    <!-- Add your comment form here -->
                    <!-- Example: -->
                    <form class="comment-form" data-house-id="<?php echo $house['house_id']; ?>">
                        <textarea name="comment" placeholder="Type your comment here"></textarea>
                        <button type="submit">Submit Comment</button>
                    </form>

                    <!-- Display existing comments here -->
                    <!-- Example: -->
                    <div class="comments-container" id="comments-container-<?php echo $house['house_id']; ?>">
                        <!-- Comments will be displayed here -->
                    </div>
                </div>

                
            </div>
        </div>

    <?php
    }
    ?>
</div>

<script>
    // Add your JavaScript for handling likes and comments here
</script>
