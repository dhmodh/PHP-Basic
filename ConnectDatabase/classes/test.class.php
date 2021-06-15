<?php

class Test extends Dbh {
    //Prints all the Users from firstname
    /*public function getUsers() {
        $sql = "SELECT * FROM users";
        $stmt = $this->connect()->query($sql);
        while ($row = $stmt->fetch()) {
            echo $row['users_firstname'] . '<br>';
        }
    }*/

    //Prints only particular firstname
    public function getUsersStmt($firstname, $lastname)
    {
        $sql = "SELECT * FROM users WHERE users_firstname = ? AND users_lastname = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firstname, $lastname]);
        $names = $stmt->fetchAll();

        foreach ($names as $name) {
            echo $name['users_firstname'] . '<br>';
        }
    }

    public function setUsersStmt($firstname, $lastname)
    {
        $sql = "INSERT INTO users(users_firstname, users_lastname) VALUES (?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firstname, $lastname]);
        
    }
}