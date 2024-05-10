<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class ManajemenMenuController extends Controller
{
    public function index(){
        $daftar_menu = Menu::all();
        return view('admin.pages.manajemen-menu',[
            'title' => 'Menu',
            'daftar_menu' => $daftar_menu
        ]);
    }
}