<?php
namespace GDO\Diary;

use GDO\Core\GDO_Module;
use GDO\UI\GDT_Page;
use GDO\UI\GDT_Link;
use GDO\Birthday\Module_Birthday;

/**
 * The gizmore diaries.
 *
 * @author gizmore
 * @license property of gizmore@wechall.net
 * @version 7.0.2
 * @since 6.10.4 - 09/11/2014
 */
final class Module_Diary extends GDO_Module
{

	public int $priority = 100;

	public function onLoadLanguage(): void
	{
		$this->loadLanguage('lang/diary');
	}

	public function getDependencies(): array
	{
		return [
			'Admin',
			'Birthday',
			'Classic',
			'Contact',
			'Login',
			'News',
		];
	}

	public function onInstall(): void
	{
		$m = Module_Birthday::instance();
		$m->saveConfigVar('global_min_age', '18');
		$m->saveConfigVar('method_min_age', '18');
	}

	public function onIncludeScripts(): void
	{
		$this->addCSS('css/diary.css');
	}

	public function onInitSidebar(): void
	{
		$page = GDT_Page::instance();
		
		# Top nav
		$header = GDT_Link::make('link_diary')->href(href('Diary', 'Welcome'));
		$page->topBar()->addField($header);

		# Left nav
		$left = $page->leftBar();
		$link = GDT_Link::make('link_diary_alcrules')->href(href('Diary', 'DrinkingRules2021'));
		$left->addField($link);

		$link = GDT_Link::make('link_diary_scans_intro')->href(href('Diary', 'Intro'));
		$left->addField($link);

		$link = GDT_Link::make('link_diary_scans_youth')->href(href('Diary', 'ScansYouth'));
		$left->addField($link);

		$link = GDT_Link::make('link_diary_scans_diary')->href(href('Diary', 'Scans2014'));
		$left->addField($link);
	}
	
}
