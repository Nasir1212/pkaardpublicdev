<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        //
        'card_registation_add',
        'is_phone_exit',
        'get_product_by_d_and_c',
        'check_card_number',
        'send_otp',
        'check_card_otp',
        'insert_reviews_reating',
        'insert_sub_reviews_reating',
        'check_Registation_number',
        'add_physical_card_no',
        'confirm_with_promo_code',
        'confirm_without_promo_code'
    ];
}
