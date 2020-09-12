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
@slot('pageTitle') Distributor Information
@endslot 
@slot('page')
<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
<li class="breadcrumb-item active" aria-current="page">Distributor</li>
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
                            <table class="table table-borderd" id="dataTableNoPagingDesc3">
                                <thead>
                                    <tr>
                                        <th width="50">Sl</th> 
                                        <th>Company</th> 
                                        <th>Type</th>
                                        <th>Name & Surname</th>  
                                        <th>Email</th>
                                        <th width="100">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i=0; @endphp 
                                        @foreach($distributor as $row)
                                            <tr>
                                                <td>{{ ++$i }}</td>  
                                                <td>{{ $row->company_name}}</td> 
                                                <td>{{ $row->type}}</td>
                                                <td>{{ $row->name_surame}}</td>
                                                <td>{{ $row->email}}</td> 
                                                {{-- <td > {!! \Illuminate\Support\Str::words($row->desct, 15,'....')  !!}</td> --}}
                                                {{-- <td>{{ date('d-M-Y',strTotime($row->created_at)) }}</td>   --}}
                                                <td class="d-flex space-between" >

                                                    <button class="btn btn-sm btn-info" data-toggle="modal" data-target=".modal{{$row->id}}"><i class="fa fa-eye"></i></button>
                                                <form action="{{url('boostadmin/distributors/'.$row->id)}}" method="post"  id="deleteButton{{$row->id}}">
                                                    @csrf
                                                    @method('delete')
                                                    <input type="hidden" name="id" value="{{$row->id}}">
                                                    <button type="submit" class="btn btn-sm btn-primary" onclick="sweetalertDelete({{$row->id}})"><i class="fa fa-trash-o"></i></button>
                                                </form>

                                                <div class="modal fade modal{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                  <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                              <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body p-3">
                                                     <table class="table">
                                                         <tr>
                                                             <th width="100">Company name</th>
                                                             <td width="5">:</td>
                                                             <td>{{$row->company_name}}</td>
                                                         </tr>
                                                         <tr>
                                                             <th>Type</th>
                                                             <td>:</td>
                                                             <td>{{$row->type}}</td>
                                                         </tr>
                                                         <tr>
                                                             <th>Municipality</th>
                                                             <td>:</td>
                                                             <td>{{$row->municipality}}</td>
                                                         </tr>
                                                         <tr>
                                                             <th>Province</th>
                                                             <td>:</td>
                                                             <td>{{$row->provinces}}</td>
                                                         </tr>
                                                         <tr>
                                                             <th>Name & Surame</th>
                                                             <td>:</td>
                                                             <td>{{$row->name_surame}}</td>
                                                         </tr>
                                                         <tr>
                                                             <th>Telephone number</th>
                                                             <td>:</td>
                                                             <td>{{$row->tel_number}}</td>
                                                         </tr>
                                                         <tr>
                                                             <th>Email</th>
                                                             <td>:</td>
                                                             <td>{{$row->email}}</td>
                                                         </tr>
                                                         <tr>
                                                             <th>Coverage area</th>
                                                             <td>:</td>
                                                             <td>{{$row->coverage_area}}</td>
                                                         </tr>
                                                         <tr>
                                                             <th>Agent number</th>
                                                             <td>:</td>
                                                             <td>{{$row->agent_number}}</td>
                                                         </tr>
                                                         <tr>
                                                             <th>Customer package</th>
                                                             <td>:</td>
                                                             <td>{{$row->customer_package}}</td>
                                                         </tr>
                                                         <tr>
                                                             <th>Message</th>
                                                             <td>:</td>
                                                             <td>{{$row->message}}</td>
                                                         </tr>
                                                     </table>
                                                    </div>
                                                    </div>
                                                  </div>
                                                </div>




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
