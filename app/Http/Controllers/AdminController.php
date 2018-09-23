<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Category;

use App\PriceModel;

use App\PriceRating;

use App\Location;

use App\User;

use App\Listing;

class AdminController extends Controller
{
		public function __construct()
    {
        $this->middleware('admin');
    }


	// public function __construct()
 //    {
 //        $this->middleware('auth');
 //    }

	public function index()
	
	{
		$categories = Category::all();
		$pricingmodel = PriceModel::all();
		$pricingrate = PriceRating::all();
		$location = Location::all();
		
		return view('auth.Admin', 
			['categories'=>$categories,
			'pricing_models'=>$pricingmodel,
			'pricing_rates'=>$pricingrate,
			'locations'=>$location,
			]);
	
	}

	// Add Modules
	// Add a categrory
	public function AddCateg(Request $request)
	
	{
		$categories = new Category;

        $categories->name = $request->name;
       	$categories->save();

       	return \Redirect::to('/admin');

	
	}
	// Add location
	public function AddLocation(Request $request)
	
	{
		$locations = new Location;
        $locations->name = $request->name;
       	$locations->save();

       	return \Redirect::to('/admin');

	
	}

	// Add a Price rate
	public function AddPricing_Rate(Request $request)
	
	{
		$pricingrate = new PriceRating;
        $pricingrate->name = $request->name;
        $pricingrate->model_ID = $request->pricing_models;
       	$pricingrate->save();

       	return \Redirect::to('/admin');

	
	}

	public function AddPricing_Model(Request $request)
	
	{
		$pricingmodel = new PriceModel;
        $pricingmodel->name = $request->name;
       	$pricingmodel->save();

       	return \Redirect::to('/admin');
	}

	public function deletePrice_model($id)
	
	{
		$pricing_model=PriceModel::find($id);
        $pricing_model->delete();

        return \Redirect::to('/admin');
	
	}

	public function users_report()
	
	{
		$user = User::get()->count();
		// $adminuser = User::get()->where(Auth::user()->admin)->count();
		// $listing = Listing::get()->count();
		// $location = Location::get()->count();
		
		return view('admin.UsersReport', 
			['user'=>$user,
			]);
	

	}

	public function listing_report()
	
	{
		// $user = Listing::get()->count();
		// $adminuser = User::get()->where(Auth::user()->admin)->count();
		$listing = Listing::get()->count();
		// $location = Location::get()->count();
		
		return view('admin.ListingsReport', 
			['listing'=>$listing,
			]);
	

	}
		public function location_report()
	
	{
		// $user = Listing::get()->count();
		// $adminuser = User::get()->where(Auth::user()->admin)->count();
		// $listing = Listing::get()->count();
		$location = Location::get()->count();
		
		return view('admin.LocationReport', 
			['location'=>$location,
			]);
	

	}

	public function category_report()
	
	{
		// $user = Listing::get()->count();
		// $adminuser = User::get()->where(Auth::user()->admin)->count();
		// $listing = Listing::get()->count();
		$category = Category::get()->count();
		
		return view('admin.CategoryReport', 
			['category'=>$category,
			]);
	

	}

		public function report()
	
	{

		
		return view('admin.reports');
	

	}







	// Delete Modules
	// Delete a category 
	public function deleteCateg($id)
	
	{
		$categories=Category::find($id);
        $categories->delete();

        return \Redirect::to('/admin');
	
	}
	// Delete a location
	public function deleteLocal($id)
	
	{
		$locations=Location::find($id);
        $locations->delete();

        return \Redirect::to('/admin');
	
	}
	// Delete a Price Rate
	public function deletePrice_rate($id)
	
	{
		$pricing_rate=PriceRating::find($id);
        $pricing_rate->delete();

        return \Redirect::to('/admin');
	
	}

	public function view()
	{
		return \Redirect::to('/report');
	}
}

