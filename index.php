<?php 

require_once __DIR__ . '/database.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Ajax Dischi</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

  <header>

  <!-- Filter Selector -->
  <div class="mySelector">
    
    <div class="logo">
      <i class="fa-brands fa-spotify"></i>
    </div>
    
    <div class="selector">
      <div class="select">
        <select v-model="cardSearch" @change="$emit('search', cardSearch)">
          <option value="Seleziona un genere">Seleziona un genere</option>
          <option value="Rock">Rock</option>
          <option value="Pop">Pop</option>
          <option value="Jazz">Jazz</option>
          <option value="Metal">Metal</option>
        </select>
      </div>
    </div>
    
  </div>
  <!-- /Filter Selector -->

  </header>

  <main>
    <!-- Stampo le mie card tramite PHP con un Database esterno -->
    <div class="card-container w-70">

      <div class="card-container">
        
        <?php foreach ($response as $elements) : ?>

          <div class="costum-card">
            <img src="<?php echo $elements['poster']; ?>" alt="<?php echo $elements['title']; ?>">
            <h3> <?php echo $elements['title']; ?> </h3>
            <p> <?php echo $elements['author']; ?> </p>
            <p> <?php echo $elements['year']; ?> </p> 
          </div>
          
          <?php endforeach; ?>
          
        </div>

    </div>
    <!-- /Stampo le mie card tramite PHP con un Database esterno -->
  </main>

</body>
</html>