<?php

namespace App\Http\Controllers\Admin\Prospects;

use App\Http\Controllers\Controller;
use App\Models\Prospect;
use Illuminate\Http\Request;

class ProspectsContactController extends Controller
{
    public function create(Prospect $prospect)
    {
        return view('admin.prospects.contacts.create', compact('prospect'));
    }
}
