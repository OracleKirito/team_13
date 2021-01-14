<?php

namespace App\Http\Controllers;

use App\Models\team_13;
use Illuminate\Http\Request;


class stored extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function create()
    {
        $a = new team_13;
        $a->a_name = "林幸真";
        $a->birth = "1990/3/17";
        $a->account = "G9543";
        $a->password = "Q742w8dzsg";
        $a->balance=1500;
        $a->save();
        $a->toArray();
        return view('create',$a);

    }

    public function edit($id)
    {
        $temp = team_13::findOrFail($id);
        $temp->balance = 3000;
        $temp->save();

        $bal = $temp->toArray();

        return view('edit')->with([
            'name'=>$bal['a_name'],
            'money'=>$bal['balance'],
            'id'=>$bal['id']
            ]);
    }

    public function show($id)
    {
        $temp =team_13::find($id);
        if ($temp == null)
            return "No record";
        $temp->toArray();
        return view('show',$temp);
    }

    public function generateRandomString($length = 15)
    {
        $a=array("");
        for ($j = 0; $j < 10; $j++)
        {
            $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length ; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            $a[$j]=$randomString;

        }

        return view('test',['a'=>$a]);
    }
}


