<?php

class UsersView extends Users {

    public function showUsers($name) {

        $results = $this->getUser($name);
        echo "Full Name: " . $results[0]['users_firstname'] . " " . $results[0]['users_lastname'];
    }
} 