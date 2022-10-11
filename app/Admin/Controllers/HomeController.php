<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\Dashboard;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;
use Encore\Admin\Widgets\InfoBox;

class HomeController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->title('Dashboard')
            ->description('Description...')
            // ->row(Dashboard::title())
            // ->breadcrumb(
            //     ['text' => '首页', 'url' => '/admin'],
            //     ['text' => '用户管理', 'url' => '/admin/users']
            // )
            ->row(function (Row $row) {

                $row->column(3, function (Column $column) {
                    // $column->append(Dashboard::environment());
                    $infoBox = new InfoBox('New Users', 'users', 'aqua', '/admin/users', '1024');
                    $column->append($infoBox->render());
                });
                

                // $row->column(4, function (Column $column) {
                //     $column->append(Dashboard::extensions());
                // });

                // $row->column(4, function (Column $column) {
                //     $column->append(Dashboard::dependencies());
                // });
            });

        
    }
}
