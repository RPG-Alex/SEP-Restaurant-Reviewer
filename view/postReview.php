<hr>
<h1>My Review: </h1>
<form class="" action="<?php echo "index.php?page=restaurant&id=".$_GET['id']; ?>" method='post'>
  <h1>Rate your experience (scale of 1-10)</h1>
  Quality of Service: <input type="range" min='1' max = '10' name='qos' />
  Quality of Food: <input type="range" min='1' max = '10' name='qof' />
  Cleanliness: <input type="range" min='1' max = '10' name='clean' />
  Speed of Servce: <input type="range" min='1' max = '10' name='spe' />
  Value: <input type="range" min='1' max = '10' name='val' />
  Allergy Info Provided? <input type="radio" name="aler" value="true"> Yes | <input type="radio" name="aler" value="false"> No
  Short Review: <input type="text" name="short" placeholder="Tell us about your experience in under 150 characters" required maxlength="149" size="140"/>
  <input type="submit" name="Critique!" value="submit">
</form>
