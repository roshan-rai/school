<select class="form-select" id="sHouse" name="sHouse">
<?php while ($houseItem = $houseList->fetch_assoc()) { 
    $selText="";
    if($selectedHouse==$houseItem['house_id'])
    {
        $selText=" selected";
        
    }
    ?>
    <option value="<?php echo $houseItem['house_id']; ?>"<?=$selText?>><?php echo $houseItem['house_name']; ?></option>
<?php } ?>
</select>
