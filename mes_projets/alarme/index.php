<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Alarme</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <div class="wrapper">
      <img src="./files/clock.svg" alt="clock">
      <h1>00:00:00 PM</h1>
      <div class="content">
        <div class="column">
          <select>
            <option value="Hour" selected disabled hidden>Heures</option>
          </select>
        </div>
        <div class="column">
          <select>
            <option value="Minute" selected disabled hidden>Minutes</option>
          </select>
        </div>
        <div class="column">
          <select>
            <option value="AM/PM" selected disabled hidden>AM/PM</option>
          </select>
        </div>
      </div>
      <button>Régler l'alarme</button>
    </div>

    <script src="script.js"></script>

  </body>
</html>