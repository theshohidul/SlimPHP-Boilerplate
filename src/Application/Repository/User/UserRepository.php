<?php


namespace App\Application\Repository\User;

/**
 * Class UserRepository
 * @package App\Application\Repository\User
 */
class UserRepository
{
    /**
     * @return array[]
     */
    public static function getAll()
    {
        return [
            [
                'id' => 1,
                'username' => 'admin',
                'password' => '$2y$10$8SCHkI4JUKJ2NA353BTHW.Kgi33HI.2C35xd/j5YUzBx05F1O4lJO',
                'email' => 'admin@example.com',
                'first_name' => null,
                'last_name' => null,
                'role' => 'ROLE_ADMIN',
                'locale' => 'en_US',
                'enabled' => 1,
                'created_at' => '2015-01-09 14:05:19',
                'created_user_id' => 1,
                'updated_at' => null,
                'updated_user_id' => null,
            ],
            [
                'id' => 2,
                'username' => 'user',
                'password' => '$1$X64.UA0.$kCSxRsj3GKk7Bwy3P6xn1.',
                'email' => 'user@example.com',
                'first_name' => null,
                'last_name' => null,
                'role' => 'ROLE_USER',
                'locale' => 'de_DE',
                'enabled' => 1,
                'created_at' => '2019-02-01 00:00:00',
                'created_user_id' => 1,
                'updated_at' => null,
                'updated_user_id' => null,
            ],
        ];
    }

    /**
     * @param $id
     * @return array
     */
    public static function getSingle($id)
    {
        $users = [
            [
                'id' => 1,
                'username' => 'admin',
                'password' => '$2y$10$8SCHkI4JUKJ2NA353BTHW.Kgi33HI.2C35xd/j5YUzBx05F1O4lJO',
                'email' => 'admin@example.com',
                'first_name' => null,
                'last_name' => null,
                'role' => 'ROLE_ADMIN',
                'locale' => 'en_US',
                'enabled' => 1,
                'created_at' => '2020-06-07 00:00:00',
                'created_user_id' => 1,
                'updated_at' => null,
                'updated_user_id' => null,
            ],
            [
                'id' => 2,
                'username' => 'user',
                'password' => '$1$X64.UA0.$kCSxRsj3GKk7Bwy3P6xn1.',
                'email' => 'user@example.com',
                'first_name' => null,
                'last_name' => null,
                'role' => 'ROLE_USER',
                'locale' => 'de_DE',
                'enabled' => 1,
                'created_at' => '2020-06-08 00:00:00',
                'created_user_id' => 1,
                'updated_at' => null,
                'updated_user_id' => null,
            ],
        ];

        $user =[];
        $user_key = array_search($id, array_column($users, 'id'));
        if ( $user_key !== false ) $user = $users[$user_key];
        return $user;
    }


}