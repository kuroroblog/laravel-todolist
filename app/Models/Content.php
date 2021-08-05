<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Carbon\Carbon;

class Content extends Model
{
    use HasFactory;

    protected $fillable = ['content'];

    public static $rules = array('content' => 'required|max:20');

    /**
     * Todoを登録する。
     *
     * @param string $content content
     *
     * @return void
     */
    public static function insert(string $content): void
    {
        /**
         * 参考 : https://readouble.com/laravel/8.x/ja/eloquent.html
         */
        $ins          = new Content;
        $ins->content = $content;
        $ins->save();
    }

    /**
     * Todoの内容を返す。
     *
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * Todoを作成した時刻を返す。
     *
     * @return string
     */
    public function getCreatedAt(): string
    {
        /**
         * 参考 : https://qiita.com/mackeyTA/items/e8b5e47a9f020a1902c0
         */
        return new Carbon($this->created_at);
    }
}
