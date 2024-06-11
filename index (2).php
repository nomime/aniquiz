<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Anime Quiz</title>
    <link href="include.css" rel="stylesheet" type="text/css"/>
  </head>
  <body>
    <div class='box'>
      <h2>test your knowlege.</h2>
      <form action="question.php" method="post">
        <select name="select">
          <option value="1">Naruto</option>
          <option value="2">Pokemon</option>
          <option value="3">One Peice</option>
          <option value="4">Dragonball Z</option>
          <option value="5">Demon Slayer</option>
        </select>
        <br> <br>
        <input type="hidden" name="Tcount" value="1">
        <input type="hidden" name="Wcount" value="1">
        <input type="hidden" name="same" value="0">
        <input type="hidden" name="right" value="1">
        <input type="hidden" name="crossof" value="[]">
        <button type="submit">GO</button>
        <br> <br>
      </form>
    </div>
  </body>
</html>