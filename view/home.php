
<h1>City X's Restuarant Reviews!</h1>
<h2>Brought to you by news Organization!</h2>
<form class="" action='<?php echo 'index.php?page=search'; ?>' method="post">
<input type="text" name="search" placeholder="Where did you eat today?"
<?php
//This uses get to check if it needs to reload a seach term. If a user navigates to page=search manually it will return not input value
if (isset($_GET['page'])){
  if (isset($_POST['search'])) {
    echo "value='".$_POST['search']."'";
  }
}
?>
>
<input type="submit" name="submit" value="GO!">

</form>
