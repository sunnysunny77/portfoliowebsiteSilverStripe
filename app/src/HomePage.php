<?php

namespace SilverStripe\Lessons;

use Page;
use SilverStripe\Forms\GridField\GridField;
use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;

class HomePage extends Page
{
    private static $table_name = 'HomePage';

    // data objects for page
    private static $has_many = [

        'StoryboardObjs' => StoryboardObj::class,
        'ConceptArtObjs' => ConceptArtObj::class,
        'IndependantCreationsObjs' => IndependantCreationsObj::class,
        'TheatreObjs' => TheatreObj::class,
        'DesignObjs' => DesignObj::class,
        'PoemsObjs' => PoemsObj::class,
        'IllustratedPoetryObjs' => IllustratedPoetryObj::class,
        'SculpturesObjs' => SculpturesObj::class,
        'IllustrationsObjs' => IllustrationsObj::class,
    ];

    // customize Admin UI
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

        $fields->addFieldToTab(
            'Root.Design',
            GridField::create(
                'DesignObjs',
                'Design',
                $this->DesignObjs(),
                GridFieldConfig_RecordEditor::create()
            )
        );

        $fields->addFieldToTab(
            'Root.Poems',
            GridField::create(
                'PoemsObjs',
                'Poems',
                $this->PoemsObjs(),
                GridFieldConfig_RecordEditor::create()
            )
        );

        $fields->addFieldToTab(
            'Root.IllustratedPoetry',
            GridField::create(
                'IllustratedPoetryObjs',
                'IllustratedPoetry',
                $this->IllustratedPoetryObjs(),
                GridFieldConfig_RecordEditor::create()
            )
        );

        $fields->addFieldToTab(
            'Root.Sculptures',
            GridField::create(
                'SculpturesObjs',
                'Sculptures',
                $this->SculpturesObjs(),
                GridFieldConfig_RecordEditor::create()
            )
        );

        $fields->addFieldToTab(
            'Root.Illustrations',
            GridField::create(
                'IllustrationsObjs',
                'Illustrations',
                $this->IllustrationsObjs(),
                GridFieldConfig_RecordEditor::create()
            )
        );

        return $fields;
    }
}
