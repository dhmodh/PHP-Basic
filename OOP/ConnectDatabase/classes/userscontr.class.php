<?php

class UsersContr extends Users {

    public function createUser($firstname, $lastname) {
        $this->setUser($firstname, $lastname);
    }
}
