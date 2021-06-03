@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="text-lg font-bold">Paper Access Code</div>
            <div class="text-center py-5">
                <form action="{{ route('assessment') }}" method="post">
                    @csrf
                    <div class="form-group flex justify-center">
                        <input type="text" class="form-control w-50" placeholder="Enter access code" required>
                    </div>
                    <button type="submit" class="rounded-lg bg-blue-300 font-bold my-4 py-2 px-3">Validate</button>
                </form>
            </div>
            <div class="text-red-500 font-bold">You have 40mins to complete this paper</div>
        </div>
    </div>
</div>
@endsection
