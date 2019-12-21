<div class="container is-fluid centered-level">

  <section class="columns hero is-medium">
    <div class="hero-body level-left">

      <div class="column">
        <h1 class="title">
          City X's Restuarant Reviews!
        </h1>
        <h2 class="subtitle">
          Brought to you by news Organization!
        </h2>
        <form class="column" action='<?php echo 'index.php?page=search'; ?>' method="post">

          <div class="field is-grouped">
            <div class="control is-expanded">
              <input class="input is-large" type="text" name="search" placeholder="Where did you eat today?" <?php
                //This uses get to check if it needs to reload a seach term. If a user navigates to page=search manually it will return not input value
                if (isset($_GET['page'])){
                  if (isset($_POST['search'])) {
                    echo "value='".$_POST['search']."'";
                  }
                }
              ?>>
            </div>
          </div>
          <div>
            <input class="button is-primary is-large is-outlined level-right" type="submit" name="submit" value="GO!">
          </div>

      </form>
      </div>
      <div class="container column level-right">
        <?php
        if (isset($_POST['search'])){
          $results = new Restaurant;
          $search = $results->restaurantSearch($_POST['search']);
          foreach ($search as $result ) {
            echo "<a href='index.php?page=restaurant&amp;id=".$result->restaurantID."'>".$result->name."</a><p>".$result->description."</p><p>Location: ".$result->location;
            }
          }
        ?>;
      </div>
    </div>
  </section>

</div>
