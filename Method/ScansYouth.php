<?php
namespace GDO\Diary\Method;

use GDO\Core\GDT;
use GDO\Core\GDT_Response;
use GDO\UI\GDT_Link;
use GDO\UI\MethodPage;

final class ScansYouth extends MethodPage
{

	public function execute(): GDT
	{
		$response = GDT_Response::makeWith(parent::execute());
		$button = GDT_Link::make('link_diary_scans_youth')->href($this->getModule()->wwwPath('scans/01_Youth_Stories'));
		return $response->addField($button);
	}

}
