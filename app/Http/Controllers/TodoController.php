<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;

class TodoController extends Controller
{
    /**
     * Get /からのリクエストを受け付ける。
     */
    public function index()
    {
        /**
         * 参考 : https://readouble.com/laravel/8.x/ja/eloquent.html
         */
        return view('index', ['contents' => Content::all()]);
    }

    /**
     * POST /todo/createからのリクエストを受け付ける。
     *
     * @param Illuminate\Http\Request $request
     *
     * return Get /へリダイレクト。
     *
     * リダイレクトとは? : https://semlabo.com/seo/blog/url_redirect/
     */
    public function insert(Request $request)
    {
        /**
         * 参考 : https://readouble.com/laravel/8.x/ja/requests.html
         */
        Content::insert($request->input('content'));

        /**
         * 参考 : https://techacademy.jp/magazine/18787
         */
        return redirect()->to('/');
    }
}
