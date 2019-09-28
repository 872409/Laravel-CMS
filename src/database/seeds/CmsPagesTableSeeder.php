<?php

namespace AlexStack\LaravelCms;

use AlexStack\LaravelCms\Helpers\LaravelCmsHelper;
use Illuminate\Database\Seeder;

class CmsPagesTableSeeder extends Seeder
{
    private $config;
    private $table_name;

    public function __construct()
    {
        $this->config     = include base_path('config/laravel-cms.php');
        $this->table_name = $this->config['table_name']['pages'];
        $this->helper     = new LaravelCmsHelper();
    }

    /**
     * Auto generated seed file.
     */
    public function run()
    {
        \DB::table($this->table_name)->delete();

        \DB::table($this->table_name)->insert([
            0 => [
                'id'               => 1,
                'user_id'          => 1,
                'parent_id'        => null,
                'menu_enabled'     => 1,
                'status'           => 'publish',
                'title'            => $this->helper->t('homepage'),
                'menu_title'       => $this->helper->t('home'),
                'slug'             => 'homepage',
                'template_file'    => 'page-three-cards',
                'meta_title'       => null,
                'meta_keywords'    => null,
                'meta_description' => null,
                'abstract'         => null,
                'main_banner'      => null,
                'main_image'       => null,
                'sub_content'      => '<p style="text-align: center; ">Sub content will display here while the subpages will show below by the default.</p><p style="text-align: center; ">You can add some subpage under the homepage to see what will happen.</p>',
            'main_content'         => '<p style="text-align: center; ">This is the home page\'s main content. </p><p style="text-align: center; ">You can change it in the cms backend : </p><p style="text-align: center; ">Please keep only one <span style="font-weight: bold;">slug </span>settings in the SEO tab as <b>homepage</b>.</p><p style="text-align: center; "><a href="/cmsadmin/">Click here go to the cms backend,</a> you will need to log in as the first user on the website.</p><p style="text-align: center; ">This page is a demo of the <span style="color: rgb(156, 0, 255);">Three Cards Page</span> template</p>',
                'sort_value'       => 60000,
                'view_counts'      => null,
                'tags'             => null,
                'extra_image_1'    => 2,
                'extra_text_1'     => '/cms-4.html',
                'extra_content_1'  => '<h3>Our Products</h3><p>This is the demo text of extra content 1. The image link is set by extra text 1.</p>',
                'extra_image_2'    => 5,
                'extra_text_2'     => '/cms-Our-Services.html',
                'extra_content_2'  => '<h3>Our Services</h3><p>This is the demo text of extra content 2. The image link is set by extra text 2.</p>',
                'extra_image_3'    => 4,
                'extra_text_3'     => '/cms-Contact-Us.html#inquiry_form',
                'extra_content_3'  => '<h3>Contact Us</h3><p>This is the demo text of extra content 3. The image link is set by extra text 3.</p>',
                'special_text'     => null,
                'file_data'        => '{"extra_image_1":{"id":2,"user_id":null,"title":"extra_image_1_300x200.png","description":"2019-09-28 07:07:19","suffix":"png","path":"dc\\/be767a55ebb67fa64a9b4efb0ddd424c10df7cdc.png","filename":"extra_image_1_300x200.png","mimetype":"image\\/png","is_image":true,"is_video":null,"filesize":3546,"filehash":"be767a55ebb67fa64a9b4efb0ddd424c10df7cdc","url":null,"created_at":"2019-09-28 07:07:19","updated_at":"2019-09-28 07:07:19","deleted_at":null},"extra_image_2":{"id":5,"user_id":null,"title":"extra_image_2_300x200.png","description":"2019-09-28 07:12:02","suffix":"png","path":"3b\\/4946510cda4730ff1516bb1ffd81a5dfeddd003b.png","filename":"extra_image_2_300x200.png","mimetype":"image\\/png","is_image":true,"is_video":null,"filesize":3921,"filehash":"4946510cda4730ff1516bb1ffd81a5dfeddd003b","url":null,"created_at":"2019-09-28 07:12:02","updated_at":"2019-09-28 07:12:02","deleted_at":null},"extra_image_3":{"id":4,"user_id":null,"title":"extra_image_3_300x200.png","description":"2019-09-28 07:12:02","suffix":"png","path":"fb\\/b1500e1fdcd1320924f05fdca6bd99630a1037fb.png","filename":"extra_image_3_300x200.png","mimetype":"image\\/png","is_image":true,"is_video":null,"filesize":4039,"filehash":"b1500e1fdcd1320924f05fdca6bd99630a1037fb","url":null,"created_at":"2019-09-28 07:12:02","updated_at":"2019-09-28 07:12:02","deleted_at":null},"main_banner":null}',
                'redirect_url'     => null,
                'deleted_at'       => null,
                'created_at'       => '2019-08-15 23:25:50',
                'updated_at'       => '2019-09-28 08:01:45',
            ],
            1 => [
                'id'               => 2,
                'user_id'          => 1,
                'parent_id'        => null,
                'menu_enabled'     => 1,
                'status'           => 'publish',
                'title'            => $this->helper->t('contact,us'),
                'menu_title'       => $this->helper->t('contact,us'),
                'slug'             => 'Contact-Us.html',
                'template_file'    => 'page-detail-default',
                'meta_title'       => null,
                'meta_keywords'    => null,
                'meta_description' => null,
                'abstract'         => null,
                'main_banner'      => null,
                'main_image'       => null,
                'sub_content'      => null,
                'main_content'     => '<p style="text-align: center; ">This is the contact us example page.</p><p style="text-align: center; ">The inquiry form enabled for this page, you can link to the form directly by set the href to <a href="#inquiry_form">#inquiry_form</a></p><p style="text-align: center; ">You can add more fields to the form, eg. company_name, website, phone, etc.</p><p style="text-align: center; ">Send email to admin/user &amp; Google ReCaptcha are available as well.</p>',
                'sort_value'       => 7000,
                'view_counts'      => null,
                'tags'             => null,
                'extra_image_1'    => null,
                'extra_text_1'     => 'https://www.laravelcms.tech/Laravel-Inquiry-form-settings.html | Tutorials of the inquiry form settings',
                'extra_content_1'  => null,
                'extra_image_2'    => null,
                'extra_text_2'     => null,
                'extra_content_2'  => null,
                'extra_image_3'    => null,
                'extra_text_3'     => null,
                'extra_content_3'  => null,
                'special_text'     => null,
                'file_data'        => '[]',
                'redirect_url'     => null,
                'deleted_at'       => null,
                'created_at'       => '2019-08-15 23:24:33',
                'updated_at'       => '2019-09-28 08:02:49',
            ],
            2 => [
                'id'               => 3,
                'user_id'          => 1,
                'parent_id'        => null,
                'menu_enabled'     => 1,
                'status'           => 'publish',
                'title'            => $this->helper->t('our,services'),
                'menu_title'       => $this->helper->t('services'),
                'slug'             => 'Our-Services.html',
                'template_file'    => 'page-detail-default',
                'meta_title'       => null,
                'meta_keywords'    => null,
                'meta_description' => null,
                'abstract'         => null,
                'main_banner'      => 8,
                'main_image'       => null,
                'sub_content'      => null,
            'main_content'         => '<p style="text-align: center; ">Our Services\' main content example. </p><p style="text-align: center; ">You can add the main banner and change the width/height style in the CSS file.</p><p style="text-align: center; "><img src="https://raw.githubusercontent.com/AlexStack/Laravel-CMS/master/docs/images/json-page-details.png" class="img-fluid content-img external-link"><br></p><p style="text-align: center; "><br></p><p style="text-align: center; "><br></p><p style="text-align: center; ">Below is a demo fo display an external link after some abstract text</p><p style="text-align: center; ">( You can find the format example in Extra Text 1 )</p>',
                'sort_value'       => 8000,
                'view_counts'      => null,
                'tags'             => null,
                'extra_image_1'    => null,
                'extra_text_1'     => 'https://www.laravelcms.tech/Laravel-CMS-Tutorials.html | Click here to open Laravel CMS Tutorials in a new window',
                'extra_content_1'  => null,
                'extra_image_2'    => null,
                'extra_text_2'     => null,
                'extra_content_2'  => null,
                'extra_image_3'    => null,
                'extra_text_3'     => null,
                'extra_content_3'  => null,
                'special_text'     => null,
                'file_data'        => '{"main_banner":{"mimetype":"image\\/png","suffix":"png","filename":"main_banner_1000x100.png","title":"main_banner_1000x100.png","filesize":8013,"is_image":true,"filehash":"b03ddf1c616a8832d9fc79f17597caa9e36e758d","path":"8d\\/b03ddf1c616a8832d9fc79f17597caa9e36e758d.png","description":"2019-09-28 07:37:04","updated_at":"2019-09-28 07:37:04","created_at":"2019-09-28 07:37:04","id":8}}',
                'redirect_url'     => null,
                'deleted_at'       => null,
                'created_at'       => '2019-08-15 23:24:50',
                'updated_at'       => '2019-09-28 07:37:04',
            ],
            3 => [
                'id'               => 4,
                'user_id'          => 1,
                'parent_id'        => null,
                'menu_enabled'     => 1,
                'status'           => 'publish',
                'title'            => $this->helper->t('our,products'),
                'menu_title'       => $this->helper->t('products'),
                'slug'             => '4.html',
                'template_file'    => 'page-detail-default',
                'meta_title'       => null,
                'meta_keywords'    => null,
                'meta_description' => null,
                'abstract'         => null,
                'main_banner'      => null,
                'main_image'       => null,
                'sub_content'      => null,
            'main_content'         => '<p style="text-align: center; ">Our Products example page. </p><p style="text-align: center; ">This is a demo page of The built-in <span style="color: rgb(156, 0, 255);">Default Page</span> template.</p>',
                'sort_value'       => 9000,
                'view_counts'      => null,
                'tags'             => null,
                'extra_image_1'    => null,
                'extra_text_1'     => null,
                'extra_content_1'  => null,
                'extra_image_2'    => null,
                'extra_text_2'     => null,
                'extra_content_2'  => null,
                'extra_image_3'    => null,
                'extra_text_3'     => null,
                'extra_content_3'  => null,
                'special_text'     => null,
                'file_data'        => '{"main_banner":null}',
                'redirect_url'     => null,
                'deleted_at'       => null,
                'created_at'       => '2019-08-15 23:25:33',
                'updated_at'       => '2019-09-28 08:03:12',
            ],
            4 => [
                'id'               => 5,
                'user_id'          => 1,
                'parent_id'        => null,
                'menu_enabled'     => 1,
                'status'           => 'publish',
                'title'            => 'About Our Team',
                'menu_title'       => $this->helper->t('about,us'),
                'slug'             => 'AboutUs.html',
                'template_file'    => 'page-detail-default',
                'meta_title'       => null,
                'meta_keywords'    => null,
                'meta_description' => null,
                'abstract'         => null,
                'main_banner'      => null,
                'main_image'       => null,
                'sub_content'      => null,
                'main_content'     => '<p style="text-align: center; ">About Us example page. </p><p style="text-align: center; ">If you find a bug please let us know via  <a href="https://github.com/AlexStack/Laravel-CMS/issues" class="content-file external-link" target="_blank"><i class="fas fa-link mr-1"></i>GitHub</a> , thank you very much.</p><p style="text-align: center; "><br></p><p><br></p>',
                'sort_value'       => 100,
                'view_counts'      => null,
                'tags'             => null,
                'extra_image_1'    => null,
                'extra_text_1'     => null,
                'extra_content_1'  => null,
                'extra_image_2'    => null,
                'extra_text_2'     => null,
                'extra_content_2'  => null,
                'extra_image_3'    => null,
                'extra_text_3'     => null,
                'extra_content_3'  => null,
                'special_text'     => null,
                'file_data'        => '[]',
                'redirect_url'     => null,
                'deleted_at'       => null,
                'created_at'       => '2019-08-15 23:23:53',
                'updated_at'       => '2019-09-28 07:48:40',
            ],
            5 => [
                'id'               => 6,
                'user_id'          => 1,
                'parent_id'        => 4,
                'menu_enabled'     => 1,
                'status'           => 'publish',
                'title'            => $this->helper->t('sub,product').' 1',
                'menu_title'       => null,
                'slug'             => '6.html',
                'template_file'    => 'page-detail-default',
                'meta_title'       => null,
                'meta_keywords'    => null,
                'meta_description' => null,
                'abstract'         => null,
                'main_banner'      => null,
                'main_image'       => 3,
                'sub_content'      => null,
                'main_content'     => '<p style="text-align: center;">Sub Product 1 example page.</p><p style="text-align: center;">Sort value 50</p><p style="text-align: center;">Subpages order by sort value desc.</p><p style="text-align: center;">Below image shows the available file variables for blade template:</p><p style="text-align: center;"><img src="https://raw.githubusercontent.com/AlexStack/Laravel-CMS/master/docs/images/json-file-data.png" class="img-fluid content-img external-link"><br></p><p><br></p><p><br></p><p><br></p>',
                'sort_value'       => 50,
                'view_counts'      => null,
                'tags'             => null,
                'extra_image_1'    => null,
                'extra_text_1'     => null,
                'extra_content_1'  => null,
                'extra_image_2'    => null,
                'extra_text_2'     => null,
                'extra_content_2'  => null,
                'extra_image_3'    => null,
                'extra_text_3'     => null,
                'extra_content_3'  => null,
                'special_text'     => null,
                'file_data'        => '{"main_image":{"id":3,"user_id":null,"title":"main_image_300x200.png","description":"2019-09-28 07:12:02","suffix":"png","path":"0b\\/ee0680114797c407d31cef43ba650b0c4a3e780b.png","filename":"main_image_300x200.png","mimetype":"image\\/png","is_image":true,"is_video":null,"filesize":3359,"filehash":"ee0680114797c407d31cef43ba650b0c4a3e780b","url":null,"created_at":"2019-09-28 07:12:02","updated_at":"2019-09-28 07:12:02","deleted_at":null}}',
                'redirect_url'     => null,
                'deleted_at'       => null,
                'created_at'       => '2019-08-15 23:52:00',
                'updated_at'       => '2019-09-28 07:56:41',
            ],
            6 => [
                'id'               => 7,
                'user_id'          => 1,
                'parent_id'        => 4,
                'menu_enabled'     => 1,
                'status'           => 'publish',
                'title'            => $this->helper->t('sub,product').' 2',
                'menu_title'       => null,
                'slug'             => '7.html',
                'template_file'    => 'page-detail-default',
                'meta_title'       => null,
                'meta_keywords'    => null,
                'meta_description' => null,
                'abstract'         => null,
                'main_banner'      => null,
                'main_image'       => 3,
                'sub_content'      => null,
                'main_content'     => '<p style="text-align: center; ">Sub Product 2 example page
</p><p style="text-align: center; ">
Sort value 20
</p><p style="text-align: center; ">
So this page shows the last.</p>',
                'sort_value'      => 20,
                'view_counts'     => null,
                'tags'            => null,
                'extra_image_1'   => null,
                'extra_text_1'    => null,
                'extra_content_1' => null,
                'extra_image_2'   => null,
                'extra_text_2'    => null,
                'extra_content_2' => null,
                'extra_image_3'   => null,
                'extra_text_3'    => null,
                'extra_content_3' => null,
                'special_text'    => null,
                'file_data'       => '{"main_image":{"id":3,"user_id":null,"title":"main_image_300x200.png","description":"2019-09-28 07:12:02","suffix":"png","path":"0b\\/ee0680114797c407d31cef43ba650b0c4a3e780b.png","filename":"main_image_300x200.png","mimetype":"image\\/png","is_image":true,"is_video":null,"filesize":3359,"filehash":"ee0680114797c407d31cef43ba650b0c4a3e780b","url":null,"created_at":"2019-09-28 07:12:02","updated_at":"2019-09-28 07:12:02","deleted_at":null}}',
                'redirect_url'    => null,
                'deleted_at'      => null,
                'created_at'      => '2019-08-15 23:52:47',
                'updated_at'      => '2019-09-28 07:58:59',
            ],
            7 => [
                'id'               => 8,
                'user_id'          => 1,
                'parent_id'        => 4,
                'menu_enabled'     => 1,
                'status'           => 'publish',
                'title'            => $this->helper->t('sub,product').' 3',
                'menu_title'       => null,
                'slug'             => '8.html',
                'template_file'    => 'page-detail-default',
                'meta_title'       => null,
                'meta_keywords'    => null,
                'meta_description' => null,
                'abstract'         => null,
                'main_banner'      => null,
                'main_image'       => 3,
                'sub_content'      => null,
                'main_content'     => '<p style="text-align: center; ">Sub Product 3 example page.</p><p style="text-align: center; "> </p><p style="text-align: center; "><span style="font-size: 1rem;">Sort value 90</span></p><p style="text-align: center; ">Subpages order by sort value desc.</p><p style="text-align: center; ">Below image shows the available menu variables for blade template:</p><p style="text-align: center; "><img src="https://raw.githubusercontent.com/AlexStack/Laravel-CMS/master/docs/images/json-menus.png" class="img-fluid content-img external-link"><br></p><p><br></p><p><br></p><p><br></p>',
                'sort_value'       => 90,
                'view_counts'      => null,
                'tags'             => null,
                'extra_image_1'    => null,
                'extra_text_1'     => null,
                'extra_content_1'  => null,
                'extra_image_2'    => null,
                'extra_text_2'     => null,
                'extra_content_2'  => null,
                'extra_image_3'    => null,
                'extra_text_3'     => null,
                'extra_content_3'  => null,
                'special_text'     => null,
                'file_data'        => '{"main_image":{"id":3,"user_id":null,"title":"main_image_300x200.png","description":"2019-09-28 07:12:02","suffix":"png","path":"0b\\/ee0680114797c407d31cef43ba650b0c4a3e780b.png","filename":"main_image_300x200.png","mimetype":"image\\/png","is_image":true,"is_video":null,"filesize":3359,"filehash":"ee0680114797c407d31cef43ba650b0c4a3e780b","url":null,"created_at":"2019-09-28 07:12:02","updated_at":"2019-09-28 07:12:02","deleted_at":null}}',
                'redirect_url'     => null,
                'deleted_at'       => null,
                'created_at'       => '2019-08-15 23:53:42',
                'updated_at'       => '2019-09-28 07:57:13',
            ],
        ]);
    }
}
