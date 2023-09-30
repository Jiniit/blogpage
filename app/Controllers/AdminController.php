<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\BlogModel;
use App\Models\CategoryModel;
use App\Models\AuthorModel;
use App\Models\ApiModel;
use CodeIgniter\Controller;

$session = \Config\Services::session();
class AdminController extends BaseController
{
    //Login/Registration
    public function login(): string
    {
        helper(['form']);
        return view('admin/login');
    }

    public function generateOtp($length = 6)
    {
        $otp = '';
        $characters = '0123456789';

        for ($i = 0; $i < $length; $i++) {
            $otp .= $characters[rand(0, strlen($characters) - 1)];
        }

        return $otp;
    }
    public function sendOtpEmail()
    {
        $session = \Config\Services::session();
        $adminModel = new AdminModel();
        $otp = $this->generateOtp();
        $timestamp = time();
        $otpData = ['otp' => $otp, 'timestamp' => $timestamp];
        session()->set('otp_data', $otpData);
        $verify = $this->verifyOtp();
        $request = \Config\Services::request();
        $to = $this->request->getVar('mailTo');
        $subject = $this->request->getVar('subject');
        $message = $this->request->getVar('message');


        $email = \Config\Services::email();
        $email->setTo($to);
        $email->setFrom('johndoe@gmail.com', 'Confirm Registration');
        $email->setSubject($subject);
        $email->setMessage($otp);

        $data = [
            'otp' => $otp
        ];

        $adminModel->where('admin_email', $to)->set($data)->update();

        if ($email->send()) {
            $newEmail['email'] = $to;
            return view('admin/verify-otp', $newEmail);
        } else {
            $data = $email->printDebugger(['headers']);
            print_r($data);
            return false;
        }
    }


    public function loginAuthentication()
    {
        $session = session();
        $adminModel = new AdminModel();
        $request = \Config\Services::request();
        $email = $request->getVar('admin_email');
        $password = $request->getVar('password');
        $data = $adminModel->where('admin_email', $email)->first();

        if ($data) {
            $emailcheck = $data['admin_email'];
            $pass = $data['admin_password'];

            if ($password == $pass && $email == $emailcheck) {
                $otp = $this->generateOtp();
                $adminModel->update($data['admin_email'], ['otp' => $otp]);

                $subject = 'OTP Verification';
                $message = 'Your OTP for login is: ' . $otp;
                $this->sendOtpEmail();
                $session->set('otp_created_at', time());
                $session->set('otp', $otp);

                return redirect()->to(base_url('/verify-otp'));
            } else {
                return redirect()->to(base_url('/login'));
            }
        }
    }

    public function verifyOtp()
    {
        $adminModel = new AdminModel();
        $request = \Config\Services::request();
        $otpData = session()->get('otp_data');
        if ($request->getPost()) {
            $email = $request->getPost('email');
            $enteredOtp = $request->getPost('otp');
            $data = $adminModel->where(['admin_email' => $email, 'otp' => $enteredOtp])->first();

            if ($otpData && isset($otpData['otp']) && isset($otpData['timestamp'])) {
                $storedOTP = $otpData['otp'];
                $otpTimestamp = $otpData['timestamp'];
                $expirationTime = 90;

                if (time() - $otpTimestamp <= $expirationTime) {
                    if ($enteredOtp === $storedOTP) {
                        return redirect()->to(base_url('/allblogs'))->with('status', 'Logged in Successfully');
                    } else {
                        return redirect()->to(base_url('/login'))->with('status', 'Wrong OTP');
                    }
                }
            } else {
                return redirect()->to(base_url('/login'))->with('status', 'Time Up! ');
            }
        } else {
            return redirect()->to(base_url('/login'))->with('status', 'Wrong Credentials');
        }

        return view('admin/verify-otp');
    }

    public function resendOtp()
    {
        $session = \Config\Services::session();
        $adminModel = new AdminModel();
        $otp = $this->generateOtp();
        $timestamp = time();
        $otpData = ['otp' => $otp, 'timestamp' => $timestamp];
        session()->set('otp_data', $otpData);
        $request = \Config\Services::request();
        $to = $this->request->getVar('mailTo');
        // $subject = $this->request->getVar('subject');
        // $message = $this->request->getVar('message');
        // print_r($to);
        // exit();
        $email = \Config\Services::email();
        $email->setTo($to);
        $email->setFrom('johndoe@gmail.com', 'Confirm Registration');
        // $email->setSubject($subject);
        $email->setMessage($otp);

        $data = [
            'otp' => $otp
        ];

        $adminModel->where('admin_email', $to)->set($data)->update();

        if ($email->send()) {
            $newEmail['email'] = $to;
            return view('admin/verify-otp', $newEmail);
        } else {
            $data = $email->printDebugger(['headers']);
            print_r($data);
            return false;
        }
        // $this->sendOtpEmail();
        // $this->verifyOtp();
        // return redirect()->to(base_url('/verifyOtp'))->with('success', 'OTP has been resent successfully.');
    }
    public function allblog()
    {
        $blogs = new BlogModel();
        $author = new AuthorModel();
        $data['blogs'] = $blogs->getBlogsWithAuthorNames();
        return view('admin/allblogs', $data);
    }
    public function addblog()
    {
        $blogs = new BlogModel();
        $author = new AuthorModel();
        $category = new CategoryModel();
        $authors = $author->findAll();
        $categories = $category->findAll();
        return view('admin/addblogform', ['authors' => $authors, 'categories' => $categories]);
    }

    public function submitBlog()
    {
        $request = \Config\Services::request();
        $blogs = new BlogModel();
        $author = new AuthorModel();
        $category = new CategoryModel();
        $file = $request->getFile('blog_image');
        if ($file->isValid()) {
            $imageName = $file->getClientName();
            $file->move('C:/xampp/htdocs/blogpage/public/assets/img/', $imageName);
        }
        $data = [
            'blog_title' => $request->getPost('blog_title'),
            'blog_description' => $request->getPost('blog_description'),
            'blog_content' => $request->getPost('blog_content'),
            'author_id' => $request->getPost('author_id'),
            'author_name' => $request->getPost('author_name'),
            'category_id' => $request->getPost('category_id'),
            'category_name' => $request->getPost('category_name'),
            'blog_image' => $imageName
        ];

        $blogs->save($data);
        return redirect()->to(base_url('/allblogs'))->with('status', 'Author Added Succesfully');
    }

    public function editBlog($id)
    {
        $blogs = new BlogModel();
        $data['blog'] = $blogs->getBlogswithIdName($id);
        return view('admin/editBlog', $data);
    }
    public function updateBlog()
    {
        $request = \Config\Services::request();
        $blogs = new BlogModel();
        $blog_id = $request->getPost('blog_id');
        $data = [
            'blog_title' => $request->getPost('blog_title'),
            'blog_description' => $request->getPost('blog_description'),
            'blog_content' => $request->getPost('blog_content')
        ];
        $blogs->update($blog_id, $data);
        return redirect()->to(base_url('/allblogs'))->with('status', 'Blog Updated Succesfully');
    }
    public function deleteBlog($id)
    {
        $blogs = new BlogModel();
        $blogs->update($id, ['status' => 1]);
        return redirect()->to('/deletedblogs');
    }

    public function restoreBlog($id)
    {
        $blogs = new BlogModel();
        $blogs->update($id, ['status' => 0]);
        return redirect()->to('/allblogs');
    }

    public function deletedblogs()
    {
        $blogs = new BlogModel();
        $deletedBlogs['blogs'] = $blogs->where('status', 1)->findAll();
        return view('admin/deletedblogs', $deletedBlogs);
    }
    public function perDeletedblogs($id)
    {
        $blogs = new BlogModel();
        $blogs->where('blog_id', $id)->delete();
        return redirect()->to('/allblogs');
    }


    //Category Page
    public function category()
    {
        $category = new CategoryModel();
        $data['category'] = $category->findAll();
        return view('admin/category', $data);
    }
    public function addcategory()
    {
        $category = new CategoryModel();
        return view('admin/addcategory');
    }

    public function submitCategory()
    {
        $request = \Config\Services::request();
        $category = new CategoryModel();
        $data = [
            'category_id' => $request->getPost('category_id'),
            'category_name' => $request->getPost('category_name'),
            'category_description' => $request->getPost('category_description')
        ];
        $category->save($data);
        return redirect()->to(base_url('/categories'))->with('status', 'Category Added Succesfully');
    }

    public function editCategory($id)
    {
        $category = new CategoryModel();
        $data['category'] = $category->where('category_id', $id)->first();
        return view('admin/editCategory', $data);
    }
    public function updateCategory()
    {
        $request = \Config\Services::request();
        $category = new CategoryModel();
        $category_id = $request->getPost('category_id');
        $data = [
            'category_name' => $request->getPost('category_name'),
            'category_description' => $request->getPost('category_description')
        ];
        $category->update($category_id, $data);
        return redirect()->to(base_url('/categories'))->with('status', 'Category Updated Succesfully');
    }

    public function deleteCategory($id)
    {
        $category = new CategoryModel();
        $category->delete($id);
        return redirect()->to(base_url('/categories'))->with('status', 'Category Deleted Succesfully');
    }



    //Author Page
    public function author()
    {
        $author = new AuthorModel();
        $data['authors'] = $author->findAll();
        return view('admin/author', $data);
    }
    public function addauthor()
    {
        $author = new AuthorModel();
        return view('admin/addauthor');
    }
    public function submitauthor()
    {
        $request = \Config\Services::request();
        $author = new AuthorModel();
        $data = [
            'author_name' => $request->getPost('author_name'),
            'author_email' => $request->getPost('author_email')
        ];
        $author->save($data);
        return redirect()->to(base_url('/author'))->with('status', 'Author Added Succesfully');
    }
    public function editAuthor($id)
    {
        $author = new AuthorModel();
        $data['author'] = $author->where('author_id', $id)->first();
        return view('admin/editauthor', $data);
    }
    public function updateAuthor()
    {
        $request = \Config\Services::request();
        $author = new AuthorModel();
        $author_id = $request->getPost('author_id');
        $data = [
            'author_name' => $request->getPost('author_name'),
            'author_email' => $request->getPost('author_email')
        ];
        $author->update($author_id, $data);
        return redirect()->to(base_url('/author'))->with('status', 'Author Updated Succesfully');
    }

    public function deleteAuthor($id)
    {
        $author = new AuthorModel();
        $author->delete($id);
        return redirect()->to(base_url('/author'))->with('status', 'Author Deleted Succesfully');
    }


    //API Page
    public function apiblogs()
    {
        $api = new ApiModel();
        $data['api_blogs'] = $api->findAll();
        return view('admin/apiblogs', $data);
    }
    public function editApi($id)
    {
        $api = new ApiModel();
        $data['api_blogs'] = $api->where('id', $id)->first();
        return view('admin/editapiblogs', $data);
    }
    public function updateApi()
    {
        $request = \Config\Services::request();
        $api = new ApiModel();
        $id = $request->getPost('id');

        $data = [
            'userId' => $request->getPost('userId'),
            'title' => $request->getPost('title'),
            'body' => $request->getPost('body')
        ];
        $api->update($id, $data);
        return redirect()->to(base_url('/apiblogs'))->with('status', 'API Blog Updated Successfully');
    }


    public function deleteApi($id)
    {
        $api = new ApiModel();
        $api->delete($id);
        return redirect()->to(base_url('/apiblogs'))->with('status', 'Author Deleted Succesfully');
    }
}
