@extends('layout.app')

@section('content')
    <h1 class="text-center text-4xl font-extrabold mb-12 text-gray-800">Add Purchase</h1>

    <form action="{{ route('customers.purchases.store', ['customer' => 1]) }}" method="POST" class="bg-gradient-to-r from-teal-100 via-blue-200 to-indigo-300 p-8 rounded-xl shadow-xl max-w-3xl mx-auto">
        @csrf

        <!-- Customer Name Field -->
        <div class="mb-8">
            <label for="customer_id" class="block mb-2 text-lg font-semibold text-gray-700">Customer Name</label>
            <select id="customer_id" name="customer_id" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-4 hover:ring-2 hover:ring-blue-300 focus:outline-none focus:ring-4 transition duration-300" required>
                <option value="" disabled selected>Select a customer</option>
                @foreach($allCustomers as $customer)
                    <option value="{{ $customer->id }}" {{ old('customer_id') == $customer->id ? 'selected' : '' }}>{{ $customer->name }}</option>
                @endforeach
            </select>
            @error('customer_id')
                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
            @enderror
        </div>

        <!-- Purchase Date Field -->
        <div class="mb-8">
            <label for="purchase_date" class="block mb-2 text-lg font-semibold text-gray-700">Purchase Date</label>
            <input type="date" id="purchase_date" name="purchase_date" value="{{ old('purchase_date') }}" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-4 hover:ring-2 hover:ring-blue-300 focus:outline-none focus:ring-4 transition duration-300" required />
            @error('purchase_date')
                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
            @enderror
        </div>

        <!-- Purchase Total Field -->
        <div class="mb-8">
            <label for="total_price" class="block mb-2 text-lg font-semibold text-gray-700">Purchase Total</label>
            <input type="number" id="total_price" name="total_price" value="{{ old('total_price') }}" step="0.01" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-4 hover:ring-2 hover:ring-blue-300 focus:outline-none focus:ring-4 transition duration-300" placeholder="Enter total price" required />
            @error('total_price')
                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
            @enderror
        </div>

        <!-- Submit Button -->
        <button type="submit" class="w-full py-3 px-5 bg-indigo-500 text-white font-semibold rounded-lg hover:bg-blue-500 focus:ring-4 focus:outline-none transition duration-300">
            Submit
        </button>
    </form>
@endsection
