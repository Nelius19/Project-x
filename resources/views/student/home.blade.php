@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h5 class="font-bold text-lg border-b border-gray-900 text-uppercase">Principles of Marketing</h5>
            <div class="flex items-center font-bold shadow-md rounded-full border-2 border-gray-100 bg-blue-300 hover:bg-gray-100 py-3 px-5 mt-2">
                <div class="">
                    <div class="text-center text-lg"><u>#C7</u></div>
                    <div class="pt-2">Author: Simon Njuguna</div>
                    <div>Status: Open</div>
                    <div>Category: Lecturer Marking</div>
                    <div>Time: 1 Hour 30 Minutes</div>
                </div>
                <div class="ml-auto">
                    <a href="/auth/{#C7}" class="cursor-pointer bg-blue-500 hover:no-underline rounded-full py-2 px-4">ATTEMPT</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <select name="" id="" class="form-control form-control-sm focus:border-0">
                <option value="" selected disabled>Filter</option>
                <option value="">Option 1</option>
                <option value="">Option 2</option>
            </select>
            <div class="pt-5">To access statistics and performance records of individual paper, access the <a href="" class="text-red-600 font-bold">Leaderboard</a></div>
        </div>
    </div>
</div>
@endsection
