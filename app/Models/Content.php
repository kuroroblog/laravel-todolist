<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Content extends Model
{
    use HasFactory;

    protected $fillable = ['content'];

    public static $rules = [
        'content' => 'required|max:20',
    ];

    /**
     * Todo内容を取得する関数
     *
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * Todo作成日付を取得する関数
     *
     * @return \Carbon\Carbon
     */
    public function getCreatedAt(): \Carbon\Carbon
    {
        /**
         * Carbon参考 : https://qiita.com/yudsuzuk/items/ff894bd0b76d4657741d
         */
        return new Carbon($this->created_at);
    }

    /**
     * TodoのIDを取得する関数
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
}
