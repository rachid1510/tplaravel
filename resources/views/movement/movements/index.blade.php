@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
          

            <div class="col-md-10">
                <div class="panel panel-default">
                    <div class="panel-heading">Movements</div>
                    <div class="panel-body">
                        <a href="{{ url('/movement/movements/create') }}" class="btn btn-success btn-sm" title="Add New movement">
                            <i class="fa fa-plus" aria-hidden="true"></i>@lang('Add New')
                        </a>

                        <form method="GET" action="{{ url('/movement/movements') }}" accept-charset="UTF-8" class="navbar-form navbar-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <!-- <div class="table-responsive"> -->
                        <div class="panel-body">
                         <table class="table table-bordered" id="liste">
                            <!-- <table class="table table-borderless"> -->
                                <thead>
                                    <tr>
                                        <th>#</th><th>SSID </th> <th>Provider</th><th>Order Ref</th><th>Plan</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($movements as $item)
                                    <tr>
                                        <td>{{ $loop->iteration or $item->id }}</td>
                                        <td>{{ $item->provider }}</td><td>{{ $item->order_ref }}</td>
                                        <td>{{ $item->plan }}</td>

                                        <td style="width:20%">
                                            <a href="{{ url('/movement/movements/' . $item->id) }}" title="View movement"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/movement/movements/' . $item->id . '/edit') }}" title="Edit movement"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/movement/movements' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-xs" title="Delete movement" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $movements->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
