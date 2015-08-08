<?php
/**
 * @package     Persada.Site
 * @subpackage  mod_slider
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$doc = JFactory::getDocument();

$cssSizeInfo = getimagesize($params->get('slide1Img'));
$doc->addStyleDeclaration("
#home-slider {
height: $cssSizeInfo[1]px;
}
");

?>

<div class="flexslider">
	<ul class="slides">
		<?php if ($params->get('slide1Img')) : ?>
		<li>
			<img src="<?php echo $params->get('slide1Img'); ?>" alt="">
			<div class="caption-wrapper">
				<?php if ($params->get('slide1CaptionTitle') || $params->get('slide1CaptionText')) : ?>
				<div class="caption" data-right="5%">
					<?php if ($params->get('slide1CaptionTitle')) : ?>
					<h2 class="slide-title"><?php echo $params->get('slide1CaptionTitle'); ?></h2>
					<?php endif; ?>
					<?php if ($params->get('slide1CaptionText')) : ?>
					<p class="slide-text"><?php echo $params->get('slide1CaptionText'); ?></p>
					<?php endif; ?>
				</div>
				<?php endif; ?>
			</div>
		</li>
		<?php endif; ?>
		<?php if ($params->get('slide2Img')) : ?>
			<li>
				<img src="<?php echo $params->get('slide2Img'); ?>" alt="">
				<div class="caption-wrapper">
					<?php if ($params->get('slide2CaptionTitle') || $params->get('slide2CaptionText')) : ?>
						<div class="caption" data-right="5%">
							<?php if ($params->get('slide2CaptionTitle')) : ?>
								<h2 class="slide-title"><?php echo $params->get('slide2CaptionTitle'); ?></h2>
							<?php endif; ?>
							<?php if ($params->get('slide2CaptionText')) : ?>
								<p class="slide-text"><?php echo $params->get('slide2CaptionText'); ?></p>
							<?php endif; ?>
						</div>
					<?php endif; ?>
				</div>
			</li>
		<?php endif; ?>
		<?php if ($params->get('slide3Img')) : ?>
			<li>
				<img src="<?php echo $params->get('slide3Img'); ?>" alt="">
				<div class="caption-wrapper">
					<?php if ($params->get('slide3CaptionTitle') || $params->get('slide3CaptionText')) : ?>
						<div class="caption" data-right="5%">
							<?php if ($params->get('slide3CaptionTitle')) : ?>
								<h2 class="slide-title"><?php echo $params->get('slide3CaptionTitle'); ?></h2>
							<?php endif; ?>
							<?php if ($params->get('slide3CaptionText')) : ?>
								<p class="slide-text"><?php echo $params->get('slide3CaptionText'); ?></p>
							<?php endif; ?>
						</div>
					<?php endif; ?>
				</div>
			</li>
		<?php endif; ?>
		<?php if ($params->get('slide4Img')) : ?>
			<li>
				<img src="<?php echo $params->get('slide4Img'); ?>" alt="">
				<div class="caption-wrapper">
					<?php if ($params->get('slide4CaptionTitle') || $params->get('slide4CaptionText')) : ?>
						<div class="caption" data-right="5%">
							<?php if ($params->get('slide4CaptionTitle')) : ?>
								<h2 class="slide-title"><?php echo $params->get('slide4CaptionTitle'); ?></h2>
							<?php endif; ?>
							<?php if ($params->get('slide4CaptionText')) : ?>
								<p class="slide-text"><?php echo $params->get('slide4CaptionText'); ?></p>
							<?php endif; ?>
						</div>
					<?php endif; ?>
				</div>
			</li>
		<?php endif; ?>
	</ul>
</div>
