<select class="form-select" id="hid" name="hid">
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
