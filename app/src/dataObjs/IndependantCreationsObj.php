<?php

namespace pages;

use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;
use SilverStripe\Security\Permission;

// The DataObject class represents a single row in a database table
class IndependantCreationsObj extends DataObject
{

    private static $table_name = 'IndependantCreations';

    private static $owns = [

        'IndependantCreationsObj',
    ];

    private static $has_one = [

        'HomePage' => HomePage::class,
        'IndependantCreationsObj' => Image::class,
    ];

    private static $extensions = [
        Versioned::class,
    ];

    private static $versioned_gridfield_extensions = true;

    private static $db = [

        'ImageTitle' => 'Text',
    ];

    private static $summary_fields = [

        'ImageTitle' => 'ImageTitle',
        'IndependantCreationsObj.Filename' => 'Image file name',
        'GridThumbnail' => '',
    ];

    public function getGridThumbnail()
    {
        if ($this->IndependantCreationsObj()->exists()) {
            return $this->IndependantCreationsObj()->ScaleWidth(100);
        }

        return "(no image)";
    }

    public function getCMSFields()
    {

        $text = TextField::create('ImageTitle', "ImageTitle");
        $text->setDescription('ImageTitle of upload.');

        $image = UploadField::create('IndependantCreationsObj', 'IndependantCreationsObj');
        $image->allowedExtensions = array('jpg', 'jpeg', 'JPG', 'JPEG', 'png' , 'PNG');
        $image->setFolderName('IndependantCreations');

        $fields = FieldList::create($text, $image);

        return $fields;
    }

    // allow non admins
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
