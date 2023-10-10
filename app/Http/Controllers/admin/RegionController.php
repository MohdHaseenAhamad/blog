<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegionController extends Controller
{
    var $_folder_name = 'admin/region/';
    public function index()
    {

        $results =  DB::table('region')->get()->toArray();

        return view($this->_folder_name.'listing',['results'=>$results,'tab'=>'region']);
    }
    public function edit($reg_id,$title)
    {
        $results =  DB::table('countries')->where('cnt_con_id','=',$reg_id)->get()->toArray();

        $data = DB::table('region_map')->select(DB::raw('group_concat(prm_cnt_id) as names'))->where('prm_reg_id','=',$reg_id)->get()->toArray();
//        dd(explode(',',$data[0]->names));
        return view($this->_folder_name.'form',['results'=>$results,'title'=>$title,'reg_id'=>$reg_id,'data'=>explode(',',$data[0]->names),'tab'=>'region']);

    }
    public function save(Request $request,$reg_id)
    {
        $data = [];
        DB::table('region_map')->where('prm_reg_id','=',$reg_id)->delete();

       foreach ($request->region_map as $key => $value)
       {
           $data[] = ['prm_reg_id'=>$reg_id,'prm_cnt_id'=>$key,'prm_status'=>1];
       }
       DB::table('region_map')->insert($data);

       return redirect('admin/region')->with('success','Add region success.');

    }
}
