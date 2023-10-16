<?php


namespace App\Repositories;
use App\Interfaces\TransactionRepositoryInterface;
use App\Models\Transaction;

class TransactionRepository implements TransactionRepositoryInterface
{
    protected $model;

    public function __construct(Transaction $model)
    {
        $this->model = $model;
    }

    public function withdraw($userId, $amount,$fee)
    {
        return $this->model->create([
            'user_id' => $userId,
            'amount' => $amount,
            'fee' => $fee,
            'transaction_type' => 'Withdrawal',
            'date' => date('Y-m-d'),
        ]);
    }

    public function deposit($userId, $amount,$fee)
    {
        return $this->model->create([
            'user_id' => $userId,
            'amount' => $amount,
            'fee' => $fee,
            'transaction_type' => 'Deposit',
            'date' => date('Y-m-d'),
        ]);
    }

    public function getDepositHistory($userId)
    {
        return $this->model->where('user_id', $userId)
            ->where('transaction_type', 'Deposit')
            ->get();
    }

    public function getWithdrawalHistory($userId)
    {
        return $this->model->where('user_id', $userId)
            ->where('transaction_type', 'Withdrawal')
            ->get();
    }

    public function totalDeposit($userId)
    {
        return number_format($this->model
            ->where('user_id', $userId)
            ->where('transaction_type', 'Deposit')
            ->sum('amount') ?? 0, 2);
    }

    public function totalWithdraw($userId)
    {
        return number_format($this->model
            ->where('user_id', $userId)
            ->where('transaction_type', 'Withdrawal')
            ->sum('amount') ?? 0, 2);
    }
    public function all($userId)
    {
        return $this->model->With('user')
                ->Where('user_id',$userId)->orderBy('date','asc')->get();
    }
}
