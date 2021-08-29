<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;

class TodoController extends Controller
{
    /**
     * Get / ページに関するController
     *
     */
    public function index()
    {
        return view('index', ['items' => Content::all()]);
    }

    /**
     * POST /todo/create ページに関するController
     *
     * @param \Illuminate\Http\Request $request
     *
     */
    public function create(Request $request)
    {
        /**
         * 参考 : https://readouble.com/laravel/8.x/ja/validation.html
         */
        $request->validate(Content::$rules);
        Content::create($request->all());
        /**
         * 参考 : https://readouble.com/laravel/8.x/ja/redirects.html
         */
        return redirect('/');
    }

    /**
     * POST /todo/delete?id={id} ページに関するController
     *
     * @param \Illuminate\Http\Request $request
     *
     */
    public function delete(Request $request)
    {
        $content = Content::find($request->id);
        /**
         * 参考 : https://www.php.net/manual/ja/function.is-null.php
         */
        if (!is_null($content)) {
            $content->delete();
        }
        /**
         * 参考 : https://readouble.com/laravel/8.x/ja/redirects.html
         */
        return redirect('/');
    }

    /**
     * POST /todo/update?id={id} ページに関するController
     *
     * @param \Illuminate\Http\Request $request
     *
     */
    public function update(Request $request)
    {
        /**
         * 参考 : https://readouble.com/laravel/8.x/ja/validation.html
         */
        $request->validate(Content::$rules);
        $param = $request->all();
        unset($param['_token']);
        Content::where('id', $request->id)->update($param);
        /**
         * 参考 : https://readouble.com/laravel/8.x/ja/validation.html
         */
        return redirect('/');
    }
}
