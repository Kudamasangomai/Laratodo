<?php

namespace App\Http\Controllers;

use App\Models\Todos;
use App\Models\User;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\SpladeTable;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     * the code below displays  totals of
     * todo lists and which are open ,completed
     * on that day
     */
    public function __invoke(Request $request)
    {
       
        $today = Carbon::today()->toDateString();
 
        return view('dashboard', [
            'today'=> Todos::whereDate('StartDate',$today)->count(),
            'open'=> Todos::where('status', '=', 'open')->whereDate('StartDate',$today)->count(),
            'completed'=> Todos::where('status', '=', 'completed')->whereDate('StartDate',$today)->count(),
            'todos' => SpladeTable::for(Todos::where('status', '=', 'open')->whereDate('StartDate',$today))
                ->withGlobalSearch(columns: ['title', 'description', 'category'])
                ->perPageOptions(['5'])
                ->column('title')
                ->column('category')
                ->column('status')
                ->column('StartDate')
            
               
               
         
        ]);

       
       
        
    }
 
 
   
   
   
}
