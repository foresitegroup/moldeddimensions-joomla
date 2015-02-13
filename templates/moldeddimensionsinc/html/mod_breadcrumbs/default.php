<?php
defined('_JEXEC') or die;
JHtml::_('bootstrap.tooltip');
?>
<?php if ($params->get('showHere', 1))
	{
		echo '<span>'.JText::_('MOD_BREADCRUMBS_HERE').'</span>';
	}
?>
<ul class="breadcrumbs <?php echo $moduleclass_sfx; ?>">
	<?php for ($i = 0; $i < $count; $i ++){
		// Workaround for duplicate Home when using multilanguage
		if ($i == 1 && !empty($list[$i]->link) && !empty($list[$i - 1]->link) && $list[$i]->link == $list[$i - 1]->link) continue; ?>
		<li>
			<?php if ($i < $count - 1) {
				echo (!empty($list[$i]->link)) ? '<a href="'.$list[$i]->link.'">'.$list[$i]->name.'</a>' : $list[$i]->name;
			}  elseif ($params->get('showLast', 1)) {
				echo $list[$i]->name;
			} ?>
		</li>
<?php } ?>
</ul>
