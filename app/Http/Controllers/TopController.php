<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TopController extends Controller {
    public function index( Request $request ) {
        $sampleValue = "sample テキストです。"; // 追加

        $records = DB::connection('mysql')->select("select * from items");
        $name = $records[0]->name;
        // dd($records[0]);

        // $insertRecord = DB::connection('mysql')->insert("insert into items (id,name,price) values (null, 'メロン',2000)");
        // dd($insertRecord);

        // $updateRecord = DB::connection('mysql') -> update("update items set price = 600 where name = 'りんご'");
        // dd($updateRecord);


        $deleteRecord = DB::connection('mysql') -> delete("delete from items where name = 'りんご'");
        dd($deleteRecord);

        return view("top/index" , [ "sampleValue" => $sampleValue ]); // 変更
    }
}