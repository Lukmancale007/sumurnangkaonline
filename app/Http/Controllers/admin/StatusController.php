<?php

namespace App\Http\Controllers\Admin;

use App\Models\Santri;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StatusController extends Controller
{
    public function update(Request $request){
        // $santri = Santri::all();

       if ($request->model =='santri'){
        $model = Santri::findOrFail($request->id);
        $model->Setstatus($request->status);
        $model->save();

        return back();
       }
    }
}
