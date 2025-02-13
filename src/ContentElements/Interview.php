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
		// MCW-Daten laden
		$interview = unserialize($this->interview);
		
		// Bilder konvertieren
		for($x = 0; $x < count($interview); $x++)
		{
			// Frage-Bild laden, wenn Quelle und Größe gesetzt
			if(isset($interview[$x]['question_image']) && isset($interview[$x]['question_imagesize']))
			{
				$figure = \System::getContainer()
					->get('contao.image.studio')
					->createFigureBuilder()
					->from($interview[$x]['question_image'])
					->setSize($interview[$x]['question_imagesize'])
					->buildIfResourceExists();
				if($figure !== null)
				{
					// Bild in das Interview-Array zurückschreiben
					$interview[$x]['question_image'] = (object)$figure->getLegacyTemplateData();
					$interview[$x]['question_image']->figure = $figure;
				}
				else
				{
					// Bilddaten zurücksetzen
					$interview[$x]['question_image'] = false;
				}
			}
			else
			{
				// Bilddaten zurücksetzen
				$interview[$x]['question_image'] = false;
			}
			unset($interview[$x]['question_imagesize']);

			// Antwort-Bild laden, wenn Quelle und Größe gesetzt
			if(isset($interview[$x]['answer_image']) && isset($interview[$x]['answer_imagesize']))
			{
				$figure = \System::getContainer()
					->get('contao.image.studio')
					->createFigureBuilder()
					->from($interview[$x]['answer_image'])
					->setSize($interview[$x]['answer_imagesize'])
					->buildIfResourceExists();
				if($figure !== null)
				{
					// Bild in das Interview-Array zurückschreiben
					$interview[$x]['answer_image'] = (object)$figure->getLegacyTemplateData();
					$interview[$x]['answer_image']->figure = $figure;
				}
				else
				{
					// Bilddaten zurücksetzen
					$interview[$x]['answer_image'] = false;
				}
			}
			else
			{
				// Bilddaten zurücksetzen
				$interview[$x]['answer_image'] = false;
			}
			unset($interview[$x]['answer_imagesize']);
		}

		$this->Template->interview = $interview;
		$this->Template->interview_css = $GLOBALS['TL_CONFIG']['interview_css'];

		return;

	}

}
