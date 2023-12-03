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
                    <span class="like" data-action="upvote" data-house-id="<?php echo $house['house_id']; ?>" onclick="handleVote(this)">👍</span>
                    <span class="like" data-action="downvote" data-house-id="<?php echo $house['house_id']; ?>" onclick="handleVote(this)">👎</span>
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
    function handleVote(element) {
        const houseId = element.getAttribute('data-house-id');
        const action = element.getAttribute('data-action');
        const likesCountElement = document.getElementById(`likes-count-${houseId}`);

        // Simulate updating likes count
        let currentLikes = parseInt(likesCountElement.innerText);
        if (action === 'upvote') {
            currentLikes++;
        } else if (action === 'downvote') {
            currentLikes--;
        }

        // Update likes count on the page
        likesCountElement.innerText = currentLikes;
    }

    function handleComment(formElement) {
        const houseId = formElement.getAttribute('data-house-id');
        const commentTextarea = formElement.querySelector('textarea');
        const commentsContainer = document.getElementById(`comments-container-${houseId}`);

        // Simulate adding a new comment
        const newComment = document.createElement('div');
        newComment.textContent = commentTextarea.value;
        commentsContainer.appendChild(newComment);

        // Clear the comment textarea
        commentTextarea.value = '';
    }
</script>
