<?php
namespace Concrete\Package\WizzaroTextareaCheckboxAttributeType\Entity\Attribute\Key\Settings;

use Concrete\Core\Entity\Attribute\Key\Settings\Settings;

/**
 * @Entity
 * @Table(name="atTextareaCheckboxSettings")
 */
class TextareaCheckboxSettings extends Settings
{
    /**
     * @Column(type="boolean")
     */
    protected $akCheckedByDefault = false;

    /**
     * @Column(type="text", nullable=true)
     */
    protected $checkboxLabel;

    /**
     * @return mixed
     */
    public function getCheckboxLabel()
    {
        return $this->checkboxLabel;
    }

    /**
     * @param mixed $checkboxLabel
     */
    public function setCheckboxLabel($checkboxLabel)
    {
        $this->checkboxLabel = $checkboxLabel;
    }

    public function getAttributeTypeHandle()
    {
        return 'textarea_checkbox';
    }

    /**
     * @return mixed
     */
    public function isCheckedByDefault()
    {
        return $this->akCheckedByDefault;
    }

    /**
     * @param mixed $isCheckedByDefault
     */
    public function setIsCheckedByDefault($isCheckedByDefault)
    {
        $this->akCheckedByDefault = $isCheckedByDefault;
    }
}