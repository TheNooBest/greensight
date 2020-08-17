<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserModel;

class NewTestController extends Controller
{
    function index() {
        return view('test');
    }
    function index_post(Request $request) {
        if ($request->input('add_new')) {
            $validation = $request->validate([
                'name' => 'required',
                'password' => 'required',
            ]);
            
            $model = new UserModel();
            $model->name = $request->input('name');
            $model->password_hash = $request->input('password') . '_hash';
            $model->token = strval(rand());
            $model->save();
            return 'Molodec';
        } elseif ($request->input('get_all')) {
            $model = new UserModel();
            return dd($model->all());
        } elseif ($request->input('show_last')) {
            // Оче страшный сиквел-запрос. Потому что вложенный :(
            $model = new UserModel();
            return dd($model->from(function ($query) {
                $query->from('user_models')->orderByDesc('id')->limit(10);
            }, 't1')->orderBy('t1.id')->join('posts', 't1.id', '=', 'posts.user_model_id')->get());
        } else {
            return $request->all();
        }
    }
}
