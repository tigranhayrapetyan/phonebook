<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Contacts;


class DatabaseContactsArrange extends Controller
{
    public function arrangepage(){
        $contacts = Contacts::paginate(5);
        return view('arrange', compact('contacts'));
    }
 
    public function search(Request $request){
            $get_name = $request->search;
            $contacts = Contacts::where('name' , 'LIKE', '%' .$get_name. '%')->get();
            // $contacts = Contacts::where('surname' , 'LIKE', '%' .$get_name. '%')->get();

            return view('search', compact('contacts'));
    }
}

