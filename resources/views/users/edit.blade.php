@extends('layouts.master')
@section('title', 'User Edit')
@section('content')

<div class="row mb-1">
    <div class="col-8">
        <h2 class="content-header-title float-left mb-0">User Edit</h2>
    </div>
    <div class="col-4 d-flex flex-row-reverse">
        <a class="btn btn-primary btn-round btn-sm" href="{{ route('users.index') }}">List View</a>
    </div>
</div>
<div class="content-body">
    <!-- Basic Tables start -->
    <div class="row" id="basic-table">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form class="row" id="ajax_form" action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="col-6 form-group">
                            <strong>Name:</strong>
                            <input type="text" name="name" value="{{ $user->name }}" class="form-control custom-input" required>
                            <span style="color: red"></span>
                        </div>
                        <div class="col-6 form-group">
                            <strong>Account Type:</strong>
                            <select class="form-control custom-input" name="account_type" required>
                                <option value="Individual" @if($user->account_type == 'Individual') selected @endif>Individual</option>
                                <option value="Business" @if($user->account_type == 'Business') selected @endif>Business</option>
                            </select>
                        </div>
                        <div class="col-6 form-group">
                            <strong>Email:</strong>
                            <input type="email" name="email" value="{{ $user->email }}" class="form-control custom-input" required>
                            <span style="color: red"></span>
                        </div>
                        <div class="col-6 form-group">
                            <strong>Password:</strong>
                            <input type="password" name="password" placeholder="Enter new password" class="form-control custom-input">
                            <span style="color: red"></span>
                        </div>
                        <div class="col-12 d-flex flex-row-reverse">
                            <button class="btn btn-primary btn-icon" id="save-btn" type="submit">
                                <i data-feather='save'></i> Update
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
