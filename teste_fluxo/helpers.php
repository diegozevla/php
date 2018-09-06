<?php

function dd($dump)
{
    echo '<pre>';
    var_dump($dump);
    echo '</pre>';

    die();
}

function text_summary($text, $maximum_of_characters)
{
    $space_for_ellipsis = 4;

    $new_text = $text;
    if (strlen($new_text) > ($maximum_of_characters - $space_for_ellipsis) ) {
        $new_text = substr($text, 0, $maximum_of_characters - $space_for_ellipsis);
    }

    return $new_text . ' ...';
}

function format_phone($number) {

    $ddd = substr($number, 0, 2);
    if (strlen($number) === 11) {
        $number = substr($number, 2, 5) ."-". substr($number, 6, 4);
    } else {
        $number = substr($number, 2, 4) ."-". substr($number, 5, 4);
    }

    return [$ddd, $number];
}

function format_date($date) {

    $new_date = new DateTime($date);
    return $new_date->format('d/m/Y');

}
