@extends('user_template.layouts.user_prodfile_template')
@section('profilecontent')
    pending orders

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif

    <table class="table">
        <tr>
            <td>Product Id</td>
            <td>Price</td>
        </tr>
        @foreach ($pending_orders as $order)
            <tr>
                <td>
                    {{ $order->product_id }}
                </td>
                <td>
                    {{ $order->total_price }}
                </td>
            </tr>
        @endforeach

    </table>
@endsection
