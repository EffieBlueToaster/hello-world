<?php
  require_once('init.php'); 
  $utente = getUtente($link);
  $_SESSION['utente_id']=$utente[0]['id'];

  $query = "SELECT `utente_img` from `utenti` WHERE utente_id='".$_SESSION['utente_id']."';";

  $ris = mysqli_query($link, $query);
  $row = mysqli_fetch_assoc($ris);

  $avatar = $row['utente_img'];
?>
          
<ul class="nav navbar-right">
  <!--account-->
  <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
      <span class="glyphicon glyphicon-user"></span> 
      <strong>Account</strong>
      <span class="glyphicon glyphicon-chevron-down"></span>
    </a>
          
    <!--tendina-->
    <ul class="dropdown-menu">
      <li>
        <div class="navbar-login">
          <div class="row">
            <div class="col-lg-4">
              <p class="text-center">
              <?php if($avatar==0)
              {
                ?>
                    <span class="glyphicon glyphicon-user icon-size"></span></p>
              <?php
              }

              if($avatar==1)
              {
                ?>
                    <span><img alt="avatar" height="90" src="img/avatar/u1.png"></span></p>
              <?php
              }

              if($avatar==2)
              {
                ?>
                    <span><img alt="avatar" height="90" src="img/avatar/u2.png"></span></p>
              <?php
              }

              if($avatar==3)
              {
                ?>
                    <span><img alt="avatar" height="90" src="img/avatar/u3.png"></span></p>
              <?php
              }

              if($avatar==4)
              {
                ?>
                    <span><img alt="avatar" height="90" src="img/avatar/u4.png"></span></p>
              <?php
              }

              if($avatar==5)
              {
                ?>
                    <span><img alt="avatar" height="90" src="img/avatar/d1.png"></span></p>
              <?php
              }

              if($avatar==6)
              {
                ?>
                    <span><img alt="avatar" height="90" src="img/avatar/d2.png"></span></p>
              <?php
              }

              if($avatar==7)
              {
                ?>
                    <span><img alt="avatar" height="90" src="img/avatar/d3.png"></span></p>
              <?php
              }

              if($avatar==8)
              {
                ?>
                    <span><img alt="avatar" height="90" src="img/avatar/d4.png"></span></p>
              <?php
              } 
              ?>  
            </div>

            <div class="col-lg-8">
              <p class="text-left"><strong><?php echo $utente[0]['nome'] ?><strong></p>
              <p class="text-left small"><?php echo $_SESSION['email']; ?></p>
              <p class="text-left">
              <a href="profilo.php" class="btn btn-primary btn-block btn-sm">Modifica</a></p>
            </div>
          </div>
        </div>
      </li>

      <li class="divider"></li>

      <li>
        <div class="navbar-login navbar-login-session">
          <div class="row">
            <div class="col-lg-12">
              <p><a href="logout.php" class="btn btn-danger btn-block"  onClick="return confirm('Sicuro di voler uscire?')">Esci</a></p>
            </div>
          </div>
        </div>
      </li>
    </ul>
  </li>
</ul>
    
</div>
</nav>
</div>