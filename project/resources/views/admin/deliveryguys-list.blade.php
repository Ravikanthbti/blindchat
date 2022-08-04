@extends('admin_dashboard.dashboard')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-dark">
                </div>
                <div class="tools"> </div>
            </div>
            <div class="portlet-body">
                <table class="table table-striped table-bordered table-hover" id="sample_1">

                    <thead>
                    <tr>
                        <th>SNo.</th>
                        <th>ID#</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Address</th>
                        
                    </tr>
                    </thead>

                    <tbody>
                    @php $i=0;@endphp
                    @foreach($deliveryguys as $deliveryguy)
                        @php $i++;@endphp
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $deliveryguy->id}}</td>
                            <td>{{ $deliveryguy->name}}</td>
                            <td>{{ $deliveryguy->phone}}</td>
                            <td>{{ $deliveryguy->email}}</td>
                            <td>{{ $deliveryguy->address}}</td>
                          
                           
                        </tr>          
                    @endforeach

                    </tbody>
                </table>
                <div class="text-center">

                </div>
            </div>
        </div>

    </div>
</div>
@endsection

