<?php

namespace App\Admin\Controllers;

use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ExampleController extends AdminController {
	protected $title = 'Example controller';

	protected function grid() {
		$grid = new Grid(new ExampleModel);

		$grid->column('id', __('ID'))->sortable();
		$grid->column('created_at', __('Created at'));
		$grid->column('updated_at', __('Updated at'));

		return $grid;
	}

	protected function detail($id) {
		$show = new Show(ExampleModel::findOrFail($id));

		$show->field('id', __('ID'));
		$show->field('created_at', __('Created at'));
		$show->field('updated_at', __('Updated at'));

		return $show;
	}

	protected function form() {
		$form = new Form(new ExampleModel);

		$form->display('id', __('ID'));
		$form->display('created_at', __('Created At'));
		$form->display('updated_at', __('Updated At'));

		return $form;
	}
}
