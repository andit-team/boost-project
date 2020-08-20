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
@slot('pageTitle') Product
@endslot 
@slot('page')
<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
<li class="breadcrumb-item active" aria-current="page">Product</li>
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
                            <div class="text-right">
                                <a href="{{ url('boostadmin/products/new-products/new') }}" class="btn btn-md btn-info" title="create">Add New</a>
                            </div> 
                            <hr>
                            <table class="table table-borderd" id="dataTableNoPagingDesc3">
                                <thead>
                                    <tr>
                                        <th width="50">Sl</th>  
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Weight</th> 
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i=0; @endphp 
                                        @foreach($product as $row)
                                            <tr>
                                                <td>{{ ++$i }}</td>  
                                                <td width="500">{{ $row->product_name}}</td>
                                                <td width="200">{{ $row->price}} €</td>
                                                <td>{{ $row->weight }}</td>  
                                                <td class="d-flex justify-content-between" >
                                                    <ul style="margin-left:200px!important">
                                                        <li><a href="#" id="" title="Edit"><button class="btn btn-sm btn-warning" ><i class="fa fa-edit"></i></button> </a></li>
                                                        <li> 
                                                            <form action="#" method="post"  id="deleteButton{{$row->id}}">
                                                                @csrf
                                                                @method('delete') 
                                                                <button type="submit" class="btn btn-sm btn-primary" onclick="sweetalertDelete({{$row->id}})"><i class="fa fa-trash-o"></i></button>
                                                            </form> 
                                                        </li>
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
