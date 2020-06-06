@extends('admin.layout.master')

@section('content')
@push('css')
<style> 
    .fa{
        padding:4px;
      font-size:16px;
    }
</style>
@endpush
@include('elements.alert')
@component('admin.layout.inc.breadcrumb')
  @slot('pageTitle')
    Meil List
  @endslot
  @slot('page')
      <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
      <li class="breadcrumb-item active" aria-current="page">User Messages</li>
  @endslot
@endcomponent
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5> Message List</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-borderd" id="dataTableNoPagingDesc">
                            <thead>
                              <tr>
                                 <th width="50">Sl</th>
                                 <th >User nmar</th>
                                 <th >Emial</th>
                                 <th > Comments</th>                              
                                 <th  class="text-center">Action</th>
                              </tr>
                          </thead>
                        <tbody>
                          @php $i=0; @endphp
                           @foreach($mailList as $row)
                           <tr>
                               <td>{{ ++$i }}</td>
                              <td>{{ $row->first_name . " " .$row->last_name}}</td>
                               <td>{{ $row->email }}</td>
                               <td>{!! \Illuminate\Support\Str::limit($row->description) !!}</td> 
                               <td class="d-flex justify-content-between">
                                   <ul> 
                                        <li><a href="#" id="{{ url('/andbaazaradmin/contact-us/'.$row->id) }}"><button class="btn btn-sm btn-secondary"  data-toggle="modal" data-original-title="test" data-target="#repleyModel{{$row->id}}"> View</button></a></li>
                                        <li>                                      
                                    </li>
                                   </ul>
                               </td>
                            </tr>
                            <div class="modal fade" id="repleyModel{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title f-w-600" id="exampleModalLabel"> Messages</h5>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        </div>                                        
                                          <div class="modal-body">
                                            <form class="needs-validation" novalidate="" action="{{ url('andbaazaradmin/contact-us/'.$row->id) }}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                @method('put')
                                                <div class="form">
                                                    <div class="col-md-12"> 
                                                        <div>User : {{ $row->first_name.' '.$row->last_name }}</div>
                                                        <div class="pb-3">From : {{ $row->email }}</div>
                                                        <h5>Comment</h3>
                                                        <div class=" border p-1">{!! $row->description !!}</div> 
                                                        <h5 class="pt-2">Replay</h5>  
                                                        <div>
                                                            <textarea class="form-control summernote" placeholder="Write Your Message" name="messages" value="{{ old('messages') }}" rows="6"></textarea>
                                                            <span class="text-danger">{{ $errors->first('messages') }}</span>
                                                        </div> 
                                                        <div class="mt-3 text-right">
                                                            <button type="submit" class="btn btn-success" type="button">Send</button> 
                                                        </div>
                                                </div>    
                                            </form>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                           @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
            </div>          
        </div>
    </div>
@endsection
@push('css')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css" rel="stylesheet">
@endpush
@push('js')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
     $('.summernote').summernote({
           height: 200,
      });
   });
 </script>
@endpush
