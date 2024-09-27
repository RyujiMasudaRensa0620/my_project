<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SampleController extends Controller {
    public function index( Request $request ) {
        $sampleValue = "sample テキストです。"; // 追加
        // $records = DB::connection('mysql')->select("select * from items");
        // $name = $records[0]->name;
        // dd($records[0]);

        // $insertRecord = DB::connection('mysql')->insert("insert into users (ID,email,name,password) values (null,'example.1@gmail.com', 'メロン1','pass1')");
        // $insertRecord = DB::connection('mysql')->insert("insert into users (ID,email,name,password) values (null,'example.2@gmail.com', 'メロン2','pass2')");
        // $insertRecord = DB::connection('mysql')->insert("insert into users (ID,email,name,password) values (null,'example.3@gmail.com', 'メロン3','pass3')");
        // dd($insertRecord);

        // $updateRecord = DB::connection('mysql') -> update("update items set price = 600 where name = 'りんご'");
        // dd($updateRecord);


        $deleteRecord = DB::connection('mysql') -> delete("delete from users where name = 'メロン1'");
        dd($deleteRecord);

        return view("top/index" , [ "sampleValue" => $sampleValue ]); // 変更
    }
}