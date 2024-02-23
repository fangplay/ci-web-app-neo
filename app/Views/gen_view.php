<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generations</title>
</head>
<body>
    <h1>Generations Timeline</h1>
    <ul>
      <?php foreach ($generation as $gen): ?>
         <li><?= $gen['name']; ?></li>
      <?php endforeach; ?>
   </ul>
</body>
</html>