<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
         * Role Types
         *
         */


        $RoleItems = [
            [
                'name'        => 'Admin',
                'slug'        => 'admin',
                'description' => 'Super Admin Role',
                'level'       => 10,
            ],
            [
                'name'        => 'Subadmin',
                'slug'        => 'subadmin',
                'description' => 'Sub Admin Role',
                'level'       => 9,
            ],
            [
                'name'        => 'Editor',
                'slug'        => 'editor',
                'description' => 'Editor Role',
                'level'       => 8,
            ],
            [
                'name'        => 'Producer',
                'slug'        => 'producer',
                'description' => 'Producer Role',
                'level'       => 2,
            ],
            [
                'name'        => 'Cast',
                'slug'        => 'cast',
                'description' => 'Actor, Actress, Director, Music Director Role',
                'level'       => 2,
            ],
            [
                'name'        => 'User',
                'slug'        => 'user',
                'description' => 'User Role',
                'level'       => 1,
            ]
        ];

        /*
         * Add Role Items
         *
         */
        foreach ($RoleItems as $RoleItem) {
            $newRoleItem = config('roles.models.role')::where('slug', '=', $RoleItem['slug'])->first();
            if ($newRoleItem === null) {
                $newRoleItem = config('roles.models.role')::create([
                    'name'          => $RoleItem['name'],
                    'slug'          => $RoleItem['slug'],
                    'description'   => $RoleItem['description'],
                    'level'         => $RoleItem['level'],
                ]);
            }
        }
    }
}
