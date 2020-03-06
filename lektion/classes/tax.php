<?

class GeneralCalculations   {
    public static function taxCalc($price, $taxAmount) {
        $tax = $price * $taxAmount;
        return $prisMedMoms = $price + $tax;
    }
    public static function addition($val1, $val2)   {
        $result = $val1 + $val2;
        return $result;
    }
    public static function celsiusToFahrenheit($c)  {
        return $c * 9 / 5 + 32;
    }
}

