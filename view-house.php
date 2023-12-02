<h1>Houses</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
         <th>ID</th>
      <th>Name</th>
      <th>Captain</th>
         <th>Color</th>
          <th></th>
      </tr>
     
    </thead>
      <tbody>
        <?php
            while ($house = $houses-> fetch_assoc())
              {
                ?>
                  <tr>
                    <td><?php echo $house['house_id'];?></td>
                    <td>
                      <?php echo $house['house_name'];?></td>
                    </td>
                    <td>
                      <?php echo $house['house_captain'];?></td>
                    </td>
                     <td>
                      <?php echo $house['house_color'];?></td>
                    </td>
                    <td><a href="house.php?id=<?php echo $house['house_id'];?>">Students</a></td>
                  </tr>
                  
                <?php
              }
        ?>
      </tbody>
    
  </table>
</div>
