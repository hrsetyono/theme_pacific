<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Untitled</title>
</head>
<body>
  <!-- Main Content -->
  <article class="hello" id="world">
    <h1>Hello World</h1>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, fugiat, reprehenderit eligendi ea amet eaque quasi iure numquam accusantium nulla itaque dolore tenetur nisi nihil at.
    </p>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam, illo veniam non amet dolores maiores.
    </p>
  </article>
  
  <!-- Script -->
  <script>
    function foo() {
      var myText = "Lorem ipsum dolor sit amet.";
      console.log(myText);
    }
  </script>

  <?php
    class Spinach extends Vegetable {
      var $cooked = false;

      function Spinach(){
        $this->Vegetable(true, "green");
      }

      function cook_it() {
        $this->cooked = true;
      }

      function is_cooked() {
        return $this->cooked;
      }
    } // end of class Spinach
  ?>
</body>
</html>