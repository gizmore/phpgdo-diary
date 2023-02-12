<?php
namespace GDO\Diary\Method;

use GDO\UI\MethodPage;
use GDO\UI\GDT_Link;
use GDO\Core\GDT_Response;
use GDO\Birthday\WithAgeCheck;

final class Scans2014 extends MethodPage
{
	use WithAgeCheck;

	protected function agecheckAge()
	{
		return 18;
	}

	public function execute()
	{
		$response = GDT_Response::makeWith(parent::execute());
		$button = GDT_Link::make('link_diary_scans_diary')->href($this->getModule()
			->wwwPath('scans/02_Diary_2014'));
		return $response->addField($button);
	}

}
