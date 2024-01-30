@extends('admin.layouts.main-layout')

@section('content')
    <h2 class="text-16 font-bold"> About Us </h2>
    <form action="{{ route('about-us') }}" method="POST" class="mt-10">
        @csrf
        <div class="mb-6">
            <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900">Content</label>
            <textarea type="text" rows="5" required name="content"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full p-2.5">{{ $data->content }}</textarea>
        </div>
        <div class="flex justify-end">
            <button type="submit"
                class="flex w-20 justify-center  rounded-md  bg-primary  px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-primary-2 ">Submit</button>
        </div>
    </form>
@endsection
