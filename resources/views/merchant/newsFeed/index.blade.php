@extends('merchant.master')
@section('content')
@push('css')


@endpush
@include('elements.alert')


<section class="dashboard-section section-b-space">
  <div class="container">
      <div class="row">
        @include('layouts.inc.sidebar.vendor-sidebar',[$active ='newsfeed'])
        <div class="col-md-9"> 
            <div class="top-sec">
                <h3>News Feed</h3> 
            </div> 
            <table class="table-responsive-md table mb-0 table-striped mt-2">
                <thead>
                    <tr> 
                        <th scope="col" class="text-left">Product name</th>
                        <th scope="col" class="text-left">Title</th>
                        <th scope="col">Description</th> 
                        <th scope="col">Type</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($newsFeed as $row)
                        <tr> 
                            <td class="text-left">{{$row->item->name}}</td>
                            <td class="text-left">{{$row->title}}</td>
                            <td>{!!\Illuminate\Support\Str::limit($row->news_desc,20)!!}</td>
                            <td>{{ $row->item->type }}</td>
                            
                            <td>
                                @if($row->item->status == 'Pending')
                                <label class="badge badge-pill badge-primary p-2">Pending</label>
                                @elseif($row->item->status == 'Active')
                                <label class="badge badge-pill badge-success p-2">Active</label>
                                @else
                                <a href="#" id="" class="badge badge-pill badge-danger p-2" data-toggle="modal" data-original-title="test" data-target="#tagEditModal{{$row->item->id}}">Reject</a>
                                @endif
                            </td>
                            <td class="d-flex justify-content-between">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <button class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></button>
                                        </a>
                                    </li>
                                    <li>
                                        <form action="{{ url('/merchant/sme/product/'.$row->id) }}" method="post" style="margin-top: -2px;" id="deleteButton{{$row->id}}">
                                            @csrf @method('delete')
                                            <button type="submit" class="btn btn-sm btn-primary" onclick="sweetalertDelete({{$row->id}})"><i class="fa fa-trash-o"></i></button>
                                        </form>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                         
                        <div class="modal fade" id="tagEditModal{{$row->item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title f-w-600" id="exampleModalLabel">Reject Description</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    </div>

                                    <div class="modal-body">
                                        <div class="form">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label for="validationCustom01" class="mb-1">Description :</label>
                                                    <div>
                                                        {{ $row->item->rej_desc }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                      @empty
                        <tr>
                            <td colspan="7">No Product found</td>
                        </tr>
                    @endforelse
                    </div>
                </tbody>
            </table>
            <br>
            <div>Showing {{ $newsFeed->firstItem() }} to {{$newsFeed->lastItem() }}
                of total {{$newsFeed->total()}} entries</div>
            {{$newsFeed->links()}}
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




