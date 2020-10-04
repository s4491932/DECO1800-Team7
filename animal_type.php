<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CSS/style.css" >
  <title>Wildlife Guide Junior - Animal Type</title>
</head>


<!-- ----------------------------LOGO && Search box------------------------------------ -->
<body>
  <!-- head -->
  <?php include('header.php');?>
  <section class="mammal_background">
      <div class="mammal_title">
          <h1>Mammals</h1>
          <div class="horizontal_line"></div>
          <p>Mammals (from Latin mamma "breast") are vertebrate animals constituting the class Mammalia (/məˈmeɪliə/), and characterized by the presence of mammary glands which in females produce milk for feeding (nursing) their young, a neocortex (a region of the brain), fur or hair, and three middle ear bones. </p>
      </div>
  </section>

<!-- ----------------------------Animal Type Selection(mammal, amphibians...)------------------------------------ -->


  <section id = "animal_type_selection">
    <h1>Mammals</h1>

    <section class="animal_types">

      <article class="mammals">

          <figure>
              <a href="api.html">
              <img src="images/mammal.jpg" alt="A koala image in the animal_type_selection">
              </a>
          </figure>
          <p>Mammal</p>
      </article>

      <article class="birds">

          <figure>
              <a href="animal_type.html">
              <img src="images/kangaroo.jpg" alt="A kangaroo image in the animal_type_selection">
              </a>
          </figure>
          <p>Birds</p>
      </article>

      <article class="fish">

        <figure>
            <a href="animal_type.html">
            <img src="images/lion_article.jpg" alt="A lion image in the animal_type_selection">
            </a>
        </figure>
        <p>Fish</p>
      </article>
    </section>

    <section class="animal_types">

      <article class="reptile">

          <figure>
              <a href="animal_type.html">
              <img src="images/reptiles.jpg" alt="A koala image in the animal_type_selection">
              </a>
          </figure>
          <p>Reptiles</p>
      </article>

      <article class="invertebrate">

          <figure>
              <a href="animal_type.html">
              <img src="images/invertebrate.jpg" alt="A kangaroo image in the animal_type_selection">
              </a>
          </figure>
          <p>Invertebrates</p>
      </article>

      <article class="amphibian">

        <figure>
            <a href="animal_type.html">
            <img src="images/amphibian.jpg" alt="A lion image in the animal_type_selection">
            </a>
        </figure>
        <p>Amphibians</p>
      </article>
    </section>
  </section>
  <?php include("footer.php") ?>
</body>
<script src="JavaScript/main.js"></script>

</html>