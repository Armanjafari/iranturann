<?php

namespace App\services\Notifications;

use App\services\Notifications\Providers\Contracts\Provider;
/*
* @method sendSms(App\User $user, stirng $code)
* @method sendEmail(App\User $user, Illuminate\Mail\mailable $mailable)
*/
class Notification{
    public function __call($method, $arguments)
    {
        $providerPath = __NAMESPACE__ . '\Providers\\' . substr($method,4) . 'Provider';
        if(!class_exists($providerPath)){
            throw new \Exception('Class Does not exist');
        }
        $providerInstance = new $providerPath(... $arguments);
        if(!is_subclass_of($providerInstance,Provider::class)){
            throw new \Exception("class must implements App\services\Notifications\Providers\Contracts\Provider");
        }
        $providerInstance->send();
    }
}
?>
