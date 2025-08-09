<?php

namespace App\Http\Controllers;

use App\Models\EmailList;
use Illuminate\Database\Eloquent\Builder;

class SubscriberController extends Controller
{
    public function index(EmailList $emailList)
    {
        $search = request()->search;
        return view('subscriber.index', [
            'emailList' => $emailList,
            'subscribers' => $emailList->subscribers()
                ->when($search, fn(Builder $query) => $query
                    ->where('email', 'like', "%$search%")
                    ->orWhere('id', '=', $search)
                    ->orWhere('name', 'like', "%$search%"))
                ->paginate(5),
            'search' => $search,
        ]);
    }

    public function create() {}
}
