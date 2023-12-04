<h1>Houses</h1>

<div class="card-deck">
    <?php
    while ($house = $houses->fetch_assoc()) {
        // Concatenate the house name with 'house.jpg' to form the image path
        $imagePath = strtolower($house['house_name'][0]) . 'ghouse.jpg';
        $imagePath = strtolower($house['house_name'][0]) . 'hhouse.jpg';
        $imagePath = strtolower($house['house_name'][0]) . 'shouse.jpg';
        $imagePath = strtolower($house['house_name'][0]) . 'rhouse.jpg';
    ?>

        <div class="card" style="width: 18rem;">
            <img src="<?php echo $imagePath; ?>" class="card-img-top" alt="House Image">
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

                <div>
                    <span class="like" data-action="upvote" data-house-id="<?php echo $house['house_id']; ?>" onclick="handleVote(this)">👍</span>
                    <span class="like" data-action="downvote" data-house-id="<?php echo $house['house_id']; ?>" onclick="handleVote(this)">👎</span>
                    <span class="likes-count" id="likes-count-<?php echo $house['house_id']; ?>">0</span> Votes
                </div>
            </div>
        </div>

    <?php
    }
    ?>
</div>

<script>
    function handleVote(element) {
        const houseId = element.getAttribute('data-house-id');
        const action = element.getAttribute('data-action');
        const likesCountElement = document.getElementById(`likes-count-${houseId}`);

        let currentLikes = parseInt(likesCountElement.innerText);
        if (action === 'upvote') {
            currentLikes++;
        } else if (action === 'downvote') {
            currentLikes--;
        }
        likesCountElement.innerText = currentLikes;
    }
</script>
