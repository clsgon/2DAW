<?php
    final class Contact
    {
        public function __construct($firstname, $lastname, $email) {
            $this->$firstname = ucfirst($firstname);
            $this->$lastname = ucfirst($lastname);
            $this->$email = $email;
        }
    }
?>