@extends('admin.layout.master') 
@section('content') 
@push('css')
<style>
    .fa {
        padding: 4px;
        font-size: 16px;
    }
    .m-l-approve{
        margin-left:65px; margin-top:-35px;
    }
    .m-l-reject{
        margin-left:140px; margin-top:-27px;
    } 
</style>
@endpush 
@include('elements.alert') 
@component('admin.layout.inc.breadcrumb') 
@slot('pageTitle') Subscriptio Order List
@endslot 
@slot('page')
<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
<li class="breadcrumb-item active" aria-current="page">Subscription</li>
@endslot
 @endcomponent
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <!-- <div class="card-header">
                        <h5> Product List</h5>
                    </div> -->
                <div class="card-body">  
                        <div class="card-body order-datatable">
                            <div class="text-right pb-3">
                                {{-- <a href="{{ url('boostadmin/customer/new-profile') }}" class="btn btn-md btn-info" title="create">Add New</a> --}}
                            </div> 
                            {{-- <hr>  --}}
                                <table class="table table-borderd" id="dataTableNoPagingDesc3">
                                    <thead>
                                        <tr>
                                            <th width="50">Sl</th>  
                                            <th>Customer Name</th>  
                                            <th>Order Invoice</th>
                                            <th>Delevery Date</th>
                                            <th>Delevery Frequency</th>
                                            <th>Next Delivery Frequency</th>
                                            <th>Order Status</th> 
                                            <th>Payment Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $i=0; @endphp 
                                            @foreach($subscription as $row)
                                                <tr>
                                                    <td>{{ ++$i }}</td>  
                                                    <td>{{ $row->user->first_name.' '.$row->user->last_name}}</td> 
                                                    <td>{{ $row->invoice }}</td>
                                                    <td>{{ $row->delivery_date}}</td>
                                                    <td>{{ $row->delivery_frequency }}</td> 
                                                    <td>
                                                        @if($row->delivery_frequency == 'Only at once')
                                                        @elseif($row->delivery_frequency == 'Every 3 weeks')
                                                        {{ date('d-M-Y',strTotime($row->delivery_date.'+21 days')) }}
                                                        @elseif($row->delivery_frequency == 'Every 4 weeks')
                                                        {{ date('d-M-Y',strTotime($row->delivery_date.'+28 days')) }}
                                                        @elseif($row->delivery_frequency == 'Every 5 weeks')
                                                        {{ date('d-M-Y',strTotime($row->delivery_date.'+35 days')) }}
                                                        @elseif($row->delivery_frequency == 'Every 6 weeks')
                                                        {{ date('d-M-Y',strTotime($row->delivery_date.'+42 days')) }}
                                                        @endif
                                                    </td>
                                                    <td>{{ $row->order_status }}</td> 
                                                    <td>{{ $row->payment_status }}</td>
                                                    <td class="d-flex justify-content-between" >
                                                        <ul>
                                                            <li ><a href="{{ url('boostadmin/subscription-order-list/details/'.$row->id)}}" id="" title="Edit"><button class="btn btn-sm btn-info" ><i class="fa fa-list"></i></button> </a></li>
                                                             {{-- <li><a href="{{ url('boostadmin/customer/edit/'.$row->id.'/update-customer')}}" id="" title="Edit"><button class="btn btn-sm btn-warning" ><i class="fa fa-edit"></i></button> </a></li>
                                                            <li> 
                                                                <form action="{{ url('boostadmin/customer/'.$row->id) }}" method="post"  id="deleteButton{{$row->id}}">
                                                                    @csrf
                                                                    @method('delete') 
                                                                    <button type="submit" class="btn btn-sm btn-primary" onclick="sweetalertDelete({{$row->id}})"><i class="fa fa-trash-o"></i></button>
                                                                </form> 
                                                            </li> --}}
                                                        </ul>
                                                    </td>
                                                </tr> 
                                            @endforeach 
                                    </tbody>
                                </table>
                            </div>
                        </div>  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('js')
  <script>
       $(".btnClosePopup").click(function () {
            $(".feednewsmodal").modal("hide");
        });

        $('#saveReason').click(function(e){ 
    e.preventDefault();
    const name = $('#rej_name').val(); 
    if(name == '' ){
        alert ('Required Filed Must be filled');
    }else{
        var formData = $("#rejectId").serialize(); 
        $.ajax({
            type: 'POST',
            url:"{{ url('/andbaazaradmin/reject-name/') }}", 
            data: formData,
            dataType: "json",
            success: function(response){
                var name = $('#rej_name').val(''); 
                if(response){
                    $("#again").load(" #again");
                } 
            }
        })
    }
});
  </script>
@endpush
