<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (C) 2005-2013 Leo Feyer
 *
 * @package   fen
 * @author    Frank Hoppe
 * @license   GNU/LGPL
 * @copyright Frank Hoppe 2013
 */

/**
 * palettes
 */
$GLOBALS['TL_DCA']['tl_settings']['palettes']['default'] .= ';{interview_legend:hide},interview_css';

/**
 * fields
 */

$GLOBALS['TL_DCA']['tl_settings']['fields']['interview_css'] = array
(
	'label'         => &$GLOBALS['TL_LANG']['tl_settings']['interview_css'],
	'inputType'     => 'checkbox',
	'eval'          => array
	(
		'tl_class'  => 'w50 clr',
	)
);
