<?php namespace Lartificer\Contactform\Http\Controllers;

use Illuminate\Routing\Controller;
use Input;
use Mail;

class ContactController extends Controller {
    
    public function getContactForm() {
        return view("contactform::contactform");
    }
    
    public function sendMail() {
        
        $data = Input::only("firstname","lastname","email","content");
        Mail::send('contactform::mailbody', $data, function ($message) use ($data) {
            $message->to(config("lartificer.contactform.recipient.address"), config("lartificer.contactform.recipient.name"))
                    ->from($data['email'],$data['firstname'] . ' ' . $data['lastname'])
                    ->subject('A new email');
        });
    
        if(Input::has("redirect")) {
            return Redirect::to(url(Input::get("redirect")));
        }
    }
    
}