<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\CategoryGallery;
use App\CategoryPortfolio;
use App\CategoryProduct;
use App\Content;
use App\Menu;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Module;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin_menus = Menu::whereLang(app()->getLocale())->get();
        return view('Admin.menu.all',compact('admin_menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $modules = Module::all();
        $categories = Category::all();
        $categoryPortfolios = CategoryPortfolio::all();
        $menus = $this->get_menu(0,app()->getLocale());

        return view('Admin.menu.create',compact('modules','categories','categoryPortfolios','menus'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $status  = $request->status == 'on' ? 1:0;
        $order = convertPersianToEnglish($request->order);
        switch ($request->madule){
            case 0:
                $madule_name = 'home';
                $request->madule_id = 0;
                break;
            case 1:
                $madule_name = 'CategoryProduct';
                break;
            case 2:
                $madule_name = 'Product';
                break;
            case 3:
                $madule_name = 'Category';
                break;
            case 4:
                $madule_name = 'Content';
                break;
            case 5:
                $madule_name = 'outer';
            Case 6:
                $madule_name = 'CategoryGallery';
                break;
            Case 7:
                $madule_name = 'CategoryFile';
                break;
        }
        $link = (!$request->link) ? "null":$request->link;
        $menu = Menu::create([
            'name'=>$request->name,
            'parent_id'=>$request->parent_id,
            'madule_name'=>$madule_name,
            'madule_id'=>$request->madule_id,
            'link'=>$link,
            'lang'=>$request->lang,
            'type'=>$request->madule,
            'status'=>$status,
            'order'=>$order,
        ]);

        if($menu){
            return redirect()->back()->with('message',[__('admin.create_s'),'success']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        //return $menu;
        $modules = Module::all();
        $categories = Category::all();
        $categoryPortfolios = CategoryPortfolio::all();
        $menus = $this->get_menu(0,app()->getLocale(),$menu->parent_id);

        $madule_id = $this->current_menu($menu->id,$menu->type);


        return view('Admin.menu.edit',compact('modules','categories','categoryPortfolios','menus','menu','madule_id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
        $status  = $request->status == 'on' ? 1:0;
        $order = convertPersianToEnglish($request->order);
        switch ($request->madule){
            case 1:
                $madule_name = 'CategoryProduct';
                break;
            case 2:
                $madule_name = 'Product';
                break;
            case 3:
                $madule_name = 'Category';
                break;
            case 4:
                $madule_name = 'Content';
                break;
            case 5:
                $madule_name = 'outer';
            Case 6:
                $madule_name = 'CategoryGallery';
                break;
        }
        $link = (!$request->link) ? "null":$request->link;
        $updated = $menu->update([
            'name'=>$request->name,
            'parent_id'=>$request->parent_id,
            'madule_name'=>$madule_name,
            'madule_id'=>$request->madule_id,
            'link'=>$link,
            'lang'=>$request->lang,
            'type'=>$request->madule,
            'status'=>$status,
            'order'=>$order,
        ]);

        if($updated){
            return redirect()->back()->with('message',[__('admin.update_s'),'success']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        //
    }

    public function check_children($parentId=0,$lang) {
        $result = Menu::where('parent_id',$parentId)->where('lang',$lang)->count();
        return $result;
    }

    public function get_menu($parent_id=0,$lang,$current_id=0){
        $primaryMenus = Menu::whereParent_id($parent_id)->whereLang(app()->getLocale())->get();
        if($primaryMenus){
            $menus = "";
            foreach($primaryMenus as $menu){
                if($current_id == $menu->id){
                    $selected = "selected";
                }else{
                    $selected = "";
                }
                $selected = ($current_id == $menu->id)? "selected":"";
                $hasChild = $this->check_children($menu->id,$lang);
                if($hasChild > 0){
                    $menus .= "<option  $selected $current_id value=\"$menu->id\">$menu->name</option>";
                    $menus .= $this->get_menu($menu->id,$lang,$current_id);
                }else{
                    $menus .= "<option  $selected $current_id value=\"$menu->id\">$menu->name</option>";
                }
            }
            return $menus;
        }
        return false;

    }

    public function current_menu($current_id,$type){
        switch ($type){
            //type menu is category product
            case 1:
                $data = CategoryProduct::whereLang(app()->getLocale())->get();
                break;
            case 2:
                $data = Product::whereLang(app()->getLocale())->whereStatus(1)->get();
                break;
            case 3:
                $data = Category::whereLang(app()->getLocale())->whereStatus(1)->get();
                break;
            case 4:
                $data = Content::whereLang(app()->getLocale())->whereStatus(1)->get();
                break;
            case 5:
                $data = 0;
                break;
            case 6:
                $data = CategoryGallery::whereLang(app()->getLocale())->whereStatus(1)->get();
                break;
        }
        if($data !== 0){
            $title = __('admin.Contents');
            if($data){

                $listContent= "";
                $listContent = "
                            <label for=\"exampleSelect2\">$title</label>
                            <select  class=\"form-control m-input madule\" name=\"madule_id\"  data-lang=\"".app()->getLocale()."\" id=\"exampleSelect2\">
                                <option value=\"0\">".__('admin.Select')."</option>";

                foreach ($data as $row){
                    $field_name = ($type == 1) ? $row->name : $row->title;
                    $selected = $current_id == $row->id ? "selected":"";
                    $listContent .= "<option $selected  value='$row->id'>$field_name</option>";
                }
                $listContent .= "</select>";
            }
        }else{
            $listContent = 0;
        }

        return $listContent;





    }

}
