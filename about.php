<?php
// Define the background image URL
$background_image_url = 'cheeryBlossom.gif'; // Change this to your actual image file

// Include the common header
include('view-header.php');
?>

<!-- Additional content for about page -->
<div id="about" style="background-image: url('<?php echo $background_image_url; ?>');">
    <h2>About Us</h2>
    <p>Dream School is a place where students learn the best.</p>
</div>

<!-- Include the common footer -->
<?php include('view-footer.php'); ?>
