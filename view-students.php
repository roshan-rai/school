<h1>Students</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
         <th>ID</th>
      <th>Name</th>
      <th>Area</th>
         <th></th>
      </tr>
     
    </thead>
      <tbody>
        <?php
            while ($student = $students-> fetch_assoc())
              {
                ?>
                  <tr>
                    <td><?php echo $student['student_id'];?></td>
                    <td>
                      <?php echo $student['student_name'];?></td>
                    </td>
                    <td>
                      <?php echo $student['student_area'];?></td>
                    </td>
                    <td><a href="awards-by-student.php?id=<?php echo $student['student_id'];?>">Awards</a></td>
                  </tr>
                  
                <?php
              }
        ?>
      </tbody>
    
  </table>
</div>