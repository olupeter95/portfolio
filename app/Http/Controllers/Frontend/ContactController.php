<?php

namespace App\Http\Controllers\Frontend;

use App\Actions\Frontend\Contact\StoreContact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function storeContact(
        Request $request,
        StoreContact $storeContact
    )
    {
        return $storeContact->handle($request);
    }
}
