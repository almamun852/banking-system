@extends('layouts.master')
@section('title', 'User List')
@section('content')

<div class="row mb-1">
    <div class="col-8">
        <h2 class="content-header-title float-left mb-0">User List</h2>
    </div>
    <div class="col-4 d-flex flex-row-reverse">
        <a class="btn btn-primary btn-round btn-sm btn_modal" href="{{ route('users.create') }}">Add New</a>
    </div>
</div>
<div class="content-body">
    <!-- Basic Tables start -->
    <div class="row" id="basic-table">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="" method="get" class="row">
                        @csrf
                        <div class="col-md-3 col-sm-6 form-group">
                            <strong>User Name:</strong>
                            <input class="form-control custom-input" name="name" placeholder="User Name" value="{{ request()->name }}">
                        </div>
                        <div class="col-md-3 col-sm-6 form-group">
                            <strong></strong><br>
                            <button type="submit" class="btn-icon btn btn-primary btn-round btn-sm ">
                                <i data-feather='search'></i>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-center">Sl/No</th>
                                <th class="text-center">Name</th>
                                <th class="text-center">Account Type</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">Balance</th>

                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($users as $key => $dataInfo)
                            <tr>
                                <td class="text-center">{{ ++$key }}</td>
                                <td class="text-center">{{ $dataInfo->name }}</td>
                                <td class="text-center">{{ $dataInfo->account_type }}</td>
                                <td class="text-center">{{ $dataInfo->email }}</td>
                                <td class="text-center">{{ number_format($dataInfo->balance,2) }}</td>

                                <td class="text-center">
                                    <a href="{{ route('users.edit', [$dataInfo->id]) }}" class="btn btn-warning btn-sm btn-icon ">
                                        <i data-feather='edit'></i>
                                    </a>
                                    <a href="{{ route('users.destroy', [$dataInfo->id]) }}" class="btn btn-danger btn-sm btn-icon delete">
                                        <i data-feather='trash-2'></i>
                                    </a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <th colspan="9" class="text-center text-danger ">No Data Available</th>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="row mt-1 mr-1 ">
                    <div class="col-md-12 d-flex flex-row-reverse">
                        {!! $users->links('pagination::bootstrap-4') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Basic Tables end -->
</div>
@endsection
