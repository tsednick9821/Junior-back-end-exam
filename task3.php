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

<!-- TASK 3 Container -->
<div class="w3-container">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">TASK 3</span></h5>
    <div class="w3-card-4">
    <header class="w3-container w3-black">
      <h5>1. Write the Sql-Injection which will show all records from the table.</h5>
    </header>

    <div class="w3-container">
      <p>Lorem ipsum...</p>
    </div>
    </div><br>
    <div class="w3-card-4">
    <header class="w3-container w3-black">
      <h5>2. Change the source code to make the injection not workable</h5>
    </header>

    <div class="w3-container">
      <p>Lorem ipsum...</p>
    </div>
    </div><br>
    <div class="w3-card-4">
    <header class="w3-container w3-black">
      <h5>3. Return 404 header if the article with requested id is not found.</h5>
    </header>

    <div class="w3-container">
      <p>
        <pre>
          if($res && mysql_num_rows($res)>0)
          {
            while($row = mysql_fetch_assoc($rec)){
            echo $row['anons'];
            echo $row['text'];
            }
          }
          else
          {
            header("HTTP/1.1 404 Not Found");
          }
        </pre>
      </p>
    </div>
    </div> 
  </div>
</div>

<!-- End page content -->
</div>
</body>
</html>
