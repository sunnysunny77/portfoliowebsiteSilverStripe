<?php

namespace pages;

use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

class SculpturesObj extends DataObject
{

    private static $table_name = 'Sculptures';

    private static $owns = [

        'SculpturesObj',
    ];

    private static $has_one = [

        'HomePage' => HomePage::class,
        'SculpturesObj' => Image::class,
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
        'SculpturesObj.Filename' => 'Image file name',
        'GridThumbnail' => '',
    ];

    public function getGridThumbnail()
    {
        if ($this->SculpturesObj()->exists()) {
            return $this->SculpturesObj()->ScaleWidth(100);
        }

        return "(no image)";
    }

    public function getCMSFields()
    {

        $text = TextField::create('ImageTitle', "ImageTitle");
        $text->setDescription('ImageTitle of upload.');

        $image = UploadField::create('SculpturesObj', 'SculpturesObj');
        $image->allowedExtensions = array('jpg', 'jpeg', 'png');
        $image->setFolderName('Sculptures');

        $fields = FieldList::create($text, $image);

        return $fields;
    }
}
