<?php

class userStuff {
    function saveUser(string $username, string $password) {
        $jsondata = file_get_contents('users.json');
        $jsondata = json_decode($jsondata);
        $jsondata[] = [
            'username' => $username,
            'password' => $password
        ];
        file_put_contents('users.json', json_encode($jsondata, JSON_PRETTY_PRINT));
    }
    function loginUser(string $username, string $password) : bool {
        $readdata = file_get_contents('users.json');
        $readdata = json_decode($readdata);
        foreach ($readdata as $user) {
            if (($user->username === $username) && ($user->password === $password)) {
                return true;
            }
        }
        var_dump($readdata);
        return false;
    }
}