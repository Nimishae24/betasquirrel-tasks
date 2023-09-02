@extends('contacts.layout')
@section('content') 
<div class="card">
  <div class="card-header">View Page</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">first Name : {{ $contacts->first_name }}</h5>
        <p class="card-text">last name : {{ $contacts->last_name }}</p>
        <p class="card-text">Phone : {{ $contacts->mobile }}</p>
        <h5 class="card-title">Email : {{ $contacts->Email }}</h5>
        <p class="card-text">Address : {{ $contacts->address }}</p>
        <p class="card-text">branch : {{ $contacts->branch }}</p>
        <h5 class="card-title">mobile : {{ $contacts->mobile }}</h5>
        <p class="card-text">subject : {{ $contacts->subject }}</p>
  </div>
  </div>
</div>