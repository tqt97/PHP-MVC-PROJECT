<?php

namespace app\models;

use app\core\Model;

class ContactForm extends Model
{
    public string $subject = '';
    public string $email = '';
    public string $body = '';
    public function rules(): array
    {
        return [
            'subject' => [self::RULE_REQUIRED, [self::RULE_MAX, 'max' => 255]],
            'email' => [self::RULE_REQUIRED, self::RULE_EMAIL],
            'body' => [self::RULE_REQUIRED]
        ];
    }
    public function  labels(): array
    {
        return [
            'subject' => 'Enter your subject',
            'Email' => 'Enter your email',
            'body' => 'Enter your body'
        ];
    }
    public function send()
    {
        return true;
    }
}
