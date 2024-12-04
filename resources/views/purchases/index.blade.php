@extends('layout.app')

@section('content')
    <h1 class="text-center text-4xl font-extrabold mb-8 text-blue-600">Purchases List</h1>

    <div class="overflow-x-auto shadow-lg rounded-lg border border-gray-200 mb-8">
        <table id="purchaseTable" class="min-w-full bg-white text-gray-700 table-auto">
            <thead class="bg-gradient-to-r from-blue-500 to-purple-600 text-white">
                <tr>
                    <th class="px-6 py-3 text-left">Purchase ID</th>
                    <th class="px-6 py-3 text-left">Customer Name</th>
                    <th class="px-6 py-3 text-left">Purchase Date</th>
                    <th class="px-6 py-3 text-left">Total Price</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach ($purchases as $purchase)
                    <tr class="hover:bg-gray-50 transition duration-300">
                        <td class="px-6 py-4">{{ $purchase->id }}</td>
                        <td class="px-6 py-4">{{ $purchase->customer->name }}</td>
                        <td class="px-6 py-4">{{ $purchase->purchase_date }}</td>
                        <td class="px-6 py-4">${{ number_format($purchase->total_price, 2) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
        $(document).ready(function() {
            $('#purchaseTable').DataTable();
        });
    </script>

    @if (session('success'))
        <x-success-modal id="success-modal" title="Success" content="{{ session('success') }}" />
        <script type="text/javascript">
            document.addEventListener("DOMContentLoaded", function() {
                toggleModal('success-modal');
            });
        </script>
    @endif
@endsection
