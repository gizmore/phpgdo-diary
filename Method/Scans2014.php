<?php
namespace GDO\Diary\Method;

use GDO\Birthday\WithAgeCheck;
use GDO\Core\GDT_Response;
use GDO\UI\GDT_Link;
use GDO\UI\MethodPage;

final class Scans2014 extends MethodPage
{

	use WithAgeCheck;

	public function execute()
	{
		$response = GDT_Response::makeWith(parent::execute());
		$button = GDT_Link::make('link_diary_scans_diary')->href($this->getModule()
			->wwwPath('scans/02_Diary_2014'));
		return $response->addField($button);
	}

	protected function agecheckAge()
	{
		return 18;
	}

}
