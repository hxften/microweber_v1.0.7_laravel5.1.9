
<script>
    _shop = true;
</script>

<div class="edit shop-sidebar-inner" field="shopsidebarinner" rel="page">
    <h4 class="element sidebar-title">Shop Cart</h4>
    <module type="shop/cart"  data-content-id="<?php print POST_ID; ?>" />

    <p class="element">&nbsp;</p>
    <h4 class="element sidebar-title">Shop Categories</h4>
	<module type="categories" content_id="<?php print PAGE_ID; ?>" />

</div>


