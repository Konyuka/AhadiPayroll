@extends('layouts.main')

@section('content')
<div class="content container-fluid">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h4 class="page-title">Add New Employee</h4>

            @include('includes.messages')
            <form method="POST" action="{{ route('employee.store')}}">
                @csrf
                <div class="form-group">
                    <label>Database Number: </label>
                <input type="text" class="form-control" name="id" value="{{old('id')}}">
                </div>
                <div class="form-group">
                    <label>Employee Names: </label>
                    <input type="text" class="form-control" name="names" value="{{old('names')}}">
                </div>
                <div class="form-group">
                    <label>Company Name: </label>
                    <input type="text" class="form-control" name="company" value="{{old('company')}}">
                </div><div class="form-group">
                    <label>Collector Number: </label>
                    <input type="text" class="form-control" name="tag" value="{{old('tag')}}">
                </div>
                <div class="form-group">
                    <label>ID Number: </label>
                    <input type="text" class="form-control" name="identity" value="{{old('identity')}}">
                </div>
                <div class="form-group">
                    <label>Phone Number: </label>
                    <input type="text" class="form-control" name="phone" value="{{old('phone')}}">
                </div>
                <div class="form-group">
                    <label>Email address: </label>
                    <input type="text" class="form-control" name="email" value="{{old('email')}}">
                </div>
                <div class="form-group">
                    <label>Job Title: </label>
                    <input type="text" class="form-control" name="job_title" value="{{old('title')}}">
                </div>
                <div class="form-group">
                    <label>Bank Branch: </label>
                    <input type="text" class="form-control" name="bank_branch" value="{{old('bank_branch')}}">
                </div>
                <div class="form-group">
                    <label>Account Number: </label>
                    <input type="text" class="form-control" name="account" value="{{old('account')}}">
                </div>
                <div class="submit-section">
                    <button class="btn btn-primary submit-btn" type="submit">Save New Employee </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
