<?php
namespace App\Interfaces;

interface TransactionRepositoryInterface
{
    public function all($userId);
    public function withdraw($userId, $amount,$fee);
    public function deposit($userId, $amount,$fee);
    public function getDepositHistory($userId);
    public function getWithdrawalHistory($userId);
    public function totalDeposit($userId);
    public function totalWithdraw($userId);
}
