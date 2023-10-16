@extends('layouts.master')
@section('title', 'Deposit ')
@section('content')

<div class="row mb-1">
    <div class="col-8">
        <h2 class="content-header-title float-left mb-0">Deposit</h2>
    </div>
</div>
<div class="content-body">
    <!-- Basic Tables start -->
    <div class="row" id="basic-table">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form class="row" id="ajax_form" action="{{ route('deposit') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-6 form-group">
                            <strong>Amount:</strong>
                            <input type="text" name="amount" placeholder="amount" class="form-control custom-input" required>
                            <span style="color: red"></span>
                        </div>

                        <div class="col-12 d-flex flex-row-reverse">
                            <button class="btn btn-primary btn-icon" id="save-btn" type="submit">
                                <i data-feather='save'></i> Deposit
                            </button>
                            <button class="btn btn-warning btn-icon mr-1" type="reset">
                                <i data-feather='reset'></i> Reset
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
