<?php

namespace App\Http\Controllers\Admin;

use App\Models\Borrow;
use App\Http\Controllers\Controller;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;

use Illuminate\Http\Request;

class ChartBorrowController extends Controller
{
	public function index()
	{
		
		try {
			$chart_options = [
			'chart_title' => 'Chart Borrow by Day',
			'report_type' => 'group_by_date',
			'model' => 'App\Models\Borrow',
			'group_by_field' => 'created_at',
			'group_by_period' => 'day',
			'chart_type' => 'bar',
		];
		$chartDay = new LaravelChart($chart_options);

		$chart_options = [
			'chart_title' => 'Chart Borrow by Months',
			'report_type' => 'group_by_date',
			'model' => 'App\Models\Borrow',
			'group_by_field' => 'created_at',
			'group_by_period' => 'month',
			'chart_type' => 'bar',
		];
		$chartMonth = new LaravelChart($chart_options);

		$chart_options = [
			'chart_title' => 'Chart Borrow by Year',
			'report_type' => 'group_by_date',
			'model' => 'App\Models\Borrow',
			'group_by_field' => 'created_at',
			'group_by_period' => 'year',
			'chart_type' => 'bar',
		];
		$chartYear = new LaravelChart($chart_options);

		return view('admin.chart_borrow.index', compact('chartDay', 'chartMonth', 'chartYear'));
		} catch (ModelNotFoundException $e) {
			throw new \Exception($e->getMessage());			
		}
	}
}
