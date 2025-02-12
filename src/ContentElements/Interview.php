<?php

namespace Schachbulle\ContaoInterviewBundle\ContentElements;

/**
 * Contao Open Source CMS
 *
 * Copyright (C) 2005-2013 Leo Feyer
 *
 * @package   chesstable
 * Version    1.0.0
 * @author    Frank Hoppe
 * @license   GNU/LGPL
 * @copyright Frank Hoppe 2013
 */

class Interview extends \ContentElement
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'ce_interview';

	/**
	 * Generate the module
	 */
	protected function compile()
	{

		$this->Template->interview = unserialize($this->interview);
		$this->Template->interview_css = $GLOBALS['TL_CONFIG']['interview_css'];

		return;

	}

}
