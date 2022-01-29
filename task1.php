<!DOCTYPE html>
<html>
<title>Junior Back-End Developer Exam</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="assets/style.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<body>

<!-- Links (sit on top) -->
<div class="w3-top">
  <div class="w3-row w3-padding w3-black">
    <div class="w3-col s3">
      <a href="task1.php" class="w3-button w3-block w3-black">TASK 1</a>
    </div>
    <div class="w3-col s3">
      <a href="task2.php" class="w3-button w3-block w3-black">TASK 2</a>
    </div>
    <div class="w3-col s3">
      <a href="task3.php" class="w3-button w3-block w3-black">TASK 3</a>
    </div>
    <div class="w3-col s3">
      <a href="task4.php" class="w3-button w3-block w3-black">TASK 4</a>
    </div>
  </div>
</div>

<!-- Add a background color and large text to the whole page -->
<div class="w3-sand w3-grayscale w3-large">

<!-- TASK 1 Container -->
<div class="w3-container">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">TASK 1</span></h5>
    <p>You need to develop a script which will parse json files or strings and return parsed data as an array. The script should be extendable for new data types. Please use Object Oriented Approach.</p>
    <div class="w3-row w3-center w3-card w3-padding">
        <div class="w3-row w3-center">
            <form method="post">
                <input type="text" id="JsonString" name="JsonString" rows="7" cols="35" value='{"Name":"Jonathan Tapnio","Age":25,"Gender":"Male","Address":"Capas, Tarlac"}'>
                <div>
                <button class="w3-button w3-black" type="submit" name="parse" id="parse">Parse JSON</button>
                </div>
            </form>
        </div>
        <br><br>
        <!-- PHP -->
        <?php
        function JSONParse(){
            $json = $_POST['JsonString'];
            // Decode JSON data to PHP array 
            var_dump(json_decode($json, true));
        }

        if(array_key_exists('parse',$_POST)){
            JSONParse();
        }
         
        ?>
    </div>
  </div>
</div>

<!-- End page content -->
</div>
</body>
</html>
