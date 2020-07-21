
@push('css')
    <style>
        #catarea{
            background: #fff;
            border: 1px solid #ddd;
            width: 97%;
        }
        .cat-level ul li {
            display: inherit;
            padding: 5px;
            cursor: pointer;
            border-left: 2px solid #fff;
            margin: 2px;
        }
        .cat-level ul li:hover,.active{
            background: #ddd;
            border-left: 2px solid red !important;
        }
        .cat-level{
            border: 1px solid #ddd;
        }
        .cat-levels{
            height: 250px;
            overflow-y: scroll;
        }
        .cat-level input[type=text]{
            height: 40px;
        }
        .foo {
            position: absolute;
            background-color: white;
            width: 5em;
            z-index: 100;
        }
        .scroll {
            overflow-x: auto;
        }
        .readonly {
            opacity: .5;
            cursor: not-allowed !important;
        }
    </style>
@endpush
<div class="card mb-4">
    <h5 class="card-header">Basic information</h5>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="bn_name">Product Name(Bangla) <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" class="form-control" name="bn_name" value="{{ old('bn_name',$product->bn_name) }}" id="bn_name">
                            <span class="text-danger" id="message_bn_name"></span>
                            @if ($errors->has('bn_name'))
                                <span class="text-danger">{{ $errors->first('bn_name') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Product Name(English) <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" class="form-control" value="{{ old('name',$product->name) }}" name="name" id="name">
                            <span class="text-danger" id="message_name"></span>
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="form-group margin">
                    <label for="video_url">Video Url<span>*</span></label>
                    <input type="text" class="form-control" name="video_url" value="{{ old('video_url',$product->video_url) }}" id="video_url">
                    <span class="text-danger" id="message_video_url"></span>
                    @if ($errors->has('video_url'))
                        <span class="text-danger">{{ $errors->first('video_url') }}</span>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@push('js')
@endpush
