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
      <a href="index.php" class="w3-button w3-block w3-black">TASK 1</a>
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

<!-- TASK 4 Container -->
<div class="w3-container">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">TASK 4 Answer</span></h5>
    <p>
      SELECT b.book_name, a.first_name, a.last_name, b.publish_date FROM 'books' AS b INNER JOIN 'authors' AS a ON b.author_id = a.id;
    </p>

  </div>
</div>

<!-- End page content -->
</div>
</body>
</html>
