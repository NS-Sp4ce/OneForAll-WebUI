<?php

namespace App\Http\Controllers\Index;

use Illuminate\Support\Facades\Schema;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller {
    //
    public function index() {
        //获取表及列结构
        $tables     = DB::connection('sqlite')->getDoctrineSchemaManager()->listTableNames();
        $tabCounts  = count($tables);
        $columnNums = 0;
        foreach($tables as $table) {
            $fullDomain = explode('_', $table, -2);
            $dotDomain  = implode('.', $fullDomain);
            if(strpos($table, 'now_result') !== false) {
                $columnNums += DB::table($table)->where('alive', '=', 1)->count();
            }
            $domains[] = $dotDomain;
        }
        $uniqueDomain    = array_unique($domains);
        $uniDomainCounts = count($uniqueDomain);
        $resDomains      = array();
        foreach($uniqueDomain as $uDomain) {
            $uDomain = str_replace('.', '_', $uDomain);
            foreach($tables as $table) {
                if(strpos($table, $uDomain) === 0) {
                    $resDomains[$uDomain][] = $table;
                }
            }
        }
        return view(
            'index', [
                       'resDomains'      => $resDomains,
                       'tabCounts'       => $tabCounts,
                       'columnNums'      => $columnNums,
                       'uniDomainCounts' => $uniDomainCounts
                   ]
        );
    }

    public function getData(Request $request) {
        //获取表及列结构
        $tables = DB::connection('sqlite')->getDoctrineSchemaManager()->listTableNames();
        foreach($tables as $table) {
            $fullDomain = explode('_', $table, -2);
            $dotDomain  = implode('.', $fullDomain);
            $domains[]  = $dotDomain;
        }
        $uniqueDomain = array_unique($domains);
        $resDomains   = array();
        foreach($uniqueDomain as $uDomain) {
            $uDomain = str_replace('.', '_', $uDomain);
            foreach($tables as $table) {
                if(strpos($table, $uDomain) === 0) {
                    $resDomains[$uDomain][] = $table;
                }
            }
        }
        $URI  = explode('/', $request->path());
        $data = DB::table($URI[1])->get()->toArray();
        //获取指定表的所有列
        $columns = DB::connection()->getDoctrineSchemaManager()->listTableColumns($URI[1]);
        $columns = json_decode(json_encode($columns),true);
        return view(
            'data', [
                      'resDomains' => $resDomains,
                      'URI'        => $URI[1],
                      'datas'      => $data,
                      'columns'    => $columns
                  ]
        );
    }

}
