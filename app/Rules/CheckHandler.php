<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class CheckHandler implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (str_starts_with($value, '@')) {
            $fail('Não começe com @');
        }

        if (str_contains($value, ' ')) {
            $fail('Retire os espaços do seu link');
        }

        if (!preg_match('/^[a-zA-Z0-9_-]+$/', $value))
        {
            $fail('Use apenas letras, números e _ e - SEM ESPAÇOS');
        }
    }
}
