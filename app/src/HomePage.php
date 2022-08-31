<?php

namespace pages;

use Page;
use SilverStripe\Forms\GridField\GridField;
use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;

class HomePage extends Page
{
    private static $table_name = 'HomePage';

    private static $owns = [

        'StoryboardObjs',
    ];
    private static $has_many = [

        'StoryboardObjs' => StoryboardObj::class,
    ];

    public function getCMSFields()
    {

        $fields = parent::getCMSFields();

        $fields->removeByName('Content');

        $fields->addFieldToTab(
            'Root.Main',
            GridField::create(
                'StoryboardObjs',
                'Gallery',
                $this->StoryboardObjs(),
                GridFieldConfig_RecordEditor::create()
            )
        );

        return $fields;
    }
}
