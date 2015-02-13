<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_knowledge_center
 *
 * @copyright   Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>
<section class="products">
    <h2 class="heading"><a href="<?php echo Jroute::_( 'index.php?option=com_content&view=category&id='.$list[0]->catid); ?>">A PEEK AT <span>OUR PARTS</span></a></h2>
    <div class="products-block">
        <div class="products-item <?php echo $moduleclass_sfx; ?>">
			<?php $counter = 1; ?>
			<?php foreach ($list as $item) : if($counter > 4) $counter = 1; ?>
                <article class="box<?php if($counter == 2 or $counter == 3) echo ' hidden ';?>">
                    <?php 
                        $article_images = $item->images;
                        $obj = json_decode($article_images);
                        $thumbnails = $obj->image_intro;
                        $image_intro_alt = $obj->image_intro_alt; 
                        if ($thumbnails ): ?>
                            <img src="<?php echo $thumbnails; ?>" alt="<?php echo $image_intro_alt; ?>"  />
                    <?php endif; ?>
                    <div class="text-holder">
                        <h3><a href="<?php echo $item->link; ?>"><?php echo $item->title; ?></a></h3>
                        <?php echo $item->introtext ?>
                    </div>
                </article>
            <?php $counter++; endforeach; ?>
        </div>
        <a href="#" class="btn-next">Next</a>
    </div>
</section>
