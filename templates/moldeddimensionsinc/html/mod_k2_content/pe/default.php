<?php
/**
 * @version		2.6.x
 * @package		K2
 * @author		JoomlaWorks http://www.joomlaworks.net
 * @copyright	Copyright (c) 2006 - 2014 JoomlaWorks Ltd. All rights reserved.
 * @license		GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 */

// no direct access
defined('_JEXEC') or die;
?>

<div id="k2ModuleBox<?php echo $module->id; ?>" class="k2ItemsBlock<?php if($params->get('moduleclass_sfx')) echo ' '.$params->get('moduleclass_sfx'); ?>">

	<?php if($params->get('itemPreText')): ?>
	<p class="modulePretext"><?php echo $params->get('itemPreText'); ?></p>
	<?php endif; ?>

	<?php if(count($items)): ?>
  <ul style="list-style:none; padding-left:0; margin:0 0 0 0; list-style-type:none;">
    <?php foreach ($items as $key=>$item):	?>
    <li style="list-style-type:none; margin:0 0 0 0; list-style:none; padding-left:0;">

      <!-- Plugins: BeforeDisplay -->
      <?php echo $item->event->BeforeDisplay; ?>

      <!-- K2 Plugins: K2BeforeDisplay -->
      <?php echo $item->event->K2BeforeDisplay; ?>

      
		<?php if($params->get('itemImage') || $params->get('itemIntroText')): ?>
      
      <div id="pestyles" style="background-color:#fff; padding:10px; -webkit-border-radius: 4px;-moz-border-radius: 4px;border-radius: 4px;">
      <div>
	      <?php if($params->get('itemImage') && isset($item->image)): ?>
	      <a href="<?php echo $item->link; ?>" title="<?php echo JText::_('K2_CONTINUE_READING'); ?> &quot;<?php echo K2HelperUtilities::cleanHtml($item->title); ?>&quot;">
	      	<img style="float:left; max-width:20%; margin:0 10px 0 0; border:0px;" src="<?php echo $item->image; ?>" alt="<?php echo K2HelperUtilities::cleanHtml($item->title); ?>"/>
	      </a>
	      <?php endif; ?>

      	
      </div>
      <?php endif; ?>
        
        
      <?php if($params->get('itemTitle')): ?>
      <a style="font-size:13px; text-decoration:none;" href="<?php echo $item->link; ?>"><?php echo $item->title; ?></a>
      <?php endif; ?>
<div class="clr"></div>
      </div>
      

      

      <div class="clr"></div>

      

      <!-- Plugins: AfterDisplayContent -->
      <?php echo $item->event->AfterDisplayContent; ?>

      <!-- K2 Plugins: K2AfterDisplayContent -->
      <?php echo $item->event->K2AfterDisplayContent; ?>

      

      

      

     

      <!-- Plugins: AfterDisplay -->
      <?php echo $item->event->AfterDisplay; ?>

      <!-- K2 Plugins: K2AfterDisplay -->
      <?php echo $item->event->K2AfterDisplay; ?>
<li class="clearList"></li><div style="margin:3px 0 3px 0; border-bottom:1px #fff dotted;"></div>
      <div class="clr"></div>
    </li>
    <?php endforeach; ?>
    
  </ul>
  <?php endif; ?>

	<?php if($params->get('itemCustomLink')): ?>
	<a class="moduleCustomLink" href="<?php echo $params->get('itemCustomLinkURL'); ?>" title="<?php echo K2HelperUtilities::cleanHtml($itemCustomLinkTitle); ?>"><?php echo $itemCustomLinkTitle; ?></a>
	<?php endif; ?>

	<?php if($params->get('feed')): ?>
	<div class="k2FeedIcon">
		<a href="<?php echo JRoute::_('index.php?option=com_k2&view=itemlist&format=feed&moduleID='.$module->id); ?>" title="<?php echo JText::_('K2_SUBSCRIBE_TO_THIS_RSS_FEED'); ?>">
			<span><?php echo JText::_('K2_SUBSCRIBE_TO_THIS_RSS_FEED'); ?></span>
		</a>
		<div class="clr"></div>
	</div>
	<?php endif; ?>

</div>
