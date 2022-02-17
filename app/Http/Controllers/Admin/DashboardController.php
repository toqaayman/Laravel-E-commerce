<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Order;
use App\Models\Transaction;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        // total sales and other staticstics(not too much)
        $categoryWithProductCount = Category::select('title')->withCount('products')->get();

        $totalPaid = Order::whereHas('transactions', function(Builder $query){
            $query->where('status', 'P');
        })->sum('grand_total');

        $totaluser = User::count();

        // Count users who has placed at least one order...
        $userHasOrder = User::has('orders')->count();

        $latestOrders = Order::whereDate('created_at', Carbon::today())->orderBy('created_at', 'DESC')->limit(3)->get();

        $totalBuyAmount = Order::sum('grand_total');

        return view('admin.dashboard', [
            'category' => $categoryWithProductCount,
            'totalPaid' => $totalPaid,
            'totalBuyAmount' => $totalBuyAmount,
            'totalUser' => $totaluser,
            'userHasOrder' => $userHasOrder,
            'orders' => $latestOrders
        ]);
    }

/*    public function registerupdate(Request $request, $id){
        $users = User::find($id);
        $users->name = $request->input('username');
        $users->usertype = $request->input('usertype');
        $users->update();

        return redirect('admin.dashboard')->with('status','Your Fata is deleted');
    }*/
    public function delete($id)
    {
        $user= User::findorfail($id);
        $user->delete();

        return redirect('/customers')->with('status','Your Data is deleted');

    }
}
