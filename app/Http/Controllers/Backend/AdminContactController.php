<?php

namespace App\Http\Controllers\Backend;

use App\Actions\Backend\Contact\DeleteContact;
use App\Actions\Backend\Contact\ViewContact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminContactController extends Controller
{
    public function viewContact(
        ViewContact $viewContact
    )
    {
        return $viewContact->handle();
    } 

    public function deleteContact(
        int $id,
        DeleteContact $deleteContact
    )
    {
        return $deleteContact->handle($id);   
    }
}
