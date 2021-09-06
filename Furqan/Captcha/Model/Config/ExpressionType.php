<?php


namespace Furqan\Captcha\Model\Config;

class ExpressionType implements \Magento\Framework\Data\OptionSourceInterface
{
    const TYPE_NUMBERS = 'numbers';
    const TYPE_EQUATION = 'equation';
    const TYPE_WORDS = 'words';

    private $types = [
        self::TYPE_NUMBERS  => 'Numbers',
        self::TYPE_EQUATION => 'Equation (find X)',
        self::TYPE_WORDS    => 'Numbers as words',
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
