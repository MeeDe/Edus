<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;
use App\Models\Logs;

use Session;
use DB;

class LogsController extends Controller
{
    public function index()
    {
        return view('administrator.logs.index');
    }

    public function search_by_user(Request $request)
    {
        $user = User::where('name', $request['user_name'])->first();
        $json = null;

        if($user) {
            $id = $user['id'];

            $logs = Logs::where('user_id', $id);
            if($request['date_from']!=="" && $request['date_to']==="") {
                $logs = $logs->where('created_at', '>=', $request['date_from']);
            }
            if($request['date_from']==="" && $request['date_to']!=="") {
                $logs = $logs->where('created_at', '<=', $request['date_to']);
            }
            if($request['date_from']!=="" && $request['date_to']!=="") {
                $logs = $logs->whereBetween('created_at', [$request['date_from'], $request['date_to']]);
            }
            if($request['action'] !== "all") {
                $logs = $logs->where('type', $request['action']);
            }

            Session::set('sbu', $logs->get());
            Session::set('json', $this->getDetails($logs->get()));
        }
        return redirect()->back()->withInput();
    }

    public function search_by_table(Request $request)
    {
        $model = trans('logs.tableToModel.'.$request['table']);
        $json = null;

        $logs = Logs::where('owner_type', $model);

        if($request['date_from']!=="" && $request['date_to']==="") {
            dump('1');
            $logs = $logs->where('created_at', '>=', $request['date_from']);
        }
        if($request['date_from']==="" && $request['date_to']!=="") {
            dump('2');
            $logs = $logs->where('created_at', '<=', $request['date_to']);
        }
        if($request['date_from']!=="" && $request['date_to']!=="") {
            dump('3');
            $logs = $logs->whereBetween('created_at', [$request['date_from'], $request['date_to']]);
        }
        if($request['action'] !== "all") {
            $logs = $logs->where('type', $request['action']);
        }



        Session::set('sbu', $logs->get());
        Session::set('json', $this->getDetails($logs->get()));

        return redirect()->back()->withInput();
    }

    // Convert log entry into json format that user can read
    public function json($logs_collection)
    {
        $result = [];
        foreach ($logs_collection as $log) {
            $log_entry = new LogEntry($log);
            array_push($result, $log_entry->json());
        }

        return json_encode($result);
    }

    /**
     * @param $logs_collection
     * @return json_encode
     */
    private function getDetails($logs_collection)
    {
        $jsons = json_decode($this->json($logs_collection));    // get array of json strings
        $jsons_arr = [];
        foreach($jsons as $json) {
            array_push($jsons_arr, json_decode($json));         // decode json strings in jsons array
        }

        return json_encode($jsons_arr);                         // return fully parsed json content
    }
}

class LogEntry
{
    private $log;
    public $who;
    public $what;
    public $when;
    public $operation;

    public $old;
    public $new;

    public $difference;

    public $related;

    public function __construct($log)
    {
        $this->log          = $log;
        $this->who          = $log->account;
        $this->what         = trans('logs.model.'.$log['owner_type']);
        $this->when         = $log['created_at'];
        $this->operation    = trans('logs.operation.'.$log['type']);
        $this->old          = $log['old_value'];
        $this->new          = $log['new_value'];
        $this->difference   = $this->difference($this->new, $this->old);
        $this->related      = false; // to implement
    }

    public function array_balance(&$array_a, &$array_b)
    {
        foreach($array_a as $k => $item) {
            if(!array_key_exists($k, $array_b)) {
                $array_b[$k] = null;
            }
        }

        foreach($array_b as $k => $item) {
            if(!array_key_exists($k, $array_a)) {
                $array_a[$k] = null;
            }
        }
    }

    public function array_translate_keys($type, $array)
    {
        $new = [];
        foreach($array as $k=>$item) {
            $key = ucfirst(trans('logs.'.$type.'.'.$this->log['owner_type'].'.'.$k));
            $value = $item;
            $new[$key]=$value;
        }

        return $new;
    }

    public function difference($new, $old)
    {
        $old = (($old === "null") ? json_decode("{}", true) : json_decode($old, true));
        $new = (($new === "null") ? json_decode("{}", true) : json_decode($new, true));
        $difference = array_diff($new, $old);

        return ['columns' => array_merge(array_keys($new), array_keys($old)), 'old'=>$old, 'new'=>$new, 'difference'=>$difference];
    }

    public function json()
    {
        $diff = $this->difference($this->new, $this->old);
        $this->array_balance($diff['new'], $diff['old']);

        return json_encode([
            'who'           => $this->who['name'],
            'what'          => $this->what,
            'when'          => $this->when,
            'operation'     => $this->operation,
            'old'           => $this->array_translate_keys('column', $diff['old']),
            'new'           => $this->array_translate_keys('column', $diff['new']),
            'difference'    => $diff['difference'],
        ]);
    }
}
