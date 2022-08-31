<?php

namespace pages;

use SilverStripe\CMS\Model\SiteTree;
use SilverStripe\ORM\DataExtension;

class CustomSiteConfig extends DataExtension
{

    public function requireDefaultRecords()
    {

        parent::requireDefaultRecords();

        if (!SiteTree::get_by_link("home")) {

            $page = new HomePage;
            $page->Title = 'Home';
            $page->ClassName = 'HomePage';
            $page->URLSegment = 'home';
            $page->ShowInMenus = '1';
            $page->write();
            $page->publish('Stage', 'Live');
            $page->flushCache();
        }

        if (!SiteTree::get_by_link("about")) {

            $page = new ContactPage;
            $page->Title = 'About';
            $page->ClassName = 'AboutPage';
            $page->URLSegment = 'about';
            $page->ShowInMenus = '1';
            $page->write();
            $page->publish('Stage', 'Live');
            $page->flushCache();
        }

        if (!SiteTree::get_by_link("contact")) {

            $page = new ContactPage;
            $page->Title = 'Contact';
            $page->ClassName = 'ContactPage';
            $page->URLSegment = 'contact';
            $page->ShowInMenus = '1';
            $page->write();
            $page->publish('Stage', 'Live');
            $page->flushCache();
        }
    }
}
