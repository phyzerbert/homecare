@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="filter clearfix">
                <h2 class="float-left">Blocked Phone Numbers</h2>
                {{-- <form action="" class="form-inline float-right" method="POST">
                    @csrf
                    <input type="search" name="keyword" class="form-control form-control-sm" placeholder="Keyword"
                        value="{{$keyword}}" />
                    <button type="submit" class="btn btn-sm btn-primary ml-2">Search</button>
                </form> --}}
                <button type="button" class="btn btn-sm btn-primary mt-2 float-right" data-toggle="modal" data-target="#addModal">Add New</button>
            </div>
            <div class="table-responsive mt-2">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width:50px">#</th>
                            <th>Phone Number</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($data as $item)
                        <tr>
                            <td>{{ (($data->currentPage() - 1 ) * $data->perPage() ) + $loop->iteration }}</td>
                            <td>{{$item->phone_number}}</td>
                            <td class="py-2" width="100">
                                <a href="{{route('blocked_phones.delete', $item->id)}}" class="btn btn-sm btn-danger" onclick="return window.confirm('Are you sure?')">Delete</a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" align="center">No Data</td>
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

<div class="modal" id="addModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Phone Number</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <form action="{{route('blocked_phones.create')}}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Phone Number</label>
                        <input type="text" name="phone_number" class="form-control" required />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit"class="btn btn-primary">Save</button>
                    <button type="button" class="btn btn-danger ml-2" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
