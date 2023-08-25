## Install
Step 1: Configure the webserver

Step 2: Run the command ```composer install```

Step 3: Copy .env.example to .env ```cp .env.example .env``

Step 4: Update the database information in .env file

Step 5: Run the migration ```php artisan migrate```

Step 6: Publish the assets and config ```php artisan vendor:publish --provider="Encore\Admin\AdminServiceProvider"```

Step 7: Finish install laravel admin ```php artisan admin:install```

Step 8: Run the seeder to init data in database (be careful if you already have data, because all the old data will be deleted)

Step 9: Go to admin page and login with account ```admin/admin```
