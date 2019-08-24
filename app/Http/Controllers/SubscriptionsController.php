<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stripe\Stripe;

class SubscriptionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        return view('subscriptions.index');
    }

    public function subscribe($planId)
    {
        if ($this->planNotAvailable($planId)) {
            return redirect()->route('plans');
        }
        return view('subscriptions.subscribe', compact('planId'));
    }
    
    protected function planNotAvailable($id){
    $available = ['premium', 'regular', 'trial'];
        if ( ! in_array($id, $available)){ //in_arrayで$availableの中から$idを探す
         return true;
        }
        return false;
    }
    
    public function process(Request $request)
    {
        $planId = $request->get('plan_id');
        if ($this->planNotAvailable($planId)) {
            return redirect()->back()->withErrors('Plan is required');
        }
        Stripe::setApiKey(env('STRIPE_API_SECRET'));
        $user = Auth::user();
        $user->newSubscription('main', 'plan_FduAwOAXHAUV4D')->trialDays(30)->create($request->stripeToken);
        return redirect('invoices');
    }
}