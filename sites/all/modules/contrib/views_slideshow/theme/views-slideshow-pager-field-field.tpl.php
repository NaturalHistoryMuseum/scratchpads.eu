<?php

/**
 * @file
 * Views Slideshow: Template for pager field - field.
 *
 * - $view: The view in use.
 * - $css_id: A field specific css identifier.
 * - $field: The field machine name.
 * - $field_item: The field being rendered.
 * - $field_rendered: The pre-rendered field.
 *
 * @ingroup views_templates
 */
?>
<div class="views-field-<?php print $css_id; ?>">
  <?php if ($field_item->label()) { ?>
    <label class="view-label-<?php print $css_id; ?>">
      <?php print $field_item->label(); ?>:
    </label>
  <?php } ?>
  <div class="views-content-<?php $css_id; ?>">
    <?php print $field_rendered; ?>
  </div>
</div>