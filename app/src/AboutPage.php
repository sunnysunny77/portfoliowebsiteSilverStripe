<?php

namespace SilverStripe\Lessons;

use Page;

class AboutPage extends Page
{

    // customize Admin UI
    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        $fields->removeByName('Title');

        $fields->removeByName('URLSegment');

        $fields->removeByName('MenuTitle');

        $fields->removeByName('Content');

        return $fields;
    }
}
