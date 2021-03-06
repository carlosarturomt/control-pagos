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

                    You are logged in! {{$company_name[0]->name}}
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="form-group">
                <label for="Company">Seleccione empresa:</label>
                <select class="form-control" id="Company">
                    
                    @foreach ($company_name as $company )
                        <option value="">{{ $company->name }}</option>                    
                    @endforeach
                </select>
            </div>
        </div>
    </div>
</div>
@endsection