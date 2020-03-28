@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h2>Requests</h2>
            <div class="table-responsive mt-3">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Reference No</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Name as IC</th>
                            <th>Phone Number</th>
                            <th>Address</th>
                            <th>PostCode</th>
                            <th>Bank</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Amount</th>
                            <th>DateTime</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       @forelse ($data as $item)
                            <tr>
                                <td>{{ (($data->currentPage() - 1 ) * $data->perPage() ) + $loop->iteration }}</td>
                                <td>{{$item->reference_no}}</td>
                                <td>{{$item->price}}</td>
                                <td>{{$item->quantity}}</td>
                                <td>{{$item->name_as_ic}}</td>
                                <td>{{$item->phone_number}}</td>
                                <td>{{$item->address}}</td>
                                <td>{{$item->postcode}}</td>
                                <td>{{$item->bank->name ?? ''}}</td>
                                <td>{{$item->username}}</td>
                                <td>{{$item->password}}</td>
                                <td>{{$item->amount}}</td>
                                <td>{{$item->created_at}}</td>
                                <td class="py-2">
                                    <a href="{{route('sale.delete', $item->id)}}" class="btn btn-small btn-danger" onclick="return window.confirm('Are you sure?')">Delete</a>
                                </td>
                            </tr>
                       @empty
                           <tr>
                               <td colspan="20" align="center">No Data</td>
                           </tr>
                       @endforelse
                    </tbody>
                </table>
                <div class="clearfix mt-2">
                    <div class="float-left" style="margin: 0;">
                        <p>Total <strong style="color: red">{{ $data->total() }}</strong> Items</p>
                    </div>
                    <div class="float-right" style="margin: 0;">
                        {!! $data->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
