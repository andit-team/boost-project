@extends('merchant.master')
@section('content')
@push('css')


@endpush
@include('elements.alert')


<section class="dashboard-section section-b-space">
  <div class="container">
      <div class="row">
        @include('layouts.inc.sidebar.vendor-sidebar',[$active ='smeInventory'])
        <div class="col-md-9"> 
            <div class="top-sec">
                <h3>SME Inventory</h3>
                <a href="{{ url('merchant/sme/inventories/new') }}" class="btn btn-sm btn-solid float-right">add New</a>
            </div> 
            <section class="tab-product m-0">  
                        <ul class="nav nav-tabs nav-material myTab" id="top-tab" role="tablist">
                            <li class="nav-item"><a class="nav-link active show" id="top-home-tab" data-toggle="tab" href="#top-home" role="tab" aria-selected="true"><i class="icofont icofont-ui-home"></i>Active</a>
                                <div class="material-border"></div>
                            </li>
                            <li class="nav-item"><a class="nav-link" id="profile-top-tab" data-toggle="tab" href="#top-profile" role="tab" aria-selected="false"><i class="icofont icofont-man-in-glasses"></i>Out of Stock</a>
                                <div class="material-border"></div>
                            </li>
                        </ul>
                        <div class="tab-content nav-material" id="top-tabContent">
                            <div class="tab-pane fade active show" id="top-home" role="tabpanel" aria-labelledby="top-home-tab">
                                <div class="card dashboard-table mt-0">
                                    <div class="card-body">
                                        <div class="top-sec w-50">
                                            <input type="text" name="search" class="form-control" placeholder="Search" id="search" autocomplete="off">
                                            <select name="color_id" id="color_id" class="form-control"> 
                                                <option value="select">select color</option> 
                                                @foreach($color as $row)
                                                  <option value="{{$row->slug}}" selected>{{$row->name}}</option> 
                                                @endforeach
                                            </select>
                                        </div>
                                        <table class="table-responsive-md table mb-0 table-striped" id="example22">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Color</th>
                                                    <th scope="col" class="text-left">product name</th>
                                                    <th scope="col" class="text-right">price</th>
                                                    <th scope="col" class="text-right">stock</th>
                                                    <th scope="col" class="text-right">sales</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody id="serchInventory">
                                                @forelse($inventories as $row)
                                                    <tr>
                                                        <td>{{$row->color_name}}</td>
                                                        <td class="text-left">{{$row->item->name}} 
                                                            {{-- <small>({{ $row->invenMeta->value }})</small> --}}
                                                        </td>
                                                        <td class="text-right">{{number_format($row->price,2)}}</td>
                                                        <td class="text-right">{{$row->qty_stock}}</td>
                                                        <td class="text-right">2000</td>
                                                        <td class="">
                                                            <ul>
                                                                <li><a href="{{ url('merchant/sme/inventrories/update/'.$row->slug.'/smeinventroyupdate') }}"><button class="btn btn-sm btn-warning" data-toggle="modal" data-original-title="test" data-target="#inventoryEditModal{{$row->id}}"><i class="fa fa-edit"></i> </button></a></li>
                                                                <li>
                                                                    <form action="{{ url('/merchant/sme/inventories/'.$row->id) }}" method="post" style="margin-top:-2px" id="deleteButton{{$row->id}}">
                                                                        @csrf
                                                                        @method('delete')
                                                                        <button type="submit" class="btn btn-sm btn-primary" onclick="sweetalertDelete({{$row->id}})"><i class="fa fa-trash-o"></i></button>
                                                                    </form>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr> 
                                                    @empty
                                                    <tr>
                                                        <td colspan="7">No Product found</td>
                                                    </tr> 
                                                @endforelse
                                            </tbody> 
                                        </table>
                                        <br>
                                        <div>Showing {{ $inventories->firstItem() }} to {{ $inventories->lastItem() }}
                                            of total {{$inventories->total()}} entries</div>
                                        {{$inventories->links()}}
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="top-profile" role="tabpanel" aria-labelledby="profile-top-tab">
                                <div class="card dashboard-table mt-0">
                                    <div class="card-body">
                                        <div class="top-sec w-50">
                                            <input type="text" class="form-control" id="serchOutStock" placeholder="Search">
                                            <select name="color_id" id="color_name" class="form-control"> 
                                                <option value="Select" selected>Select Color</option>
                                                @foreach($color as $row)
                                                  <option value="{{$row->slug}}">{{$row->name}}</option> 
                                                @endforeach
                                            </select>
                                        </div>
                                        <table class="table-responsive-md table mb-0 table-striped" id="example23">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Color</th>
                                                    <th scope="col" class="text-left">product name</th>
                                                    <th scope="col" class="text-right">price</th>
                                                    <th scope="col" class="text-right">stock</th>
                                                    <th scope="col" class="text-right">sales</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse($inventories as $row)
                                                 @if($row->qty_stock <=0)
                                                    <tr>
                                                        <td>{{$row->color_name}}</td>
                                                        <td class="text-left">{{$row->item->name}}
                                                            {{-- <small>({{ $row->invenMeta->value }})</small> --}}
                                                        </td>
                                                        <td class="text-right">{{number_format($row->price,2)}}</td>
                                                        <td class="text-right">{{$row->qty_stock}}</td>
                                                        <td class="text-right">2000</td>
                                                        <td class="d-flex justify-content-between">
                                                            <ul>
                                                                <li><a href="{{ url('merchant/inventories/update/'.$row->slug.'/invertoryupdate') }}" ><button class="btn btn-sm btn-warning" ><i class="fa fa-edit"></i> </button></a></li>
                                                                <li>
                                                                    <form action="{{ url('/merchant/inventories/'.$row->id) }}" method="post" style="margin-top:-2px" id="deleteButton{{$row->id}}">
                                                                        @csrf
                                                                        @method('delete')
                                                                        <button type="submit" class="btn btn-sm btn-primary" onclick="sweetalertDelete({{$row->id}})"><i class="fa fa-trash-o"></i></button>
                                                                    </form>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                    @endif
                                                    @empty
                                                    <tr>
                                                        <td colspan="7">No Product found</td>
                                                    </tr>
                                                @endforelse
                                            </tbody>
                                        </table> 
                                        <br>
                                        <div>Showing {{ $inventories->firstItem() }} to {{ $inventories->lastItem() }}
                                            of total {{$inventories->total()}} entries</div>
                                        {{$inventories->links()}}
                                    </div>
                                </div>
                            </div>
                        </div>  
            </section> 

            
      </div>
      </div>
   </div>
</section>
@endsection
@push('css')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" /> 
<!-- <link rel="stylesheet" type="text/css" href="{{asset('css')}}/select2.min.css"> -->
@endpush
@push('js') 
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

<!-- <script src="{{ asset('') }}/js/select2.min.js"></script> --> 
    <script>
      $('#search').keyup(function(){   
    search_table($(this).val());  
    });   
    function search_table(value){  
        $('#example22 tr').each(function(){  
            var found = 'false';  
            $(this).each(function(){  
                if($(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)  
                {  
                    found = 'true';  
                }  
            });  
            if(found == 'true')  
            {  
                $(this).show();  
            }  
            else  
            {  
                $(this).hide();  
            }  
        });  
    }  

    $('#serchOutStock').keyup(function(){
    search_outstock($(this).val());
    });
    function search_outstock(value){
        $('#example23 tr').each(function(){
            var found = 'false';
            $(this).each(function(){
                if($(this).text().toLowerCase().indexOf(value.toLowerCase())>= 0) {
                    found = 'true';
                }
            });
            if(found == 'true'){
                $(this).show();
            }else{
                $(this).hide();
            }  
        })
    }
 

$('#color_id').on('change',function(){
    var color = $(this).val();

    window.location.href = 'inventories?page=1&color='+color;
});
$('#color_name').on('change',function(){
    var color = $(this).val();

    window.location.href = 'inventories?page=1&color='+color;
});
$(document).ready(function(){
    $('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
        localStorage.setItem('activeTab', $(e.target).attr('href'));
    });
    var activeTab = localStorage.getItem('activeTab');
    if(activeTab){
        $('.myTab a[href="' + activeTab + '"]').tab('show');
    }
});
</script> 
<script>
    $('.js-example-basic-single').select2();
</script>
@endpush




