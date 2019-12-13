
    <img src="https://img.pngio.com/example-stamp-png-graphic-black-and-white-stock-brunei-vehicle-example-stamp-png-820_317.png" alt="">
    <h1>Restuarant Title (need to modify)</h1>
    <hr>
<form class="" action="" method="">
  <table border>
    <tr>
      <td><b>Dining Aspect</b></td>
      <?php
      //The following code will generate the form iteratively $county is a generic counter variable
        $county=1;
        while ($county <= 10) {
          echo "<td><b>".$county."</b></td>";
          $county++;
        }
        $county=1;
       ?>
    </tr>
    <tr>
      <td>Quality of Food</td>
      <?php
        while ($county <= 10) {
          echo "<td>
            <input type='radio' id='.$county.'>
          </td>";
          $county++;
        }
        $county=1;
       ?>
    </tr>
    <tr>
      <td>Service</td>
      <?php
        while ($county <= 10) {
          echo "<td>
            <input type='radio' id='.$county.'>
          </td>";
          $county++;
        }
        $county=1;
       ?>
    </tr>
    <tr>
      <td>Value</td>
      <?php
        while ($county <= 10) {
          echo "<td>
            <input type='radio' id='.$county.'>
          </td>";
          $county++;
        }
        $county=1;
       ?>
    </tr>
  </table>
</form>
