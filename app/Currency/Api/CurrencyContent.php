<?php

namespace CurrencyUaBot\Currency\Api;

use CurrencyUaBot\Currency\CurrencyEntity;

interface CurrencyContent
{
    /**
     * @param string $source
     * @return CurrencyContent
     */
    public function freshCurrency(string $source): CurrencyContent;

    /**
     * @param string|null $currency
     * @return CurrencyEntity
     */
    public function getCurrency(string $currency = null): CurrencyEntity;

    /**
     * @param string|null $currency
     * @return float
     */
    public function getSale(string $currency = null): float;

    /**
     * @param string|null $currency
     * @return float
     */
    public function getBuy(string $currency = null): float;

}