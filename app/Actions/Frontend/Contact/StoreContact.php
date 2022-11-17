<?php

namespace App\Actions\Frontend\Contact;

use Carbon\Carbon;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Http\RedirectResponse;

class StoreContact
{
    public function handle(Request $request): Redirector|RedirectResponse
    {
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
            'created_at' => Carbon::now(),
        ]);
        $notification = [
            'message' => 'Message Sent Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->back()->with($notification);
    }
}