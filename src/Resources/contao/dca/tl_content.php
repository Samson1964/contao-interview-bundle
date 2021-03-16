<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

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
 * Palettes
 */
$GLOBALS['TL_DCA']['tl_content']['palettes']['interview'] = '{type_legend},type,headline;{interview_legend},interview;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop';

/**
 * Fields
 */
$GLOBALS['TL_DCA']['tl_content']['fields']['interview'] = array
(
	'label'                             => &$GLOBALS['TL_LANG']['tl_content']['interview'],
	'exclude'                           => true,
	'inputType'                         => 'multiColumnWizard',
	'eval'                              => array
	(
		'buttonPos'                     => 'top',
		'buttons'                       => array
		(
			//'copy' 			=> true, 
			//'delete' 		=> true,
			//'up' 			=> true,
			//'down'			=> true
		),
		'columnFields'                  => array
		(
			'published'                 => array
			(
				'label'                 => &$GLOBALS['TL_LANG']['tl_content']['interview_published'],
				'exclude'               => true,
				'inputType'             => 'checkbox',
				'eval'                  => array
				(	
					'style'             => 'width: 20px',
					'valign'            => 'top'
				)
			),
			'question'                  => array
			(
				'label'                 => &$GLOBALS['TL_LANG']['tl_content']['interview_question'],
				'exclude'               => true,
				'inputType'             => 'textarea',
				'eval'                  => array
				(
					'rte'               =>'tinyMCE',
					'style'             => 'width:400px; height:150px;',
					'allowHtml'         => true,
					//'columnPos'         => '1'
				)
			),
			'answer'                    => array
			(
				'label'                 => &$GLOBALS['TL_LANG']['tl_content']['interview_answer'],
				'exclude'               => true,
				'inputType'             => 'textarea',
				'eval'                  => array
				(
					'rte'               =>'tinyMCE',
					'style'             => 'width:400px; height:150px;',
					'allowHtml'         => true,
					//'columnPos'         => '1'
				)
			),
		)
	),
	'sql'                               => "blob NULL"
);
