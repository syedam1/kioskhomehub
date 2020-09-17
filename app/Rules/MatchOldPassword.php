<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Hash;
  
class MatchOldPassword implements Rule
{

    protected $message;
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $new_password)
    {
        
        /*if (Hash::check($new_password, auth()->user()->password)) {
            // The passwords match...
            dd("password matched");
        } else {
            dd("password didn't matched");
        } */
        $return = Hash::check($new_password, auth()->user()->password);
        if($return){
            $this->message = "Password updated";
        } else {
            $this->message = "Password did not match";
        }
        return $return;
    }
   
    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return $this->message;
    }
}

