<?php 
include_once (dirname(__FILE__).'/functions.php');

global $tpl;
$tpl = new Joomla_Template($this);

$site_url = $tpl->template_url();?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width" />
	<meta charset="utf-8">
    <script type="text/javascript">
		var pathInfo = {
			base: '<?php echo $site_url ?>/',
			css: 'css/',
			js: 'js/',
			swf: 'swf/'
		}
	</script>
	<link media="all" rel="stylesheet" href="<?php echo $site_url; ?>/css/all.css" type="text/css" />
	<link media="all" rel="stylesheet" href="<?php echo $site_url; ?>/css/impl.css" type="text/css" />
	<link href='http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic,300italic,300,900,900italic' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="<?php echo $site_url; ?>/js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="<?php echo $site_url; ?>/js/jquery.main.js"></script>
	<!--[if IE 8]>
		<link media="all" rel="stylesheet" href="<?php echo $site_url; ?>/css/ie.css">
		<script type="text/javascript" src="<?php echo $site_url; ?>/js/ie.js"></script>
	<![endif]-->
</head>
<body  class="sub-page" >
	<div id="wrapper">
		<header id="header">
			<h2 class="mobile-heading"><a href="<?php echo $this->baseurl; ?>"><?php echo $logo;?> </a></h2>
			<div class="header-holder">
				 <?php if($tpl->countModules('top')) : ?>
                <div class="panel">
					<div class="panel-holder">
                    	<?php $tpl->loadPosition('top','widget'); ?>
					</div>
				</div>
                <?php endif; ?>
				<div class="header-frame">
					<div class="logo-holder">
						<strong class="logo"><a href="<?php echo $tpl->base_url(); ?>"><?php echo $tpl->sitename(); ?></a></strong>
                        <div class="slogan">
							<strong>MOLDED DIMENSIONS INC.</strong>
							<span>Custom Molder of Rubber and Cast Polyurethane Components.</span>
						</div>
					</div>
                    <?php $tpl->loadPosition('search'); ?>
				</div>
                <?php if($tpl->countModules('mainmenu')) : ?>
				<div class="nav-holder">
					<a href="#" class="opener">Menu</a>
					<div class="slide">
						<nav id="nav">
                        	<?php $tpl->loadPosition('mainmenu'); ?>
						</nav>
					</div>
				</div>
                <?php endif; ?>
			</div>
		</header>

        	<div class="promo">
                <div class="promo-holder">
                	<h2><?php echo $this->error->getCode(); ?> - <?php echo $this->error->getMessage(); ?></h2>
                </div>
            </div>
		<div id="main">
            <div class="main-block">
                <div id="content">
                    <div class="error">
                        <div id="outline">
                            <div id="errorboxoutline">
                                <div id="errorboxheader"><?php echo $this->error->getCode(); ?> - <?php echo $this->error->getMessage(); ?></div>
                                <div id="errorboxbody">
                                    <p><strong><?php echo JText::_('YOU_MAY_NOT_BE_ABLE_TO_VISIT_THIS_PAGE_BECAUSE_OF'); ?>:</strong></p>
                                    <ol>
                                        <li><?php echo JText::_('AN_OUT_OF_DATE_BOOKMARK_FAVOURITE'); ?></li>
                                        <li><?php echo JText::_('A_SEARCH_ENGINE_THAT_HAS_AN_OUT_OF_DATE_LISTING_FOR_THIS_SITE'); ?></li>
                                        <li><?php echo JText::_('A_MIS_TYPED_ADDRESS'); ?></li>
                                        <li><?php echo JText::_('YOU_HAVE_NO_ACCESS_TO_THIS_PAGE'); ?></li>
                                        <li><?php echo JText::_('The requested resource was not found'); ?></li>
                                        <li><?php echo JText::_('An error has occurred while processing your request.'); ?></li>
                                    </ol>
                                    <p><strong><?php echo JText::_('PLEASE_TRY_ONE_OF_THE_FOLLOWING_PAGES'); ?>:</strong></p>
                                    <ul>
                                        <li><a href="<?php echo $this->baseurl; ?>/index.php" title="<?php echo JText::_('GO_TO_THE_HOME_PAGE'); ?>"><?php echo JText::_('HOME_PAGE'); ?></a></li>
                                    </ul>
                                    <p><?php echo JText::_('IF_DIFFICULTIES_PERSIST__PLEASE_CONTACT_THE_SYSTEM_ADMINISTRATOR_OF_THIS_SITE'); ?></p>
                                    <div id="techinfo">
                                        <p><?php echo $this->error->getMessage(); ?></p>
                                        <p>
                                        <?php if ($this->debug) :
                                            echo $this->renderBacktrace();
                                        endif; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
		</div>
		<footer id="footer">
			<div class="footer-holder">
				<?php /*?><?php */?><div class="footer-block">
                	<?php if($tpl->countModules('footer_form') or $tpl->countModules('footer_right') ) : ?>
					<div class="footer-box">
						<div class="holder">
                        	<?php if($tpl->countModules('footer_form')) : ?>
							<div class="footer-search-form">
                            	<?php $tpl->loadPosition('footer_form','widget'); ?>
							</div>
							<?php endif; ?>
                            <?php if($tpl->countModules('footer_right')) : ?>
							<div class="download-box">
                            	<?php $tpl->loadPosition('footer_right','widget'); ?>
							</div>
                            <?php endif; ?>
						</div>
					</div>
                    <?php endif; ?>
                    <?php $tpl->loadPosition('footerheading','widget'); ?>
                    <?php if($tpl->countModules('footermenu')) : ?>
					<div class="columns">
						<?php $tpl->loadPosition('footermenu','footer_menu'); ?>
					</div>
                    <?php endif; ?>
				</div>
				<div class="footer-frame">
                	<?php $tpl->loadPosition('footer_bottom','widget'); ?>
				</div>
			</div>
		</footer>
		<a href="#wrapper" class="back-top">Back to top</a>
	</div>
</body>
</html>