<?php

namespace App\services\Notifications\Providers;

use App\services\Notifications\Providers\Contracts\Provider;
use App\User;
use Illuminate\Contracts\Mail\Mailable;
use Illuminate\Support\Facades\Mail;
class EmailProvider implements Provider{

    private $mailable;
    private $user;
    public function __construct(User $user , Mailable $mailable)
    {
        $this->mailable = $mailable;
        $this->user = $user;
    }
    public function send()
    {

        return Mail::to($this->user)->send($this->mailable);
    }
}
