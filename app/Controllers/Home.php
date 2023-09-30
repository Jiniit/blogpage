<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\BlogModel;
use App\Models\CategoryModel;
use App\Models\AuthorModel;
use App\Models\ApiModel;
use CodeIgniter\Controller;

$pager = \Config\Services::pager();
class Home extends BaseController
{
    public function index(): string
    {
        $blogs = new BlogModel();
        $author = new AuthorModel();
        $data['blogs'] = $blogs->getActiveBlog();
        // $data['blogs'] = $blogs->getBlogWithCategory(1);
        // print_r($data);
        // exit();
        return view('index', $data);
    }
    public function singleAllBlogs($identifier, $title)
    {
        $blogs = new BlogModel();
        $author = new AuthorModel();
        $data['blogs'] = $blogs->where(['blog_id' => $identifier, 'blog_title' => $title])->first();
        return view('singleallblogs', $data);
    }
    public function category()
    {
        $blogs = new BlogModel();
        $author = new AuthorModel();
        $data['blogs'] = $blogs->getBlogWithCategory(1);
        return view('category', $data);
    }

    public function singleCategory($id)
    {
        $blogs = new BlogModel();
        $data = $blogs->getBlogWithCategory($id);
        return view('food', ['blogs' => $data]);
    }

    public function frontApiBlogs($identifier, $title)
    {
        $api = new ApiModel();
        $data['api_blogs'] = $api->where(['id' => $identifier, 'title' => $title])->first();
        // print_r($data);
        // exit();
        return view('singleapiblogs', $data);
    }
    public function allApiBlogs()
    {
        $api = new ApiModel();
        $data = [
            'api_blogs' => $api->paginate(10), // 10 items per page
            'pager' => $api->pager
        ];
        return view('allApiBlogs', $data);
    }

    public function searchresult()
    {
        return view('searchresult');
    }

    public function contact()
    {
        return view('contact');
    }
    function sendMail() { 
        $request = \Config\Services::request();
        $to = $this->request->getVar('mailTo');
        $subject = $this->request->getVar('subject');
        $message = $this->request->getVar('message');
        
        $email = \Config\Services::email();
        $email->setTo($to);
        $email->setFrom('johndoe@gmail.com', 'Confirm Registration');
        
        $email->setSubject($subject);
        $email->setMessage($message);
        if ($email->send()) 
		{
            echo 'Email successfully sent';
        } 
		else 
		{
            $data = $email->printDebugger(['headers']);
            print_r($data);
        }
    }
    public function about()
    {
        return view('about');
    }
}
