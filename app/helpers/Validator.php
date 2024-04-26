<?php

namespace App\Helpers;

class Validator {
    public static function email($value) {
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }
    public static function int($value) {
        return filter_var($value, FILTER_VALIDATE_INT);
    }
    public static function float($value) {
        return filter_var($value, FILTER_VALIDATE_FLOAT);
    }
    public static function url($value) {
        return filter_var($value, FILTER_VALIDATE_URL);
    }
    public static function password($value) {
        return preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/', $value);
    }
    public static function boolean($value) {
        return filter_var($value, FILTER_VALIDATE_BOOLEAN);
    }
    public static function empty($value) {
        return !empty($value);
    }

    public static function validate($data, $rules) {
        $errors = [];
        foreach ($rules as $field => $rule) {
            $value = $data[$field];
            $rule = explode('|', $rule);
            foreach ($rule as $r) {
                switch($r) {
                    case 'required' :
                        if(!self::empty($value)) {
                            $errors[$field] = 'This field is required';
                        }
                        break;
                    case 'email' :
                        if(!self::email($value)) {
                            $errors[$field] = 'This field must be an email';
                        }
                        break; 
                    case 'int' :
                        if(!self::int($value)) {
                            $errors[$field] = 'This field must be an integer';
                        }
                        break;
                    case 'float' :
                        if(!self::float($value)) {
                            $errors[$field] = 'This field must be a float';
                        }
                        break;
                    case 'url' :
                        if(!self::url($value)) {
                            $errors[$field] = 'This field must be an url';
                        }
                        break;
                    case 'password' :
                        if(!self::password($value)) {
                            $errors[$field] = 'This field must be a strong password';
                        }
                        break;
                    case 'boolean' :
                        if(!self::boolean($value)) {
                            $errors[$field] = 'This field must be a boolean';
                        }
                        break;
                    }
                }
        }
        return $errors;
    }
}