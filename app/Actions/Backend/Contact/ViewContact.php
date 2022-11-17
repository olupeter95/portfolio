<?php

namespace App\Actions\Backend\Contact;

use App\Models\Contact;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;

class ViewContact
{
    public function handle(): View|Factory
    {
        $contacts = Contact::latest()->get();
        return view('backend.contact.contact_view', compact('contacts'));
    }
}