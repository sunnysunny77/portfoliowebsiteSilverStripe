<?php

namespace pages;

use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextareaField;
use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

class StoryboardObj extends DataObject
{

    private static $table_name = 'Storyboard';

    private static $owns = [

        'StoryboardObj',
    ];

    private static $has_one = [

        'HomePage' => HomePage::class,
        'StoryboardObj' => Image::class,
    ];

    private static $extensions = [
        Versioned::class,
    ];

    private static $versioned_gridfield_extensions = true;

    private static $db = [

        'ImageTitle' => 'Text',
    ];

    private static $summary_fields = [
        'GridThumbnail' => '',
        'StoryboardObj.Filename' => 'Image file name',
        'ImageTitle' => 'ImageTitle',

    ];

    public function getGridThumbnail()
    {
        if ($this->StoryboardObj()->exists()) {
            return $this->StoryboardObj()->ScaleWidth(100);
        }

        return "(no image)";
    }

    public function getCMSFields()
    {
        $image = new UploadField('StoryboardObj', 'StoryboardObj');
        $image->allowedExtensions = array('jpg', 'png');
        $image->setFolderName('Storyboard');

        $text = new TextareaField('ImageTitle', "ImageTitle");
        $text->setDescription('ImageTitle of upload.');

        $fields = new FieldList($image, $text);

        return $fields;
    }
}
