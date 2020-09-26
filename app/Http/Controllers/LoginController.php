<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Admin;
use App\Budget;

class LoginController extends Controller
{
      public function index()
      {

    	return view('login.index');
      }

    public function verify(Request $req)
    {
        
        $user = Admin::where('uname', $req->uname)
            ->where('password', $req->pass)
            ->first();

    	if($user){
            $req->session()->put('uname', $req->uname);
    		return redirect()->route('admin.index');
    	}else{

    		return redirect('/login');

    	 }
    	}
    public function exportCsv(Request $req)
{
   $fileName = 'Budget.csv';
   $tasks = Budget::all();

        $headers = array(
            "Content-type"        => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        );

        $columns = array('Expenditures', 'January', 'February', 'March', 'April','May','Jun','July','August','September','October','November','December');

        $callback = function() use($tasks, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($tasks as $task) {
                $row['Expenditures']  = $task->expen;
                $row['January']    = $task->jan;
                $row['February']    = $task->feb;
                $row['March']  = $task->mar;
                $row['April']  = $task->apr;
                $row['May'] = $task->may;
                $row['Jun'] = $task->jun;
                $row['July']= $task->july;
                $row['August']= $task->aug;
                $row['September']= $task->sep;
                $row['October']= $task->oct;
                $row['November']= $task->nov;
                $row['December']= $task->decem;

                fputcsv($file, array($row['Expenditures'], $row['January'],  $row['February'], $row['March'], $row['April'], $row['May'],$row['Jun'],$row['July'], $row['August'],$row['September'],$row['October'],$row['November'],$row['December']));
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }
   
 }


