<?php

namespace SilverStripe\Pages;

use PageController;
use SilverStripe\View\Requirements;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\EmailField;
use SilverStripe\Forms\TextareaField;
use SilverStripe\Forms\FormAction;
use SilverStripe\Forms\Form;
use SilverStripe\Forms\RequiredFields;
use SilverStripe\Forms\CheckboxField;
use SilverStripe\Control\Email\Email;

class ContactPageController extends PageController
{

    // structure forms and handle forms
    private static $allowed_actions = [
        'HireForm',
        'PurchaseForm',
        'EnquiryForm',

    ];

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
                ->addExtraClass('cell small-6 medium-5')
                ->setAttribute('autocomplete', 'on')
                ->setAttribute('maxlength', '40'),

                TextField::create('phone','Phone')
                ->addExtraClass('cell small-6 medium-5')
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
            RequiredFields::create('first-name', 'last-name', 'email', 'phone', 'text')
        );
     
        $data = $this->getRequest()->getSession()->get("FormData.{$form->getName()}.data");

        return $data ? $form->loadDataFrom($data) : $form;
    }

    public function handleHire($data, $form) 
    { 

        $session = $this->getRequest()->getSession();
        $session->set("FormData.{$form->getName()}.data", $data);

        $first_name = $data["first-name"];
        $last_name = $data["last-name"];
        $email = $data["email"];
        $phone = $data["phone"];
        $text = $data["text"];
        $to_email = "shlooby07@gmail.com";
        $subject = "New Hire Form Message";

        $contactus = "
        You have a message from the Hire Form on your website:
        <br/>Name: ".$first_name." ".$last_name."
        <br/>Email: ".$email."
        <br/>Phone: ".$phone."
        <br/>Position description: ".$text;
        $contactus  = wordwrap($contactus ,70);

        $email = new Email($email, $to_email, $subject, $contactus);
        $email->send();

        if (!$email) {
            $form->sessionMessage('Error sending', 'bad');
          } else {
            $form->sessionMessage('Email sent', 'good');
          }

          return $this->redirect('/contact?active=1');
    }

    public function PurchaseForm() 
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
                ->addExtraClass('cell small-6 medium-5')
                ->setAttribute('autocomplete', 'on')
                ->setAttribute('maxlength', '40'),

                TextField::create('phone','Phone')
                ->addExtraClass('cell small-6 medium-5')
                ->setAttribute('autocomplete', 'on')
                ->setAttribute('pattern', '[+]?[0-9]{3,15}')
                ->setAttribute('title', 'Accepts +###############'),

                CheckboxField::create('outside-aus','Outside Australia'),

                TextField::create('street','Street address')
                ->setAttribute('autocomplete', 'on')
                ->setAttribute('maxlength', '40'),

                TextField::create('suburb','Suburb')
                ->setAttribute('autocomplete', 'on')
                ->setAttribute('maxlength', '40'),

                TextField::create('city','City')
                ->setAttribute('autocomplete', 'on')
                ->setAttribute('maxlength', '40'),

                TextField::create('post-code','Post code')
                ->setAttribute('autocomplete', 'on')
                ->setAttribute('pattern', '[0-9]*')
                ->setAttribute('title', 'Accepts digits #'),

                TextareaField::create('text','Purchase details')
                ->setAttribute('maxlength', '1000')
            ),
            FieldList::create(

                FormAction::create('handlePurchase', 'Submit')
                    ->addExtraClass('button')
            ),
            RequiredFields::create('first-name', 'last-name', 'email', 'phone', 'street', 'suburb', 'city', 'post-code', 'text')
        );
     
        $data = $this->getRequest()->getSession()->get("FormData.{$form->getName()}.data");

        return $data ? $form->loadDataFrom($data) : $form;
    }

    public function handlePurchase($data, $form) 
    { 

        $session = $this->getRequest()->getSession();
        $session->set("FormData.{$form->getName()}.data", $data);

        $first_name = $data["first-name"];
        $last_name = $data["last-name"];
        $email = $data["email"];
        $phone = $data["phone"];
        $outside_aus = isset($data["outside-aus"]) ? "Yes" : "No"; 
        $street = $data["street"];
        $suburb = $data["suburb"];
        $city = $data["city"];
        $post_code = $data["post-code"];
        $text = $data["text"];
        $to_email = "shlooby07@gmail.com";
        $subject = "New Purchase Form Message";

        $contactus = "
        You have a message from the Purchase Form on your website:
        <br/>Name: ".$first_name." ".$last_name."
        <br/>Email: ".$email."
        <br/>Phone: ".$phone."
        <br/>Outside Australia: ".$outside_aus."
        <br/>Street: ".$street."
        <br/>Suburb: ".$suburb."
        <br/>City: ".$city."
        <br/>Post Code: ".$post_code."
        <br/>Purchase details: ".$text;
        $contactus  = wordwrap($contactus ,70);

        $email = new Email($email, $to_email, $subject, $contactus);
        $email->send();

        if (!$email) {
            $form->sessionMessage('Error sending', 'bad');
          } else {
            $form->sessionMessage('Email sent', 'good');
          }

          return $this->redirect('/contact?active=2');
    }

    public function EnquiryForm() 
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
                ->addExtraClass('cell small-6 medium-5')
                ->setAttribute('autocomplete', 'on')
                ->setAttribute('maxlength', '40'),

                TextField::create('phone','Phone')
                ->addExtraClass('cell small-6 medium-5')
                ->setAttribute('autocomplete', 'on')
                ->setAttribute('pattern', '[+]?[0-9]{3,15}')
                ->setAttribute('title', 'Accepts +###############'),

                TextareaField::create('text','Enquiry')
                ->setAttribute('maxlength', '1000')
            ),
            FieldList::create(

                FormAction::create('handleEnquiry', 'Submit')
                    ->addExtraClass('button')
            ),
            RequiredFields::create('first-name', 'last-name', 'email', 'phone', 'text')
        );
     
        $data = $this->getRequest()->getSession()->get("FormData.{$form->getName()}.data");

        return $data ? $form->loadDataFrom($data) : $form;
    }

    public function handleEnquiry($data, $form) 
    { 

        $session = $this->getRequest()->getSession();
        $session->set("FormData.{$form->getName()}.data", $data);

        $first_name = $data["first-name"];
        $last_name = $data["last-name"];
        $email = $data["email"];
        $phone = $data["phone"];
        $text = $data["text"];
        $to_email = "shlooby07@gmail.com";
        $subject = "New Enquiry Form Message";
        
        $contactus = "
        You have a message from the Enquiry Form on your website:
        <br/>Name: ".$first_name." ".$last_name."
        <br/>Email: ".$email."
        <br/>Phone: ".$phone."
        <br/>Enquiry: ".$text;
        $contactus  = wordwrap($contactus ,70);

        $email = new Email($email, $to_email, $subject, $contactus);
        $email->send();

        if (!$email) {
            $form->sessionMessage('Error sending', 'bad');
          } else {
            $form->sessionMessage('Email sent', 'good');
          }

          return $this->redirect('/contact?active=3');
    }

    protected function init()
    {

        parent::init();
        // You can include any CSS or JS required by your project here.
        // See: https://docs.silverstripe.org/en/developer_guides/templates/requirements/
        Requirements::css("{$this->ThemeDir()}/css/contact.css");
        Requirements::javascript("{$this->ThemeDir()}/js/form.js");
    }
}
