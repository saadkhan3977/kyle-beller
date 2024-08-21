<?php

namespace App\Http\Controllers;
use App\Models\Event;
use App\Models\WeddingPlanningQuestionnaire;
use App\Models\WeddingReception;
use App\Models\WeddingCocktailHourHighlights;
use App\Models\WeddingCeremonyDetails;
use App\Models\WeddingBridalPartyIntroductions;
use App\Models\User;
use Auth;
use Session;
use Newsletter;
use DB;
use Hash;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
class FrontendController extends Controller
{
   
	
    public function index(Request $request)
    {
        return view('frontend.home');
    }
    
    public function wedding_planning(Request $request)
    {
        return view('frontend.pages.wedding_planning');
    }

    public function nonwedding_planning(Request $request)
    {
        return view('frontend.pages.nonwedding_planning');
        // return redirect()->route($request->user()->role);
    }
    
    public function submitEventForm(Request $request)
    {
        $validatedData = $request->validate([
            'type' => 'required|string|max:255',
            'event_date' => 'required|date',
            'venue' => 'required|string|max:255',
            'start_time' => 'required|string',
            'end_time' => 'required|string',
            'contact_person_name' => 'required|string|max:255',
            'contact' => 'required|string|max:20',
            'no_of_guest' => 'required|integer',
            'microphone' => 'required|string|in:Yes,No',
            'marital_status' => 'required|string|max:255',
            'speaker_name' => 'required|string|max:255',
            'speach_time' => 'required|string',
            'music_style' => 'required|string|max:255',
            'song_requests' => 'nullable|string',
            'additional_details' => 'nullable|string',
        ]);
        $data = $request->all();
        $data['user_id'] = Auth::user()->id;
        Event::create($data);
        return redirect()->back()->with('success', 'Form submitted successfully!');
    }
    
    public function submitWedForm(Request $request)
    {
        $validatedData = $request->validate([
            'bride' => 'required|string|max:255',
            'groom' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'altphone' => 'required|string|max:255',
            'timecall' => 'required',
            'email' => 'required',
            'wed_date' => 'required',
            'venue_rec' => 'required',
            'banq_ven' => 'required',
            'numberguest' => 'required',
            'contact_persom' => 'required',
            'contact_phone' => 'required',
            'ven_contact' => 'required',
            'ven_cont_person' => 'required',
            'guest_arrival' => 'required',
            'wed_party' => 'required',
            'photographer' => 'required',
            'videographer' => 'required',
            'setting' => 'required',
            'elevator' => 'required',
            'sound' => 'required',
            'service' => 'required',
            'officiantname' => 'required',
            'officiantphone' => 'required',
            'processionalsong' => 'required',
            'processionalsong2' => 'required',
            'recessionalsong' => 'required',
            'recessionalsong2' => 'required',
            'prelude' => 'required',
            'postlude' => 'required',
            'ceremony' => 'required',
            'starttime' => 'required',
            'endtime' => 'required',
            'coctail' => 'required',
            'power' => 'required',
            'coctailmusic' => 'required',
            'coctailstyle' => 'required',
            'cocktaildetails' => 'required',
            'recstartingtime' => 'required',
            'recendingtime' => 'required',
            'introduction' => 'required',
            'couple' => 'required',
            'newintro' => 'required',
            'specialintro' => 'required',
            'toast' => 'required',
            'toastby' => 'required',
            'speakeradd' => 'required',
            'speakeradd2' => 'required',
            'blessing' => 'required',
            'blessingby' => 'required',
            'dinnerstyle' => 'required',
            'dinnerserved' => 'required',
            'style' => 'required',
            'bridegroomdance' => 'required',
            'birdegroomsong' => 'required',
            'bridefatherdance' => 'required',
            'birdefathersong' => 'required',
            'groommotherdance' => 'required',
            'birdemothersong' => 'required',
            'bridalpartdance' => 'required',
            'birdalparysong' => 'required',
            'cakecutting' => 'required',
            'cakesong' => 'required',
            'bonquettoss' => 'required',
            'banquetsong' => 'required',
            'gartertoss' => 'required',
            'songgarter' => 'required',
            'songgarterlad' => 'required',
            'lastdance' => 'required',
            'lastsong' => 'required',
            'specialityexit' => 'required',
            'specialexitdet' => 'required',
            'recdetails' => 'required',
            'parentsbride' => 'required',
            'parentsgroom' => 'required',
            'usher' => 'required',
            'bridesmaid' => 'required',
            'bridesmaid2' => 'required',
            'bridesmaid3' => 'required',
            'bridesmaid4' => 'required',
            'bridesmaid5' => 'required',
            'bridesmaid6' => 'required',
            'bridesmaid7' => 'required',
            'bridesmaid8' => 'required',
            'bridesmaid9' => 'required',
            'bridesmaid10' => 'required',
            'mainhonor' => 'required',
            'flowergirl' => 'required',
            'bridegroom' => 'required',
            'bridal_pary_specialintro' => 'required',
            'songsnot' => 'required',
            'songtobe' => 'required',
        ]);
        $data = WeddingPlanningQuestionnaire::create([
            'user_id' => Auth::user()->id,
            'bride' => $request->bride,
            'groom' => $request->groom,
            'phone' => $request->phone,
            'altphone' => $request->altphone,
            'timecall' => $request->timecall,
            'email' => $request->email,
            'wed_date' => $request->wed_date,
            'venue_rec' => $request->venue_rec,
            'banq_ven' => $request->banq_ven,
            'numberguest' => $request->numberguest,
            'contact_persom' => $request->contact_persom,
            'contact_phone' => $request->contact_phone,
            'ven_contact' => $request->ven_contact,
            'ven_cont_person' => $request->ven_cont_person,
            'guest_arrival' => $request->guest_arrival,
            'wed_party' => $request->wed_party,
            'photographer' => $request->photographer,
            'videographer' => $request->videographer,
            'setting' => $request->setting,
            'elevator' => $request->elevator,
            'songsnot' => $request->songsnot,
            'songtobe' => $request->songtobe,
        ]);


        WeddingReception::create([
            'wedding_planning_id' => $data->id,
            'recstartingtime' => $request->recstartingtime,
            'recendingtime' => $request->recendingtime,
            'introduction' => $request->introduction,
            'couple' => $request->couple,
            'newintro' => $request->newintro,
            'specialintro' => $request->specialintro,
            'toast' => $request->toast,
            'toastby' => $request->toastby,
            'speakeradd' => $request->speakeradd,
            'speakeradd2' => $request->speakeradd2,
            'blessing' => $request->blessing,
            'blessingby' => $request->blessingby,
            'dinnerstyle' => $request->dinnerstyle,
            'dinnerserved' => $request->dinnerserved,
            'style' => $request->style,
            'bridegroomdance' => $request->bridegroomdance,
            'birdegroomsong' => $request->birdegroomsong,
            'bridefatherdance' => $request->bridefatherdance,
            'birdefathersong' => $request->birdefathersong,
            'groommotherdance' => $request->groommotherdance,
            'birdemothersong' => $request->birdemothersong,
            'bridalpartdance' => $request->bridalpartdance,
            'birdalparysong' => $request->birdalparysong,
            'cakecutting' => $request->cakecutting,
            'cakesong' => $request->cakesong,
            'bonquettoss' => $request->bonquettoss,
            'banquetsong' => $request->banquetsong,
            'gartertoss' => $request->gartertoss,
            'songgarter' => $request->songgarter,
            'songgarterlad' => $request->songgarterlad,
            'lastdance' => $request->lastdance,
            'lastsong' => $request->lastsong,
            'specialityexit' => $request->specialityexit,
            'specialexitdet' => $request->specialexitdet,
            'recdetails' => $request->recdetails,
        ]);
        WeddingCocktailHourHighlights::create([
            'wedding_planning_id' => $data->id,
            'starttime' => $request->starttime,
            'endtime' => $request->endtime,
            'coctail' => $request->coctail,
            'power' => $request->power,
            'coctailmusic' => $request->coctailmusic,
            'coctailstyle' => $request->coctailstyle,
            'cocktaildetails' => $request->cocktaildetails,
        ]);
        WeddingCeremonyDetails::create([
            'wedding_planning_id' => $data->id,
            'sound' => $request->sound, 
            'service' => $request->service, 
            'officiantname' => $request->officiantname, 
            'officiantphone' => $request->officiantphone, 
            'processionalsong' => $request->processionalsong, 
            'processionalsong2' => $request->processionalsong2, 
            'processionalsong3' => $request->processionalsong3, 
            'recessionalsong' => $request->recessionalsong, 
            'recessionalsong2' => $request->recessionalsong2, 
            'recessionalsong3' => $request->recessionalsong3, 
            'prelude' => $request->prelude, 
            'postlude' => $request->postlude, 
            'ceremony' => $request->ceremony, 
        ]);
        WeddingBridalPartyIntroductions::create([
            'wedding_planning_id' => $data->id,
            'parentsbride' => $request->parentsbride,
            'parentsgroom' => $request->parentsgroom,
            'usher' => $request->usher,
            'bridesmaid' => $request->bridesmaid,
            'bridesmaid2' => $request->bridesmaid2,
            'bridesmaid3' => $request->bridesmaid3,
            'bridesmaid4' => $request->bridesmaid4,
            'bridesmaid5' => $request->bridesmaid5,
            'bridesmaid6' => $request->bridesmaid6,
            'bridesmaid7' => $request->bridesmaid7,
            'bridesmaid8' => $request->bridesmaid8,
            'bridesmaid9' => $request->bridesmaid9,
            'bridesmaid10' => $request->bridesmaid10,
            'mainhonor' => $request->mainhonor,
            'flowergirl' => $request->flowergirl,
            'bridegroom' => $request->bridegroom,
            'bridal_pary_specialintro' => $request->bridal_pary_specialintro,
        ]);
        return redirect()->back()->with('success', 'Form submitted successfully!');
    }
	
	public function get_variant($id)
	{
		return $data = ProductVaration::find($id);
	}

    public function home(){
        $featured=Product::where('status','active')->orderBy('price','DESC')->limit(2)->get();
        $posts=Post::where('status','active')->orderBy('id','DESC')->limit(3)->get();
        $banners=Banner::where('status','active')->limit(3)->orderBy('id','DESC')->get();
        // return $banner;
        $products=Product::where('status','active')->orderBy('id','DESC')->limit(8)->get();
        $category=Category::where('status','active')->where('is_parent',1)->orderBy('title','ASC')->get();
        // return $category;
        return view('frontend.index')
                ->with('featured',$featured)
                ->with('posts',$posts)
                ->with('banners',$banners)
                ->with('product_lists',$products)
                ->with('category_lists',$category); 
    }   

    public function aboutUs(){
        return view('frontend.pages.about-us');
    }
    
    public function services()
    {
        return view('frontend.pages.services');
    }

    public function contact(){
        return view('frontend.pages.contact');
    }

    public function productDetail($slug){
         $product_detail= Product::getProductBySlug($slug);
        // dd($product_detail);
        return view('frontend.pages.product_detail')->with('product_detail',$product_detail);
    }

    public function productGrids(){
        $products=Product::query();
        
        if(!empty($_GET['category'])){
            $slug=explode(',',$_GET['category']);
            // dd($slug);
            $cat_ids=Category::select('id')->whereIn('slug',$slug)->pluck('id')->toArray();
            // dd($cat_ids);
            $products->whereIn('cat_id',$cat_ids);
            // return $products;
        }
        if(!empty($_GET['brand'])){
            $slugs=explode(',',$_GET['brand']);
            $brand_ids=Brand::select('id')->whereIn('slug',$slugs)->pluck('id')->toArray();
            return $brand_ids;
            $products->whereIn('brand_id',$brand_ids);
        }
        if(!empty($_GET['sortBy'])){
            if($_GET['sortBy']=='title'){
                $products=$products->where('status','active')->orderBy('title','ASC');
            }
            if($_GET['sortBy']=='price'){
                $products=$products->orderBy('price','ASC');
            }
        }

        if(!empty($_GET['price'])){
            $price=explode('-',$_GET['price']);
            // return $price;
            // if(isset($price[0]) && is_numeric($price[0])) $price[0]=floor(Helper::base_amount($price[0]));
            // if(isset($price[1]) && is_numeric($price[1])) $price[1]=ceil(Helper::base_amount($price[1]));
            
            $products->whereBetween('price',$price);
        }

        $recent_products=Product::where('status','active')->orderBy('id','DESC')->limit(3)->get();
        // Sort by number
        if(!empty($_GET['show'])){
            $products=$products->where('status','active')->paginate($_GET['show']);
        }
        else{
            $products=$products->where('status','active')->paginate(9);
        }
        // Sort by name , price, category

      
        return view('frontend.pages.product-grids')->with('products',$products)->with('recent_products',$recent_products);
    }
    public function productLists(){
        $products=Product::query();
        
        if(!empty($_GET['category'])){
            $slug=explode(',',$_GET['category']);
            // dd($slug);
            $cat_ids=Category::select('id')->whereIn('slug',$slug)->pluck('id')->toArray();
            // dd($cat_ids);
            $products->whereIn('cat_id',$cat_ids)->paginate;
            // return $products;
        }
        if(!empty($_GET['brand'])){
            $slugs=explode(',',$_GET['brand']);
            $brand_ids=Brand::select('id')->whereIn('slug',$slugs)->pluck('id')->toArray();
            return $brand_ids;
            $products->whereIn('brand_id',$brand_ids);
        }
        if(!empty($_GET['sortBy'])){
            if($_GET['sortBy']=='title'){
                $products=$products->where('status','active')->orderBy('title','ASC');
            }
            if($_GET['sortBy']=='price'){
                $products=$products->orderBy('price','ASC');
            }
        }

        if(!empty($_GET['price'])){
            $price=explode('-',$_GET['price']);
            // return $price;
            // if(isset($price[0]) && is_numeric($price[0])) $price[0]=floor(Helper::base_amount($price[0]));
            // if(isset($price[1]) && is_numeric($price[1])) $price[1]=ceil(Helper::base_amount($price[1]));
            
            $products->whereBetween('price',$price);
        }

        $recent_products=Product::where('status','active')->orderBy('id','DESC')->limit(3)->get();
        // Sort by number
        if(!empty($_GET['show'])){
            $products=$products->where('status','active')->paginate($_GET['show']);
        }
        else{
            $products=$products->where('status','active')->paginate(16);
        }
        // Sort by name , price, category

      
        return view('frontend.pages.product-lists')->with('products',$products)->with('recent_products',$recent_products);
    }
    public function productFilter(Request $request){
            $data= $request->all();
            // return $data;
            $showURL="";
            if(!empty($data['show'])){
                $showURL .='&show='.$data['show'];
            }

            $sortByURL='';
            if(!empty($data['sortBy'])){
                $sortByURL .='&sortBy='.$data['sortBy'];
            }

            $catURL="";
            if(!empty($data['category'])){
                foreach($data['category'] as $category){
                    if(empty($catURL)){
                        $catURL .='&category='.$category;
                    }
                    else{
                        $catURL .=','.$category;
                    }
                }
            }

            $brandURL="";
            if(!empty($data['brand'])){
                foreach($data['brand'] as $brand){
                    if(empty($brandURL)){
                        $brandURL .='&brand='.$brand;
                    }
                    else{
                        $brandURL .=','.$brand;
                    }
                }
            }
            // return $brandURL;

            $priceRangeURL="";
            if(!empty($data['price_range'])){
                $priceRangeURL .='&price='.$data['price_range'];
            }
            if(request()->is('e-shop.loc/product-grids')){
                return redirect()->route('product-grids',$catURL.$brandURL.$priceRangeURL.$showURL.$sortByURL);
            }
            else{
                return redirect()->route('product-lists',$catURL.$brandURL.$priceRangeURL.$showURL.$sortByURL);
            }
    }
    public function productSearch(Request $request){
        $recent_products=Product::where('status','active')->orderBy('id','DESC')->limit(3)->get();
        $products=Product::orwhere('title','like','%'.$request->search.'%')
                    ->orwhere('slug','like','%'.$request->search.'%')
                    ->orwhere('description','like','%'.$request->search.'%')
                   // ->orwhere('summary','like','%'.$request->search.'%')
                    ->orwhere('price','like','%'.$request->search.'%')
                    ->orderBy('id','DESC')
                    ->paginate('9');
        return view('frontend.pages.product-lists')->with('products',$products)->with('recent_products',$recent_products);
    }

    public function productBrand(Request $request){
        $products=Brand::getProductByBrand($request->slug);
        $recent_products=Product::where('status','active')->orderBy('id','DESC')->limit(3)->get();
        if(request()->is('e-shop.loc/product-grids')){
            return view('frontend.pages.product-grids')->with('products',$products->products)->with('recent_products',$recent_products);
        }
        else{
            return view('frontend.pages.product-lists')->with('products',$products->products)->with('recent_products',$recent_products);
        }

    }
    public function productCat(Request $request){
        $products=Category::getProductByCat($request->slug);
        // return $products;
        $recent_products=Product::where('status','active')->orderBy('id','DESC')->limit(3)->get();

        if(request()->is('e-shop.loc/product-grids')){
            return view('frontend.pages.product-grids')->with('products',$products->products)->with('recent_products',$recent_products);
        }
        else{
            return view('frontend.pages.product-lists')->with('products',$products)->with('recent_products',$recent_products);
        }

    }
    public function productSubCat(Request $request){
       
		$products=SubCategory::getProductBySubCat($request->sub_slug);
        // return $products;
        $recent_products=Product::where('status','active')->orderBy('id','DESC')->limit(3)->get();

        if(request()->is('e-shop.loc/product-grids')){
            return view('frontend.pages.product-grids')->with('products',$products->sub_products)->with('recent_products',$recent_products);
        }
        else{
            return view('frontend.pages.product-lists')->with('products',$products)->with('recent_products',$recent_products);
        }

    }
	
	public function productChildCat(Request $request)
	{
		$category =  ChildCategory::where('slug',$request->child_slug)->first();
		
		
		//return $request->child_slug;
        $products= Product::where('child_cat_id',$category->id)->paginate(20);
        // return $products[0]->sub_products;
        $recent_products=Product::where('status','active')->orderBy('id','DESC')->limit(3)->get();

        if(request()->is('e-shop.loc/product-grids')){
            return view('frontend.pages.product-grids')->with('products',$products)->with('recent_products',$recent_products);
        }
        else{
            return view('frontend.pages.product-lists')->with('products',$products)->with('recent_products',$recent_products);
        }

    }

    public function blog(){
        $post=Post::query();
        
        if(!empty($_GET['category'])){
            $slug=explode(',',$_GET['category']);
            // dd($slug);
            $cat_ids=PostCategory::select('id')->whereIn('slug',$slug)->pluck('id')->toArray();
            return $cat_ids;
            $post->whereIn('post_cat_id',$cat_ids);
            // return $post;
        }
        if(!empty($_GET['tag'])){
            $slug=explode(',',$_GET['tag']);
            // dd($slug);
            $tag_ids=PostTag::select('id')->whereIn('slug',$slug)->pluck('id')->toArray();
            // return $tag_ids;
            $post->where('post_tag_id',$tag_ids);
            // return $post;
        }

        if(!empty($_GET['show'])){
            $post=$post->where('status','active')->orderBy('id','DESC')->paginate($_GET['show']);
        }
        else{
            $post=$post->where('status','active')->orderBy('id','DESC')->paginate(9);
        }
        // $post=Post::where('status','active')->paginate(8);
        $rcnt_post=Post::where('status','active')->orderBy('id','DESC')->limit(3)->get();
        return view('frontend.pages.blog')->with('posts',$post)->with('recent_posts',$rcnt_post);
    }

    public function blogDetail($slug){
        $post=Post::getPostBySlug($slug);
        $rcnt_post=Post::where('status','active')->orderBy('id','DESC')->limit(3)->get();
        // return $post;
        return view('frontend.pages.blog-detail')->with('post',$post)->with('recent_posts',$rcnt_post);
    }

    public function blogSearch(Request $request){
        // return $request->all();
        $rcnt_post=Post::where('status','active')->orderBy('id','DESC')->limit(3)->get();
        $posts=Post::orwhere('title','like','%'.$request->search.'%')
            ->orwhere('quote','like','%'.$request->search.'%')
            ->orwhere('summary','like','%'.$request->search.'%')
            ->orwhere('description','like','%'.$request->search.'%')
            ->orwhere('slug','like','%'.$request->search.'%')
            ->orderBy('id','DESC')
            ->paginate(8);
        return view('frontend.pages.blog')->with('posts',$posts)->with('recent_posts',$rcnt_post);
    }

    public function blogFilter(Request $request){
        $data=$request->all();
        // return $data;
        $catURL="";
        if(!empty($data['category'])){
            foreach($data['category'] as $category){
                if(empty($catURL)){
                    $catURL .='&category='.$category;
                }
                else{
                    $catURL .=','.$category;
                }
            }
        }

        $tagURL="";
        if(!empty($data['tag'])){
            foreach($data['tag'] as $tag){
                if(empty($tagURL)){
                    $tagURL .='&tag='.$tag;
                }
                else{
                    $tagURL .=','.$tag;
                }
            }
        }
        // return $tagURL;
            // return $catURL;
        return redirect()->route('blog',$catURL.$tagURL);
    }

    public function blogByCategory(Request $request){
        $post=PostCategory::getBlogByCategory($request->slug);
        $rcnt_post=Post::where('status','active')->orderBy('id','DESC')->limit(3)->get();
        return view('frontend.pages.blog')->with('posts',$post->post)->with('recent_posts',$rcnt_post);
    }

    public function blogByTag(Request $request){
        // dd($request->slug);
        $post=Post::getBlogByTag($request->slug);
        // return $post;
        $rcnt_post=Post::where('status','active')->orderBy('id','DESC')->limit(3)->get();
        return view('frontend.pages.blog')->with('posts',$post)->with('recent_posts',$rcnt_post);
    }

    // Login
    public function login(){
        return view('frontend.pages.login');
    }
    public function loginSubmit(Request $request){
        $data= $request->all();
        if(Auth::attempt(['email' => $data['email'], 'password' => $data['password'],'status'=>'active'])){
            Session::put('user',$data['email']);
            request()->session()->flash('success','Successfully login');
            return redirect()->route('home');
        }
        else{
            request()->session()->flash('error','Invalid email and password pleas try again!');
            return redirect()->back();
        }
    }

    public function logout(){
        Session::forget('user');
        Auth::logout();
        request()->session()->flash('success','Logout successfully');
        return back();
    }

    public function register(){
        return view('frontend.pages.register');
    }
    public function registerSubmit(Request $request){
        // return $request->all();
        $this->validate($request,[
            'name'=>'string|required|min:2',
            'email'=>'string|required|unique:users,email',
            'password'=>'required|min:6|confirmed',
        ]);
        $data=$request->all();
        // dd($data);
        $check=$this->create($data);
        Session::put('user',$data['email']);
        if($check){
            request()->session()->flash('success','Successfully registered');
            return redirect()->route('home');
        }
        else{
            request()->session()->flash('error','Please try again!');
            return back();
        }
    } 
    public function create(array $data){
        return User::create([
            'name'=>$data['name'],
            'email'=>$data['email'],
            'password'=>Hash::make($data['password']),
            'status'=>'active'
            ]);
    }
    // Reset password
    public function showResetForm(){
        return view('auth.passwords.reset');
    }

    public function subscribe(Request $request){
        if(! Newsletter::isSubscribed($request->email)){
                Newsletter::subscribePending($request->email);
                if(Newsletter::lastActionSucceeded()){
                    request()->session()->flash('success','Subscribed! Please check your email');
                    return redirect()->route('home');
                }
                else{
                    Newsletter::getLastError();
                    return back()->with('error','Something went wrong! please try again');
                }
            }
            else{
                request()->session()->flash('error','Already Subscribed');
                return back();
            }
    }
    
}
