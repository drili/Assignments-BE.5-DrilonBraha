<?php
      include("includes/database.php");

      // For assignment 4.0 etc
      include_once "includes/sellable-interface.php";
      include_once "includes/television-class.php";
      include_once "includes/tennisball-class.php";
      include_once "includes/storemanager-class.php";
      include_once "includes/golfball-class.php";
?>

<!DOCTYPE html>
<html>
      <head>
            <meta charset="utf-8">
            <title>Assignments BE.4 og BE.5</title>
      </head>

      <body>
            <header>
                  <h1>Assignment BE.4.0 og BE.5.0</h1>
                  <h3>Drilon Braha, 12-09-2018</h3>
            </header>

            <?php
                  // --- Assignment 4.0, 4.1, 4.2

                  // $tv = new Television();
                  // $tv->setScreenSize(42);
                  //
                  // $ball = new TennisBall();
                  // $ball->setColor('yellow');
                  //
                  // $gball = new GolfBall();
                  // $gball->setColor('pink');
                  // $gball->setIndents(450);
                  //
                  // $manager = new StoreManager();
                  // $manager->addProduct($tv);
                  // $manager->addProduct($ball);
                  // $manager->addProduct($gball);
                  // $manager->stockUp();
                  //
                  // printf("<p>There are %s %s-inch televisions and %s "
                  // . "%s tennis balls in stock.</p>\n"
                  // , $tv->getStockLevel()
                  // , $tv->getScreenSize()
                  // , $ball->getStockLevel()
                  // , $ball->getColor());
                  // printf("Golfballs stock: %s, color: %s, indents: %d"
                  // , $gball->getStockLevel()
                  // , $gball->getColor()
                  // , $gball->getIndents());
                  //
                  // print("<p>Selling a television ...</p>\n");
                  // $tv->sellItem();
                  // print("<p>Selling two tennis balls...</p>\n");
                  // $ball->sellItem();
                  // $ball->sellItem();
                  // print("<p>Selling three golf balls...</p>\n");
                  // $gball->sellItem();
                  // $gball->sellItem();
                  // $gball->sellItem();
                  //
                  // printf("<p>There are now %s %s-inch televisions and %s "
                  // . "%s tennis balls in stock.</p>\n"
                  // , $tv->getStockLevel()
                  // , $tv->getScreenSize()
                  // , $ball->getStockLevel()
                  // , $ball->getColor());
                  // printf("Golfballs stock: %s, color: %s, indents: %d"
                  // , $gball->getStockLevel()
                  // , $gball->getColor()
                  // , $gball->getIndents());
            ?>
            <br>

            <h2>Checking for connection:</h2>
            <?php
                  if (!$conn) {
                        echo "We are not connected.";
                  } else {
                        echo "We are connected.";
                  }
            ?>
            <br>

            <h2>Fetching data from database:</h2>
            <?php
                  $dataSet = $db->getGolfballs("SELECT * FROM golfballs");
                  if ($dataSet) {
                        foreach ($dataSet as $data) {
                              echo "<p>";
                                    echo "Color: " . $data->getColor() . "<br>";
                                    echo "Number in stock: " . $data->getNoinstock() . "<br>";
                                    echo "Dimples: " . $data->getDimples() . "<br>";
                              echo "</p>";
                        }
                  } else {
                        echo "No results found.";
                  }
            ?>

      </body>
</html>
