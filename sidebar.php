    <section>
  <nav>
    <?php
    include_once 'functions.php';
    $subnav = [
      'SubOne'=>'sub.php',
      'SubTwo'=>'sub2.php',
      'SubThree'=>'sub3.php',
    ];
    echo createlist($subnav, '')
    ?>
    </nav>