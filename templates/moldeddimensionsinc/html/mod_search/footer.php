<?php
defined('_JEXEC') or die;
?>
<?php /*?><div class="search<?php echo $moduleclass_sfx ?>"><?php */?>
    <form action="<?php echo JRoute::_('index.php');?>" method="post" >
    	<div class="row">
    		<?php
				$output = '<div class="input-holder"><input name="searchword" id="mod-search-searchword-footer" maxlength="' . $maxlength . '"  class="inputbox'.$moduleclass_sfx.' search-query" type="search" size="' . $width . '" value="' . $text . '"  onblur="if (this.value==\'\') this.value=\'' . $text . '\';" onfocus="if (this.value==\'' . $text . '\') this.value=\'\';" /></div>';
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
        </div>
    </form>
<?php /*?></div><?php */?>
