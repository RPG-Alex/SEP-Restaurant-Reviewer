<div class="container is-fluid centered-level">

<section class="columns hero is-medium">
  <div class="hero-body level-left">
    
    <div class="column container">
      <h1 class="title">
        City X's Restuarant Reviews!
      </h1>
      <h2 class="subtitle">
        Brought to you by news Organization!
      </h2>
    </div>
  
  
    <div class=" field is-grouped container level-right">

      <form class="column" action='<?php echo 'index.php?page=search'; ?>' method="post">

        <div class="field">
          <div class="control is-expanded">
            <input class="input is-large" type="text" name="search" placeholder="Where did you eat today?">
          </div>
        </div>


        <?php
          //This uses get to check if it needs to reload a seach term. If a user navigates to page=search manually it will return not input value
          if (isset($_GET['page'])){
            if (isset($_POST['search'])) {
              echo "value='".$_POST['search']."'";
            }
          }
        ?>
        <div>
          <input class="button is-primary is-large is-outlined level-right" type="submit" name="submit" value="GO!">
        </div>

      </form>
    </div>
  </div>
</section>

</div>
