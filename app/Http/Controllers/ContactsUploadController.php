<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacts;
use Session;

class ContactsUploadController extends Controller
{
    public function uploadContact(Request $request){
$request->validate([
    'name'=>'required',
    'surname'=>'required',
    'birthdate'=>'required',
    'education'=>'required',
    'profession'=>'required',
    'country'=>'required',
    'town'=>'required',
    'address'=>'required',
    'email'=>'required|email',
    'phone'=>'required',
    'infoadduser'=>'required',
    'infoaddemail'=>'required|email',
]);
$contacts =new Contacts();
$contacts->name = $request->name;
$contacts->surname = $request->surname;
$contacts->birthdate = $request->birthdate;
$contacts->education = $request->education;
$contacts->profession = $request->profession;
$contacts->country = $request->country;
$contacts->town = $request->town;
$contacts->address = $request->address;
$contacts->email = $request->email;
$contacts->phone = $request->phone;
$contacts->infoadduser = $request->infoadduser;
$contacts->infoaddemail = $request->infoaddemail;
$res = $contacts->save();
if($res) {
  return back()->with('success', 'The information was successfylly added to Phonebook Database');
} else {
  return back()->with('fail', 'Something was wrong, the information was not added to database');
}
    }
}
