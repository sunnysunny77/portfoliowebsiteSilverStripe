<?php

namespace pages;

use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Assets\File;
use SilverStripe\Forms\FieldList;
use SilverStripe\ORM\DataObject;
use SilverStripe\Security\Permission;

class ConactObj extends DataObject
{

    private static $table_name = 'Contact';

    private static $owns = [

        'ContactObj',
    ];

    private static $has_one = [

        'ContactPage' => ContactPage::class,
        'ContactObj' => File::class,
    ];
 
    public function onAfterWrite()
    {
            $this->getOwner()->publishRecursive();
    }

    public function getCMSFields()
    {

        $field = UploadField::create('Vcard', 'Vcard contact information');
        $field->allowedExtensions = array('vcf');

        $fields = FieldList::create($field);

        return $fields;
    }

    public function canView($member = null) 
    {
        return Permission::check('CMS_ACCESS_CMSMain', 'any', $member);
    }

    public function canEdit($member = null) 
    {
        return Permission::check('CMS_ACCESS_CMSMain', 'any', $member);
    }

    public function canDelete($member = null) 
    {
        return Permission::check('CMS_ACCESS_CMSMain', 'any', $member);
    }

    public function canCreate($member = null, $context = []) 
    {
        return Permission::check('CMS_ACCESS_CMSMain', 'any', $member);
    }
}
