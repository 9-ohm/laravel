<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class MailController extends Controller {
 public function basic_email(Request $request) {
 //$data = array('name'=>"Manotchawit Sriwiset");
 $data = array('name'=> $request->name, 'email' => $request->email, 'message' => $request->message);
 //dd($request->all());

 Mail::send('mail', $data, function($message) use ($request) {
    $message->to($request->email, 'Tutorials Point')->subject
    ($request->message);
    $message->from('xyz@gmail.com','Manotchawit Sriwiset');
});
 echo "Basic Email Sent. Check your inbox.";
 }
 public function html_email() {
 $data = array('name'=>"Manotchawit Sriwiset");
 Mail::send('mail', $data, function($message) {
 $message->to('5910110262@psu.ac.th', 'Tutorials Point')->subject
 ('Laravel HTML Testing Mail');
 $message->from('xyz@gmail.com','Manotchawit Sriwiset');
 });
 echo "HTML Email Sent. Check your inbox.";
}
public function attachment_email() {
$data = array('name'=>"Manotchawit Sriwiset");
Mail::send('mail', $data, function($message) {
$message->to('5910110262@psu.ac.th', 'Tutorials Point')->subject
('Laravel Testing Mail with Attachment');
$message->attach('C:\Users\Students\Downloads\1.jpg');
$message->from('5910110262@psu.ac.th','Manotchawit Sriwiset');
});
echo "Email Sent with attachment. Check your inbox.";
}
}
