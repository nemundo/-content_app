<?php

namespace Nemundo\Content\App\Store\Site;

use Nemundo\Admin\Site\AbstractEditIconSite;
use Nemundo\Admin\Template\AdminTemplate;
use Nemundo\Content\App\Store\Form\TextStoreForm;
use Nemundo\Content\App\Store\Parameter\StoreParameter;
use Nemundo\Content\App\Store\Type\TextStoreType;


class TextStoreEditSite extends AbstractEditIconSite
{

    /**
     * @var TextStoreEditSite
     */
    public static $site;

    protected function loadSite()
    {
        $this->title = 'Editieren';
        $this->url = 'text-store-edit';
        TextStoreEditSite::$site = $this;
    }


    public function loadContent()
    {

        $store = new TextStoreType();
        $store->storeId = (new StoreParameter())->getValue();

        $page = new AdminTemplate();
        $page->pageTitle = 'Edit';

        $form = new TextStoreForm($page);
        $form->store = $store;
        $form->urlRefererRedirect = true;

        $page->render();

    }
}