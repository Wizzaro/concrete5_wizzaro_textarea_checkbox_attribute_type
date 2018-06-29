<?php
/**
 * @author 		Przemysław Dziadek (Wizzaro) <przemyslaw.dziadek@gmail.com>
 * @copyright  	Copyright (c) 2017 Wizzaro
 */

namespace Concrete\Package\WizzaroTextareaCheckboxAttributeType;

defined('C5_EXECUTE') or die('Access Denied.');

use Concrete\Core\Package\Package;

class Controller extends Package
{
	protected $pkgHandle = 'wizzaro_textarea_checkbox_attribute_type';
    protected $appVersionRequired = '5.7.3';
    protected $pkgVersion = '0.0.2';

    protected $pkgAutoloaderMapCoreExtensions = true;

    public function getPackageName() {
    	return t('Wizzaro Textarea Checkbox Attribute Type');
    }

	public function getPackageDescription() {
        return t('Add a textarea checkbox attribute type to your website.');
    }

    public function install() {
        $pkg = parent::install();

        $attributeTypeFactory = $this->app->make('Concrete\Core\Attribute\TypeFactory');
        if (!is_object($attributeTypeFactory->getByHandle('wizzaro_textarea_checkbox_attribute_type'))) {
            $type = $attributeTypeFactory->add('wizzaro_textarea_checkbox_attribute_type', 'Textarea Checkbox', $pkg);
        }
    }
}