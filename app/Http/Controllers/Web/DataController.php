<?php

namespace App\Http\Controllers\Web;

use App\Models\AboutUsModel;
use App\Models\ProductModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class DataController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password', 'type');
        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->role == 'admin') {
                return redirect()->route('admin');
            }

            return redirect()->route('home');
        }



        return redirect("login")->withError('Login failed. Check your credentials.');
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home');
    }

    public function aboutUs(Request $request)
    {
        $data = $request->validate([
            'content' => 'required'
        ]);

        AboutUsModel::where('id', 1)->update($data);

        return redirect()->route('admin')->with('success', 'Record updated successfully');
    }

    public function productAdminDelete($id)
    {
        $product = ProductModel::findOrFail($id);
        $product->delete();

        return redirect()->route('admin-product')->with('success', 'Record updated successfully');
    }

    public function productAdminInsert(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'price' => 'required',
            'image' => 'required',

        ]);

        ProductModel::create($data);

        return redirect()->route('admin-product')->with('success', 'Record updated successfully');
    }
}
