<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
	{
		$contacts = Contact::all();
		return view('contacts.index', compact('contacts'));
	}

	public function store(Request $request)
	{
		$request->validate([
			'name' => 'required',
			'mobile' => 'required',
			'email' => 'required|email',
		]);

		Contact::create($request->only(['name', 'mobile', 'email']));

		return redirect()->back()->with('success', 'Contact saved!');
	}

}
