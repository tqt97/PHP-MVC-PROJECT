<?php

namespace app\core\form;

use app\core\Model;

class InputField extends BaseField
{
    const TYPE_TEXT = 'text';
    const TYPE_PASSWORD = 'password';
    const TYPE_FILE = 'file';

    public string $type;
    public function __construct(Model $model, string $attribute)
    {
        $this->type = self::TYPE_TEXT;
        parent::__construct($model, $attribute);
    }
    public function passwordField()
    {
        $this->type = self::TYPE_PASSWORD;
        return $this;
    }
    public function renderInput(): string
    {
        return sprintf(
            '          
                <input type="%s"   value="%s" name="%s" class="form-control %s">                
        ',
            $this->type,
            $this->model->hasError($this->attribute) ? ' is-invalid' : '',
            $this->attribute,
            $this->model->{$this->attribute},
        );
    }
    public function fileField()
    {
        $this->type = self::TYPE_FILE;
        return $this;
    }
}
