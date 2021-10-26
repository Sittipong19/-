<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\device_infos;
class InsertController extends Controller
{
    function addData(Request $req)
    {
      $addData= new device_infos;
      $addData->id=$req->id;
      $addData->id=$req->name;
      $addData->id=$req->created_at;
      $addData->id=$req->updated_at;
      $addData->save();
      return redirect('adddevice');
    }
}
