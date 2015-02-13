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
<section class="products">
    <h2 class="heading"><a href="index.php/knowledge-center/part-examples">A PEEK AT <span>OUR PARTS</span></a></h2>
    <div class="products-block">
<div id="k2ModuleBox<?php echo $module->id; ?>" class="k2ItemsBlock<?php if($params->get('moduleclass_sfx')) echo ' '.$params->get('moduleclass_sfx'); ?>">

	<?php if($params->get('itemPreText')): ?>
	<p class="modulePretext"><?php echo $params->get('itemPreText'); ?></p>
	<?php endif; ?>

	<?php if(count($items)): ?>
  <ul style="padding: 8px;">
    <?php foreach ($items as $key=>$item):	?>
    <li style="display:inline-block; padding:20px; width:240px;">

      <!-- Plugins: BeforeDisplay -->
      <?php echo $item->event->BeforeDisplay; ?>

      <!-- K2 Plugins: K2BeforeDisplay -->
      <?php echo $item->event->K2BeforeDisplay; ?>

      
<?php if($params->get('itemImage') && isset($item->image)): ?>
	      <a class="moduleItemImage" href="<?php echo $item->link; ?>" title="<?php echo JText::_('K2_CONTINUE_READING'); ?> &quot;<?php echo K2HelperUtilities::cleanHtml($item->title); ?>&quot;">
	      	<img style="max-width:60px; float:left; padding-right:20px;" src="<?php echo $item->image; ?>" alt="<?php echo K2HelperUtilities::cleanHtml($item->title); ?>"/>
	      </a>
	      <?php endif; ?>
          
          
      <?php if($params->get('itemTitle')): ?>
      <span style="font-size:14px; font-weight:bold;"><a style="text-decoration:none;" class="moduleItemTitle" href="<?php echo $item->link; ?>"><?php echo $item->title; ?></a></span>
      <?php endif; ?>

      

      

      <?php if($params->get('itemImage') || $params->get('itemIntroText')): ?>
      <div class="moduleItemIntrotext">
	      

      	<?php if($params->get('itemIntroText')): ?>
      	<?php echo $item->introtext; ?>
      	<?php endif; ?>
      </div>
      <?php endif; ?>

      

      <div class="clr"></div>

      

      

			

      <!-- Plugins: AfterDisplay -->
      <?php echo $item->event->AfterDisplay; ?>

      <!-- K2 Plugins: K2AfterDisplay -->
      <?php echo $item->event->K2AfterDisplay; ?>

      <div class="clr"></div>
    </li>
    <?php endforeach; ?>
    <li class="clearList"></li>
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
</div>
</section>
