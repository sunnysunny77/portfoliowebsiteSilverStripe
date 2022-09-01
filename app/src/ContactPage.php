<?php

namespace pages;
use Page;
use SilverStripe\Assets\File;
use SilverStripe\AssetAdmin\Forms\UploadField;

class ContactPage extends Page
{

    private static $has_one = [
        'Vcard' => File::class
    ];

    public function getCMSFields() {
        $fields = parent::getCMSFields();

        $fields->removeByName('Title');

        $fields->removeByName('URLSegment');

        $fields->removeByName('MenuTitle');

        $fields->removeByName('Content');
        
        $field = UploadField::create('Vcard','Vcard contact information');
        $field ->allowedExtensions = array('vcf');

        $fields->addFieldToTab('Root.Main', $field);

          return $fields;
   }
}