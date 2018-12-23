<?php
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Input;
use DB;
use Excel;
use Auth;
use Carbon\Carbon;
use App\User;
use App\Role;
use App\Staff;
use App\Doctor;
use App\Course;
use App\Employee;
use App\Student;
use Redirect;
class adminController extends Controller
{

//get
    public function admin_dashboard()
    {

    	$suppliers = DB::table('suppliers_table')->paginate(500000);
    	$items = DB::table('items')->paginate(500000); 
    	$inventory = DB::table('inventory_group')
    	->join('users', 'users.id', '=', 'inventory_group.user_id')
    	->join('suppliers_table', 'suppliers_table.id', '=', 'inventory_group.supplier_id')
		->where('inventory_type', 'Warehouse')
    	->paginate(500000);


          return view('layouts.admin.Admin_Dashboard',compact('items', 'suppliers', 'inventory'));

    }


    public function inventory_out()
    {

    	$suppliers = DB::table('suppliers_table')->paginate(500000);
    	$items = DB::table('items')->paginate(50000);
    	$inventory = DB::table('inventory_group')
    	->join('users', 'users.id', '=', 'inventory_group.user_id')
    	->join('suppliers_table', 'suppliers_table.id', '=', 'inventory_group.supplier_id')
    	->join('branch', 'branch.id', '=', 'inventory_group.branch_id')
    	->where('inventory_type', 'Branch')
    	->paginate(500000);

    	$items = DB::table('items')->paginate(500000);
    	$branch = DB::table('branch')->paginate(500000);

          return view('layouts.admin.inventory_out',compact('items', 'suppliers', 'inventory', 'branch'));

    }




    public function inventory_balance()
    {

    	$suppliers = DB::table('suppliers_table')->get();
    	$items = DB::table('items')->get();
    	$inventory = DB::table('inventory_group')
    	->join('users', 'users.id', '=', 'inventory_group.user_id')
    	->join('suppliers_table', 'suppliers_table.id', '=', 'inventory_group.supplier_id')
    	->join('branch', 'branch.id', '=', 'inventory_group.branch_id')
    	->where('inventory_type', 'Branch')
    	->paginate(500000);


    	$inventory_list = DB::table('inventory_group')
	        	->join('inventory_items', 'inventory_group.id', '=', 'inventory_items.inventory_id')
		    	->join('items', 'items.id', '=', 'inventory_items.item_id')
		    	->join('branch', 'inventory_group.branch_id', '=', 'branch.id')
		    	->get();

		$branch_groupings = DB::table('inventory_group')
				->select('inventory_group.branch_id', 'branch.branch_name')
		    	->join('branch', 'inventory_group.branch_id', '=', 'branch.id')
		    	->groupBy('inventory_group.branch_id' , 'branch.branch_name')
		    	->get();


    	$item_cat = DB::table('items')
    			->select('category1')
                ->groupBy('category1')
                ->get();
        $item_cat2 = DB::table('items')
    			->select('category2')
                ->groupBy('category2')
                ->get();

        $item_cat3 = DB::table('items')
    			->select('category3')
                ->groupBy('category3')
                ->get();

    	$items = DB::table('items')->get();
    	$branch = DB::table('branch')->get();

          return view('layouts.admin.inventory_balance',compact('items', 'suppliers', 'inventory', 'branch','item_cat','item_cat2','item_cat3','inventory_list', 'branch_groupings'));
    }

    public function inventory_transfer()
    {
    	$suppliers = DB::table('suppliers_table')->get();
    	$items = DB::table('items')->get();
    	$inventory = DB::table('inventory_group')
    	->join('users', 'users.id', '=', 'inventory_group.user_id')
    	->join('suppliers_table', 'suppliers_table.id', '=', 'inventory_group.supplier_id')
    	->join('branch', 'branch.id', '=', 'inventory_group.branch_id')
    	->where('inventory_type', 'Branch')
    	->get();

    	$items = DB::table('items')->get();
    	$branch = DB::table('branch')->get();

        return view('layouts.admin.inventory_transfer',compact('items', 'suppliers', 'inventory', 'branch'));

    }






	//post
    public function postInventory(Request $request)
    {
		if ($request->ajax())
    	{
	        try{
	        $inventory = DB::table('inventory_group');
	        $datenow = Carbon::now();
	        $uid = Auth::user()->id;
	        $count = $inventory->count() + 1;
	        $items = json_decode($request->items,true);
	        $inv_type = "Warehouse";
	        // var_dump($items[0]['itemsArr'][0]['item_id']); die();
	         $inventory_id  = $inventory->insertGetId([
	         'user_id' => $uid,
	         'supplier_id' => $request->supplier,
	         'date_received' => $datenow->toDateTimeString(),
	         'date_created' => $datenow->toDateTimeString(),
	         'remarks' => $request->remarks,
	         'inventory_type' => $inv_type,
	         'inventory_no' =>  'stk' . '-' . $uid. '-' . $count
	            ]);

			 		
			 		foreach($items as $key =>$item)
					{
					    $arrData = array( 
					        'inventory_id'=> $inventory_id,
					        'item_id'  => $item['itemsArr'][0]['item_id'], 
					        'quantity' =>  $item['itemsArr'][1]['quantity'],
					        'original_quantity' =>  $item['itemsArr'][1]['quantity'],
					        'remarks' =>  $item['itemsArr'][2]['remarks']

					    );
					    DB::table('inventory_items')->insert($arrData);
					}
			     
	                return response()->json('success', 200); 
	            }
	            catch (\Exception $e) {
	        return $e->getMessage();
	        }
	    }
    }

    public function postInventoryBranch(Request $request)
    {
		if ($request->ajax())
    	{
	        try{
	        $inventory = DB::table('inventory_group');
	        $datenow = Carbon::now();
	        $uid = Auth::user()->id;
	        $count = $inventory->count() + 1;
	        $items = json_decode($request->items,true);

	        $inv_type = "Branch";
	        // var_dump($items[0]['itemsArr'][0]['item_id']); die();
	         $inventory_id  = $inventory->insertGetId([
	         'user_id' => $uid,
	         'supplier_id' => $request->supplier,
	         'date_received' => $datenow->toDateTimeString(),
	         'date_created' => $datenow->toDateTimeString(),
	         'remarks' => $request->remarks,
	         'inventory_type' => $inv_type,
	         'branch_id' => $request->branch,
	         'inventory_no' =>  'INV' . '-' . $uid. '-' . $count
	            ]);

			 		
			 		foreach($items as $key =>$item)
					{
					    $arrData = array( 
					        'inventory_id'=> $inventory_id,
					        'item_id'  => $item['itemsArr'][0]['item_id'], 
					        'quantity' =>  $item['itemsArr'][1]['quantity'],
					        'remarks' =>  $item['itemsArr'][2]['remarks']

					    );
					    DB::table('inventory_items')->insert($arrData);
					}
			     
	                return response()->json('success', 200); 
	            }
	            catch (\Exception $e) {
	        return $e->getMessage();
	        }
	    }
    }

    public function getInventoryList(Request $request){
    	if ($request->ajax())
    	{
	        try{
	        	$inventory_list = DB::table('inventory_group')
	        	->join('inventory_items', 'inventory_group.id', '=', 'inventory_items.inventory_id')
		    	->join('items', 'items.id', '=', 'inventory_items.item_id')
		    	->where('inventory_group.id', $request->id)
		    	->get();
			     
	                return response()->json($inventory_list, 200); 
	            }
	            catch (\Exception $e) {
	        return $e->getMessage();
	        }
	    }
    }

    public function getBranchStock(Request $request){
    	if ($request->ajax())
    	{
	        try{
	        	$inventory_list = DB::table('inventory_items')
	        	->join('inventory_group', 'inventory_group.id', '=', 'inventory_items.inventory_id')
		    	->join('items', 'items.id', '=', 'inventory_items.item_id')
		    	->where('inventory_group.branch_id', $request->branch_id)
		    	->get();
			     
	                return response()->json($inventory_list, 200); 
	            }
	            catch (\Exception $e) {
	        return $e->getMessage();
	        }
	    }
    }

    public function getSearchItems_balance(Request $request){
    	if ($request->ajax())
    	{
	        try{
	        	$inventory_list = DB::table('inventory_items')
	        	->join('inventory_group', 'inventory_group.id', '=', 'inventory_items.inventory_id')
		    	->join('items', 'items.id', '=', 'inventory_items.item_id')
		    	->join('branch', 'inventory_group.branch_id', '=', 'branch.id')
		    	->where(function($query ) use ($request)
				{
				        if($request->branch !== null)
					        $query->WhereIn( 'branch_id', $request->branch );
											
				})
				->where(function($query ) use ($request)
				{
				        if($request->cat1 !== null)
					        $query->WhereIn( 'category1', $request->cat1 );
											
				})
				->where(function($query ) use ($request)
				{
				        if($request->cat2 !== null)
					        $query->WhereIn( 'category2', $request->cat2 );
											
				})
				->where(function($query ) use ($request)
				{
				        if($request->cat3 !== null)
					        $query->WhereIn( 'category3', $request->cat3 );
											
				})
		    	->get();
			     dd($inventory_list); die();
	                return response()->json($inventory_list, 200); 
	            }
	            catch (\Exception $e) {
	        return $e->getMessage();
	        }
	    }
    }
}