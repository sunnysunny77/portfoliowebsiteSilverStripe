<?php

namespace pages;

use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

class ConceptArtObj extends DataObject
{

    private static $table_name = 'ConceptArt';

    private static $owns = [

        'ConceptArtObj',
    ];

    private static $has_one = [

        'HomePage' => HomePage::class,
        'ConceptArtObj' => Image::class,
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
        'ConceptArtObj.Filename' => 'Image file name',
        'GridThumbnail' => '',
    ];

    public function getGridThumbnail()
    {
        if ($this->ConceptArtObj()->exists()) {
            return $this->ConceptArtObj()->ScaleWidth(100);
        }

        return "(no image)";
    }

    public function getCMSFields()
    {

        $text = TextField::create('ImageTitle', "ImageTitle");
        $text->setDescription('ImageTitle of upload.');

        $image = UploadField::create('ConceptArtObj', 'ConceptArtObj');
        $image->allowedExtensions = array('jpg', 'jpeg', 'JPG', 'JPEG', 'png' , 'PNG');
        $image->setFolderName('ConceptArt');

        $fields = FieldList::create($text, $image);

        return $fields;
    }
}
