@extends('layouts.vendor')
@section('content')
<style>
.contact-page .theme-form input{
     height: 50px;
     border-radius:4px;
      }
      .margin{
        margin-top:-30px
      }

      .contact-page .form-control{
        border-radius:4px;        
      }
      select.form-control:not([size]):not([multiple]){
        height: 50px;
      }
      .ckwidth{
          width:1000px;
      }

      .form-control {
  width: 100%;
}
.multiselect-container {
  box-shadow: 0 3px 12px rgba(0,0,0,.175);
  margin: 0;
}
.multiselect-container .checkbox {
  margin: 0;
}
.multiselect-container li {
  margin: 0;
  padding: 0;
  line-height: 0;
}
.multiselect-container li a {
  line-height: 25px;
  margin: 0;
  padding:0 35px;
}
.custom-btn {
  width: 100% !important;
}
.custom-btn .btn, .custom-multi {
  text-align: left;
  width: 100% !important;
}
.dropdown-menu > .active > a:hover {
  color:inherit;
}

 </style>
    @include('admin.elements.alert')
    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>vendor dashboard</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">vendor dashboard</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->


    <!--  dashboard section start -->
    <section class="dashboard-section section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="dashboard-sidebar">
                        <div class="profile-top">
                            <div class="profile-image">
                                <img src="{{ asset('') }}/assets/images/logos/17.png" alt="" class="img-fluid">
                            </div>
                            <div class="profile-detail">
                                <h5>Products Store</h5>
                                <h6>750 followers | 10 review</h6>
                                <h6>mark.enderess@mail.com</h6>
                            </div>
                        </div>
                        <div class="faq-tab">
                            <ul class="nav nav-tabs" id="top-tab" role="tablist">
                                <li class="nav-item"><a data-toggle="tab" class="nav-link active" href="#dashboard">dashboard</a></li>
                                <li class="nav-item"><a  class="nav-link" href="{{ url('merchant/product') }}">All Products</a>
                                </li>
                                 <li class="nav-item"><a  class="nav-link" href="{{ url('merchant/inventory') }}">All Inventory</a>                     
                                <li class="nav-item"><a data-toggle="tab" class="nav-link" href="#orders">orders</a>
                                </li>
                                <li class="nav-item"><a  class="nav-link" href="{{ url('merchant/seller/create') }}">profile</a>
                                </li>
                                <li class="nav-item"><a data-toggle="tab" class="nav-link" href="#settings">settings</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" data-toggle="modal" data-target="#logout" href="#">logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- address section start -->
                <div class="col-sm-9 contact-page register-page container">                      
                            <form class="theme-form" action="{{ route('product.store') }}" method="post"  enctype="multipart/form-data">
                                @csrf
                           
                                <div class="card mb-4">
                                    <h5 class="card-header">Basic information</h5>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-12">   
                                                 <div class="form-group row">
                                                    <label for="category_id" class="col-xl-3 col-md-4">Category <span>*</span></label>
                                                    <select name="category_id" class="form-control col-md-8" id="category_id"  autocomplete="off">
                                                        <option value="" selected disabled>Select Category</option>
                                                        @foreach ($categories as $row)
                                                            <option value="{{ $row->id }}">{{$row->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>                                     
                                                <div class="form-group row">
                                                    <label for="sub_category" class="col-xl-3 col-md-4"> Sub Category <span>*</span></label>
                                                    <select name="sub_category" class="form-control col-md-8 sub" id="sub_category"  autocomplete="off">
                                                        <option value="" selected disabled>Select Sub Category</option>
                                                       {{-- @foreach ($subCategories as $row)
                                                    <option value="{{ $row->id }}">{{$row->name}}</option>

                                                @endforeach    --}}
                                                {{-- <option value="">Select Sub Category</option> --}} 
                                                  </select>
                                                </div> 

                                                <div class="form-group row">
                                                    <label for="name" class="col-xl-3 col-md-4">Name <span>*</span></label>                                          
                                                    <input class="form-control col-md-8" type="text" class="form-control" name="name" id="name">
                                                    @if ($errors->has('name'))
                                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                                    @endif
                                                </div>

                                                <div class="form-group row margin">
                                                    <label for="video_url" class="col-xl-3 col-md-4">Video Url<span>*</span></label>
                                                    <input type="text" class="form-control col-md-8" name="video_url" id="video_url"  >
                                                    @if ($errors->has('video_url'))
                                                        <span class="text-danger">{{ $errors->first('video_url') }}</span>
                                                    @endif
                                                </div> 

                                            </div>
                                        </div>
                                     </div>
                                  </div>

                                  <div class="card  mb-4">
                                    <h5 class="card-header">Made & Description</h5>
                                    <div class="card-body">

                                        <div class="form-group row">
                                            <label for="made_in" class="col-xl-3 col-md-4">Made In<span>*</span></label>
                                            <input type="text" class="form-control col-md-8" name="made_in" id="made_in" required="">
                                            @if ($errors->has('made_in'))
                                                <span class="text-danger">{{ $errors->first('made_in') }}</span>
                                            @endif
                                        </div> 

                                        <div class="form-group row">
                                      
                                            <label for="description" class="col-xl-3 col-md-4">Description<span>*</span></label>
                                            <div class="col-md-8 p-0">
                                            <textarea class="form-control  ckeditor ckwidth"  id="description" name="description"></textarea>
                                                @if ($errors->has('description'))
                                                <span class="text-danger">{{ $errors->first('description') }}</span>
                                                @endif                                                                                        
                                        </div> 
                                        </div> 

                                    </div>
                                  </div>

                                  <div class="card mb-4">
                                    <h5 class="card-header">Tag & Model</h5>
                                    <div class="card-body">
                                      <div class="form-group row">
                                            {{-- <label for="tag_id" class="col-xl-3 col-md-4">Tag <span>*</span></label> --}}
                                            <select type="text" class="multiselect" multiple="multiple" role="multiselect"> 
                                            {{-- <select name="tag_id" class="form-control col-md-8 selectpicker" id="tag_id"  autocomplete="off" multiple> --}}
                                                <option value="" selected disabled>Select Tag</option> 
                                                @foreach ($tag as $row)
                                                    <option value="{{ $row->id }}">{{$row->name}}</option>
                                                @endforeach
                                            </select>
                                       </div>  
                                       <div class="form-group row">
                                            <label for="video_url" class="col-xl-3 col-md-4">Model No<span>*</span></label>
                                            <input type="number" class="form-control col-md-8" name="model_no" id="model_no"  required="">
                                              @if ($errors->has('model_no'))
                                                <span class="text-danger">{{ $errors->first('model_no') }}</span>
                                              @endif
                                      </div> 
                                      <div class="form-group row margin">
                                        <label for="materials" class="col-xl-3 col-md-4">Materials<span>*</span></label>
                                        <input type="text" class="form-control col-md-8" name="materials" id="materials"  required="">
                                            @if ($errors->has('materials'))
                                                <span class="text-danger">{{ $errors->first('materials') }}</span>
                                            @endif
                                      </div> 

                                     </div>
                                    </div>

                                  <div class="card mb-4 ">
                                    <h5 class="card-header">Price</h5>
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label for="price" class="col-xl-3 col-md-4">Price<span>*</span></label>
                                            <input type="number" class="form-control col-md-8" name="price" id="price" required="">
                                            @if ($errors->has('price'))
                                                <span class="text-danger">{{ $errors->first('price') }}</span>
                                            @endif
                                        </div> 
                                      <div class="form-group row margin">
                                        <label for="org_price" class="col-xl-3 col-md-4">Orginal Price<span>*</span></label>
                                        <input type="number" class="form-control col-md-8" name="org_price" id="org_price" required="">
                                            @if ($errors->has('org_price'))
                                                <span class="text-danger">{{ $errors->first('org_price') }}</span>
                                            @endif
                                      </div> 
                                      <div class="form-group row margin">
                                        <label for="min_order" class="col-xl-3 col-md-4">Minimum Order <span>*</span></label>
                                        <input type="number" class="form-control col-md-8" name="min_order" id="min_order"  required="">
                                            @if ($errors->has('min_order'))
                                                <span class="text-danger">{{ $errors->first('min_order') }}</span>
                                            @endif
                                      </div> 
                                    </div>
                                  </div>                           
                                <div class="col-md-12">
                                    <button class="btn btn-sm btn-solid" type="submit">Save</button>
                                </div>
                            </div>
                        </form> 
                    </div>

                </div>
            </div>
        </section>
    <!-- section end -->
@endsection

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
{{-- <script src="https://cdn.ckeditor.com/ckeditor5/19.0.0/classic/ckeditor.js"></script> --}}
{{-- <script>
    CKEDITOR.replace( 'summary-ckeditor' );
</script> --}}

{{-- <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script> --}}

{{-- Script for ckeditor --}}

<script type="text/javascript">
    CKEDITOR.replace('description',
        {
            customConfig: 'config.js',
            toolbar: 'simple'
            // config.width = '500;
            // config.width = '500';
            // config.width = '25em';
            config.width = '100%';
        })
</script>

{{-- Script for subcategory --}}
<script>
    $(document).ready(function(){
        $('#category_id').on('change',function(){ 
            var categoryId = $(this).val();
            var subCategoryId = $('#sub_category').val();
            var option     = '<option value="">Sub category</option>'; 
            $.ajax({
                type:"get", 
                url:"{{ url('/merchant/product/subcategory/{id}') }}",
                data:{'categoryId':categoryId},
                success:function(data){
                    for(var i=0; i<data.length; i++){
                        option = option+'<option value="'+data[i].id+'">'+data[i].name+'</option>';  
                    }
                    $('.sub').html(option); 
                }
            })
        })
    });
    </script>


{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script> --}}
<script>
$('select').selectpicker();
</script>

<script>
    /**
 * bootstrap-multiselect.js
 * https://github.com/davidstutz/bootstrap-multiselect
 *
 * Copyright 2012, 2013 David Stutz
 * 
 * Dual licensed under the BSD-3-Clause and the Apache License, Version 2.0.
 */
!function($) {
    
    "use strict";// jshint ;_;

    if (typeof ko != 'undefined' && ko.bindingHandlers && !ko.bindingHandlers.multiselect) {
        ko.bindingHandlers.multiselect = {
            init : function(element, valueAccessor, allBindingsAccessor, viewModel, bindingContext) {},
            update : function(element, valueAccessor, allBindingsAccessor, viewModel, bindingContext) {
                var ms = $(element).data('multiselect');
                if (!ms) {
                    $(element).multiselect(ko.utils.unwrapObservable(valueAccessor()));
                }
                else if (allBindingsAccessor().options && allBindingsAccessor().options().length !== ms.originalOptions.length) {
                    ms.updateOriginalOptions();
                    $(element).multiselect('rebuild');
                }
            }
        };
    }

    function Multiselect(select, options) {

        this.options = this.mergeOptions(options);
        this.$select = $(select);
        
        // Initialization.
        // We have to clone to create a new reference.
        this.originalOptions = this.$select.clone()[0].options;
        this.query = '';
        this.searchTimeout = null;
        
        this.options.multiple = this.$select.attr('multiple') == "multiple";
        this.options.onChange = $.proxy(this.options.onChange, this);
        
        // Build select all if enabled.
        this.buildContainer();
        this.buildButton();
        this.buildSelectAll();
        this.buildDropdown();
        this.buildDropdownOptions();
        this.buildFilter();
        this.updateButtonText();

        this.$select.hide().after(this.$container);
    };

    Multiselect.prototype = {
        
        // Default options.
        defaults: {
            // Default text function will either print 'None selected' in case no
            // option is selected, or a list of the selected options up to a length of 3 selected options.
            // If more than 3 options are selected, the number of selected options is printed.
            buttonText: function(options, select) {
                if (options.length == 0) {
                    return this.nonSelectedText + ' <b class="caret"></b>';
                }
                else {
                    
                    if (options.length > 5) {
                        return options.length + ' ' + this.nSelectedText + ' <b class="caret"></b>';
                    }
                    else {
                        var selected = '';
                        options.each(function() {
                            var label = ($(this).attr('label') !== undefined) ? $(this).attr('label') : $(this).html();
                            
                            //Hack by Victor Valencia R.
                            if($(select).hasClass('multiselect-icon')){
                                var icon = $(this).data('icon');
                                label = '<span class="glyphicon ' + icon + '"></span> ' + label;
                            }
                            
                            selected += label + ', ';
                        });
                        return selected.substr(0, selected.length - 2) + ' <b class="caret"></b>';
                    }
                }
            },
            // Like the buttonText option to update the title of the button.
            buttonTitle: function(options, select) {
                if (options.length == 0) {
                    return this.nonSelectedText;
                }
                else {
                    var selected = '';
                    options.each(function () {
                        selected += $(this).text() + ', ';
                    });
                    return selected.substr(0, selected.length - 2);
                }
            },
            // Is triggered on change of the selected options.
            onChange : function(option, checked) {

            },
            buttonClass: 'btn',
            dropRight: false,
            selectedClass: 'active',
            buttonWidth: 'auto',
            buttonContainer: '<div class="btn-group custom-btn" />',
            // Maximum height of the dropdown menu.
            // If maximum height is exceeded a scrollbar will be displayed.
            maxHeight: false,
            includeSelectAllOption: false,
            selectAllText: ' Select all',
            selectAllValue: 'multiselect-all',
            enableFiltering: false,
            enableCaseInsensitiveFiltering: false,
            filterPlaceholder: 'Search',
            // possible options: 'text', 'value', 'both'
            filterBehavior: 'text',
            preventInputChangeEvent: false,        
            nonSelectedText: 'None selected',            
            nSelectedText: 'selected'
        },
        
        // Templates.
        templates: {
            button: '<button type="button" class="multiselect dropdown-toggle form-control" data-toggle="dropdown"></button>',
            ul: '<ul class="multiselect-container dropdown-menu custom-multi"></ul>',
            filter: '<div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span><input class="form-control multiselect-search" type="text"></div>',
            li: '<li><a href="javascript:void(0);"><label></label></a></li>',
            liGroup: '<li><label class="multiselect-group"></label></li>'
        },
        
        constructor: Multiselect,
        
        buildContainer: function() {
            this.$container = $(this.options.buttonContainer);
        },
        
        buildButton: function() {
            // Build button.
            this.$button = $(this.templates.button).addClass(this.options.buttonClass);
            
            // Adopt active state.
            if (this.$select.prop('disabled')) {
                this.disable();
            }
            else {
                this.enable();
            }
           
            // Manually add button width if set.
            if (this.options.buttonWidth) {
                this.$button.css({
                    'width' : this.options.buttonWidth
                });
            }

            // Keep the tab index from the select.
            var tabindex = this.$select.attr('tabindex');
            if (tabindex) {
                this.$button.attr('tabindex', tabindex);
            }
           
            this.$container.prepend(this.$button)
        },
        
        // Build dropdown container ul.
        buildDropdown: function() {
            
            // Build ul.
            this.$ul = $(this.templates.ul);
            
            if (this.options.dropRight) {
                this.$ul.addClass('pull-right');
            }
            
            // Set max height of dropdown menu to activate auto scrollbar.
            if (this.options.maxHeight) {
                // TODO: Add a class for this option to move the css declarations.
                this.$ul.css({
                    'max-height': this.options.maxHeight + 'px',
                    'overflow-y': 'auto',
                    'overflow-x': 'hidden'
                });
            }
            
            this.$container.append(this.$ul)
        },
        
        // Build the dropdown and bind event handling.
        buildDropdownOptions: function() {
            
            this.$select.children().each($.proxy(function(index, element) {
                // Support optgroups and options without a group simultaneously.
                var tag = $(element).prop('tagName').toLowerCase();
                if (tag == 'optgroup') {
                    this.createOptgroup(element);
                }
                else if (tag == 'option') {
                    this.createOptionValue(element);
                }
                // Other illegal tags will be ignored.
            }, this));

            // Bind the change event on the dropdown elements.
            $('li input', this.$ul).on('change', $.proxy(function(event) {
                var checked = $(event.target).prop('checked') || false;
                var isSelectAllOption = $(event.target).val() == this.options.selectAllValue;

                // Apply or unapply the configured selected class.
                if (this.options.selectedClass) {
                    if (checked) {
                        $(event.target).parents('li').addClass(this.options.selectedClass);
                    }
                    else {
                        $(event.target).parents('li').removeClass(this.options.selectedClass);
                    }
                }
                
                // Get the corresponding option.
                var value = $(event.target).val();
                var $option = this.getOptionByValue(value);

                var $optionsNotThis = $('option', this.$select).not($option);
                var $checkboxesNotThis = $('input', this.$container).not($(event.target));

                // Toggle all options if the select all option was changed.
                if (isSelectAllOption) {
                    $checkboxesNotThis.filter(function() {
                        return $(this).is(':checked') != checked;
                    }).trigger('click');
                }

                if (checked) {
                    $option.prop('selected', true);

                    if (this.options.multiple) {
                        // Simply select additional option.
                        $option.prop('selected', true);
                    }
                    else {
                        // Unselect all other options and corresponding checkboxes.
                        if (this.options.selectedClass) {
                            $($checkboxesNotThis).parents('li').removeClass(this.options.selectedClass);
                        }

                        $($checkboxesNotThis).prop('checked', false);
                        $optionsNotThis.prop('selected', false);

                        // It's a single selection, so close.
                        this.$button.click();
                    }

                    if (this.options.selectedClass == "active") {
                        $optionsNotThis.parents("a").css("outline", "");
                    }
                }
                else {
                    // Unselect option.
                    $option.prop('selected', false);
                }

                this.updateButtonText();
                this.$select.change();
                this.options.onChange($option, checked);
                
                if(this.options.preventInputChangeEvent) {
                    return false;
                }
            }, this));

            $('li a', this.$ul).on('touchstart click', function(event) {
                event.stopPropagation();
                $(event.target).blur();
            });

            // Keyboard support.
            this.$container.on('keydown', $.proxy(function(event) {
                if ($('input[type="text"]', this.$container).is(':focus')) {
                    return;
                }
                if ((event.keyCode == 9 || event.keyCode == 27) && this.$container.hasClass('open')) {
                    // Close on tab or escape.
                    this.$button.click();
                }
                else {
                    var $items = $(this.$container).find("li:not(.divider):visible a");

                    if (!$items.length) {
                        return;
                    }

                    var index = $items.index($items.filter(':focus'));

                    // Navigation up.
                    if (event.keyCode == 38 && index > 0) {
                        index--;
                    }
                    // Navigate down.
                    else if (event.keyCode == 40 && index < $items.length - 1) {
                        index++;
                    }
                    else if (!~index) {
                        index = 0;
                    }

                    var $current = $items.eq(index);
                    $current.focus();

                    if (event.keyCode == 32 || event.keyCode == 13) {
                        var $checkbox = $current.find('input');

                        $checkbox.prop("checked", !$checkbox.prop("checked"));
                        $checkbox.change();
                    }

                    event.stopPropagation();
                    event.preventDefault();
                }
            }, this));
        },
        
        // Will build an dropdown element for the given option.
        createOptionValue: function(element) {
            if ($(element).is(':selected')) {
                $(element).prop('selected', true);
            }

            // Support the label attribute on options.
            var label = $(element).attr('label') || $(element).html();            
            var value = $(element).val();
                        
            //Hack by Victor Valencia R.            
            if($(element).parent().hasClass('multiselect-icon') || $(element).parent().parent().hasClass('multiselect-icon')){                                
                var icon = $(element).data('icon');
                label = '<span class="glyphicon ' + icon + '"></span> ' + label;
            } 
            
            var inputType = this.options.multiple ? "checkbox" : "radio";

            var $li = $(this.templates.li);
            $('label', $li).addClass(inputType);
            $('label', $li).append('<input type="' + inputType + '" />');
            
            //Hack by Victor Valencia R.
            if(($(element).parent().hasClass('multiselect-icon') || $(element).parent().parent().hasClass('multiselect-icon')) && inputType == 'radio'){                
                $('label', $li).css('padding-left', '0px');
                $('label', $li).find('input').css('display', 'none');
            }

            var selected = $(element).prop('selected') || false;
            var $checkbox = $('input', $li);
            $checkbox.val(value);

            if (value == this.options.selectAllValue) {
                $checkbox.parent().parent().addClass('multiselect-all');
            }

            $('label', $li).append(" " + label);

            this.$ul.append($li);

            if ($(element).is(':disabled')) {
                $checkbox.attr('disabled', 'disabled').prop('disabled', true).parents('li').addClass('disabled');
            }

            $checkbox.prop('checked', selected);

            if (selected && this.options.selectedClass) {
                $checkbox.parents('li').addClass(this.options.selectedClass);
            }
        },

        // Create optgroup.
        createOptgroup: function(group) {
            var groupName = $(group).prop('label');

            // Add a header for the group.
            var $li = $(this.templates.liGroup);
            $('label', $li).text(groupName);
            
            //Hack by Victor Valencia R.
            $li.addClass('text-primary');
            
            this.$ul.append($li);
            
            // Add the options of the group.
            $('option', group).each($.proxy(function(index, element) {                
                this.createOptionValue(element);
            }, this));
        },
        
        // Add the select all option to the select.
        buildSelectAll: function() {
            var alreadyHasSelectAll = this.$select[0][0] ? this.$select[0][0].value == this.options.selectAllValue : false;
            // If options.includeSelectAllOption === true, add the include all checkbox.
            if (this.options.includeSelectAllOption && this.options.multiple && !alreadyHasSelectAll) {
                this.$select.prepend('<option value="' + this.options.selectAllValue + '">' + this.options.selectAllText + '</option>');
            }
        },
        
        // Build and bind filter.
        buildFilter: function() {
            
            // Build filter if filtering OR case insensitive filtering is enabled and the number of options exceeds (or equals) enableFilterLength.
            if (this.options.enableFiltering || this.options.enableCaseInsensitiveFiltering) {
                var enableFilterLength = Math.max(this.options.enableFiltering, this.options.enableCaseInsensitiveFiltering);
                if (this.$select.find('option').length >= enableFilterLength) {
                    
                    this.$filter = $(this.templates.filter);
                    $('input', this.$filter).attr('placeholder', this.options.filterPlaceholder);
                    this.$ul.prepend(this.$filter);

                    this.$filter.val(this.query).on('click', function(event) {
                        event.stopPropagation();
                    }).on('keydown', $.proxy(function(event) {
                        // This is useful to catch "keydown" events after the browser has updated the control.
                        clearTimeout(this.searchTimeout);

                        this.searchTimeout = this.asyncFunction($.proxy(function() {

                            if (this.query != event.target.value) {
                                this.query = event.target.value;

                                $.each($('li', this.$ul), $.proxy(function(index, element) {
                                    var value = $('input', element).val();
                                    if (value != this.options.selectAllValue) {
                                        var text = $('label', element).text();
                                        var value = $('input', element).val();
                                        if (value && text && value != this.options.selectAllValue) {
                                            // by default lets assume that element is not
                                            // interesting for this search
                                            var showElement = false;

                                            var filterCandidate = '';
                                            if ((this.options.filterBehavior == 'text' || this.options.filterBehavior == 'both')) {
                                                filterCandidate = text;
                                            }
                                            if ((this.options.filterBehavior == 'value' || this.options.filterBehavior == 'both')) {
                                                filterCandidate = value;
                                            }

                                            if (this.options.enableCaseInsensitiveFiltering && filterCandidate.toLowerCase().indexOf(this.query.toLowerCase()) > -1) {
                                                showElement = true;
                                            }
                                            else if (filterCandidate.indexOf(this.query) > -1) {
                                                showElement = true;
                                            }

                                            if (showElement) {
                                                $(element).show();
                                            }
                                            else {
                                                $(element).hide();
                                            }
                                        }
                                    }
                                }, this));
                            }
                        }, this), 300, this);
                    }, this));
                }
            }
        },

        // Destroy - unbind - the plugin.
        destroy: function() {
            this.$container.remove();
            this.$select.show();
        },

        // Refreshs the checked options based on the current state of the select.
        refresh: function() {
            $('option', this.$select).each($.proxy(function(index, element) {
                var $input = $('li input', this.$ul).filter(function() {
                    return $(this).val() == $(element).val();
                });

                if ($(element).is(':selected')) {
                    $input.prop('checked', true);

                    if (this.options.selectedClass) {
                        $input.parents('li').addClass(this.options.selectedClass);
                    }
                }
                else {
                    $input.prop('checked', false);

                    if (this.options.selectedClass) {
                        $input.parents('li').removeClass(this.options.selectedClass);
                    }
                }

                if ($(element).is(":disabled")) {
                    $input.attr('disabled', 'disabled').prop('disabled', true).parents('li').addClass('disabled');
                }
                else {
                    $input.prop('disabled', false).parents('li').removeClass('disabled');
                }
            }, this));

            this.updateButtonText();
        },

        // Select an option by its value or multiple options using an array of values.
        select: function(selectValues) {
            if(selectValues && !$.isArray(selectValues)) {
                selectValues = [selectValues];
            }
            
            for (var i = 0; i < selectValues.length; i++) {
                
                var value = selectValues[i];
                
                var $option = this.getOptionByValue(value);
                var $checkbox = this.getInputByValue(value);

                if (this.options.selectedClass) {
                    $checkbox.parents('li').addClass(this.options.selectedClass);
                }

                $checkbox.prop('checked', true);
                $option.prop('selected', true);                
                this.options.onChange($option, true);
            }

            this.updateButtonText();
        },

        // Deselect an option by its value or using an array of values.
        deselect: function(deselectValues) {
            if(deselectValues && !$.isArray(deselectValues)) {
                deselectValues = [deselectValues];
            }

            for (var i = 0; i < deselectValues.length; i++) {
                
                var value = deselectValues[i];
                
                var $option = this.getOptionByValue(value);
                var $checkbox = this.getInputByValue(value);

                if (this.options.selectedClass) {
                    $checkbox.parents('li').removeClass(this.options.selectedClass);
                }

                $checkbox.prop('checked', false);
                $option.prop('selected', false);               
                this.options.onChange($option, false);
            }

            this.updateButtonText();
        },

        // Rebuild the whole dropdown menu.
        rebuild: function() {
            this.$ul.html('');
            
            // Remove select all option in select.
            $('option[value="' + this.options.selectAllValue + '"]', this.$select).remove();
            
            // Important to distinguish between radios and checkboxes.
            this.options.multiple = this.$select.attr('multiple') == "multiple";
            
            this.buildSelectAll();
            this.buildDropdownOptions();
            this.updateButtonText();
            this.buildFilter();
        },
        
        // Build select using the given data as options.
        dataprovider: function(dataprovider) {
            var optionDOM = "";
            dataprovider.forEach(function (option) {
                optionDOM += '<option value="' + option.value + '">' + option.label + '</option>';
            });

            this.$select.html(optionDOM);
            this.rebuild();
        },

        // Enable button.
        enable: function() {
            this.$select.prop('disabled', false);
            this.$button.prop('disabled', false)
                .removeClass('disabled');
        },

        // Disable button.
        disable: function() {
            this.$select.prop('disabled', true);
            this.$button.prop('disabled', true)
                .addClass('disabled');
        },

        // Set options.
        setOptions: function(options) {
            this.options = this.mergeOptions(options);
        },

        // Get options by merging defaults and given options.
        mergeOptions: function(options) {
            return $.extend({}, this.defaults, options);
        },
        
        // Update button text and button title.
        updateButtonText: function() {
            var options = this.getSelected();
            
            // First update the displayed button text.
            $('button', this.$container).html(this.options.buttonText(options, this.$select));            
            
            // Now update the title attribute of the button.
            $('button', this.$container).attr('title', this.options.buttonTitle(options, this.$select));
            
        },

        // Get all selected options.
        getSelected: function() {
            return $('option[value!="' + this.options.selectAllValue + '"]:selected', this.$select).filter(function() {
                return $(this).prop('selected');
            });
        },
        
        // Get the corresponding option by ts value.
        getOptionByValue: function(value) {
            return $('option', this.$select).filter(function() {
                return $(this).val() == value;
            });
        },
        
        // Get an input in the dropdown by its value.
        getInputByValue: function(value) {
            return $('li input', this.$ul).filter(function() {
                return $(this).val() == value;
            });
        },
        
        updateOriginalOptions: function() {
            this.originalOptions = this.$select.clone()[0].options;
        },

        asyncFunction: function(callback, timeout, self) {
            var args = Array.prototype.slice.call(arguments, 3);
            return setTimeout(function() {
                callback.apply(self || window, args);
            }, timeout);
        }
    };

    $.fn.multiselect = function(option, parameter) {
        return this.each(function() {
            var data = $(this).data('multiselect'), options = typeof option == 'object' && option;

            // Initialize the multiselect.
            if (!data) {
                $(this).data('multiselect', ( data = new Multiselect(this, options)));
            }

            // Call multiselect method.
            if ( typeof option == 'string') {
                data[option](parameter);
            }
        });
    };

    $.fn.multiselect.Constructor = Multiselect;
    
    // Automatically init selects by their data-role.
    $(function() {
        $("select[role='multiselect']").multiselect();
    });

}(window.jQuery);

</script>