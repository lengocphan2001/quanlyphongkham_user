<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminMenuTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_menu')->delete();
        
        \DB::table('admin_menu')->insert(array (
            0 => 
            array (
                'created_at' => NULL,
                'icon' => 'fa-bar-chart',
                'id' => 1,
                'order' => 1,
                'parent_id' => 0,
                'permission' => NULL,
                'title' => 'Dashboard',
                'updated_at' => NULL,
                'uri' => '/',
            ),
            1 => 
            array (
                'created_at' => NULL,
                'icon' => 'fa-tasks',
                'id' => 2,
                'order' => 9,
                'parent_id' => 0,
                'permission' => NULL,
                'title' => 'Admin',
                'updated_at' => '2023-06-18 08:12:25',
                'uri' => '',
            ),
            2 => 
            array (
                'created_at' => NULL,
                'icon' => 'fa-users',
                'id' => 3,
                'order' => 10,
                'parent_id' => 2,
                'permission' => NULL,
                'title' => 'Users',
                'updated_at' => '2023-06-18 08:12:25',
                'uri' => 'auth/users',
            ),
            3 => 
            array (
                'created_at' => NULL,
                'icon' => 'fa-user',
                'id' => 4,
                'order' => 11,
                'parent_id' => 2,
                'permission' => NULL,
                'title' => 'Roles',
                'updated_at' => '2023-06-18 08:12:25',
                'uri' => 'auth/roles',
            ),
            4 => 
            array (
                'created_at' => NULL,
                'icon' => 'fa-ban',
                'id' => 5,
                'order' => 12,
                'parent_id' => 2,
                'permission' => NULL,
                'title' => 'Permission',
                'updated_at' => '2023-06-18 08:12:25',
                'uri' => 'auth/permissions',
            ),
            5 => 
            array (
                'created_at' => NULL,
                'icon' => 'fa-bars',
                'id' => 6,
                'order' => 13,
                'parent_id' => 2,
                'permission' => NULL,
                'title' => 'Menu',
                'updated_at' => '2023-06-18 08:12:25',
                'uri' => 'auth/menu',
            ),
            6 => 
            array (
                'created_at' => NULL,
                'icon' => 'fa-history',
                'id' => 7,
                'order' => 14,
                'parent_id' => 2,
                'permission' => NULL,
                'title' => 'Operation log',
                'updated_at' => '2023-06-18 08:12:25',
                'uri' => 'auth/logs',
            ),
            7 => 
            array (
                'created_at' => '2023-06-18 04:42:05',
                'icon' => 'fa-bars',
                'id' => 8,
                'order' => 3,
                'parent_id' => 0,
                'permission' => NULL,
                'title' => 'Contents',
                'updated_at' => '2023-06-18 06:05:34',
                'uri' => NULL,
            ),
            8 => 
            array (
                'created_at' => '2023-06-18 04:42:21',
                'icon' => 'fa-bars',
                'id' => 9,
                'order' => 4,
                'parent_id' => 8,
                'permission' => NULL,
                'title' => 'Posts',
                'updated_at' => '2023-06-18 06:05:34',
                'uri' => '/posts',
            ),
            9 => 
            array (
                'created_at' => '2023-06-18 04:42:33',
                'icon' => 'fa-bars',
                'id' => 10,
                'order' => 5,
                'parent_id' => 8,
                'permission' => NULL,
                'title' => 'Categories',
                'updated_at' => '2023-06-18 06:05:34',
                'uri' => '/categories',
            ),
            10 => 
            array (
                'created_at' => '2023-06-18 04:42:51',
                'icon' => 'fa-bars',
                'id' => 11,
                'order' => 7,
                'parent_id' => 0,
                'permission' => NULL,
                'title' => 'Reviews',
                'updated_at' => '2023-06-18 08:12:41',
                'uri' => '/reviews',
            ),
            11 => 
            array (
                'created_at' => '2023-06-18 04:43:49',
                'icon' => 'fa-bars',
                'id' => 12,
                'order' => 8,
                'parent_id' => 0,
                'permission' => NULL,
                'title' => 'Highlight categories',
                'updated_at' => '2023-06-18 08:12:41',
                'uri' => '/highlight-categories',
            ),
            12 => 
            array (
                'created_at' => '2023-06-18 06:05:25',
                'icon' => 'fa-bars',
                'id' => 13,
                'order' => 2,
                'parent_id' => 0,
                'permission' => NULL,
                'title' => 'Courses',
                'updated_at' => '2023-06-18 06:05:34',
                'uri' => '/courses',
            ),
            13 => 
            array (
                'created_at' => '2023-06-18 08:12:13',
                'icon' => 'fa-bars',
                'id' => 14,
                'order' => 6,
                'parent_id' => 0,
                'permission' => NULL,
                'title' => 'Site config',
                'updated_at' => '2023-06-18 08:12:41',
                'uri' => '/site-configs',
            ),
        ));
        
        
    }
}