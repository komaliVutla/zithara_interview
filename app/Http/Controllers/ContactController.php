<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Company;
use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::all();
        return $contacts;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreContactRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreContactRequest $request)
    {
        $contact = new Contact();
        $contact->first_name = $request->first_name;
        $contact->last_name = $request->last_name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->points = $request->points;
        $contact->active = $request->active;
        $company = Company::where('name', $request->company_name)->first();
        if($company)
        {
            $contact->company_id = $company->id;
        }
        else{
            abort(404, "Company not found");
        }
        $contact->save();
        return "Contact details are stored successfully";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
       return $contact;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateContactRequest  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateContactRequest $request, Contact $contact)
    {
        $contact = Contact::where('id', $contact->id)->first();
        if($contact)
        {
            $contact->first_name = $request->first_name;
            $contact->last_name = $request->last_name;
            $contact->email = $request->email;
            $contact->phone = $request->phone;
            $contact->points = $request->points;
            $contact->active = $request->active;
            $company = Company::where('name', $request->company_name)->first();
            if($company)
            {
                $contact->company_id = $company->id;
            }
            else{
                abort(404, "Company not found");
            }
            $contact->save();
        }
        else{
            abort(404, "Contact not found");
        }
        return "Contact details are updated successfully";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return "Contact deleted successfully";
    }
}
