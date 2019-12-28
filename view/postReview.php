<div id="postReview" class="container is-fluid">
  <br/>
  <h1 class="title">My Review </h1>
  <form class="container" action="<?php echo "index.php?page=restaurant&id=".$_GET['id']; ?>" method='post'>
    <h2 class="subtitle">Rate your experience (scale of 1-10)</h1>
    <div>
      <p>Quality of Service:</p> 
      <input class="scale" type="range" min='1' max = '10' name='qos' value="5"/>
    </div>
    <div>
      <p>Quality of Food:</p> 
      <input class="scale" type="range" min='1' max = '10' name='qof' value="5"/>
    </div>
    <div>
      <p>Cleanliness:</p> 
      <input class="scale" type="range" min='1' max = '10' name='clean' value="5"/>
    </div>
    <div>
      <p>Speed of Servce:</p> 
      <input class="scale" type="range" min='1' max = '10' name='spe' value="5"/>
    </div>
    <div>
      <p>Value:</p> 
      <input class="scale" type="range" min='1' max = '10' name='val' value="5"/>
    </div>

    <div class="section">
      <h3>Allergy Info Provided?</h3> 
      <div class="radio-toolbar">
        <input type="radio" id="yes" name="aler" value="true">
        <label for="yes">Yes</label> 
        <input type="radio" id="no" name="aler" value="false"> 
        <label for="no">No</label>
      </div>
    </div>
    
    <div class="field">
      <p>Short Review:</p> 
      <textarea class="textarea is-large field" type="text" name="short" placeholder="Tell us about your experience in under 150 characters" required maxlength="149" />
      </textarea>
  </div>
  <div class="field">
    <input class="button is-fullwidth is-primary" type="submit" name="Critique!" value="submit">
  </div>
  </form>
</div>  
