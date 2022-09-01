<?php

namespace pages;

include "dataObjs/StoryboardObj.php";
include "dataObjs/ConceptArtObj.php";
include "dataObjs/IndependantCreationsObj.php";
include "dataObjs/TheatreObj.php";

use Page;
use SilverStripe\Forms\GridField\GridField;
use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;

class HomePage extends Page
{
    private static $table_name = 'HomePage';

    private static $owns = [

        'StoryboardObjs',
        'ConceptArtObjs',
        'IndependantCreationsObjs',
        'TheatreObjs',
    ];
    private static $has_many = [

        'StoryboardObjs' => StoryboardObj::class,
        'ConceptArtObjs' => dataObjs\ConceptArtObj::class,
        'IndependantCreationsObjs' => dataObjs\IndependantCreationsObj::class,
        'TheatreObjs' => dataObjs\TheatreObj::class,
    ];

    public function getCMSFields()
    {

        $fields = parent::getCMSFields();

        $fields->removeByName('Title');

        $fields->removeByName('URLSegment');

        $fields->removeByName('MenuTitle');

        $fields->removeByName('Content');

        $fields->addFieldToTab(
            'Root.Storyboard',
            GridField::create(
                'StoryboardObjs',
                'Storyboard',
                $this->StoryboardObjs(),
                GridFieldConfig_RecordEditor::create()
            )
        );

        $fields->addFieldToTab(
            'Root.ConceptArt',
            GridField::create(
                'ConceptArtObjs',
                'ConceptArt',
                $this->ConceptArtObjs(),
                GridFieldConfig_RecordEditor::create()
            )
        );

        $fields->addFieldToTab(
            'Root.IndependantCreations',
            GridField::create(
                'IndependantCreationsObjs',
                'IndependantCreations',
                $this->IndependantCreationsObjs(),
                GridFieldConfig_RecordEditor::create()
            )
        );

        $fields->addFieldToTab(
            'Root.Theatre',
            GridField::create(
                'TheatreObjs',
                'Theatre',
                $this->TheatreObjs(),
                GridFieldConfig_RecordEditor::create()
            )
        );

        return $fields;
    }
}
