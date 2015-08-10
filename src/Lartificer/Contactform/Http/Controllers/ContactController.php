<?php namespace Lartificer\Contactform\Http\Controllers;

use Illuminate\Routing\Controller;

class ContactController extends Controller {
    
    public function getContactForm() {
        return view("contactform::contactform");
    }
    
    public function sendMail() {
        
        $data = \Input::only("firstname","lastname","email","content");
        \Mail::send('contactform::mailbody', $data, function ($message) use ($data) {
            $message->to('p.mohr@sopamo.de', 'John Smith')
                    ->from($data['email'],$data['firstname'] . ' ' . $data['lastname'])
                    ->subject('A new email');
        });
    }
    
}