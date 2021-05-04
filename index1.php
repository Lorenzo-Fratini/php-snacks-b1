<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
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

      p {
        margin: 10px 0;
      }
    </style>
  </head>
  <body>
    <?php

      // Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario.
      // Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
      // Stampiamo a schermo tutte le partite con questo schema.
      // Olimpia Milano - Cantù | 55-60

      $matches = [
        [
          'homeTeam' => 'Detroit Pistons',
          'homePoints' => '112',
          'visitorTeam' => 'Orlando Magic',
          'visitorPoints' => '119'
        ],
        [
          'homeTeam' => 'Washington Wizards',
          'homePoints' => '154',
          'visitorTeam' => 'Indiana Pacers',
          'visitorPoints' => '141'
        ],
        [
          'homeTeam' => 'New Orleans Pelicans',
          'homePoints' => '108',
          'visitorTeam' => 'Golden State Warriors',
          'visitorPoints' => '123'
        ],
        [
          'homeTeam' => 'Atlanta Hawks',
          'homePoints' => '123',
          'visitorTeam' => 'Portland Trail Blazers',
          'visitorPoints' => '114'
        ],
        [
          'homeTeam' => 'Chicago Bulls',
          'homePoints' => '94',
          'visitorTeam' => 'Philadelphia 76ers',
          'visitorPoints' => '106'
        ]
      ];

      for ($i = 0; $i < count($matches); $i++) {

        $match = $matches[$i];

        echo '<p>' . $match['homeTeam'] 
        . ' - ' . $match['visitorTeam'] 
        . ' | ' . $match['homePoints'] 
        . '-' . $match['visitorPoints'] 
        . '</p>';
      }
    ?>
  </body>
</html>