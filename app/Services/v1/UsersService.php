<?php 

namespace App\Services\v1;

use App\Users;


class UsersService {
    public function getUsers() {
        return Users::all();
    }
}

?>
