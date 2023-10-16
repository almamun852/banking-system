<?php

namespace App\Http\Controllers;

use App\Http\Requests\TransactionRequest;
use App\Repositories\TransactionRepository;
use App\Repositories\UserRepository;
use App\Services\TransactionService;
use Illuminate\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    private $transactionRepository, $userRepository;

    public function __construct(TransactionRepository $transactionRepository, UserRepository $userRepository)
    {
        $this->transactionRepository = $transactionRepository;
        $this->userRepository = $userRepository;
    }

    public function dashboard(): View
    {
        $userId = auth()->user()->id;
        $withdraw = $this->transactionRepository->totalWithdraw($userId);
        $deposit = $this->transactionRepository->totalDeposit($userId);
        return view('dashboard', compact('withdraw', 'deposit'));
    }

    public function depositPage()
    {
        return view('users.deposit');
    }

    public function withdrawPage()
    {
        return view('users.withdraw');
    }

    public function deposit(Request $request, TransactionService $transactionService)
    {
        $request->validate([
            'amount' => 'required|numeric|min:0.01',
        ]);

        $user = auth()->user();
        $amount = $request->amount;

        $fee = 0;

        if ($this->transactionRepository->withdraw($user->id, $amount,$fee)) {
            $this->userRepository->balanceAdd($user->id,$amount);
            return response()->json($this->jsonResponse("Deposit Successful.", url()->previous(), [], true));
        } else {
            return response()->json($this->jsonResponse("Failed To Deposit.", url()->previous(), [], false));
        }
    }

    public function withdraw(Request $request, TransactionService $transactionService)
    {
        $request->validate([
            'amount' => 'required|numeric|min:0.01',
        ]);

        $user = auth()->user();
        $amount = $request->amount;

        $fee = $transactionService->calculateWithdrawalFee($user, $amount);
        $amount -= $fee;

        if ($this->transactionRepository->withdraw($user->id, $amount,$fee)) {
            $this->userRepository->balanceReduct($user->id,$amount);
            return response()->json($this->jsonResponse("Withdrawal Successful.", url()->previous(), [], true));
        } else {
            return response()->json($this->jsonResponse("Failed To Withdrawal.", url()->previous(), [], false));
        }
    }

    public function depositHistory()
    {
        $user_id = auth()->id();
        $depositHistory = $this->transactionRepository->getDepositHistory($user_id);
        return view('users.deposit_history', compact('depositHistory'));
    }

    public function withdrawalHistory()
    {
        $user_id = auth()->id();
        $withdrawalHistory = $this->transactionRepository->getWithdrawalHistory($user_id);
        return view('users.withdrawal_history', compact('withdrawalHistory'));
    }

    public function show(): View
    {
        $userId = auth()->user()->id;
        $transactions = $this->transactionRepository->all($userId);
        return view('users.all_transactions', compact('transactions'));
    }

    private function jsonResponse($message, $url, $data, $flag)
    {
        return [
            'message' => $message,
            'redirectUrl' => $url,
            'data' => $data,
            'status' => $flag,
        ];
    }
}
