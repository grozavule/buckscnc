<?php

namespace App;

class Contact
{
    protected $firstName;
    protected $lastName;
    protected $emailAddress;
    protected $message;

    public function __construct($firstName, $lastName, $emailAddress, $message)
    {
        $this->setFirstName($firstName);
        $this->setLastName($lastName);
        $this->setEmailAddress($emailAddress);
        $this->setMessage($message);
    }

    public static function createFromRequest($request)
    {
        return new Contact(
            $request['first_name'],
            $request['last_name'],
            $request['email_address'],
            $request['message']
        );
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $this->sanitizeString($firstName);
    }

    public function setLastName($lastName)
    {
        $this->lastName = $this->sanitizeString($lastName);
    }

    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = filter_var($emailAddress, FILTER_SANITIZE_EMAIL);
    }

    public function setMessage($message)
    {
        $this->message = $this->sanitizeString($message);
    }

    protected function sanitizeString($string)
    {
        return filter_var($string, FILTER_SANITIZE_STRING);
    }
}
