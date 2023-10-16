@extends('layouts.master')
@section('title', 'Transaction History')
@section('content')

<div class="row mb-1">
    <div class="col-8">
        <h2 class="content-header-title float-left mb-0">Transaction History</h2>
    </div>
</div>
<div class="content-body">
    <!-- Basic Tables start -->
    <div class="row" id="basic-table">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="text-center">Transaction ID</th>
                                    <th class="text-center">Date</th>
                                    <th class="text-center">User</th>
                                    <th class="text-center">Transaction Type</th>
                                    <th class="text-center">Amount</th>
                                    <th class="text-center">Fee</th>

                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $balance=0;
                                @endphp
                                @foreach($transactions as $transaction)
                                @php
                                    $balance=($transaction->transaction_type=='Withdraw')?-$transaction->amount:+$transaction->amount;
                                    $balance=$balance-$transaction->fee;
                                @endphp
                                    <tr>
                                        <td class="text-center">{{ $transaction->id }}</td>
                                        <td class="text-center">{{ date('d F,Y',strtotime($transaction->date)) }}</td>
                                        <td class="text-center">{{ $transaction->user->name }}</td>
                                        <td class="text-center">{{ $transaction->transaction_type }}</td>
                                        <td class="text-right">{{ number_format($transaction->amount,2) }}</td>
                                        <td class="text-right">{{ number_format($transaction->fee,2) }}</td>


                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th colspan="4" class="text-right">Current Balance:</th>
                                    <th class="text-right" colspan="2">{{number_format($balance,2)}}</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
