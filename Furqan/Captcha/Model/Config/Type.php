<?php


namespace Furqan\Captcha\Model\Config;

use Furqan\Captcha\Model\MathCaptcha;

class Type implements \Magento\Framework\Data\OptionSourceInterface
{
    private $types = [
        'default'         => 'Default',
        MathCaptcha::TYPE => 'Math',
    ];

    /**
     * @return array
     */
    public function toOptionArray()
    {
        $optionArray = [];
        foreach ($this->types as $code => $name) {
            $optionArray[] = ['label' => __($name), 'value' => $code];
        }
        return $optionArray;
    }
}
