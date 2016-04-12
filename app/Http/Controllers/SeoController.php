<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Route;

use App\Models\MetaRoutes;

class SeoController extends Controller
{
    public function index()
    {
        $data['routes'] = $this->getNamedRoutes();

        return view('administrator.seo.index', $data);
    }

    /**
     * @return array
     */
    private function getNamedRoutes($method='get')
    {
        $blackList = ['delete', 'store',
            'json', 'xml', 'csv', 'pdf', 'sql',
            'activate'
        ];

        $routesArray = Route::getRoutes();
        $namedRoutes = [];
        foreach ($routesArray as $route) {
            $action = $route->getAction();
            $methods = $route->getMethods();
            $name = $route->getName();

            if (isset($action['as']) && in_array('GET', $methods)) {
                $explode = explode('.', $action['as']);
                if(!in_array($explode[count($explode)-1], $blackList)) {
                    $have = false;
                    foreach($namedRoutes as $nr) {
                        $_action = $nr->getAction();
                        if($_action['as'] === $action['as']){
                            $have=true;
                            break;
                        }
                    }
                    if(!$have) {
                        array_push($namedRoutes, $route);
                    }
                }
            }
        }

        return $namedRoutes;
    }

    public function store(Request $request)
    {

        if (!isset($request['route'])) {
            return redirect()->back()->with('error', 'select at least 1 route');
        }

        $tags = [];

        array_push($tags, [
                        'tag_name'=>'description',
                        'tag_value' => $request['description']
        ]);
        array_push($tags, [
            'tag_name'=>'keywords',
            'tag_value' => $request['keywords']
        ]);
        array_push($tags, [
            'tag_name'=>'language',
            'tag_value' => $request['language']
        ]);
        array_push($tags, [
            'tag_name'=>'generator',
            'tag_value' => $request['generator']
        ]);
        array_push($tags, [
            'tag_name'=>'author',
            'tag_value' => $request['author']
        ]);

        array_push($tags, [
            'tag_name'=>'contact',
            'tag_value' => $request['contact']
        ]);

        array_push($tags, [
            'tag_name'=>'copyright',
            'tag_value' => $request['copyright']
        ]);

        if(isset($request['robots'])) {
            $str = '';
            $ix = 0;
            foreach($request['robots'] as $k => $a) {
                foreach ($a as $l => $b) {
                    $str .= ($b . ' ');
                }
                switch ($ix) {
                    case 0:
                        $who = 'googlebot';
                        break;
                    case 1:
                        $who = 'slurp';
                        break;
                    case 2:
                        $who = 'msnbot';
                        break;
                    case 3:
                        $who = 'teoma';
                        break;
                }
                $ix++;
                array_push($tags, [
                    'tag_name' => $who,
                    'tag_value' => $str
                ]);
                $str = '';
            }
        }
        else {
            foreach($request['route'] as $k => $r) {
                MetaRoutes::where('route_name', $r)
                            ->whereIn('tag_name', array(
                                'googlebot', 'slurp', 'msnbot', 'teoma'
                            ))->delete();
            }
        }

        foreach($request['route'] as $k => $r) {
            $exists = MetaRoutes::where('route_name', $r)->count();
            if($exists) {
                MetaRoutes::where('route_name', $r)->delete();
            }
        }

        foreach($request['route'] as $k => $r) {
            foreach ($tags as $l => $v) {
                if($v['tag_value']=="" && MetaRoutes::where('tag_name', $v['tag_name'])->count()) {
                    MetaRoutes::where('tag_name', $v['tag_name'])->delete();
                }
                else {
                    if($v['tag_value'] != "") {
                        MetaRoutes::create([
                            'tag_name' => $v['tag_name'],
                            'tag_value' => $v['tag_value'],
                            'route_name' => $r
                        ]);
                    }
                }
            }
        }
        return redirect()->back()->with('success', 'Sukces');
    }
}