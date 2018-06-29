<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<div class="textarea-checkbox">
    <div>
        <input
            type="checkbox"
            value="1"
            name="<?=$view->field('value')?>"
            <?php if ($checked) { ?> checked <?php } ?>
        >
    </div>
    <div>
        <?php echo $controller->getCheckboxLabel() ?>
    </div>
</div>