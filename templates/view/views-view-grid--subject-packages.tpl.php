<?php
/**
 * @file
 * Default simple view template to display a rows in a grid.
 *
 * - $rows contains a nested array of rows. Each row contains an array of
 *   columns.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)) : ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<div class="<?php print $class; ?>"<?php print $attributes; ?>>
  <?php if (!empty($caption)) : ?>
    <h4><?php print $caption; ?></h4>
  <?php endif; ?>

  <div>
    <?php foreach ($rows as $row_number => $columns): ?>
      <div<?php if ($row_classes[$row_number]) { print ' class="row"';  } ?>>
        <?php foreach ($columns as $column_number => $item): ?>
          <div<?php if ($column_classes[$row_number][$column_number]) { print ' class="col-md-15 col-md-3 col-xs-15 col-xs-5 ' . $column_classes[$row_number][$column_number] .'"';  } ?>>
            <?php print $item; ?>
          </div>
        <?php endforeach; ?>
      </div>
    <?php endforeach; ?>
  </div>
</div>