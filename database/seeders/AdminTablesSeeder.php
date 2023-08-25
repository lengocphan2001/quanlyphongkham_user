<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class AdminTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // base tables
        \Encore\Admin\Auth\Database\Menu::truncate();
        \Encore\Admin\Auth\Database\Menu::insert(
            [
                [
                    "icon" => "fa-tasks",
                    "order" => 8,
                    "parent_id" => 0,
                    "permission" => NULL,
                    "title" => "Admin",
                    "uri" => ""
                ],
                [
                    "icon" => "fa-users",
                    "order" => 9,
                    "parent_id" => 2,
                    "permission" => NULL,
                    "title" => "Users",
                    "uri" => "auth/users"
                ],
                [
                    "icon" => "fa-user",
                    "order" => 10,
                    "parent_id" => 2,
                    "permission" => NULL,
                    "title" => "Roles",
                    "uri" => "auth/roles"
                ],
                [
                    "icon" => "fa-ban",
                    "order" => 11,
                    "parent_id" => 2,
                    "permission" => NULL,
                    "title" => "Permission",
                    "uri" => "auth/permissions"
                ],
                [
                    "icon" => "fa-bars",
                    "order" => 12,
                    "parent_id" => 2,
                    "permission" => NULL,
                    "title" => "Menu",
                    "uri" => "auth/menu"
                ],
                [
                    "icon" => "fa-history",
                    "order" => 13,
                    "parent_id" => 2,
                    "permission" => NULL,
                    "title" => "Operation log",
                    "uri" => "auth/logs"
                ],
                [
                    "icon" => "fa-user",
                    "order" => 7,
                    "parent_id" => 0,
                    "permission" => "*",
                    "title" => "User management",
                    "uri" => "/users"
                ],
                [
                    "icon" => "fa-dedent",
                    "order" => 1,
                    "parent_id" => 0,
                    "permission" => NULL,
                    "title" => "Contents",
                    "uri" => NULL
                ],
                [
                    "icon" => "fa-print",
                    "order" => 2,
                    "parent_id" => 9,
                    "permission" => NULL,
                    "title" => "Category management",
                    "uri" => "/categories"
                ],
                [
                    "icon" => "fa-align-left",
                    "order" => 3,
                    "parent_id" => 9,
                    "permission" => NULL,
                    "title" => "Post management",
                    "uri" => "/posts"
                ],
                [
                    "icon" => "fa-certificate",
                    "order" => 5,
                    "parent_id" => 0,
                    "permission" => NULL,
                    "title" => "Site configs",
                    "uri" => NULL
                ],
                [
                    "icon" => "fa-bars",
                    "order" => 6,
                    "parent_id" => 12,
                    "permission" => NULL,
                    "title" => "Highlight category",
                    "uri" => "/highlight-categories"
                ],
                [
                    "icon" => "fa-bars",
                    "order" => 4,
                    "parent_id" => 0,
                    "permission" => "*",
                    "title" => "Reviews",
                    "uri" => "/reviews"
                ]
            ]
        );

        \Encore\Admin\Auth\Database\Permission::truncate();
        \Encore\Admin\Auth\Database\Permission::insert(
            [
                [
                    "http_method" => "",
                    "http_path" => "*",
                    "name" => "All permission",
                    "slug" => "*"
                ],
                [
                    "http_method" => "GET",
                    "http_path" => "/",
                    "name" => "Dashboard",
                    "slug" => "dashboard"
                ],
                [
                    "http_method" => "",
                    "http_path" => "/auth/login\r\n/auth/logout",
                    "name" => "Login",
                    "slug" => "auth.login"
                ],
                [
                    "http_method" => "GET,PUT",
                    "http_path" => "/auth/setting",
                    "name" => "User setting",
                    "slug" => "auth.setting"
                ],
                [
                    "http_method" => "",
                    "http_path" => "/auth/roles\r\n/auth/permissions\r\n/auth/menu\r\n/auth/logs",
                    "name" => "Auth management",
                    "slug" => "auth.management"
                ]
            ]
        );

        \Encore\Admin\Auth\Database\Role::truncate();
        \Encore\Admin\Auth\Database\Role::insert(
            [
                [
                    "name" => "Administrator",
                    "slug" => "administrator"
                ],
                [
                    "name" => "Moderator",
                    "slug" => "mod"
                ]
            ]
        );

        // pivot tables
        DB::table('admin_role_menu')->truncate();
        DB::table('admin_role_menu')->insert(
            [
                [
                    "menu_id" => 2,
                    "role_id" => 1
                ],
                [
                    "menu_id" => 8,
                    "role_id" => 1
                ],
                [
                    "menu_id" => 9,
                    "role_id" => 1
                ],
                [
                    "menu_id" => 10,
                    "role_id" => 1
                ],
                [
                    "menu_id" => 11,
                    "role_id" => 1
                ],
                [
                    "menu_id" => 12,
                    "role_id" => 1
                ],
                [
                    "menu_id" => 13,
                    "role_id" => 1
                ],
                [
                    "menu_id" => 14,
                    "role_id" => 1
                ],
                [
                    "menu_id" => 9,
                    "role_id" => 2
                ],
                [
                    "menu_id" => 10,
                    "role_id" => 2
                ],
                [
                    "menu_id" => 11,
                    "role_id" => 2
                ]
            ]
        );

        DB::table('admin_role_permissions')->truncate();
        DB::table('admin_role_permissions')->insert(
            [
                [
                    "permission_id" => 1,
                    "role_id" => 1
                ],
                [
                    "permission_id" => 2,
                    "role_id" => 2
                ]
            ]
        );

        // finish
    }
}
