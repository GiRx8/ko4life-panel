<?php
namespace App\Models;
use CodeIgniter\Model;

class NewsModel extends Model
{
    protected $table = 'news';

    protected $allowedFields = ['id','title', 'slug', 'body', 'created_at', 'updated_at'];

    public function getNews($slug = false)
{
    if ($slug === false) {
        return $this
        ->table('news')
        ->select('*')
        ->orderBy('created_at', 'desc')
        ->find();
    }

    return $this->where(['slug' => $slug])->first();
}
}