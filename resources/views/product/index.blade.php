@extends('layout')
@section('title','First')
@include('include.header')
@section('body')
<table class="table">
    <thead>
        <tr>
    <th scope="col">#</th>
    <th scope="col">First</th>
    <th scope="col">Last</th>
    <th scope="col">Handle</th>
    </tr>
    </thead>
    <tbody>
   <tr>
    <th scope="row">1</th>
    <td>Mark</td>
    <td>auto</td>
    <td>@odo</td>
   </tr>
   <tr>
    <th scope="row">2</th>
    <td>loren</td>
    <td>manual</td>
    <td>@obey</td>

   </tr>

    </tbody>


</table>

