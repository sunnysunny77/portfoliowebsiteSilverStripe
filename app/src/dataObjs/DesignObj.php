<?php

namespace pages;

use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

class DesignObj extends DataObject
{

    private static $table_name = 'Design';

    private static $owns = [

        'DesignObj',
    ];

    private static $has_one = [

        'HomePage' => HomePage::class,
        'DesignObj' => Image::class,
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
        'DesignObj.Filename' => 'Image file name',
        'GridThumbnail' => '',
    ];

    public function getGridThumbnail()
    {
        if ($this->DesignObj()->exists()) {
            return $this->DesignObj()->ScaleWidth(100);
        }

        return "(no image)";
    }

    public function getCMSFields()
    {

        $text = TextField::create('ImageTitle', "ImageTitle");
        $text->setDescription('ImageTitle of upload.');

        $image = UploadField::create('DesignObj', 'DesignObj');
        $image->allowedExtensions = array('jpg', 'jpeg', 'png');
        $image->setFolderName('Design');

        $fields = FieldList::create($text, $image);

        return $fields;
    }
}
