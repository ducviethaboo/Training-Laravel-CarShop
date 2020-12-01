<?php

namespace App\Http\Controllers;

use App\Service\ProductService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LoadPage extends Controller
{
    protected $pageController;

    public function __construct(ProductService $productService)
    {
        $this->pageController = $productService;
    }

    public function HomePageLoad()
    {
        return view('user.index');
    }

    public function showPageUserLogin()
    {
        return view('user.login');
    }

    public function showPageUserRegister()
    {
        return view('user.register');
    }

    public function showProductUser()
    {
        $products = $this->pageController->getAllProductService();
        return view('user.shop', compact('products'));
    }

    public function PageRegisterTestDriverLoad()
    {
        $products = $this->pageController->getAllProductService();
        return view('user.test-drive-register', compact('products'));
    }

    public function showFormAddByAdmin()
    {
        return view('admin.add');

    }
    public function showAdminPage()
    {
        $products = $this->pageController->getAllProductService();
        return view('admin.admin', compact('products'));
    }

}
