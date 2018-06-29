<?php
namespace Concrete\Package\WizzaroTextareaCheckboxAttributeType\Attribute\WizzaroTextareaCheckboxAttributeType;

use Concrete\Attribute\Boolean\Controller as BooleanController;
use Concrete\Core\Editor\LinkAbstractor;

use Concrete\Package\WizzaroTextareaCheckboxAttributeType\Entity\Attribute\Key\Settings\TextareaCheckboxSettings;

class Controller extends BooleanController
{
    public function getAttributeKeySettingsClass()
    {
        return TextareaCheckboxSettings::class;
    }

    public function saveKey($data)
    {
        $data['akCheckboxLabel'] = LinkAbstractor::translateTo($data['akCheckboxLabel']);
        return parent::saveKey($data);
    }

    public function form()
    {
        parent::form();
        $this->set('akCheckboxLabel', LinkAbstractor::translateFrom($this->akCheckboxLabel));
    }

    public function type_form()
    {
        parent::type_form();
        $this->set('akCheckboxLabel', LinkAbstractor::translateFromEditMode($this->akCheckboxLabel));
    }

    public function getCheckboxLabel()
    {
        if ($this->akCheckboxLabel) {
            return LinkAbstractor::translateFrom($this->akCheckboxLabel);
        }

        return $this->attributeKey->getAttributeKeyName();
    }
}