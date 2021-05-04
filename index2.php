<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500&display=swap');

      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      body {
        width: 100vw;
        max-height: 100vh;
        padding: 10%;
        font-family: 'Montserrat';
        background: #232f3f;
        color: #fff;
        display: flex;
        flex-direction: column;
        align-items: center;
      }

      h1.green {
        color: green;
      }

      h1.red {
        color: red;
      }
    </style>
  </head>
  <body>
    <?php
      // Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
      // che name sia più lungo di 3 caratteri, 
      // che mail contenga un punto e una chiocciola,
      // che age sia un numero.
      // Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato"

      $name = $_GET['name'];
      $email = $_GET['mail'];
      $age = $_GET['age'];
      
      // var_dump($name, $email, $age);

      $nameLen = strlen($name);

      $hasDot = strpos($email, '.');
      $hasAt = strpos($email, '@');
      
      $isStrNum = ctype_digit($age);

      if ($nameLen > 3 && ($hasDot !== false && $hasAt !== false) && $isStrNum) {
        
        echo '<h1 class="green">' . 'Accesso riuscito' . '</h1>';
      } else  {

        echo '<h1 class="red">' . 'Accesso negato' . '</h1>';
      }
    ?>
  </body>
</html>