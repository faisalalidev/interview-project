<?php

namespace App\Http\Controllers;

use App\Repositories\ContactRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    private $contactRepo;

    public function __construct(ContactRepository $contactRepo)
    {
        $this->contactRepo = $contactRepo;
    }

    public function create()
    {
        return view('contact.add');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $this->contactRepo->saveRecord($input);
        return $request->wantsJson() ? new JsonResponse([], 204) : redirect()->intended('/create-contact');
    }

}
