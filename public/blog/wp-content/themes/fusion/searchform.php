<?php /* Fusion/digitalnature */ ?>

<!-- search form -->

<div id="searchtab">
  <div class="inside">
    <form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
      <input type="text" name="s" id="searchbox" class="searchfield" value="<?php _e("Search","fusion"); ?>" onfocus="if(this.value == '<?php _e("Search","fusion"); ?>') {this.value = '';}" onblur="if (this.value == '') {this.value = '<?php _e("Search","fusion"); ?>';}" />
       <input type="submit" value="Go" class="searchbutton" />
    </form>
  </div>
</div>

<!-- /search form -->