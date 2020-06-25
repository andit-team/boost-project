@extends('admin.layout.master')

@section('content')
@push('css')
<style>
    .fa{
        padding:4px;
      font-size:16px;
    }
    .table th, .table td {
        padding: 0rem;
        vertical-align: middle;
        border-top: 0px solid #dee2e6;
    }
    .fa {
        padding: 0px;
    }
    .btn {
        border-radius: 0px;
    }

</style>
@endpush
@include('elements.alert')

{{-- @component('admin.layout.inc.breadcrumb')
  @slot('pageTitle')
      Category
  @endslot
  @slot('page')
      <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
      <li class="breadcrumb-item active" aria-current="page">Category</li>
  @endslot
@endcomponent --}}

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <input type="text"  id="sample_search" onkeyup="search_func(this.value);" placeholder="search">
                        <!-- <h5>
                            <a href="{{ url('andbaazaradmin/products/subcategory-tree-view') }}">add subcategory</a>
                        </h5> -->
                    </div>
                    <div class="card-body" style="height: 825px;overflow-y: scroll;">
                        <table border="1" class="table table-borderd table-striped">
                            <thead>
                                <tr>
                                    <th width="50" class="text-center">Sl</th>
                                    <th>Categories Name</th>
                                    <th width="250">Slug</th>
                                    <th width="150" class="text-center">Commision</th>
                                    <th width="80" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody class="cat-search">
                                <?php echo Baazar::buildTree($categories,0);?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
<script>
    function search_func(key){
        var patt = new RegExp(key, "i");
        $('.cat-search').find('tr').each(function() {
            if($(this).text().search(patt) >= 0){
                $(this).show();
            }else{
                $(this).hide();
            }
        });

    }
</script>
@endpush

{{-- <script language="javascript">

function search_func(value)
{
    $.ajax({
       type: "GET",
       url: "{{ url('andbaazaradmin/products/category-tree-view') }}",
       data: {'search_keyword' : value},
       dataType: "text",
       success: function(msg){
      //Receiving the result of search here
       }
    });
}
</script> --}}
{{-- <div class="text-right">
    <a href="{{ url('andbaazaradmin/products/subcategory-tree-view') }}" class="btn btn-sm color-red text-right"><h4>add subcategory</h4></a>
</div> --}}
