<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;


class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->only(['last_name', 'first_name', 'gender', 'email', 'postcode', 'address', 'building_name', 'opinion']);
        return view('confirm', compact('contact'));

    }

    public function store(Request $request)
    {
        $contact = $request->only(['fullname', 'gender', 'email', 'postcode', 'address', 'building_name', 'opinion']);
        Contact::create($contact);
        return view('thanks');
    }

    public function edit(Request $request)
    {
        $contact = $request->only(['fullname', 'gender', 'email', 'postcode', 'address', 'building_name', 'opinion']);
        return view('edit', compact('contact'));
    }

    public function destroy(Request $request)
    {
        Contact::find($request->id)->delete();

        return redirect('/admin')->with('message', 'カテゴリを削除しました');
    }

    public function search(Request $request)
    {
        $contacts = Contact::FullNameSearch($request->fullname)->EmailSearch($request->email)->GenderSearch($request->gender)->DateSearch($request->start_date, 'end_date')->paginate(10);
        return view('admin', compact('contacts'));

    }

}