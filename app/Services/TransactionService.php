<?php

namespace App\Services;

use Carbon\Carbon;

class TransactionService
{
    public function calculateWithdrawalFee($user, $amount)
    {
        $currentDay = Carbon::now()->dayOfWeek; // Get the current day (0 = Sunday, 6 = Saturday)

        if ($currentDay === 5) { // 5 corresponds to Friday

            if ($amount > 1000) {
                $feePercentage = ($user->account_type == 'Individual') ? 0.015 : 0.025;
            } else {
                $feePercentage = 0;
            }
        } else {

            $feePercentage = 0;
        }

        return $amount * $feePercentage;
    }
}
