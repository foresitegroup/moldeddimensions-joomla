<?php
defined('_JEXEC') or die;
?>
    <form action="<?php echo JRoute::_('index.php');?>" method="post" class="search-form">
    		<?php
				$output = '<input name="searchword" id="mod-search-searchword" maxlength="' . $maxlength . '"  class="inputbox'.$moduleclass_sfx.' search-query" type="search"  value="" />';
				if ($button) :
					if ($imagebutton) :
						$button = ' <input type="image" value="' . $button_text . '" class="button' . $moduleclass_sfx.'" src="' . $img . '" onclick="this.form.searchword.focus();"/>';
					else :
						$button = ' <button  type="submit" class="button' . $moduleclass_sfx . ' btn btn-primary" onclick="this.form.searchword.focus();"><span>' . $button_text . '</span></button>';
					endif;
				endif;

				switch ($button_pos) :
					case 'top' :
						$button = $button . '<br />';
						$output = $button . $output;
						break;

					case 'bottom' :
						$button = '<br />' . $button;
						$output = $output . $button;
						break;

					case 'right' :
						$output = $output . $button;
						break;

					case 'left' :
					default :
						$output = $button . $output;
						break;
				endswitch;

				echo $output;
			?>
    	<input type="hidden" name="task" value="search" />
    	<input type="hidden" name="option" value="com_search" />
    	<input type="hidden" name="Itemid" value="<?php echo $mitemid; ?>" />
    </form>
<?php /*?></div><?php */?>
