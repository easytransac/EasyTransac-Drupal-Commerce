<?php

namespace EasyTransac\Converters;

/**
 * Base for a converted
 */
interface IConverter
{
    /**
     * Logic for a value convertion
     * @param Mixed $value
     * @return Mixed
     */
    public function convert($value);
}
