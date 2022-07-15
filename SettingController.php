<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Log;
use File;

class SettingController extends Controller
{
    public function __construct()
    {
        // Page Title
        $this->module_title = 'Settings';

        // module name
        $this->module_name = 'settings';

        // directory path of the module
        $this->module_path = 'settings';

        // module icon
        $this->module_icon = 'fas fa-cogs';

        // module model name, path
        $this->module_model = "App\Models\Setting";
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);
        createSettingJson();
        $module_action = 'List';

        $$module_name = $module_model::paginate();

        Log::info(label_case($module_title.' '.$module_action).' | User:'.Auth::user()->name.'(ID:'.Auth::user()->id.')');

        return view(
            "backend.$module_path.index",
            compact('module_title', 'module_name', "$module_name", 'module_path', 'module_icon', 'module_action', 'module_name_singular')
        );
    }

    public function store(Request $request)
    {
        $dataArray = $request->all();
        unset($dataArray['_token']);
        unset($dataArray['submit']);
        //dd($dataArray);
        if($request->hasFile('meta_image'))
        {
            $file = $request->file('meta_image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('img/avatars/',$filename);
            $dataArray['meta_image'] = 'img/avatars/'.$filename;
        }
        
        $bulk = new \MongoDB\Driver\BulkWrite;
        foreach($dataArray as $key => $value){
            $bulk->update(['name' => $key], ['$set' => ['val' => $value]],['multi' => false, 'upsert' => true]);
        }
        $manager = mongoConnection('bulk');
        $result = $manager->executeBulkWrite(env('MONGODBNAME','').'.settings', $bulk);
        // Flash::success("<i class='fas fa-check'></i> Configuration Updated")->important();
        createSettingJson();

        return redirect()->back()->with('status','Settings has been saved.');
    }

    public function insertjson()
    {
        if(file_exists(base_path('composer.json'))){
            $json =file_get_contents(base_path('composer.json'));
            $settingArray = json_decode($json);
            //dd($settingArray);
            // foreach ($settingArray->setting as $key => $value) {
            //      if($value->require == $shortCode){
            //         return $value->val;
            //      }
            //  } 
             return view('system-info',['settingArray'=>$settingArray]);
        }else{
            return view('system-info',['settingArray'=>$settingArray]);
        }
    }
}
