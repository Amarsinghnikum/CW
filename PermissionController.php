<?php

namespace App\Http\Controllers\Backend;

// use App\Permission;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Permission;
use Log;
use File;
use DataTables;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        // Page Title
        $this->module_title = 'permissions';

        // module name
        $this->module_name = 'permissions';

        // directory path of the module
        $this->module_path = 'permissions';

        // module icon
        $this->module_icon = 'fas fa-cogs';

        // module model name, path
        $this->module_model = "App\Models\Permission";
    }

    public function index(Request $request)
    {
        $permissions = Permission::latest()->get();
        // createPermissionJson();
        
        if ($request->ajax()) {
            $data = Permission::latest()->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
   
                           $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.
                           $row->id.'" data-original-name="Edit" class="edit btn btn-primary btn-sm editPermission">Edit</a>&nbsp;&nbsp;';
   
                        //    $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-name="Delete" class="btn btn-danger btn-sm deletePermission">Delete</a>';
    
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
      
        return view('backend.permissions.index',compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $permission = Permission::updateOrCreate(['_id' => $request->id],['name' => $request->name]);  
        
        return response()->json(['success'=>'Permission saved successfully.']);
    }


    /**
     * Display the specified resource.
     *
     * @param \App\Permission $permission
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Permission $permission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Permission $permission
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $permission = Permission::find($id);
        return response()->json($permission);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Permission          $permission
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Permission $permission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Permission $permission
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Permission::find($id)->delete();
     
        return response()->json(['success'=>'Permission deleted successfully.']);
    }
}
