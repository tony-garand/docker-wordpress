<div id="search-modal" class="nav-search-modal">
  <div tabindex=0 class="close-search-modal"></div>
  <form role="search" method="get" class="nav-search-form" action="<?php echo e(home_url('/')); ?>">
    <label>
      <input
        type="search"
        class="nav-search-field"
        placeholder="Type your search and enter"
        value="<?php echo e(get_search_query()); ?>"
        name="s"
      >
    </label>
  </form>
</div>
<div id="search-overlay" class="nav-search-overlay"></div>

