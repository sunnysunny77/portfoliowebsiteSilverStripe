<?php

namespace pages;
use SilverStripe\ORM\DataObject;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\FieldList;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Versioned\Versioned;
use SilverStripe\Forms\TextareaField;

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

        'Title' => 'Text',
    ];

    private static $summary_fields = [
        'GridThumbnail' => '',
        'StoryboardObj.Filename' => 'Image file name',
        'Title' => 'title'
    
    ];

    public function getGridThumbnail()
    {
        if($this->StoryboardObj()->exists()) {
            return $this->StoryboardObj()->ScaleWidth(100);
        }

        return "(no image)";
    }

    public function getCMSFields()
    {
        $image = new UploadField('StoryboardObj', 'StoryboardObj');
        $image->allowedExtensions = array('jpg', 'png');
        $image->setFolderName('images');
     
        $text = new TextareaField('Title', "Title");
        $text->setDescription('Title of upload.');

        $fields = new FieldList($image, $text);
    
        return $fields;
    }
} 