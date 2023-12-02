<div class="row">
    <div class="col">
        <h1>House</h1>
    </div>
    <div class="card-group">
        <?php while ($house = $houses->fetch_assoc()) { ?>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $house['house_name']; ?></h5>
                    <p class="card-text">
                    </p>
                    <p class="card-text"><small class="text-body-secondary">Class: <?php echo $doctor['student_class']; ?></small></p>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
