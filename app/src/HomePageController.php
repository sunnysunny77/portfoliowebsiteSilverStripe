<?php

namespace pages;

use PageController;
use SilverStripe\View\Requirements;

class HomePageController extends PageController
{

    protected function init()
    {

        parent::init();
        // You can include any CSS or JS required by your project here.
        // See: https://docs.silverstripe.org/en/developer_guides/templates/requirements/
        Requirements::css("{$this->ThemeDir()}/css/home.css");
        Requirements::javascript("{$this->ThemeDir()}/js/scripts.js");
    }
}
