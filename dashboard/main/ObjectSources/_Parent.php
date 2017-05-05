<?php

/**
 * Cannot use Parent because it is a keyword
 *
 */

class _Parent extends User
{
  private $passport;

  //constructors

  public function _construct($userId, $name, $surname, $birthdate, $password,
                             $lastLogin = null, $photo = null,$email = null, $phoneNumber = null)
  {
      parent::_construct('p', $userId, $name,$surname, $email, $phoneNumber,  $birthdate, $password, $lastLogin, $photo);
      $this->passport = $password;
  }
}
?>
