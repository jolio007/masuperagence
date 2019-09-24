<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class Contact {

    /**
     * Assert\NotBlank()
     * Assert\Length(min=2,max=100)
     */
    private $firstname;

/**
 * Getter for Firstname
 *
 * @return String
 */
public function getFirstname()
{
    return $this->firstname;
}

/**
 * Setter for Firstname
 * @var String firstname
 *
 * @return self
 */
public function setFirstname($firstname)
{
    $this->firstname = $firstname;
    return $this;
}


    /**
     * Assert\NotBlank()
     * Assert\Length(min=2,max=100)
     */
    private $lastname;

/**
 * Getter for Lastname
 *
 * @return String
 */
public function getLastname()
{
    return $this->lastname;
}

/**
 * Setter for Lastname
 * @var String lastname
 *
 * @return self
 */
public function setLastname($lastname)
{
    $this->lastname = $lastname;
    return $this;
}


    /**
     * Assert\NotBlank()
     * Assert\Regex(
     * pattern="/[0-9]{10}/")
     */
    private $phone;

/**
 * Getter for Phone
 *
 * @return int
 */
public function getPhone()
{
    return $this->phone;
}

/**
 * Setter for Phone
 * @var int phone
 *
 * @return self
 */
public function setPhone($phone)
{
    $this->phone = $phone;
    return $this;
}


    /**
     * Assert\NotBlank()
     * Assert\Email()
     */
    private $email;

/**
 * Getter for Email
 *
 * @return int
 */
public function getEmail()
{
    return $this->email;
}

/**
 * Setter for Email
 * @var int email
 *
 * @return self
 */
public function setEmail($email)
{
    $this->email = $email;
    return $this;
}


     /**
     * Assert\NotBlank()
     * Assert\Length(min=10)
     */
    private $message;

/**
 * Getter for Message
 *
 * @return String
 */
public function getMessage()
{
    return $this->message;
}

/**
 * Setter for Message
 * @var String message
 *
 * @return self
 */
public function setMessage($message)
{
    $this->message = $message;
    return $this;
}

private $property;

public function getProperty(){
    return $this->property;
}
public function setProperty($property){
    $this->property = $property;
    return $this;
}
}

