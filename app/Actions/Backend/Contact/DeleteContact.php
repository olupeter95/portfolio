<?php

namespace App\Actions\Backend\Contact;

use App\Models\Contact;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;

class DeleteContact
{
    public function handle($id): Redirector|RedirectResponse
    {
        Contact::findorFail($id)->delete();
        $notification = [
            'message' => 'Contact Deleted Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->back()->with($notification);
    }
}