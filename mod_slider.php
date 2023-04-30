<?php
defined('_JEXEC') or die;

use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Language\Text;

// Get the module parameters
$params = JFactory::getApplication()->input->get('params');

// Get the module layout
$layout = $params->get('layout', 'default');

// Get the module class suffix
$moduleclass_sfx = $params->get('moduleclass_sfx', '');

// Get the slider content
$content = HTMLHelper::_('content.loadModule', 'mod_slider', $params);

?>

<div id="slider" class="flexslider <?php echo $moduleclass_sfx; ?>">
  <ul class="slides">
    <?php echo $content; ?>
  </ul>
</div>
