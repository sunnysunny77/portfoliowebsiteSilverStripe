<?php

namespace SilverStripe\Lessons;

use PageController;
use SilverStripe\View\Requirements;

class HomePageController extends PageController
{

    protected function init()
    {

        parent::init();
        // You can include any CSS or JS required by your project here.
        // See: https://docs.silverstripe.org/en/developer_guides/templates/requirements/
        Requirements::css("css/home.css");
        Requirements::javascript("/js/scripts.js");
    }
}
