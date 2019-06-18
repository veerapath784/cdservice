@extends('backend.layout.master')
@section('breadcrumb')
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="/admin">หน้าหลัก</a>
    </li>
    <li class="breadcrumb-item active">{{config('app.name')}}</li>
</ol>
@endsection
