<?php
/**
 * Bootstrap.php
 *
 * @copyright  2023 beikeshop.com - All Rights Reserved
 * @link       https://beikeshop.com
 * @author     Edward Yang <yangjin@guangda.work>
 * @created    2023-02-27 13:57:38
 * @modified   2023-02-27 13:57:38
 */

namespace Plugin\Openai;

class Bootstrap
{
    public function boot()
    {
        add_hook_filter('admin.sidebar.home.prefix', function ($data) {
            $data[] = 'openai';

            return $data;
        });

        add_hook_filter('admin.sidebar.home_routes', function ($data) {
            $data[] = [
                'route' => 'openai',
                'title' => 'ChatGPT',
            ];

            return $data;
        });
    }
}