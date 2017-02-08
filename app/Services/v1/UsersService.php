<?php 

namespace App\Services\v1;

use App\Users;


class UsersService {
    public function getUsers() {
        return $this->filterUsers(Users::all());
    }

    protected function filterUsers($users) {
        $data = [];

        foreach ($users as $user) {
            $entry = [
                'id' => $user->id,
                'name' => $user->name,
            ];
 
            $data[] = $entry;
        } 

        return $data;
    }
}

?>
