<?php

namespace pages;

use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

class TheatreObj extends DataObject
{

    private static $table_name = 'Theatre';

    private static $owns = [

        'TheatreObj',
    ];

    private static $has_one = [

        'HomePage' => HomePage::class,
        'TheatreObj' => Image::class,
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
        'TheatreObj.Filename' => 'Image file name',
        'GridThumbnail' => '',
    ];

    public function getGridThumbnail()
    {
        if ($this->TheatreObj()->exists()) {
            return $this->TheatreObj()->ScaleWidth(100);
        }

        return "(no image)";
    }

    public function getCMSFields()
    {

        $text = TextField::create('ImageTitle', "ImageTitle");
        $text->setDescription('ImageTitle of upload.');

        $image = UploadField::create('TheatreObj', 'TheatreObj');
        $image->allowedExtensions = array('jpg', 'jpeg', 'png');
        $image->setFolderName('Theatre');

        $fields = FieldList::create($text, $image);

        return $fields;
    }
}
