<!-- restaurantID, cost, qfood, qservice, qclean, spservice, value, allergyinfo, overall, shortReview -->

<div id="postReview" class="container is-fluid">
  <br/>
  <h1 class="title">My Review </h1>
  <form class="container" action="<?php echo "index.php?page=posted"; ?>" method='post'>
    <h2 class="subtitle">Rate your experience (scale of 1-10)</h1>
      <input type="hidden" name="rid" id="rid" value="<?php echo $_GET['id'] ?>">
    <div>
      <p>Quality of Service:</p>
      <input class="scale" type="range" min='1' max = '10' name='qservice' value="5"/>
    </div>
    <div>
      <p>Quality of Food:</p>
      <input class="scale" type="range" min='1' max = '10' name='qfood' value="5"/>
    </div>
    <div>
      <p>Cleanliness:</p>
      <input class="scale" type="range" min='1' max = '10' name='qclean' value="5"/>
    </div>
    <div>
      <p>Speed of Service:</p>
      <input class="scale" type="range" min='1' max = '10' name='spservice' value="5"/>
    </div>
    <div>
      <p>Value:</p>
      <input class="scale" type="range" min='1' max = '10' name='value' value="5"/>
    </div>

    <div class="section">
      <h3>Allergy Info Provided?</h3>
      <div class="radio-toolbar">
        <input type="radio" id="yes" name="allergyInfo" value="TRUE">
        <label for="yes">Yes</label>
        <input type="radio" id="no" name="allergyInfo" value="0">
        <label for="no">No</label>
      </div>
    </div>

    <div>
      <p>Overall:</p>
      <input class="scale" type="range" min='1' max = '10' name='overall' value="5"/>
    </div>

    <div class="field">
      <p>Short Review:</p>
      <textarea class="textarea is-large field" type="text" name="shortReview" placeholder="Tell us about your experience in under 150 characters" required maxlength="149" />
      </textarea>
  </div>
  <div class="">
    <label for="cost">How much did you spend here today?</label>
    <input type="number" min="0" max="10000" step=".01" name="cost" id="cost">
  </div>
  <div class="field">
    <input class="button is-fullwidth is-primary" type="submit" name="Critique!" value="submit">
  </div>
  </form>
</div>
