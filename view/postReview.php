<div id="postReview" class="container">
  <hr>
  <h1>My Review: </h1>
  <form class="container" action="<?php echo "index.php?page=restaurant&id=".$_GET['id']; ?>" method='post'>
    <h1>Rate your experience (scale of 1-10)</h1>
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
    <div>
      <p>Allergy Info Provided?</p> 
      <input class="radio" type="radio" name="aler" value="true"> Yes <input class="radio" type="radio" name="aler" value="false"> No
    </div>
    <div>
    <p>Short Review:</p> 
    <textarea class="textarea is-large" type="text" name="short" placeholder="Tell us about your experience in under 150 characters" required maxlength="149" />
    </textarea>
  </div>
    <input class="button is-primary" type="submit" name="Critique!" value="submit">
  </form>
</div>  
