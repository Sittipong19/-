<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;
use Carbon\Carbon;

class ChartJsController extends Controller
{
    public function index()
    {
        $year = ['2021','2022','2023','2024','2025','2026'];

        $user = [];
        foreach ($year as $key => $value) {
            $user[] = User::where(\DB::raw("DATE_FORMAT(created_at, '%Y')"),$value)->count();
        }

        return view('chartjs')->with('year',json_encode($year,JSON_NUMERIC_CHECK))->with('user',json_encode($user,JSON_NUMERIC_CHECK));
    }
    public function index2(){
        $researchs = DB::table('products')
        ->select(DB::raw("month(created_at) as month_signed"), DB::raw("sum(price) as total_budget"))
        ->whereRaw('year(created_at) = ?',[2021])
        ->groupByRaw('month_signed')
        ->get();
        $data = [];

        foreach($researchs as $row){
            $data['label'][] = $row->month_signed;
            $data['data'][] = (int)$row->total_budget;
        }
        $data['chart_data'] = json_encode($data);
        return view('chartjs2',$data);
    }
}