// ALLOWS TOGGLING OF HAMBURGER

document.addEventListener('DOMContentLoaded', () => {
  console.log("Burger");
  // Get all "navbar-burger" elements
  const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

  // Check if there are any navbar burgers
  if ($navbarBurgers.length > 0) {

    // Add a click event on each of them
    $navbarBurgers.forEach( el => {
      el.addEventListener('click', () => {

        // Get the target from the "data-target" attribute
        const target = el.dataset.target;
        const $target = document.getElementById(target);

        // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
        el.classList.toggle('is-active');
        $target.classList.toggle('is-active');

      });
    });
  }

});

// Need to add Javascript search function for allRestaurants table
function filterTable(event) {

  // get typed input data from keyup event, select table rows from DOM
  const filter = event.target.value.toUpperCase();
  const rows = document.querySelector("#restaurants tbody").rows;
  
  for (let i = 0; i < rows.length; i++) {
      // select columns for filter (name, description and location)
      let firstCol = rows[i].cells[0].textContent.toUpperCase();
      let secondCol = rows[i].cells[1].textContent.toUpperCase();
      let thirdCol = rows[i].cells[2].textContent.toUpperCase();

      // check is typed input is present in any of the columns. if not the hide that row
      if (firstCol.indexOf(filter) > -1 || secondCol.indexOf(filter) > -1 || thirdCol.indexOf(filter) > -1) {
          rows[i].style.display = "";
      } else {
          rows[i].style.display = "none";
      }      
  }
}

// selects the input box and assigns a keyup event which triggers the filterTable function above
document.querySelector('#filterRestaurants').addEventListener('keyup', filterTable, false);