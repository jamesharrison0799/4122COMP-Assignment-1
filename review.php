<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- Tab -->
    <title>Navigation - GGR</title>
    <link rel="icon" href="assests\icon_exsmal.png">

    <!-- Fonts -->
    <link rel="stylesheet" href="\fonts\fonts.css">

    <!-- stylesheets -->
    <link rel="stylesheet" href="/css/master.css">
    <link rel="stylesheet" href="/css/review.css">
    <?php
      include 'php\database_connection.php';
      include 'php\game.php';

      $games = [];

      //load games from the database
      ChromePhp::Log("Loading data...");
      $sql = "SELECT * FROM games WHERE id=".$_GET['id'];
      $result = $conn->query($sql);
      if($result != false){
        $resultCheck = mysqli_num_rows($result);
        if($resultCheck > 0){
          ChromePhp::Log("data was found");
          while($row = mysqli_fetch_assoc($result)){
            $game = new Game();
            $game->setProps($row['ID'],$row['Name'],$row['Price'],$row['Rating'],$row['isGotW'],$row['Genre'],$row['short_desc'],$row['review'],$row['link']);
            //array_push($games,$game);
          }
        }else {
          ChromePhp::Log("No data was found");
        }
      }else{
        header("Location: notfound.html");
        die();
      }
    ?>

  </head>
  <body>
    <div class="icon">
      <a href="index.html"><img src="assests\icon_full.png" alt="Generic Game Review Icon"></a>
    </div>

    <div class = "container">
      <header>
        <h1><?=$game->name;?></h1>
        <img src="assests\menu_divider_orange.png" alt="Divider image orange">
      </header>
      <div class="content">
        <div class="left">
          <p><?=$game->review;?></h1>
        </div>
        <div class="right">
          <header>
            <h2>QUICK FACTS</h2>
          </header>
          <div class="divider">
            <img src="assests\menu_divider_orange.png" alt="Divider image orange">
          </div>
          <ul>
            <li><h3>Rating</h3></li>
            <li><h4><?=$game->rating;?>/5</h4></li>
            <li><h3>Price</h3></li>
            <li><h4>£<?=$game->price;?></h4></li>
            <li><h3>GAME LINK</h3></li>
            <li>
              <a href="<?=$game->link;?>" target="_blank">
                <h4><?=$game->link;?></h4>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="nav_button">
      <a href="nav.php"><img src="assests\menu_up_icon.png" alt="up icon"></a>
    </div>

  </body>
</html>
