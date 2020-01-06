<section class="hero is-dark is-fullheight-with-navbar is-bold">
  <form id="addRestaurant" class='container' action='' method='post'>
    <h2 class="title is-2 has-text-centered">Add New Restaurant</h2>
    <div class="field">
      <label class="label">Restaurant Name</label>
      <div class="control">
        <input class="input" type='text' name='name' placeholder='Restaurant Name' required>
      </div>
    </div>
    <div class="field">
      <label class="label">Description</label>
      <div class="control">
        <input class="input" type="text" name='description' placeholder='Restaurant Info' required>
      </div>
    </div>
    <div class="field">
      <label class="label">Location</label>
      <div class="control">
        <input class="input" type='text' name='location' placeholder='Restaurant Location' required>
      </div>
    </div>
    <div class="field">
      <label class="label text-is-white">Contact</label>
      <div class="control">
        <input class="input" type='text' name='contact' placeholder='contact info' required>
      </div>
    </div>
    <div class="control has-text-centered">
      <input class="button is-primary" type='submit' name='Register' value='Register'>
    </div>
  </form>
</section>