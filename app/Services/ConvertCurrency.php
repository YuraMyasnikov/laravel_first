<?php


    namespace App\Services;

    use App\Models\Currency;

    class ConvertCurrency
    {
        public static function convert ($sum, $originalCurrencyCode = "RUB", $targetCurrencyCode = null )
        {
            $originalCurrencyCode = Currency::currencyCode($originalCurrencyCode)->first();

            if( is_null($targetCurrencyCode) )
            {
                $targetCurrencyCode = session('currency', 'RUB');
            }

            $targetCurrencyCode = Currency::currencyCode($targetCurrencyCode)->first();

            return $sum * $originalCurrencyCode->ratio / $targetCurrencyCode->ratio;

        }

        public static function getCurrencySymbol()
        {
            $currency = Currency::currencyCode(session('currency', 'RUB'))->first();

            return $currency->symbol;
        }
    }
