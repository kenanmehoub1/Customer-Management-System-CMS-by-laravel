<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;
trait generateCodeTrait
{




    public function generateCode(): string
    {
        $upper = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $lower = 'abcdefghijklmnopqrstuvwxyz';
        $numbers = '0123456789';

        $code = [
            $upper[random_int(0, strlen($upper) - 1)],
            $lower[random_int(0, strlen($lower) - 1)],
            $numbers[random_int(0, strlen($numbers) - 1)]
        ];

        $allCharacters = $upper . $lower . $numbers;
        for ($i = 3; $i < 6; $i++) {
            $code[] = $allCharacters[random_int(0, strlen($allCharacters) - 1)];
        }

        shuffle($code);

        return implode('', $code);
    }
}