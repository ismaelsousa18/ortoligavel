<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class mailCustom implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $valid = true;

        if(strpos($value, "@") == false)
            $valid = false;

        $before = substr($value, 0, 3);
        $after = substr($value, strpos($value, "@"), strpos($value, "@")+3);
        $last3 = substr($value, strlen($value) - 3, strlen($value));

        if(!preg_match("/[a-z]/i", $before))
            $valid = false;
        
        if(!preg_match("/[a-z]/i", $after))
            $valid = false;

        if($last3 != "com" && $last3 != ".br")
            $valid = false;
        

        return $valid;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Email inválido';
    }
}
