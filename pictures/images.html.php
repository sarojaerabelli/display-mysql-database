<html>  
  <head>  
    <title>Display Images</title> 
  </head>  
  <body>
      <blockquote><p> 
        <?php echo htmlspecialchars($username."\n", ENT_QUOTES, 'UTF-8'); ?>
        <img src="<?php echo "".$row['imageurl']; ?>" alt="image">
      </p></blockquote>
  </body>  
</html>