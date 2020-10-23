<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css">
  <link rel="stylesheet" href="CSS/style.css" >
  <title>Wildlife Guide Junior - Quiz</title>
</head>
<?php 
$page = "game";
include('header.php');
?>

<body>
<section id = "quiz_section">
  <section class="quiz_content">
    <h1>Question1</h1>

    <h2>Drag the blow animal icon to the corresponding box</h2>

    <!-- this code are refer to https://codepen.io/Coding_Journey/pen/YzKpLvE -->
    <section class="draggable-elements">
      <i class="fas fa-cat draggable" draggable="true" style="color: #ff6384;" id="cat"></i>
      <i class="fas fa-dog draggable" draggable="true" style="color: #36a2eb;" id="dog"></i>
      <i class="fas fa-dove draggable" draggable="true" style="color: #ffce56;" id="dove"></i>
      <i class="fas fa-fish draggable" draggable="true" style="color: #9966ff;" id="fish"></i>
      <i class="fas fa-frog draggable" draggable="true" style="color: #4bc0c0;" id="frog"></i>

    </section>

    <!-- this code are refer to https://codepen.io/Coding_Journey/pen/YzKpLvE -->
    <section class="droppable-elements">
      <div class="droppable" data-draggable-id="frog"><span>Frog</span></div>
      <div class="droppable" data-draggable-id="dove"><span>Bird</span></div>
      <div class="droppable" data-draggable-id="cat"><span>Cat</span></div>
      <div class="droppable" data-draggable-id="fish"><span>Fish</span></div>
      <div class="droppable" data-draggable-id="dog"><span>Dog</span></div>
    </section>
  </section>
</section>

  <?php
    include('footer.php');
  ?>

<script src="JavaScript/quiz.js"></script>
<script src="JavaScript/main.js"></script>
</body>
</html>