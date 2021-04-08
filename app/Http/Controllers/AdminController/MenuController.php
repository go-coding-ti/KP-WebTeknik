<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Header;
use App\Menu;
use App\Page;
use App\Submenu;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use PhpParser\Node\Expr\FuncCall;

class MenuController extends Controller
{

    public function getMenu($id){
        $menus = Menu::where('id_header', $id)->get();
        return response()->json(
            $menus
        );
    }
    public function index(){
        $headers = Header::where('deleted_at', NULL)->get();
        $menus = Menu::where('deleted_at', NULL)->get();
        $submenus = Submenu::where('deleted_at', NULL)->get();
        return view('adminpages.menu.menu', compact('headers', 'menus', 'submenus'));
    }

    //HEADER FUNCTION
    public function headerCreate(){
        $pages = Page::where('deleted_at', NULL)->get();
        return view('adminpages.menu.createHeader', compact('pages'));
    }

    public function headerStore(Request $request){
        $validator = Validator::make($request->all(), [
            'header_ina' => 'required|min:3|unique:headers',
            'header_eng' => 'required|min:3'
        ]);

        if($validator->fails()){
            return back()->withErrors($validator);
        }

        $header = new Header();
        $header->header_ina = $request->header_ina;
        $header->header_eng = $request->header_eng;
        $header->header_slug = Str::slug($request->header_ina);
        if($request->page == ""){
            $header->header_url = $request->url_header;
        }else if($request->page != "" && $request->url_header!= ""){
            $header->id_page = $request->page;
            $page = Page::find($request->page);
            $header->header_url = "/admin/pages/".$page->title_slug;
        }else if($request->page == "" && $request->url_header== ""){
            $header->header_url = "#";
        }
        $header->save();
        return redirect('/admin/menus')->with('statusInput', 'Header successfully added to record');
    }

    public function headerEdit($id){
        $header = Header::find($id);
        $pages = Page::where('deleted_at', NULL)->get();

        return view('adminpages.menu.editHeader', compact('pages', 'header'));
    }

    public function headerUpdate($id, Request $request){
        $validator = Validator::make($request->all(), [
            'header_ina' => 'required|min:3',
            'header_eng' => 'required|min:3'
        ]);

        if($validator->fails()){
            return back()->withErrors($validator);
        }

        $header = Header::find($id);
        $header->header_ina = $request->header_ina;
        $header->header_eng = $request->header_eng;
        $header->header_slug = Str::slug($request->header_ina);
        if($request->page == "" && $request->url_header!= ""){
            $header->header_url = $request->url_header;
            $header->id_page = NULL;
        }else if($request->page != ""){
            $header->id_page = $request->page;
            $page = Page::find($request->page);
            $header->header_url = "/admin/pages/".$page->title_slug;
        }else if($request->page == "" && $request->url_header== ""){
            $header->header_url = "#";
            $header->id_page = NULL;
        }
        $header->save();
        return redirect('/admin/menus')->with('statusInput', 'Header successfully updated from record');
    }

    public function headerDestroy($id){
        $header = Header::find($id);
        $header->delete();
        return redirect('/admin/menus')->with('statusInput', 'Header successfully deleted');
    }

    //MENU FUCNTION
    public function menuCreate(){
        $headers = Header::where('deleted_at', NULL)->get();
        $pages = Page::where('deleted_at', NULL)->get();
        return view('adminpages.menu.createMenu', compact('pages', 'headers'));
    }

    public function menuStore(Request $request){
        $validator = Validator::make($request->all(), [
            'menu_ina' => 'required|min:3|unique:menus',
            'menu_ina' => 'required|min:3',
            'header' => 'required'
        ]);

        if($validator->fails()){
            return back()->withErrors($validator);
        }

        $menu = new Menu();
        $menu->menu_ina = $request->menu_ina;
        $menu->menu_eng = $request->menu_eng;
        $menu->menu_slug = Str::slug($request->menu_ina);
        $menu->id_header = $request->header;    
        if($request->page == ""){
            $menu->menu_url = $request->url_menu;
        }else if($request->page != ""){
            $menu->id_page = $request->page;
            $page = Page::find($request->page);
            $menu->menu_url = "/admin/show/".$page->title_slug;
        }
        $menu->save();
        return redirect('/admin/menus')->with('statusInput', 'Menu successfully added to record');
    }

    public function menuEdit($id){
        $headers = Header::where('deleted_at', NULL)->get();
        $pages = Page::where('deleted_at', NULL)->get();
        $menu = Menu::find($id);

        return view('adminpages.menu.editMenu', compact('pages', 'headers', 'menu'));
    }

    public function menuUpdate($id, Request $request){
        $validator = Validator::make($request->all(), [
            'menu_ina' => 'required|min:3',
            'menu_ina' => 'required|min:3',
            'header' => 'required'
        ]);

        if($validator->fails()){
            return back()->withErrors($validator);
        }

        $menu = Menu::find($id);
        $menu->menu_ina = $request->menu_ina;
        $menu->menu_eng = $request->menu_eng;
        $menu->menu_slug = Str::slug($request->menu_ina);
        $menu->id_header = $request->header;    
        if($request->page == ""){
            $menu->menu_url = $request->url_menu;
        }else if($request->page != ""){
            $menu->id_page = $request->page;
            $page = Page::find($request->page);
            $menu->menu_url = "/admin/show/".$page->title_slug;
        }
        $menu->save();
        return redirect('/admin/menus')->with('statusInput', 'Menu successfully updated from the record');
    }

    public function menuDestroy($id){
        $menu = Menu::find($id);
        $menu->delete();
        return redirect('/admin/menus')->with('statusInput', 'Menu successfully deleted');
    }

    //SUBMENU FUNCTION
    public function submenuCreate(){
        $headers = Header::where('deleted_at', NULL)->get();
        $menus = Menu::where('deleted_at', NULL)->get();
        $pages = Page::where('deleted_at', NULL)->get();
        return view('adminpages.menu.createSubmenu', compact('pages', 'headers', 'menus'));
    }

    public function submenuStore(Request $request){
        $validator = Validator::make($request->all(), [
            'menu_ina' => 'required|min:3|unique:submenus',
            'menu_ina' => 'required|min:3',
            'menu' => 'required'
        ]);

        if($validator->fails()){
            return back()->withErrors($validator);
        }

        $submenu = new Submenu();
        $submenu->menu_ina = $request->menu_ina;
        $submenu->menu_eng = $request->menu_eng;
        $submenu->menu_slug = Str::slug($request->menu_ina);
        $submenu->id_menu = $request->menu;    
        if($request->page == ""){
            $submenu->menu_url = $request->url_menu;
        }else if($request->page != ""){
            $submenu->id_page = $request->page;
            $page = Page::find($request->page);
            $submenu->menu_url = "/admin/pages".$page->title_slug;
        }
        $submenu->save();
        return redirect('/admin/menus')->with('statusInput', 'Sub Menu successfully added to record');
    }

    public function submenuEdit($id){
        $headers = Header::where('deleted_at', NULL)->get();
        $menus = Menu::where('deleted_at', NULL)->get();
        $pages = Page::where('deleted_at', NULL)->get();
        $submenu = Submenu::find($id);

        $id_header = $submenu->id_menu;
        $id_header = Menu::find($id_header);
        $id_header = Header::find($id_header->id_header);
        $id_header = $id_header->id;
        return view('adminpages.menu.editSubmenu', compact('pages', 'headers', 'menus', 'submenu', 'id_header'));
    }

    public function submenuUpdate($id, Request $request){
        $validator = Validator::make($request->all(), [
            'menu_ina' => 'required|min:3',
            'menu_ina' => 'required|min:3',
            'menu' => 'required'
        ]);

        if($validator->fails()){
            return back()->withErrors($validator);
        }

        $submenu = Submenu::find($id);
        $submenu->menu_ina = $request->menu_ina;
        $submenu->menu_eng = $request->menu_eng;
        $submenu->menu_slug = Str::slug($request->menu_ina);
        $submenu->id_menu = $request->menu;    
        if($request->page != ""){
            $submenu->id_page = $request->page;
            $page = Page::find($request->page);
            $submenu->menu_url = "/admin/pages/".$page->title_slug;
        }else if($request->page == ""){
            $submenu->menu_url = $request->url_menu;
            $submenu->id_page = NULL;
        }
        $submenu->save();
        return redirect('/admin/menus')->with('statusInput', 'Sub Menu successfully updated from the record');
    }

    public function submenuDestroy($id){
        $submenu = Submenu::find($id);
        $submenu->delete();
        return redirect('/admin/menus')->with('statusInput', 'Sub Menu successfully deleted');
    }

}
