<?php

namespace pages;
use Page;

class AboutPage extends Page
{

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
