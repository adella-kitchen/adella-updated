<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ManajemenMenuController extends Controller
{
    public function index(){
        $daftar_menu = Menu::all();
        return view('admin.pages.manajemen-menu',[
            'title' => 'Menu',
            
        ]);
    }
    
    public function detailMenu($id){
        $daftar_menu = DB::table('menu')
            ->join('variant', 'menu.id_menu', '=', 'variant.id_menu')
            ->select('menu.*', 'variant.*')
            ->where('menu.id_menu', $id)
            ->get();
        return view('admin.pages.manajemen-menu-detail', [
            'daftar_menu' => $daftar_menu
        ]);
    }

}