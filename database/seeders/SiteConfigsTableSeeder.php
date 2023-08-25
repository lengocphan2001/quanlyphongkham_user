<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SiteConfigsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('site_configs')->delete();

        \DB::table('site_configs')->insert(array (
            0 =>
            array (
                'created_at' => '2023-06-18 08:12:53',
                'id' => 1,
                'name' => 'Facebook URL',
                'updated_at' => '2023-06-18 08:12:53',
                'value' => 'https://facebook.com',
            ),
            1 =>
            array (
                'created_at' => '2023-06-18 08:13:06',
                'id' => 2,
                'name' => 'Youtube URL',
                'updated_at' => '2023-06-18 08:13:06',
                'value' => 'https://youtube.com',
            ),
            2 =>
            array (
                'created_at' => '2023-06-18 08:13:17',
                'id' => 3,
                'name' => 'Group URL',
                'updated_at' => '2023-06-18 08:13:17',
                'value' => 'https://facebook.com/group',
            ),
            3 =>
            array (
                'created_at' => '2023-06-18 08:13:29',
                'id' => 4,
                'name' => 'Instagram URL',
                'updated_at' => '2023-06-18 08:13:29',
                'value' => 'https://instagram.com',
            ),
            4 =>
            array (
                'created_at' => '2023-06-18 08:22:11',
                'id' => 5,
                'name' => 'Android App URL',
                'updated_at' => '2023-06-18 08:22:11',
                'value' => '#',
            ),
            5 =>
            array (
                'created_at' => '2023-06-18 08:22:19',
                'id' => 6,
                'name' => 'IOS App URL',
                'updated_at' => '2023-06-18 08:22:19',
                'value' => '#',
            ),
            6 =>
            array (
                'created_at' => '2023-06-19 18:57:48',
                'id' => 7,
                'name' => 'Google Analytics',
                'updated_at' => '2023-06-19 18:57:48',
            'value' => '<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-2KPT3YKZJT"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag(\'js\', new Date());

gtag(\'config\', \'G-2KPT3YKZJT\');
</script>',
            ),
            7 =>
            array (
                'created_at' => '2023-06-19 18:58:28',
                'id' => 8,
                'name' => 'Google site verification',
                'updated_at' => '2023-06-19 18:58:28',
                'value' => '<meta name="google-site-verification" content="_FKjem882GEqsI6ykKDu8hFw2jH9ChVc4g7e20RTB0M" />',
            ),
            8 =>
            array (
                'created_at' => '2023-06-19 18:58:28',
                'id' => 9,
                'name' => 'Privacy URL',
                'updated_at' => '2023-06-19 18:58:28',
                'value' => '/blogs/privacy-policy-685835',
            ),
            9 =>
            array (
                'created_at' => '2023-06-19 18:58:28',
                'id' => 10,
                'name' => 'Terms of use URL',
                'updated_at' => '2023-06-19 18:58:28',
                'value' => '/blogs/terms-conditions-921591',
            ),
        ));


    }
}
