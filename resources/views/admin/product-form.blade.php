@extends('admin.layouts.main-layout')

@section('content')
    <h2 class="text-16 font-bold"> Insert Product </h2>
    <form action="{{ route('admin-product-insert') }}" method="POST" class="mt-5">
        @csrf
        <div class="mb-6">
            <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
            <input type="text" required name="name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full p-2.5">
        </div>
        <div class="mb-6">
            <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900">Price</label>
            <input required name="price" type="number"
                class="appearance-none bg-gray-50 border  border-gray-300 text-gray-900 text-sm rounded-lg  block w-full p-2.5">
        </div>
        <div class="mb-6">
            <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900">Image URL</label>
            <input type="text" required name="image" id="imageInput"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full p-2.5">
        </div>

        <div class="mb-6">
            <label class="block mb-2 text-sm font-medium text-gray-900">Image Preview</label>
            <div id="imagePreview" class="max-w-xs ">
                <!-- Image preview will be displayed here -->
            </div>
        </div>

        <div class="flex justify-end">
            <button type="submit"
                class="flex w-20 justify-center  rounded-md  bg-primary  px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-primary-2 ">Submit</button>
        </div>
    </form>

    <script>
        // Get the input and preview elements
        const imageInput = document.getElementById('imageInput');
        const imagePreview = document.getElementById('imagePreview');

        // Add an event listener for the input's change event
        imageInput.addEventListener('input', function() {
            // Get the value from the input
            const imageUrl = this.value;

            // Update the image preview element
            imagePreview.innerHTML = imageUrl ?
                `<img src="${imageUrl}" alt="Preview" class="max-w-full h-auto">` :
                '';
        });
    </script>
@endsection
