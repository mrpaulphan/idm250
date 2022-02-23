<?php
// get_search_form(); is the default way of adding a search bar to WP. We will not use this
?>
<form class="search-form" action="<?php echo home_url(); ?>/search"
  method="get">
  <input type="text" name="s" value="">
  <input type="hidden" name="post_type[]" value="idm-projects">
  <button>Search</button>
</form>