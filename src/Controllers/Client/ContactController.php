<?php

namespace Dell\Asmphp2\Controllers\Client;

use Dell\Asmphp2\Commons\Controller;
use Dell\Asmphp2\Models\Contact;
use Rakit\Validation\Validator;

class ContactController extends Controller
{
    private Contact $contact;

    // public function index()
    // {
        
    // }

    public function detail($id)
    {
        
    }
    public function show($id)
    {
        $contact = $this->contact->findByID($id);

        $this->renderViewAdmin('contacts.show', [
            'contact' => $contact
        ]);
    }
    public function create()
    {
        $this->renderViewAdmin('contacts.create');
    }
} 