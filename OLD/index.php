<!-- Try / Catch for calling DBH -->
<?php
try {
    require_once 'includes/dbh.php';
    $getDrinks = 'SELECT * FROM DRINK';
    $getMeasure = 'SELECT * FROM MEASURE';
    $getType = 'SELECT * FROM TYPE';
} catch (Exception $e) {
    $error = $e->getMessage();
}   
?>


<!-- HTML Headers -->
<!DOCTYPE html>
<html>
<head>
    <title>Drinks</title>
    <meta charset='utf-8'>
    <link rel="stylesheet" href='styles/style.css'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
    
    
<!-- Page Content -->
<body>  
<!-- Error display -->
    <?php if (isset($error)) {
        echo "<p>$error</p>";
    }
    ?>
    
<!-- Content Display -->
    <ul id='list-area'>
        <?php foreach ($db->query($getDrinks) as $row) { ?>
            <li id='drink'>
                <h2><?php echo $row['drinkName']; ?></h2>
                <ul id='spec'>
                    <?php 
                    if (!empty($row['measure1'])) {
                        echo "<li class='measure'>";
                        echo $row['measure1'];
                        echo "</li>";
                    }
                    if (!empty($row['ingredient1'])) {
                        echo "<li class='ingredient'>";
                        echo $row['ingredient1'];
                        echo '</li>';
                    }
                    if (!empty($row['ingredient2'])) {
                        echo "<li>";
                        echo "<pre>  •  </pre>";
                        echo '</li>';
                    }
                    if (!empty($row['measure2'])) {
                        echo "<li class='measure'>";
                        echo $row['measure2']; 
                        echo "</li>";
                    }
                    if (!empty($row['ingredient2'])) {
                        echo "<li class='ingredient'>";
                        echo $row['ingredient2']; 
                        echo '</li>';
                    }
                    if (!empty($row['ingredient3'])) {
                        echo "<li>";
                        echo "<pre>  •  </pre>";
                        echo '</li>';
                    }
                    if (!empty($row['measure3'])) {
                        echo "<li class='measure'>";
                        echo $row['measure3']; 
                        echo "</li>";
                    }
                    if (!empty($row['ingredient3'])) {
                        echo "<li class='ingredient'>";
                        echo $row['ingredient3']; 
                        echo '</li>';
                    }
                    if (!empty($row['ingredient4'])) {
                        echo "<li>";
                        echo "<pre>  •  </pre>";
                        echo '</li>';
                    }
                   if (!empty($row['measure4'])) {
                        echo "<li class='measure'>";
                        echo $row['measure4']; 
                        echo "</li>";
                    }
                    if (!empty($row['ingredient4'])) {
                        echo "<li class='ingredient'>";
                        echo $row['ingredient4']; 
                        echo '</li>';
                    }
                        if (!empty($row['ingredient5'])) {
                        echo "<li>";
                        echo "<pre>  •  </pre>";
                        echo '</li>';
                    }
                    if (!empty($row['measure5'])) {
                        echo "<li class='measure'>";
                        echo $row['measure5']; 
                        echo "</li>";
                    }
                    if (!empty($row['ingredient5'])) {
                        echo "<li class='ingredient'>";
                        echo $row['ingredient5']; 
                        echo '</li>';
                    }
                    if (!empty($row['ingredient6'])) {
                        echo "<li>";
                        echo "<pre>  •  </pre>";
                        echo '</li>';
                    }
                    if (!empty($row['measure6'])) {
                        echo "<li class='measure'>";
                        echo $row['measure6']; 
                        echo "</li>";
                    }
                    if (!empty($row['ingredient6'])) {
                        echo "<li class='ingredient'>";
                        echo $row['ingredient6']; 
                        echo '</li>';
                    }
                    if (!empty($row['ingredient7'])) {
                        echo "<li>";
                        echo "<pre>  •  </pre>";
                        echo '</li>';
                    }
                    if (!empty($row['measure7'])) {
                        echo "<li class='measure'>";
                        echo $row['measure7']; 
                        echo "</li>";
                    }
                    if (!empty($row['ingredient7'])) {
                        echo "<li class='ingredient'>";
                        echo $row['ingredient7']; 
                        echo '</li>';
                    }
                    if (!empty($row['ingredient8'])) {
                        echo "<li>";
                        echo "<pre>  •  </pre>";
                        echo '</li>';
                    }
                    if (!empty($row['measure8'])) {
                        echo "<li class='measure'>";
                        echo $row['measure8']; 
                        echo "</li>";
                    }
                    if (!empty($row['ingredient8'])) {  
                        echo "<li class='ingredient'>";
                        echo $row['ingredient8']; 
                        echo '</li>';
                    }?>
                </ul>
            </li>
        <?php } ?>
    </ul>  
<!-- Form -->
    <div id='post-area'>
        <h1>Dranks (Click to expand)</h1>
        <form method="post" action="includes/insert.php">
            <label>Name: </label><input type="text" id="dname" name="dname"><br>
            <select name='dtype' id='dtype'>
            <?php foreach ($db->query($getType) as $worr) { ?>
                <option><?php echo $worr[1]; ?></option>
                <?php } ?>
                </select><br><br>
            <select name='m1' id='m1'>
                <option></option>
                <?php foreach ($db->query($getMeasure) as $wor) { ?>
                <option><?php echo $wor[1]; ?></option>
                <?php } ?>
            </select>
            <label>Of: </label><input type="text" id="i1" name="i1"><br>
            <select name='m2' id='m2'>
                <option></option>
                <?php foreach ($db->query($getMeasure) as $wor) { ?>
                <option><?php echo $wor[1]; ?></option>
                <?php } ?>
            </select>
            <label>Of: </label><input type="text" id="i2" name="i2"><br>
            <select name='m3' id='m3'>
                <option></option>
                <?php foreach ($db->query($getMeasure) as $wor) { ?>
                <option><?php echo $wor[1]; ?></option>
                <?php } ?>
            </select>
            <label>Of: </label><input type="text" id="i3" name="i3"><br>
            <select name='m4' id='m4'>
                <option></option>
                <?php foreach ($db->query($getMeasure) as $wor) { ?>
                <option><?php echo $wor[1]; ?></option>
                <?php } ?>
            </select>
            <label>Of: </label><input type="text" id="i4" name="i4"><br>
            <select name='m5' id='m5'>
                <option></option>
                <?php foreach ($db->query($getMeasure) as $wor) { ?>
                <option><?php echo $wor[1]; ?></option>
                <?php } ?>
            </select>
            <label>Of: </label><input type="text" id="i5" name="i5"><br>
            <select name='m6' id='m6'>
                <option></option>
                <?php foreach ($db->query($getMeasure) as $wor) { ?>
                <option><?php echo $wor[1]; ?></option>
                <?php } ?>
            </select>
            <label>Of: </label><input type="text" id="i6" name="i6"><br>
            <select name='m7' id='m7'>
                <option></option>
                <?php foreach ($db->query($getMeasure) as $wor) { ?>
                <option><?php echo $wor[1]; ?></option>
                <?php } ?>
            </select>
            <label>Of: </label><input type="text" id="i7" name="i7"><br>
            <select name='m8' id='m8'>
                <option></option>
                <?php foreach ($db->query($getMeasure) as $wor) { ?>
                <option><?php echo $wor[1]; ?></option>
                <?php } ?>
            </select>
            <label>Of: </label><input type="text" id="i8" name="i8"><br>
            <input type="submit" name="submit" value="Add Drink">
        
        </form>
    </div>    
    
    
    
</body>
</html>