<?php
namespace GDO\Diary\Method;

use GDO\UI\MethodPage;

final class Poem extends MethodPage
{

    public function getMethodTitle(): string
    {
        return t('link_gizmore_poem');
    }

}
