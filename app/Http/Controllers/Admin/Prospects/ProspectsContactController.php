<?php

namespace App\Http\Controllers\Admin\Prospects;

use App\Http\Controllers\Controller;
use App\Http\Requests\Contact\UpdateContactRequest as ContactUpdateContactRequest;
use App\Models\Prospect;
use App\Models\ProspectContact;
use App\Http\Requests\StoreProspectRequest;
use App\Http\Requests\UpdateProspectRequest;

class ProspectsContactController extends Controller
{
    public function create(Prospect $prospect)
    {
        return view('admin.prospects.contacts.create', compact('prospect'));
    }

    public function store(StoreProspectRequest $request, Prospect $prospect)
    {
        $contact = ProspectContact::updateOrCreate(['prospect_id' => $prospect->id], $request->validated());

        return redirect()->route('admin.prospects.show', $prospect->id)->with('success', 'Successfully created a new prospect!');
    }

    public function update(UpdateProspectRequest $request, Prospect $prospect)
    {
        $prospect->contact->update($request->validated());

        return redirect()->route('admin.prospects.edit', $prospect->id)->with('success', 'Successfully updated prospect contact details!');
    }
}
