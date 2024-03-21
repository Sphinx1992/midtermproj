<?php
require_once('database.php');





// Get products for selected category
$queryvehicles = 'SELECT * FROM vehicles
                  
                  ORDER BY model';
$statement4 = $db->prepare($queryvehicles);

$statement4->execute();
$vehicles = $statement4->fetchAll();
$statement4->closeCursor();
?>
<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>Zippy Used Autos</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<!-- the body section -->
<body>
<header><h1>Zippy Used Autos</h1></header>
<main>
    
    <h1>
<label for="Makes">View All Makes:</label>
<select name="Makes" id="Makes">
  <option value="dodge">Dodge</option>
  <option value="nissan">Nissan</option>
  
  
</select>
    </h1>

<h1>
<label for="Makes">View All Classes:</label>
<select name="Classes" id="Classes">
  <option value="luxury">Luxury</option>
  <option value="sports">Sports</option>
  
  
</select>
    </h1>
    
    <h1>
<label for="Types">View All Types:</label>
<select name="Types" id="Types">
  <option value="SUV">SUV</option>
  <option value="truck">Truck</option>
  
  
</select>
    </h1>
    
<h2> 
        <label for="sort">Sort By:</label>
        <select name="Year" id="Year">
            <option value ="year">Year</option>
            <option value ="price">Price</option>
        </select>
    </h2>
    
    <section>
        
        <table>
            <tr>
                <th>Year</th>
                <th>Make</th>
                <th>Model</th>
                <th>Type</th>
                <th>Class</th>
                <th class="right">Price</th>
            </tr>
            
            <?php 
            if (is_array($vehicles) || is_object($vehicles))
            {
            
foreach ($vehicles as $vehicle) : ?>
            
           
            <tr>
                <td><?php echo $vehicle['year']; ?></td>
                <td><?php echo $vehicle['Make']; ?></td>
                <td><?php echo $vehicle['model']; ?></td>
                <td><?php echo $vehicle['Type']; ?></td>
                <td><?php echo $vehicle['Class']; ?></td>
                <td class ="right"><?php echo $vehicle['price']; ?></td>
                <td><input type="submit" value="Delete"></td>
                <td><input type="submit" value="Delete"></td>
            </tr>
            <?php endforeach;} ?>
        </table>
              
    </section>
</main>
<footer>
    <p>&copy; <?php echo date("Y"); ?> Zippy Used Autos.</p>
</footer>
</body>
</html>


