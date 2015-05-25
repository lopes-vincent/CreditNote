<?php
/**
* This class has been generated by TheliaStudio
* For more information, see https://github.com/thelia-modules/TheliaStudio
*/

namespace CreditNote\Form\Base;

use CreditNote\CreditNote;
use Thelia\Form\BaseForm;
use CreditNote\Model\Config\CreditNoteConfigValue;
use Symfony\Component\Validator\Constraints\NotBlank;

/**
 * Class CreditNoteConfigForm
 * @package CreditNote\Form\Base
 * @author TheliaStudio
 */
class CreditNoteConfigForm extends BaseForm
{
    const FORM_NAME = "creditnote_config_form";

    /**
     *
     * in this function you add all the fields you need for your Form.
     * Form this you have to call add method on $this->formBuilder attribute :
     *
     * $this->formBuilder->add("name", "text")
     *   ->add("email", "email", array(
     *           "attr" => array(
     *               "class" => "field"
     *           ),
     *           "label" => "email",
     *           "constraints" => array(
     *               new \Symfony\Component\Validator\Constraints\NotBlank()
     *           )
     *       )
     *   )
     *   ->add('age', 'integer');
     *
     * @return null
     */
    protected function buildForm()
    {
        $translationKeys = $this->getTranslationKeys();
        $fieldsIdKeys = $this->getFieldsIdKeys();

        $this->addCouponCodeDurationField($translationKeys, $fieldsIdKeys);
        $this->addCouponCodePrefixField($translationKeys, $fieldsIdKeys);
        $this->addCouponCodeRestrictedToOriginalCustomerField($translationKeys, $fieldsIdKeys);
    }

    protected function addCouponCodeDurationField(array $translationKeys, array $fieldsIdKeys)
    {
        $this->formBuilder
            ->add("coupon_code_duration", "integer", array(
                "label" => $this->translator->trans($this->readKey("coupon_code_duration", $translationKeys), [], CreditNote::MESSAGE_DOMAIN),
                "label_attr" => ["for" => $this->readKey("coupon_code_duration", $fieldsIdKeys)],
                "required" => true,
                "constraints" => array(
                    new NotBlank(),
                ),
                "data" => CreditNote::getConfigValue(CreditNoteConfigValue::COUPON_CODE_DURATION),
            ))
        ;
    }

    protected function addCouponCodePrefixField(array $translationKeys, array $fieldsIdKeys)
    {
        $this->formBuilder
            ->add("coupon_code_prefix", "text", array(
                "label" => $this->translator->trans($this->readKey("coupon_code_prefix", $translationKeys), [], CreditNote::MESSAGE_DOMAIN),
                "label_attr" => ["for" => $this->readKey("coupon_code_prefix", $fieldsIdKeys)],
                "required" => true,
                "constraints" => array(
                    new NotBlank(),
                ),
                "data" => CreditNote::getConfigValue(CreditNoteConfigValue::COUPON_CODE_PREFIX),
            ))
        ;
    }

    protected function addCouponCodeRestrictedToOriginalCustomerField(array $translationKeys, array $fieldsIdKeys)
    {
        $this->formBuilder
            ->add("coupon_code_restricted_to_original_customer", "checkbox", array(
                "label" => $this->translator->trans($this->readKey("coupon_code_restricted_to_original_customer", $translationKeys), [], CreditNote::MESSAGE_DOMAIN),
                "label_attr" => ["for" => $this->readKey("coupon_code_restricted_to_original_customer", $fieldsIdKeys)],
                "required" => false,
                "constraints" => array(
                ),
                "value" => CreditNote::getConfigValue(CreditNoteConfigValue::COUPON_CODE_RESTRICTED_TO_ORIGINAL_CUSTOMER, false),
            ))
        ;
    }

    public function getName()
    {
        return static::FORM_NAME;
    }

    public function readKey($key, array $keys, $default = '')
    {
        if (isset($keys[$key])) {
            return $keys[$key];
        }

        return $default;
    }

    public function getTranslationKeys()
    {
        return array();
    }

    public function getFieldsIdKeys()
    {
        return array(
            "coupon_code_duration" => "coupon_code_duration",
            "coupon_code_prefix" => "coupon_code_prefix",
            "coupon_code_restricted_to_original_customer" => "coupon_code_restricted_to_original_customer",
        );
    }
}
