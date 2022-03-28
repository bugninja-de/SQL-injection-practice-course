<?php $uri = $_SERVER['SCRIPT_NAME']; ?>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-center">
  <ul class="navbar-nav">
    <li class="nav-item <?php if ($uri == '/index.php') echo 'active';?>">
      <a class="nav-link" href="index.php" >Basics</a>
    </li>
    <li class="nav-item <?php if ($uri == '/products.php') echo 'active';?>">
      <a class="nav-link" href="products.php">Union Attack</a>
    </li>
    <li class="nav-item <?php if ($uri == '/blind.php') echo 'active';?>">
      <a class="nav-link" href="blind.php">Blind SQL</a>
    </li>
  </ul>
</nav>
