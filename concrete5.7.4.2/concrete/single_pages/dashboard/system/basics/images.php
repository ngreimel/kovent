<?php defined('C5_EXECUTE') or die("Access Denied.");?>
<form method="post" class="form-stacked" action="<?php echo $view->action('save_interface_settings')?>" enctype="multipart/form-data" >

<?php echo Loader::helper('validation/token')->output('save_interface_settings')?>

<?php if (!Config::get('concrete.white_label.background_image')) { ?>

<div class="form-group">
    <label class="control-label"><?php echo t('Background Image')?></label>
    <div class="radio"><label><?php echo $form->radio('DASHBOARD_BACKGROUND_IMAGE', '', $DASHBOARD_BACKGROUND_IMAGE)?> <span><?php echo t('Pull a picture of the day from concrete5.org (Default)')?></span></label></div>
    <div class="radio"><label><?php echo $form->radio('DASHBOARD_BACKGROUND_IMAGE', 'none', $DASHBOARD_BACKGROUND_IMAGE)?> <span><?php echo t('None')?></span></label></div>
    <div class="radio"><label><?php echo $form->radio('DASHBOARD_BACKGROUND_IMAGE', 'custom', $DASHBOARD_BACKGROUND_IMAGE)?> <span><?php echo t('Specify Custom Image')?></span></div>
    <div id="custom-background-image" <?php if ($DASHBOARD_BACKGROUND_IMAGE != 'custom') { ?>style="display: none" <?php } ?>>
        <br/>
        <?php echo Loader::helper('concrete/asset_library')->image('DASHBOARD_BACKGROUND_IMAGE_CUSTOM_FILE_ID', DASHBOARD_BACKGROUND_IMAGE_CUSTOM_FILE_ID, t('Choose Image'), $imageObject)?>
    </div>
</div>


<script type="text/javascript">
$(function() {
	$("input[name=DASHBOARD_BACKGROUND_IMAGE]").change(function() {
		if ($("input[name=DASHBOARD_BACKGROUND_IMAGE]:checked").val() == 'custom') {
			$("#custom-background-image").show();
		} else {
			$("#custom-background-image").hide();
		}
	});
});
</script>

<?php  } else { ?>
    <?php echo t('Options disabled, interface settings are specified in config/site.php.')?>
<?php } ?>

    <div class="ccm-dashboard-form-actions-wrapper">
        <div class="ccm-dashboard-form-actions">
            <button type="submit" class="btn btn-primary pull-right"><?php echo t('Save')?></button>
        </div>
    </div>

</form>

<?php echo Loader::helper('concrete/dashboard')->getDashboardPaneFooterWrapper(false);?>
