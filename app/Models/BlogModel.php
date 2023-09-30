<?php

namespace App\Models;

use CodeIgniter\Model;

class BlogModel extends Model
{
    protected $table = 'blog';
    protected $primaryKey  = 'blog_id';
    // protected $useSoftDeletes = true; 
    protected $useTimestamps = false;
    protected $dateFormat = 'datetime';
    protected $allowedFields =  [
        'blog_title',
        'blog_description',
        'blog_content',
        'blog_image',
        'blog_posttime',
        'author_id',
        'category_id',
        'status'
    ];

    public function getBlogsWithAuthorNames()
    {
        return $this->select('blog.*, author.author_name,category.category_name')
            ->join('author', 'author.author_id = blog.author_id')
            ->join('category', 'category.category_id = blog.category_id')
            ->findAll();
    }
    public function getBlogswithIdName($id)
    {
        return $this->select('blog.*, author.author_name,category.category_name')
            ->join('author', 'author.author_id = blog.author_id')
            ->join('category', 'category.category_id = blog.category_id')
            ->where('blog_id', $id)->first();
    }
    public function getActiveBlog()
    {
        return $this->select('blog.*, author.author_name,category.category_name')
            ->join('author', 'author.author_id = blog.author_id')
            ->join('category', 'category.category_id = blog.category_id')
            ->where('status', 0)
            ->findAll();
    }
    public function getBlogWithCategory($id)
    {
        return $this->select('blog.*, author.author_name,category.category_name')
            ->join('author', 'author.author_id = blog.author_id')
            ->join('category', 'category.category_id = blog.category_id')
            ->where('blog.category_id', $id)
            ->get()->getResult();
    }
}
