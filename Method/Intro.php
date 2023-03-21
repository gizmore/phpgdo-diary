<?php
namespace GDO\Diary\Method;

use GDO\Core\GDT_Response;
use GDO\UI\GDT_Bar;
use GDO\UI\GDT_Link;
use GDO\UI\MethodPage;

/**
 * Show diary introduction.
 *
 * @author gizmore
 */
final class Intro extends MethodPage
{

	public function execute()
	{
		$response = GDT_Response::makeWith(parent::execute());
		$btn0 = GDT_Link::make('link_diary_scans_intro')->href($this->getModule()->wwwPath('scans/00_Introduction'));
		$btn1 = GDT_Link::make('link_diary_scans_youth')->href($this->getModule()->wwwPath('scans/01_Youth_Stories'));
		$btn2 = GDT_Link::make('link_diary_scans_diary')->href($this->getModule()->wwwPath('scans/02_Diary_2014'));
		$bar = GDT_Bar::make()->horizontal();
		$bar->addFields($btn0, $btn1, $btn2);
		return $response->addField($bar);
	}

}
