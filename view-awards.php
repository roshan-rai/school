<h1>Awards</h1>
<div class="col-auto"> 
  <?php
    include "view-award-newform.php";
  ?>
</div>

<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
         <th>Award Id</th>
      <th>Name</th>
      <th>House</th>
      
      </tr>
     
    </thead>
      <tbody>
        <?php
            while ($award = $awards-> fetch_assoc())
              {
                ?>
                  <tr>
                    <td><?php echo $award['award_id'];?></td>
                    <td>
                      <?php echo $award['award_name'];?></td>
                    </td>
                    <td>
                      <?php echo $award['house_name'];?></td>
                    </td>
                   
                  </tr>
                  
                <?php
              }
        ?>
      </tbody>
    
  </table>
</div>
