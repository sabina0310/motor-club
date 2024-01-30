<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\AboutUsModel;
use App\Models\ProductModel;

class WebController extends Controller
{
    public function index()
    {
        $data['about_us'] = AboutUsModel::first();
        return view('home', $data);
    }

    public function product()
    {
        $data['data'] = ProductModel::all();
        return view('product', $data);
    }

    public function contactUs()
    {
        return view('contact-us');
    }

    public function article()
    {
        return view('article');
    }

    public function login()
    {
        return view('login');
    }

    public function admin()
    {
        $data['data'] = AboutUsModel::first();
        return view('admin.about-us', $data);
    }

    public function productAdmin()
    {
        $data['data'] = ProductModel::all();
        return view('admin.product', $data);
    }

    public function productAdminForm()
    {
        return view('admin.product-form');
    }
}
