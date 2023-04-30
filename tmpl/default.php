<?php
defined('_JEXEC') or die;

use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Language\Text;

// Get the module parameters
$params = JFactory::getApplication()->input->get('params');

// Get the number of slides
$count = (int) $params->get('count');

// Get the slides
$slides = [];
for ($i = 1; $i <= $count; $i++)
{
  $slides[] = [
    'img' => $params->get('slide' . $i . 'Img'),
    'title' => $params->get('slide' . $i . 'CaptionTitle'),
    'text' => $params->get('slide' . $i . 'CaptionText'),
  ];
}

?>

<div class="flexslider">
  <ul class="slides">
    <?php foreach ($slides as $slide) : ?>
      <li>
        <img src="<?php echo $slide['img']; ?>" alt="">
        <div class="caption-wrapper">
          <h2 class="slide-title"><?php echo $slide['title']; ?></h2>
          <p class="slide-text"><?php echo $slide['text']; ?></p>
        </div>
      </li>
    <?php endforeach; ?>
  </ul>
</div>
