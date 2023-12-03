<section id="students-by-house" style="background-color: #eee;">
 <div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
         <th>Student ID</th>
      <th>Student Name</th>
      <th>Class</th>
      </tr>
     
    </thead>
      <tbody>
        <?php
            while ($student = $students-> fetch_assoc())
              {
                ?>
                  <tr>
                    <td><?php echo $student['student_id'];?></td>
                    <td><?php echo $student['student_name'];?></td>
                    <td> <?php echo $student['student_class'];?></td>
                  </tr>                  
                <?php
              }
        ?>
      </tbody>    
  </table>
</div>
</section>

