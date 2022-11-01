<?php

namespace SilverStripe\Pages;

use Page;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Assets\File;
use SilverStripe\Forms\TextField;

class ContactPage extends Page
{

    private static $table_name = 'ContactPage'; 

    //custom fields
    private static $owns = [

        'Vcard',
    ];

    private static $has_one = [

        'Vcard' => File::class,
    ];

    private static $db = [

        'Phone' => 'Text',
        'Email' => 'Text',
    ];

    private static $defaults = [

        'Phone' => '0454986784',
        'Email' => 'example@gmail.com',
    ];

    // customize Admin UI
    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        $fields->removeByName('Title');

        $fields->removeByName('URLSegment');

        $fields->removeByName('MenuTitle');

        $fields->removeByName('Content');

        $fields->addFieldToTab('Root.Main', TextField::create('Email', "Email"));

        $fields->addFieldToTab('Root.Main', TextField::create('Phone', "Phone"));

        $field = UploadField::create('Vcard', 'Vcard contact information');
        $field->allowedExtensions = array('vcf');
        $field->setFolderName('vcf');

        $fields->addFieldToTab('Root.Main', $field);

        return $fields;
    }
}
