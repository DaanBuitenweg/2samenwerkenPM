    <section>
  <nav>
    <?php
    include_once 'functions.php';
    $subnav = [
      'laptop/pc'=>'producten.php',
      'servers'=>'servers.php',
    ];
    echo createlist($subnav, '')
    ?>
  </nav>