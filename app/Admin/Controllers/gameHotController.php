<?php

namespace App\Admin\Controllers;

use App\Models\gameHot;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class gameHotController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '热门设置';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new gameHot());
        $grid->column('key', 'key');
        $grid->column('name', 'name');
        $grid->column('hot', '是否hot')->switch();
        $grid->disableActions();
        // $grid->disableCreateButton();

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    public function update($id)
    {
        $hot = (int)request()->post('hot') ?? 0;
        $model = new gameHot();
        $result = $model->where(['id'=>$id])->update(['hot_status'=>$hot]);
        return response()->json([
            'status' => true,
            'message' => '修改成功',
        ]);
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new gameHot());
        // 显示记录id
        $form->display('id', 'ID');
        $form->text('key', 'key');
        $form->text('name', 'name');
        $form->switch('hot_status', '是否hot？');

        return $form;
    }
}
