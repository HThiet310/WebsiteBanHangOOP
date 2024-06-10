<?php

namespace Dell\Asmphp2\Controllers\Admin;

use Dell\Asmphp2\Commons\Controller;
use Dell\Asmphp2\Commons\Helper;
use Dell\Asmphp2\Models\Contact;
use Rakit\Validation\Validator;

class ContactController extends Controller
{

    private Contact $contact;
     
    public function __construct()
    {
        $this->contact = new Contact();
        
    }
    public function index()
    {
        [$contact, $totalPage] = $this->contact->paginate($_GET['page'] ?? 1);
        $contacts = $this->contact->all();

        $this->renderViewAdmin('contacts.index', [
            'contacts' => $contacts,
            'totalPage' => $totalPage
        ]);
        
    } 

    // public function create()
    // {
    //     $this->renderViewAdmin('contact.create');
    // }

    // public function store()
    // {
    //     $validator = new Validator;
    //     $validaton = $validator->make($_POST, [
    //         'name'      => 'require|max:50',
    //         'email'     => 'require|email',
    //         'phone'     => 'require|min:10',
    //         'address'   => 'require|max:500',
    //         'content'   => 'require|max:500',

    //     ]);
    //     $validaton->validate();
        
    //     if ($validaton->fails()){
    //         $_SESSION['errors'] = $validaton->errors()->firstOfAll();

    //         header('Location: ' .url('admin/contact/create'));
    //         exit;
    //     }else{
    //         $data =[
    //             'name' => $_POST['name'],
    //             'email' => $_POST['email'],
    //             'phone' => $_POST['phone'],
    //             'address' => $_POST['address'],
    //             'content' => $_POST['content'],
    //         ];

    //         $this->contact->insert($data);

    //         $_SESSION['status'] = true;
    //         $_SESSION['msg'] = 'Thao tác thành công';
    //         header('Location: ' . url('admin/contact'));
    //         exit;
    //     }
    // }
    public function show($id)
    {
        $contact = $this->contact->findByID($id);

        $this->renderViewAdmin('contacts.show', [
            'contact' => $contact
        ]);
    
    }
    public function delete($id)
    {
        $contact = $this->contact->findByID($id);

        $this->contact->delete($id);

        if (
            $contact['img_thumbnail']
            && file_exists(PATH_ROOT . $contact['img_thumbnail'])
        ) {
            unlink(PATH_ROOT . $contact['img_thumbnail']);
        }

        header('Location: ' . url('admin/contacts'));
        exit();
    }
}