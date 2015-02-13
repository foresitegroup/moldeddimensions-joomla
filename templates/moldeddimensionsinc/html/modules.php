<?php

defined('_JEXEC') or die;

/**
 * <jdoc:include type="modules" name="test" style="default" />
 *
 * Custom module chrome, echos the whole module in a <div> and the header in <h{x}>. The level of
 * the header can be configured through a 'headerLevel' attribute of the <jdoc:include /> tag.
 * Defaults to <h3> if none given
 *
 * NOTICE: All chrome wrapping methods should be named: modChrome_{STYLE} and take the same
 * three arguments.
 */
 
function modChrome_widget($module, &$params, &$attribs)
{
	$base = substr($module->module, 4);
	$prefix = $params->get('moduleclass_sfx') ? $params->get('moduleclass_sfx') : "";
	$hl = isset($attribs['headerLevel']) ? (int) $attribs['headerLevel'] : 3;
	
	if (!empty ($module->content)) : ?>
	<?php if($prefix):?>
    <div class="<?php echo $prefix; ?>" id="<?php echo $base.'-'.$module->id; ?>">
    <?php endif;?>
		<?php if ($module->showtitle) : ?>
		<?php echo '<h'.$hl.'>'.$module->title.'</h'.$hl.'>'; ?>
		<?php endif; ?>
		<?php echo $module->content; ?>
     <?php if($prefix):?>
	</div>
	<?php endif; 
	endif;
}
function modChrome_footer_menu($module, &$params, &$attribs)
{
	$base = substr($module->module, 4);
	$prefix = $params->get('moduleclass_sfx') ? $params->get('moduleclass_sfx') : "";
	$hl = isset($attribs['headerLevel']) ? (int) $attribs['headerLevel'] : 3;
	
	if (!empty ($module->content)) : ?>

    <div class="col <?php echo $prefix; ?>" id="<?php echo $base.'-'.$module->id; ?>">

		<?php if ($module->showtitle) : ?>
		<?php echo '<h'.$hl.'>'.$module->title.'</h'.$hl.'>'; ?>
		<?php endif; ?>
        <nav class="sub-nav">
			<?php echo $module->content; ?>
        </nav>
	</div>
		<?php endif; 
}