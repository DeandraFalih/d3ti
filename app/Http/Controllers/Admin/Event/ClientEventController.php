<?php

namespace App\Http\Controllers\Admin\Event;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Event;
use Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;

class ClientEventController extends Controller
{
    public function all_event()
    {
        $data_event=DB::table('d3ti_event')
        ->get();

        return view('admin/event/allevent', compact('data_event'));
    }

    public function add_event()
    {
        return view('admin/event/addevent');
    }

    public function add_post_process(Request $request)
    {
        dd($request->all());
    }

}
