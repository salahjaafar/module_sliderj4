<?php
/**
 * @package     Persada.Site
 * @subpackage  mod_slider
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Helper\ModuleHelper;

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

require ModuleHelper::getLayoutPath('mod_slider', $params->get('layout', 'default'));
?>
