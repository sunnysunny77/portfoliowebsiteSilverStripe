<?php

namespace pages;

use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

class IllustrationsObj extends DataObject
{

    private static $table_name = 'Illustrations';

    private static $owns = [

        'IllustrationsObj',
    ];

    private static $has_one = [

        'HomePage' => HomePage::class,
        'IllustrationsObj' => Image::class,
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
        'IllustrationsObj.Filename' => 'Image file name',
        'GridThumbnail' => '',
    ];

    public function getGridThumbnail()
    {
        if ($this->IllustrationsObj()->exists()) {
            return $this->IllustrationsObj()->ScaleWidth(100);
        }

        return "(no image)";
    }

    public function getCMSFields()
    {

        $text = TextField::create('ImageTitle', "ImageTitle");
        $text->setDescription('ImageTitle of upload.');

        $image = UploadField::create('IllustrationsObj', 'IllustrationsObj');
        $image->allowedExtensions = array('jpg', 'jpeg', 'JPG', 'JPEG', 'png' , 'PNG');
        $image->setFolderName('Illustrations');

        $fields = FieldList::create($text, $image);

        return $fields;
    }
}
