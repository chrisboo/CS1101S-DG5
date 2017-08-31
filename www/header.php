<nav class="navbar navbar-expand navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="index.php">CS1101S</a>
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Discussions</a>
        <div class="dropdown-menu">
          <?php
            for ($week = 2; $week <= 3; $week++) {
              echo "<a class='dropdown-item' href='w$week.php'>Week $week</a>";
            }
          ?>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Missions</a>
        <div class="dropdown-menu">
          <?php
            for ($mission = 1; $mission <= 2; $mission++) {
              echo "<a class='dropdown-item' href='w$mission.php'>Mission $mission</a>";
            }
          ?>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Blog</a>
      </li>
    </ul>      
    <span class="navbar-text">
      DG5
    </span>
  </div>
</nav>