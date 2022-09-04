<?php

namespace pages;

use Page;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\GridField\GridField;
use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;

class ContactPage extends Page
{

    private static $table_name = 'ContactPage'; 
   
    private static $has_many = [

        'ContactObjs' => ConactObj::class,
    ];

    private static $db = [

        'Phone' => 'Text',
        'Email' => 'Text',
    ];

    private static $defaults = [

        'Phone' => '0454986784',
        'Email' => 'example@gmail.com',
    ];

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        $fields->removeByName('Title');

        $fields->removeByName('URLSegment');

        $fields->removeByName('MenuTitle');

        $fields->removeByName('Content');

        $fields->addFieldToTab('Root.Main', TextField::create('Email', "Email"));

        $fields->addFieldToTab('Root.Main', TextField::create('Phone', "Phone"));

        $fields->addFieldToTab(
            'Root.Main',
            GridField::create(
                'ContactObjs',
                'Contact',
                $this->ContactObjs(),
                GridFieldConfig_RecordEditor::create()
            )
        );

        return $fields;
    }
}
