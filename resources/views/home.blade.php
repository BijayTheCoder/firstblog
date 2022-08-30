@extends('layouts.master')

@section('content')
<div style="margin-top: 15px" class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if(Auth::user()->is_admin !== 1)
                <div class="card-header">User Dashboard</div>
                @endif
                @if(Auth::user()->is_admin == 1)
                <div class="card-header">Admin Panel</div>
                @endif
                <div class="card-body">
                    @if (session('error'))
                    <div class="alert alert-danger">
                      {{ session('error') }}
                    </div>
                    @endif
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(Auth::user()->is_admin == 1)
                        <div>
                            <h1>You're an admin</h1>
                        </div>
                    @endif

                    You are logged in!

                </div>
            </div>
        </div>
    </div>
</div>
@endsection