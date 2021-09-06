<?php


namespace Furqan\Captcha\Model\Config;

use Furqan\Captcha\Model\ExpressionGenerator;

class MathSigns implements \Magento\Framework\Data\OptionSourceInterface
{
    /**
     * @return array
     */
    public function toOptionArray()
    {
        $optionArray = [];
        foreach (ExpressionGenerator::AVAILABLE_SIGNS as $sign) {
            $optionArray[] = ['label' => $sign, 'value' => $sign];
        }
        return $optionArray;
    }
}
