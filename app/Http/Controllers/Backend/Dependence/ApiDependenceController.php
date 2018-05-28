<?php
/**
 * Created by PhpStorm.
 * User: Rodrigo Viveros
 * Date: 24/05/18
 * Time: 10:07
 */

namespace App\Http\Controllers\Backend\Dependence;

use App\Http\Controllers\Controller;
use App\Models\Dependence;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ApiDependenceController extends Controller
{
    public function all(Request $request, DataTables $dataTables)
    {

        $data = Dependence::query();
        $data->select('id', 'name', 'acronym', 'email', 'annex');

        if ($request->ajax()) {

            $dd = $request->name;
            $d = $request->input('name');
            $data = $dataTables->eloquent($data)
                ->filter(function ($query) use ($request) {
                    if ($request->input('name')) {
                        $xd = 23;
                        $query->where('name', 'like', '%' . $request->name . '%');
                    }
                })->make();
            $data2 = $data;
            return $data;
        }

        $dataTables->eloquent($data)->make();

        $data = $dataTables;
        return $dataTables;
    }

}