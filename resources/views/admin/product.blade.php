@extends('admin.layouts.main-layout')


@section('content')
    <h2 class="text-16 font-bold"> Product </h2>

    <a href="{{ route('admin-product-form') }}" type="submit"
        class="mt-5 flex justify-end items-end bg-green-500 rounded-lg p-2 text-white w-fit">Add</a>


    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-10">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Product name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Price
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Image Url
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $value)
                    <tr class="odd:bg-white  even:bg-gray-50 ">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                            {{ $value->name }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $value->price }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $value->image }}

                        </td>
                        <td class="px-6 py-4">
                            <form action="{{ route('admin-product-delete', ['id' => $value->id]) }}" method="POST"
                                onsubmit="return confirm('Are you sure you want to delete this item?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 rounded-lg p-2 text-white">Delete</button>
                            </form>

                        </td>
                    </tr>
                @endforeach


        </table>
    </div>
@endsection
