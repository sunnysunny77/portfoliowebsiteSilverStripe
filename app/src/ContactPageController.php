<?php

namespace pages;

use PageController;
use SilverStripe\View\Requirements;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\EmailField;
use SilverStripe\Forms\TextareaField;
use SilverStripe\Forms\FormAction;
use SilverStripe\Forms\Form;
use SilverStripe\Forms\RequiredFields;
use SilverStripe\Control\Email\Email;


class ContactPageController extends PageController
{

  
    private static $allowed_actions = ['HireForm'];

    public function HireForm() 
    { 
        $form = Form::create(
            $this,
            __FUNCTION__,
            FieldList::create(
                TextField::create('first-name','First name')
                ->setAttribute('autocomplete', 'on')
                ->setAttribute('maxlength', '20'),
                TextField::create('last-name','Last name')
                ->setAttribute('autocomplete', 'on')
                ->setAttribute('maxlength', '20'),  
                EmailField::create('email','Email')
                ->setAttribute('autocomplete', 'on')
                ->setAttribute('maxlength', '20'),
                TextField::create('phone','Phone')
                ->setAttribute('autocomplete', 'on')
                ->setAttribute('pattern', '[+]?[0-9]{3,15}')
                ->setAttribute('title', 'Accepts +###############'),
                TextareaField::create('text','Position description')
                ->setAttribute('maxlength', '1000')
            ),
            FieldList::create(
                FormAction::create('handleHire', 'Submit')
                    ->addExtraClass('button')
            ),
            RequiredFields::create('first-name', 'last-name', 'email','phone', 'text')
        );

     
        $data = $this->getRequest()->getSession()->get("FormData.{$form->getName()}.data");

        return $data ? $form->loadDataFrom($data) : $form;
    }

    public function handleHire($data, $form) 
    { 
        $email = new Email(); 
         
        $email->setTo('shlooby07@gmail.com'); 
        $email->setFrom($data['email']); 
        $email->setSubject("Hire Message from {$data["first-name"]}"); 
         
        $messageBody = " 
            <p><strong>Name:</strong> {$data['first-name']} {$data['last-name']}</p> 
            <p><strong>Email:</strong> {$data['email']} </p> 
            <p><strong>Phone:</strong> {$data['phone']} </p> 
            <p><strong>Position description:</strong> {$data['text']}</p> 
        "; 
        $email->setBody($messageBody); 
        $email->send(); 
        return [
            'Content' => '<p>Thank you for your feedback.</p>',
            'Form' => ''
        ];
    }
    
    protected function init()
    {

        parent::init();
        // You can include any CSS or JS required by your project here.
        // See: https://docs.silverstripe.org/en/developer_guides/templates/requirements/
        Requirements::css("{$this->ThemeDir()}/css/contact.css");
    }
}
