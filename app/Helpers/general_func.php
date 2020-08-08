<?php


use App\Category;
use App\CategoryFile;
use App\CategoryGallery;
use App\CategoryProduct;
use App\Comment;
use App\Menu;
use Hekmatinasser\Verta\Facades\Verta;


function check_children($parentId=0,$lang) {
    $result = Category::where('parent_id',$parentId)->where('lang',$lang)->count();
    return $result;
}

function check_comment($parent_id=0){
    $result = Comment::where('parent_id',$parent_id)->count();
    return $result;
}
function display_children($parentId=0,$lang) {
    $results = Category::where('parent_id',$parentId)->where('lang',$lang)->whereStatus(1)->get();
    $count = Category::where('parent_id',$parentId)->where('lang',$lang)->count();
    if ($count > 0)
    {

        $menu = "";

        foreach ($results as $result)
        {
            $has_children = check_children($result->id,$lang);
            if ($has_children > 0)
            {
                $menu .= "<li class=\"nav-item\">
					    <a class=\"nav-link\" href=\"".route('blog.content',['category'=>$result->slug])."\">" . $result->title. "<i data-feather=\"chevron-down\"></i></a>";
                $menu .= "<ul class='dropdown_menu'>";
                $menu .= display_children($result->id,$lang);
                $menu .= "</ul>";
                $menu .= "</li>";
            }
            else
            {
                $menu .= "<li class=\"nav-item\"><a class=\"nav-link\" href=\"".route('blog.content',['category'=>$result->slug])."\">&nbsp;" . $result->title . "</a></li>";
            }



        }

    }
    return $menu;
}

function check_child($parentId=0,$lang) {
    $result = CategoryGallery::where('parent_id',$parentId)->where('lang',$lang)->count();
    return $result;
}
function display_category_video($parentId=0,$lang) {
    $results = CategoryGallery::where('parent_id',$parentId)->where('lang',$lang)->whereStatus(1)->get();
    $count = CategoryGallery::where('parent_id',$parentId)->where('lang',$lang)->count();
    if ($count > 0)
    {

        $menu = "";

        foreach ($results as $result)
        {
            $has_children = check_child($result->id,$lang);
            if ($has_children > 0)
            {
                $menu .= "<li class=\"nav-item\">
					    <a class=\"nav-link\" href=\"".route('single_gallery',['categoryGallery'=>$result->slug])."\">" . $result->title. "<i data-feather=\"chevron-down\"></i></a>";
                $menu .= "<ul class='dropdown_menu'>";
                $menu .= display_category_video($result->id,$lang);
                $menu .= "</ul>";
                $menu .= "</li>";
            }
            else
            {
                $menu .= "<li class=\"nav-item\"><a class=\"nav-link\" href=\"".route('single_gallery',['categoryGallery'=>$result->slug])."\">&nbsp;" . $result->title . "</a></li>";
            }



        }

    }
    return $menu;
}


function getComment($parent_id=0,$content_id){
    $comments = Comment::whereContent_id($content_id)->whereParent_id($parent_id)->whereStatus(1)->get();
    if($comments->count() > 0){
        $cm = "";
        foreach($comments as $comment){
            $has_comment = check_comment($comment->id);
            if($has_comment > 0){
                $answer = Comment::whereParent_id($comment->id)->first();
                $date = Verta($comment->created_at);
                $answer_title = __('admin.Answer');
                $date_answer = Verta($answer->created_at);
                $cm .= "<li class=\"comment\">
										<div class=\"comment-body\">
											<footer class=\"comment-meta\">
												<div class=\"comment-author vcard\">
													<b class=\"fn\">$comment->name</b>
													<span class=\"says\">می گوید:</span>
												</div>

												<div class=\"comment-metadata\">
													<a href=\"#\">
														<span>$date</span>
													</a>
												</div>
											</footer>

											<div class=\"comment-content\">
												<p>$comment->text</p>
											</div>
										</div>

										<ol class=\"children\">
											<li class=\"comment\">
												<div class=\"comment-body\">
													<footer class=\"comment-meta\">
														<div class=\"comment-author vcard\">
															<b class=\"fn\">$answer->name</b>
													<span class=\"says\">می گوید:</span>
												</div>

												<div class=\"comment-metadata\">
													<a href=\"#\">
														<span>$date_answer</span>
													</a>
												</div>
											</footer>

											<div class=\"comment-content\">
												<p>$answer->text</p>
											</div>

												</div>
											</li>
										</ol>
									</li>";
            }else{
                $date=  Verta($comment->created_at);

                $cm .= "<li class=\"comment\">
										<div class=\"comment-body\">
											<footer class=\"comment-meta\">
												<div class=\"comment-author vcard\">									
													<b class=\"fn\">$comment->name</b>
													<span class=\"says\">می گوید:</span>
												</div>

												<div class=\"comment-metadata\">
													<a >
														<span>$date</span>
													</a>
												</div>
											</footer>

											<div class=\"comment-content\">
												<p> $comment->text</p>
											</div>

										</div>
									</li>";
            }
        }
        return $cm;
    }
}

function convertPersianToEnglish($string) {
    $persian = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
    $english = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];

    $output= str_replace($persian, $english, $string);
    return $output;
}


function check_childrenn($parentId=0,$lang) {
    $result = Menu::where('parent_id',$parentId)->where('lang',$lang)->count();
    return $result;
}
function display_category_menu($parentId=0,$lang,$step=0) {
    $results = Menu::where('parent_id',$parentId)->where('lang',$lang)->whereStatus(1)->get();
    $count = Menu::where('parent_id',$parentId)->where('lang',$lang)->count();
    if ($count > 0)
    {
        $menu = "";
        if($step == 0){
            foreach ($results as $result)
            {
                $has_children = check_childrenn($result->id,$lang);
                switch($step){
                    case 0:
                        $class_div = "";
                        $class_ul = "";
                        $class_li = "nav-item";
                        $class_a = "menu-main__link ";
                        break;
                    case 1:
                        $class_div = "dropdown-catagories dropdown-catagories--menu";
                        $class_ul = "dropdown-catagories__list";
                        $class_li = "nav-item";
                        $class_a ="dropdown-catagories__link dropdown-catagories__link--full";
                        break;
                    case 2:
                        $class_div = "cate-sub";
                        $class_ul = "cate-sub__list";
                        $class_li = "cate-sub__item";
                        $class_a ="cate-sub__link";
                }
                if ($has_children > 0)
                {

                    $menu .= "<li class=\"$class_li\">
					    <a class=\"$class_a \" href=\"".route('single_gallery',['categoryGallery'=>$result->slug])."\">" . $result->name. "</a>";
                    $menu .= "<div class=\"$class_div\">
                            <ul class=\"$class_ul\">";
                    $menu .= display_category_menu($result->id,$lang,$step++);
                    $menu .= "</ul></div>";
                    $menu .= "</li>";
                }
                else
                {
                    $menu .= "<li class=\"$class_li \">
                        <a class=\"$class_a\" href=\"".route('single_gallery',['categoryGallery'=>$result->slug])."\">&nbsp;" . $result->name . "</a>
                        </li>";
                }
            }
        }else{
            foreach ($results as $result)
            {
                $has_children = check_childrenn($result->id,$lang);
                switch($step){
                    case 0:
                        $class_div = "";
                        $class_ul = "";
                        $class_li = "menu-main__item";
                        $class_a = "menu-main__link ";
                        break;
                    case 1:
                        $class_div = "dropdown-catagories dropdown-catagories--menu";
                        $class_ul = "dropdown-catagories__list";
                        $class_li = "dropdown-catagories__item";
                        $class_a ="dropdown-catagories__link dropdown-catagories__link--full";
                        break;
                    case 2:
                        $class_div = "cate-sub";
                        $class_ul = "cate-sub__list";
                        $class_li = "cate-sub__item";
                        $class_a ="cate-sub__link";
                }
                if ($has_children > 0)
                {

                    $menu .= "<li class=\"$class_li\">
					    <a class=\"$class_a \" href=\"".route('single_gallery',['categoryGallery'=>$result->slug])."\">" . $result->name. "</a>";
                    $menu .= "<div class=\"$class_div\">
                            <ul class=\"$class_ul\">";
                    $menu .= display_category_menu($result->id,$lang,$step++);
                    $menu .= "</ul></div>";
                    $menu .= "</li>";
                }
                else
                {
                    $menu .= "<li class=\"$class_li \">
                        <a class=\"$class_a\" href=\"".route('single_gallery',['categoryGallery'=>$result->slug])."\">&nbsp;" . $result->name . "</a>
                        </li>";
                }
            }
        }


    }
    return $menu;
}

function menu($parent_id=0,$lang,$level=0,$step){
    $rows = Menu::where('parent_id',$parent_id)->where('lang',$lang)->whereStatus(1)->get();
    $count = Menu::where('parent_id',$parent_id)->where('lang',$lang)->count();
    if($count > 0){
        $menu ='';
        if($level == 0){
            foreach($rows as $row){
                $has_child = check_childrenn($row->id,$lang);
                switch($step){
                    case 1:
                        $class_div = "";
                        $class_ul = "";
                        $class_li = "nav-item";
                        $class_a = "nav-link";
                        break;
                    case 2:
                        $class_div = "dropdown-catagories dropdown-catagories--menu";
                        $class_ul = "dropdown-catagories__list";
                        $class_li = "dropdown-catagories__item";
                        $class_a ="dropdown-catagories__link dropdown-catagories__link--full";
                        break;
                    case 3:
                        $class_div = "cate-sub";
                        $class_ul = "cate-sub__list";
                        $class_li = "cate-sub__item";
                        $class_a ="cate-sub__link";
                }
                if($row->type == 0) {

                    $new_url = "<a class=\"$class_a\" href=\"/$row->lang\">$row->name</a>";
                }
                if($row->type == 1) {

                    $productCategory = CategoryProduct::whereId($row->madule_id)->pluck('slug');
                    $new_url = "<a class=\"$class_a\" href=\"/$row->lang/productcategory/$productCategory[0]\">$row->name</a>";
                }elseif ($row->type == 2) {

                     $category = Category::whereId($row->madule_id)->pluck('slug');
                    $new_url = "<a class=\"$class_a\" href=\"/$row->lang/categoty/$category[0]\">$row->name</a>";
                }elseif ($row->type == 3){

                     $category = Category::whereId($row->madule_id)->pluck('slug');
                     $new_url = "<a class=\"$class_a\" href=\"/$row->lang/category/$category[0]\">$row->name</a>";
                }
                elseif ($row->type == 6){
                    $category = CategoryGallery::whereId($row->madule_id)->pluck('slug');
                    $new_url = "<a class=\"$class_a\" href=\"/$row->lang/album/$category[0]\">$row->name</a>";
                }
                elseif ($row->type == 7){
                    $category = CategoryFile::whereId($row->madule_id)->pluck('slug');
                    $new_url = "<a class=\"$class_a\" href=\"/$row->lang/category_files/$category[0]\">$row->name</a>";
                }
                if($has_child > 0){

                    $menu .= "<li class=\"$class_li $level $step\">
                        
					    $new_url";
                    $menu .= "<div class=\"$class_div $level $step\">
                            <ul class=\"$class_ul\">";
                    $menu .= display_category_menu($row->id,$lang,$level,$step);
                    $menu .= "</ul></div>";
                    $menu .= "</li>";

                }else{
                    $menu .= "<li class=\"$class_li $level $step\">
                        $new_url
                        </li>";
                }

            }
        }
        return $menu;
    }
}

function set_url($id,$type){
        $new_url= "";
    switch($type){
        case 1:
            $productCategory = CategoryGallery::whereId($id)->pluck('slug');
            $new_url = route('product.category',['category'=>$productCategory]);
            break;
        case 2:
            $Category = Category::whereId($id)->pluck('slug');
            $new_url = route('blog.content',['category'=>$Category]);
            break;
        case 3:
            $productCategory = CategoryGallery::whereId($id)->pluck('slug');
            $new_url = route('product.category',['category'=>$productCategory]);
    }

    return $new_url;
}

function mobile_menu($parent_id=0,$lang,$level=0,$step){
    $rows = Menu::where('parent_id',$parent_id)->where('lang',$lang)->whereStatus(1)->get();
    $count = Menu::where('parent_id',$parent_id)->where('lang',$lang)->count();
    if($count > 0){
        $menu ='';
        if($level == 0){
            foreach($rows as $row){
                $has_child = check_childrenn($row->id,$lang);
                switch($step){
                    case 1:
                        $class_div = "";
                        $class_ul = "";
                        $class_li = "menu-mobile__item";
                        $class_a = "menu-mobile__link ";
                        break;
                    case 2:
                        $class_div = "dropdown-catagories dropdown-catagories--menu";
                        $class_ul = "dropdown-catagories__list";
                        $class_li = "dropdown-catagories__item";
                        $class_a ="dropdown-catagories__link dropdown-catagories__link--full";
                        break;
                    case 3:
                        $class_div = "cate-sub";
                        $class_ul = "cate-sub__list";
                        $class_li = "cate-sub__item";
                        $class_a ="cate-sub__link";
                }
                if($row->type == 0) {

                    $new_url = "<a class=\"$class_a\" href=\"/$row->lang\">$row->name</a>";
                }
                if($row->type == 1) {

                    $productCategory = CategoryProduct::whereId($row->madule_id)->pluck('slug');
                    $new_url = "<a class=\"$class_a\" href=\"/$row->lang/productcategory/$productCategory[0]\">$row->name</a>";
                }elseif ($row->type == 2) {

                    $category = Category::whereId($row->madule_id)->pluck('slug');
                    $new_url = "<a class=\"$class_a\" href=\"/$row->lang/categoty/$category[0]\">$row->name</a>";
                }elseif ($row->type == 3){

                    $category = Category::whereId($row->madule_id)->pluck('slug');
                    $new_url = "<a class=\"$class_a\" href=\"/$row->lang/category/$category[0]\">$row->name</a>";
                }
                elseif ($row->type == 7){
                    $category = CategoryFile::whereId($row->madule_id)->pluck('slug');
                    $new_url = "<a class=\"$class_a\" href=\"/$row->lang/category_files/$category[0]\">$row->name</a>";
                }
                if($has_child > 0){


                    $menu .= "<li class=\"$class_li $level $step\">
                        
					    $new_url";
                    $menu .= "<div class=\"$class_div $level $step\">
                            <ul class=\"$class_ul\">";
                    $menu .= display_category_menu($row->id,$lang,$level,$step);
                    $menu .= "</ul></div>";
                    $menu .= "</li>";

                }else{
                    $menu .= "<li class=\"$class_li $level $step\">
                        $new_url
                        </li>";
                }

            }
        }
        return $menu;
    }
}

