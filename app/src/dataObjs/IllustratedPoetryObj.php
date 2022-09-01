<?php

namespace pages;

use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

class IllustratedPoetryObj extends DataObject
{

    private static $table_name = 'IllustratedPoetry';

    private static $owns = [

        'IllustratedPoetryObj',
    ];

    private static $has_one = [

        'HomePage' => HomePage::class,
        'IllustratedPoetryObj' => Image::class,
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
        'IllustratedPoetryObj.Filename' => 'Image file name',
        'GridThumbnail' => '',
    ];

    public function getGridThumbnail()
    {
        if ($this->IllustratedPoetryObj()->exists()) {
            return $this->IllustratedPoetryObj()->ScaleWidth(100);
        }

        return "(no image)";
    }

    public function getCMSFields()
    {

        $text = TextField::create('ImageTitle', "ImageTitle");
        $text->setDescription('ImageTitle of upload.');

        $image = UploadField::create('IllustratedPoetryObj', 'IllustratedPoetryObj');
        $image->allowedExtensions = array('jpg', 'jpeg', 'png');
        $image->setFolderName('IllustratedPoetry');

        $fields = FieldList::create($text, $image);

        return $fields;
    }
}
