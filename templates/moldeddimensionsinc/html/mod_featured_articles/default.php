<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_featured_articles
 *
 * @copyright   Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>
<div class="box-item <?php echo $moduleclass_sfx; ?>">
	<?php foreach ($list as $item) :  ?>
        <article class="box">
            <div class="box-holder">
                <?php 
                $article_images = $item->images;
                $obj = json_decode($article_images);
                $thumbnails = $obj->image_intro;
                $image_intro_alt = $obj->image_intro_alt; ?>
                <?php if ($thumbnails ): ?>
                    <img src="<?php echo $thumbnails; ?>" alt="<?php echo $image_intro_alt; ?>"  />
                <?php endif; ?>
                <h2><a href="<?php echo $item->link; ?>"><?php echo $item->title; ?></a></h2>
            </div>
            <div class="text-area">
                <?php echo $item->introtext ?>
            </div>
            <a href="<?php echo $item->link; ?>" class="read-more">More</a>
        </article>
    <?php endforeach; ?>
</div>