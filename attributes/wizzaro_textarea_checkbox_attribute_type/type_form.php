<fieldset>
    <legend><?php echo  t('Textarea Checkbox Options') ?></legend>

    <div class="form-group">
        <label class="control-label"><?php echo t("Default Value") ?></label>
        <div class="checkbox"><label><?php echo $form->checkbox('akCheckedByDefault', 1, $akCheckedByDefault) ?> <?php echo t('The checkbox will be checked by default.') ?></label>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label"><?php echo t("Label") ?></label>
        <?php echo Core::make('editor')->outputStandardEditor('akCheckboxLabel', $akCheckboxLabel); ?>
        <p class="help-block"><?php echo t('This will be displayed next to the checkbox. If it is blank, the name of the attribute will be displayed.')?></p>
    </div>
</fieldset>