<?php

namespace App\Admin\Controllers;

use App\Models\userLevel;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class userLevelController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'VIP设置';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new userLevel());
        $grid->column('level', '等级')->sortable();
        $grid->column('total_buy_val', '晋升条件');
        $grid->column('level_up_awd', '升级奖励');
        $grid->column('salary_month', '月奖励');
        $grid->column('month_recive', '月奖励领取条件');
        $grid->disableActions(false);
        // $grid->disableCreateButton();

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(userLevel::findOrFail($id));
        $show->divider();
        
        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new userLevel());
        $form->number('level', '等级')->min(0);
        $form->text('total_buy_val', '晋升条件')->rules('min:0');
        $form->text('level_up_awd', '升级奖励');
        $form->text('salary_month', '月奖励');
        $form->text('month_recive', '月奖励领取条件');

        return $form;
    }
}
