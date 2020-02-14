<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class MailController extends Controller {
    public function basic_email() {
        $data = array('name'=>"Thacha");

        Mail::send(['text'=>'mail'], $data, function($message) {
            $message->to('5910110602@psu.ac.th', 'Tutorials Point')->subject
                ('Laravel Basic Testing Mail');
            $message->from('thacha.pn01@gmail.com','Thachamon');
        });
        echo "Basic Email Sent. Check your inbox.";
    }
    public function html_email() {
        $data = array('name'=>"Thacha");
        Mail::send('mail', $data, function($message) {
            $message->to('5910110602@psu.ac.th', 'Tutorials Point')->subject
                ('Laravel HTML Testing Mail');
            $message->from('thacha.pn01@gmail.com','Thachamon');
        });
        echo "HTML Email Sent. Check your inbox.";
    }
    public function attachment_email() {
        $data = array('name'=>"Thacha");
        Mail::send('mail', $data, function($message) {
            $message->to('5910110602@psu.ac.th', 'Tutorials Point')->subject
                ('Laravel Testing Mail with Attachment');
            $message->attach('D:\homework\picture\audrey.jpg');
          
            $message->from('thacha.pn01@gmail.com','Thachamon');
        });
        echo "Email Sent with attachment. Check your inbox.";
    }
}
