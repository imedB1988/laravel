<?php
namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class ForgotPasswordMail extends Mailable{
    use Queueable, SerializesModels;
    public $user;

    public function _construct($user){
        
        $this->user=$user;
    }

    public function build(){
            return $this->markdown('emails.forgot_password')->subject(config('app.name').', Forgot Password ');
    }
}

?>