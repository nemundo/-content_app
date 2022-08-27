<?php

namespace Nemundo\Content\App\Store\Site;

use Nemundo\Admin\Site\AbstractEditIconSite;
use Nemundo\Admin\Template\AdminTemplate;
use Nemundo\Content\App\Store\Form\HtmlStoreForm;
use Nemundo\Content\App\Store\Parameter\StoreParameter;
use Nemundo\Content\App\Store\Type\LargeTextStoreType;
use Nemundo\Package\CkEditor5\CkEditor5Package;
use Nemundo\Package\Jquery\Package\JqueryPackage;


class HtmlStoreEditSite extends AbstractEditIconSite
{

    /**
     * @var HtmlStoreEditSite
     */
    public static $site;

    protected function loadSite()
    {
        $this->title = 'Editieren';
        $this->url = 'html-store-edit';
        HtmlStoreEditSite::$site = $this;
    }


    public function loadContent()
    {

        $store = new LargeTextStoreType();
        $store->storeId = (new StoreParameter())->getValue();

        $page = new AdminTemplate();
        $page->pageTitle = 'Edit';
        $page->addPackage(new JqueryPackage());
        $page->addPackage(new CkEditor5Package());

        $form = new HtmlStoreForm($page);
        $form->store = $store;
        $form->urlRefererRedirect = true;

        $page->render();

    }

}