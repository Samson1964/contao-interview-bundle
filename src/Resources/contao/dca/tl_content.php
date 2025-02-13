<?php

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
					'columnPos'         => 'spalte1',
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
					'style'             => 'width:450px; height:100px;',
					'columnPos'         => 'spalte2',
					'allowHtml'         => true,
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
					'style'             => 'width:450px; height:100px;',
					'columnPos'         => 'spalte3',
					'allowHtml'         => true,
				)
			),
			'question_image'            => array
			(
				'label'                 => &$GLOBALS['TL_LANG']['tl_content']['interview_question_image'],
				'exclude'               => true,
				'inputType'             => 'fileTree',
				'eval'                  => array
				(
					'filesOnly'         => true,
					'fieldType'         => 'radio',
					'valign'            => 'top',
					'columnPos'         => 'spalte2',
					'extensions'        => '%contao.image.valid_extensions%',
					'style'             => 'width:100px;'
				),
			),
			'answer_image'              => array
			(
				'label'                 => &$GLOBALS['TL_LANG']['tl_content']['interview_answer_image'],
				'exclude'               => true,
				'inputType'             => 'fileTree',
				'eval'                  => array
				(
					'filesOnly'         => true,
					'fieldType'         => 'radio',
					'valign'            => 'top',
					'columnPos'         => 'spalte3',
					'extensions'        => '%contao.image.valid_extensions%',
					'style'             => 'width:100px'
				),
			),
			'question_imagesize' => array
			(
				'label'                 => &$GLOBALS['TL_LANG']['tl_content']['interview_question_imagesize'],
				'exclude'               => true,
				'inputType'             => 'imageSize',
				'options'               => \System::getImageSizes(),
				'reference'             => &$GLOBALS['TL_LANG']['MSC'],
				'eval'                  => array
				(
					'rgxp'              => 'natural',
					'columnPos'         => 'spalte2',
					'includeBlankOption'=> true, 
					'nospace'           => true, 
					'style'             => 'width:100px'
				),
			),
			'answer_imagesize' => array
			(
				'label'                 => &$GLOBALS['TL_LANG']['tl_content']['interview_answer_imagesize'],
				'exclude'               => true,
				'inputType'             => 'imageSize',
				'options'               => \System::getImageSizes(),
				'reference'             => &$GLOBALS['TL_LANG']['MSC'],
				'eval'                  => array
				(
					'rgxp'              => 'natural',
					'columnPos'         => 'spalte3',
					'includeBlankOption'=> true, 
					'nospace'           => true, 
					'style'             => 'width:100px'
				),
			),
		)
	),
	'sql'                               => "blob NULL"
);

class tl_content_interview extends \Backend
{

}

