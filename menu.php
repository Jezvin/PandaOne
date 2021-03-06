<?php require "menu-code.php" ?>

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container">
      <a class="navbar-brand" href="./home">
        <img src="./images/logo.png" /> PandaOne
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="./home">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./series">Series</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./todo">Todo</a>
          </li>
        </ul>
        <!--<form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>-->
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="nav navbar-nav ml-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="http://example.com/" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="gravatar" src="<?php echo $_SESSION["gravatar"]; ?>" /> <?php echo $_SESSION["pseudo"]; ?>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown01">
                <a class="dropdown-item" href="./my-comments">My comments</a>
                <form class="form-inline" action="menu" method="POST">
                  <input type="hidden" name="mode" value="logout">
                  <button class="dropdown-item">Logout</button>
                </form>
              </div>
            </li>
          </ul>
        </div>
      </div>
  </div>
</nav>