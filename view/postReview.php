<hr>
<h1>My Review: </h1>
<form class="" action="<?php echo "index.php?page=restaurant&id=".$_GET['id']; ?>" method='post'>
  <h1>Rate your experience (scale of 1-10)</h1>
  <div>
    Quality of Service: 
    <input class="scale" type="range" min='1' max = '10' name='qos' />
  </div>
  <div>
    Quality of Food: 
    <input class="scale" type="range" min='1' max = '10' name='qof' />
  </div>
  <div>
    Cleanliness: 
    <input class="scale" type="range" min='1' max = '10' name='clean' />
  </div>
  <div>
    Speed of Servce: 
    <input class="scale" type="range" min='1' max = '10' name='spe' />
  </div>
  <div>
    Value: 
    <input class="scale" type="range" min='1' max = '10' name='val' />
  </div>
  </div>
    Allergy Info Provided? 
    <input type="radio" name="aler" value="true"> Yes <input type="radio" name="aler" value="false"> No
  </div>
  <div>
  Short Review: 
  <input type="text" name="short" placeholder="Tell us about your experience in under 150 characters" required maxlength="149" size="140"/>
</div>
  <input type="submit" name="Critique!" value="submit">
</form>
