<?php

/**
 * Convert the views number to the K format
 *
 * @param   float   $value  The number to be transformed
 * @return  array
 */
function formatViews($value) {
    // If the number is less than thousands
    if(strlen($value) < 4) {
        return $value;
    }

    $number = round($value);

    // Format the number
    $number = number_format($number);
    $numberParts = explode(',', $number);

    // Subtract one (we're only interested in thousands realm)
    $numberPartsCount = count($numberParts) - 1;

    // Number sections
    $numberSection = ['k', 'm', 'b', 't'];

    $count = $numberParts[0].((int)$numberParts[1][0] !== 0 ? '.'.$numberParts[1][0] : '');

    $decimals = $numberSection[$numberPartsCount - 1];

    return ['count' => $count, 'decimals' => $decimals];
}