<?php

namespace App\Http\Controllers;

use App\Category;
use App\CategoryFile;
use App\CategoryGallery;
use App\Comment;
use App\Contact;
use App\Content;
use App\Gallery;
use App\Like;
use App\Rate;
use App\Slider;
use Carbon\Carbon;
use Hekmatinasser\Verta\Facades\Verta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $contents = Content::whereLang(app()->getLocale())->latest()->take(3)->get();
        $count_content = Content::whereLang(app()->getLocale())->get();
        $count_video = Gallery::whereType(2)->get();
        $about = Content::whereCategoryId(1)->whereId(3)->with('category')->first();
        $last_comment = Comment::whereParent_id(0)->whereStatus(1)->latest()->take(5)->get();
        $center_data = Content::whereCategory_id(8)->whereLang(app()->getLocale())->get();
        if(app()->getLocale() == "fa"){
            $center_data = Content::whereCategory_id(8)->whereLang(app()->getLocale())->get();
            $news = Category::whereSlug('اخبار')->with(['content'=>function($query){
                $query->take(10);
            }])->get();
            $articles = Content::whereCategory_id(3)->take(10)->get();
            $creatives = Content::whereCategory_id(9)->take(5)->get();
        }else{
            $center_data = Content::whereCategory_id(13)->whereLang(app()->getLocale())->get();
            $news = Category::whereSlug('News')->with(['content'=>function($query){
                $query->take(10);
            }])->get();
            $creatives = Content::whereCategory_id(10)->take(5)->get();
            $articles = Content::whereCategory_id(11)->take(10)->get();
        }

        $sliders = Slider::whereLang(app()->getLocale())->orderBy('order','desc')->first();

        return view('front.home',compact('about','sliders','contents','count_content','last_comment','count_video','center_data','creatives','articles','news'));

    }
    public function get_media($type = 1,$category_id)
    {

    }

    public function contact()
    {
        return view('front.contacts.contact');
    }
    public function album(CategoryGallery $categoryGallery)
    {
        $rows = Gallery::where('category_gallery_id',$categoryGallery->id)->paginate(8);
        $user = auth()->user();
        $album = $categoryGallery;
        return view('front.galleries.blog',compact('album','rows','user'));
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function blog(Category $category)
    {
        $categories = Category::whereLang(app()->getLocale())->get();
        $posts = Content::where('category_id',$category->id)->paginate(5);
        $popular_posts = Content::whereLang(app()->getLocale())->where('rate' , '>', 0)->whereCategory_id($category->id)->orderBy('rate','desc')->limit(5)->get();
        return view('front.contents.blog',compact('posts','category','categories','popular_posts'));

    }

    public function tag($tag)
    {
        return $tag;
        $posts = Content::where('category_id',$category->id)->paginate(10);
        return view('front.contents.blog',compact('posts','category'));

    }

    public function gallery(){
        $local = app()->getLocale();
        $galleries = CategoryGallery::where('lang',$local)->where('status',1)->paginate(12);
        return view('front.galleries.albums',compact('galleries'));
    }

    public function singleContent(Category $category,Content $content){
        //return $tags = Content::select('tags')->whereLang(app()->getLocale())->get();
        $view = $content->increment('viewCount');
        $popular_posts = Content::whereLang(app()->getLocale())->where('rate' , '>', 0)->where('id','<>' , $content->id)->whereCategory_id($category->id)->orderBy('rate','desc')->limit(3)->get();
        $comments = getComment(0,$content->id);
        $categories = Category::whereLang(app()->getLocale())->get();
        $next = Content::where('id','>',$content->id)->whereLang(app()->getLocale())->first();
        $prev = Content::where('id','<',$content->id)->where('category_id',$content->category_id)->whereLang(app()->getLocale())->first();
        return view('front.contents.single',compact('content','category','next','prev','categories','popular_posts','comments'));
    }

    public function productCategory(Request $request){
        return $request->all();
    }

    public function setLike(Request $request){
        $gallery = Gallery::find($request->gallery_id);
        $like = Like::create([
           'gallery_id'=>$request->gallery_id,
           'like'=>$request->like
        ]);
        if($like){
           $sum_like =  $gallery->increment('sumLike');
        }else{
            return response()->json([
               'status'=>2
            ]);
        }
        if($sum_like){
            return response()->json([
                'sum_like'=>$gallery->sumLike,
                'status'=>1
            ]);
        }

    }

    public function ajaxAddLike(Request $request){
        $data = Content::find($request->table_id);
        $like = Rate::create([
            'table_id'=>$request->table_id,
            'table'=>$request->table,

        ]);
        if($like){
            $sum_like =  $data->increment('rate');
        }else{
            return response()->json([
                'status'=>2
            ]);
        }
        if($sum_like){
            return response()->json([
                'rate'=>$data->rate,
                'status'=>1
            ]);
        }

    }

    public function add_contact(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'message'=>'required',
        ]);

        $contact = Contact::create([
            'name' => $request->name,
            'email' =>$request->email,
            'phone' =>$request->phone,
            'mobile' =>$request->mobile,
            'url' =>$request->url,
            'message' =>$request->message,
            'status'=>1,
        ]);
        if($contact){
            return redirect()->back()->with('message',[__('admin.create_s'),'success']);
        }
    }


    public function category_files(CategoryFile $category){
        return view('front.files.blog',compact('category'));

    }

    public function uploadImageSubject(Request $request)
    {
        $this->validate(request() , [
            'upload' => 'required|mimes:jpeg,png,bmp,gif,mp4,mpeg4|size:500000000',
        ]);
        $year = Carbon::now()->year;
        $imagePath = "/upload/cke/images/{$year}/";
        $file = request()->file('upload');
        $fileName = $file->getClientOriginalName();

        if(file_exists(public_path($imagePath . $fileName))){
            $fileName = Carbon::now()->timestamp . $fileName;
        }

        $file->move(public_path($imagePath) , $fileName);
        $url = $imagePath.$fileName;
        return "<script>window.parent.CKEDITOR.tools.callFunction(1,'{$url}','301')</script>";
    }



}
