<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\Complain;
use App\Budget;

class AdminController extends Controller
{
    //
    public function index(){
        $accId=session()->get('uname');
        //return view('user.userprofile');

        $acc = Admin::where('uname',$accId)
        ->get();
        return view('admin.index')->with('profiles', $acc);

    	//return view('admin.index');
    }

    public function create(){

    	return view('admin.create_emp');
    }
    public function emp_list(){

    	$acc =Admin::all();
        return view('admin.emp-list')->with('admins', $acc);
    	//return view('admin.emp-list');
    }
    public function complain(){

    	return view('admin.complain');
    }
    public function complain_list(){

        $acc =Complain::all();
        return view('admin.complain-list')->with('admins', $acc);
    	//return view('admin.complain-list');
    }
   public function empstore(Request $req){

        $account = new Admin;
        $account->name = $req->name;
        $account->email = $req->email;
        $account->phone = $req->mobile;
        $account->title = $req->title;
        $account->uname = $req->uname;
        $account->password = $req->password;
        
        if($req->has('image'))
        {
            $file=$req->file('image');
            $destinationPath = public_path('/');
            $file->move($destinationPath,$file->getClientOriginalName());
            $account->img=$file->getClientOriginalName();
        }
        $account->save();

        return view('admin.create_emp');
    }

    public function complainstore(Request $req){

        $account = new Complain;
        $account->name = $req->name;
        $account->problem = $req->problem;
        $account->floor = $req->floor;
        $account->dept = $req->dept;
        $account->idate = $req->idate;
        $account->rdate = $req->rdate;
        $account->save();

        return view('admin.complain');
    }
    public function delete($accId){
        $acc = Admin::find($accId);
        return view('admin.delete')->with('acc', $acc);
    }

    public function destroy($accId){
        $acc = Admin::destroy($accId);
        return redirect()->route('admin.emp-list');
    }

    public function view($accId){
        $acc = Admin::find($accId);
        return view('admin.view')->with('acc', $acc);
    }

    public function edit($accId){
         $acc = Admin::find($accId);
         return view('admin.edit')->with('acc', $acc);
     }

    public function edited(Request $req,$accId){

        $account = Admin::find($accId);
        $account->name = $req->name;
        $account->email = $req->email;
        $account->phone = $req->mobile;
        $account->title = $req->title;
        $account->uname = $req->uname;
        $account->password = $req->password;
        $account->save();

        return view('admin.create_emp');

    }
    public function budget(){

        return view('admin.budget');
    }
    public function budgetstore(Request $req){

        $account = new Budget;
        $account->expen = $req->name;
        $account->jan = $req->jan;
        $account->feb = $req->feb;
        $account->mar = $req->mar;
         $account->apr = $req->apr;
        $account->may = $req->may;
        $account->jun = $req->jun;
        $account->july = $req->july;
        $account->aug = $req->aug;
        $account->sep = $req->sep;
        $account->oct = $req->oct;
        $account->nov = $req->nov;
        $account->decem = $req->dec;
        $account->save();

        return view('admin.budget');
    }
    public function budgetshow(){

        $acc =Budget::all();
        return view('admin.budget_show')->with('budgets', $acc);
        
    }
    public function bdelete($accId){
        $acc = Budget::find($accId);
        return view('admin.bdelete')->with('acc', $acc);
    }

    public function bdestroy($accId){
        $acc = Budget::destroy($accId);
        return redirect()->route('admin.budget_show');
    }
    //budget edit
    public function budget_edit($accId){
         $acc = Budget::find($accId);
         return view('admin.budget_edit')->with('acc', $acc);
     }

    public function budget_edited(Request $req,$accId){

        $account = Budget::find($accId);
        $account->expen = $req->name;
        $account->jan = $req->jan;
        $account->feb = $req->feb;
        $account->mar = $req->mar;
         $account->apr = $req->apr;
        $account->may = $req->may;
        $account->jun = $req->jun;
        $account->july = $req->july;
        $account->aug = $req->aug;
        $account->sep = $req->sep;
        $account->oct = $req->oct;
        $account->nov = $req->nov;
        $account->decem = $req->dec;
        $account->save();

        return view('admin.budget_show');

    }

}
