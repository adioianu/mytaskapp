@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                    <br>
                    <a href="/tasks" class="btn btn-primary btn-lg " tabindex="-1" role="button" >View Tasks</a>
                    <a href="/create" class="btn btn-secondary btn-lg " tabindex="-1" role="button" >Create Task</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
