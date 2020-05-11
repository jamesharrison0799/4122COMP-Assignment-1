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
  <link rel="stylesheet" href="/css/nav.css">
  <?php
    include 'php\database_connection.php';
    include 'php\game.php';

    //Games array
    $games = array();

    //load games from the database
    ChromePhp::Log("Loading data...");
    $sql = "SELECT * FROM `games`;";
    $result = $conn->query($sql);
    $resultCheck = mysqli_num_rows($result);
    if($resultCheck > 0){
      ChromePhp::Log("data was found");
      while($row = mysqli_fetch_assoc($result)){
        $game = new Game();
        $game->setProps($row['ID'],$row['Name'],$row['Price'],$row['Rating'],$row['isGotW'],$row['Genre'],$row['short_desc'],$row['review'],$row['link']);
        array_push($games,$game);
      }

    }else {
      ChromePhp::Log("No data was found");
    }

  ?>

</head>
  <body>
    <div class="icon">
      <a href="index.html"><img src="assests\icon_full.png" alt="Generic Game Review Icon"></a>
    </div>

    <div class="nav-container">
      <div class="content left">
        <ul>
          <li><h1>GAME REVIEWS</h1></li>
          <li><img src="assests\menu_divider.png" alt="menu divider"></li>
          <li>
            <!-- List of games loaded from database -->
            <div class="game-list">
              <ul>
                <?php
                  foreach ($games as $game) {
                    echo "<a href='"."review.php?id=".$game->id."' ><li>".$game->name."</li></a>";
                  }
                ?>
                </ul>
            </div>
          </li>
          <li><img src="assests\menu_divider.png" alt="menu divider"></li>
          <li><a href="https://twitter.com/GenericGamesLPL"><h2>CONTACT</h2></a></li>
          <li><a href="about.html"><h2>ABOUT</h2></a></li>
          <li><a href="http://discord.mesa.gg"><h2>DISCORD</h2></a></li>
       </ul>
      </div>
      <div class="content right">
        <ul>
          <li><h1>GAME OF THE WEEK</h1></li>
          <li><img src="assests\gotwimg.png" alt="Game of the Week image">
          <?php
            foreach($games as $game){
              if($game->isGotW == 1){
                $gotw_name = $game->name;
                $gotw_short_discription = $game->short_desc;
                $gotw_link = "review.php?id=".$game->id;
              }
            }
            echo "<li><h2>".$gotw_name."</h2></li>";
            echo "<li><p>".$gotw_short_discription."</p></li>";
            echo "<li>
                    <div class = 'button_container'>
                      <a href='".$gotw_link."'><button type='button'>MORE!</button></a>
                    </div>
                  </li>";
           ?>
        </ul>
      </div>
    </div>
  </body>
</html>
