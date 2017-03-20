 <div class="card-body card-padding">

    @include('partials.form-errors')
    
    {!! csrf_field() !!}
    <!-- language tape Form Input -->
    <div class="form-group">
            <div class="card-body container">
      
                            
              <!-- gallary title Form Input -->
            <div class="form-group">
                {!! Form::label('title', @trans('gallary.title').':', ['class' => 'col-sm-2 control-label required ']) !!}
                <div class="col-sm-6">
                    <div class="fg-line">
                        {!! Form::text('title', null, ['class' => 'form-control input-sm', 'maxlength' => "40"]) !!}
                    </div>
                </div>
                
            </div>
            
     </div> 
     </div>

     <!-- albumId Form Input -->
    <div class="form-group">
        {!! Form::label('Album', @trans('gallary.album').' :', ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-10">
            <div class="fg-line">
                <select name="albumId" id="albumId" class="form-control input-sm selectpicker">
                    @if(isset($gallary->albumId) && $gallary->albumId == 2)
                        <option value="3" selected="selected">@lang('gallary.lab')</option>
                        <option value="2">@lang('gallary.store')</option>
                        <option value="1" >@lang('gallary.plant')</option>

                    @elseif(isset($gallary->albumId) && $gallary->albumId == 1)
                        <option value="3" >@lang('gallary.lab')</option>
                        <option value="2" selected="selected">@lang('gallary.store')</option>
                        <option value="1" >@lang('gallary.plant')</option>

                     @elseif(old('albumId') != 0)
                        <option value="3" @if(old('albumId') == 3) selected="selected" @endif  >@lang('gallary.lab')</option>
                        <option value="2" @if(old('albumId') == 2) selected="selected" @endif>@lang('gallary.store')</option>
                        <option value="1" @if(old('albumId') == 1) selected="selected" @endif>@lang('gallary.plant')</option>    
                    @else
                        <option value="3">@lang('gallary.lab')</option>
                        <option value="2">@lang('gallary.store')</option>
                        <option value="1" selected="selected">@lang('gallary.plant')</option>
                    @endif
                </select>
            </div>
        </div>
    </div>


     <div class="form-group">
                   

       {!! Form::label('image', @trans('gallary.image').' :', ['class' => 'col-sm-2 control-label ']) !!}
        @if(!empty($gallary->image))
            <div class="col-sm-3">
                <div class="fg-line">
                    {!! Form::text('image', null, ['class' => 'form-control input-sm', 'disabled' => 'disabled']) !!}
                </div>
            </div>
            <div class="col-md-1">
                @if(!empty($gallary->image))
                    @if(is_dir(public_path() . '/files/gallary/' . $gallary->id))
                        <a class="btn btn-info btn-sm" href="{{ asset('/files/gallary/' . $gallary->id . '/' . $gallary->image) }}" target="_blank">@lang('common.view')</a>
                    @endif
                @endif
            </div>
            <div class="col-sm-6">
        @else
            <div class="col-sm-10">
        @endif
                <div class="fg-line">
                    {!! Form::file('image', ['class' => 'form-control input-sm']) !!}
                </div>
            </div>
    </div>




    </div>  

           
        <!-- Created On Form Input -->
            @if(!empty($gallary->created_at) && !empty($gallary->created_by))
            <div class="form-group ">
                 {!! Form::label('created_at', @trans('common.created_on').':', ['class' => 'col-sm-2 control-label']) !!}
                <div class="col-sm-4">
                    <div class="fg-line">
                    {!! Form::label('created_at', $gallary->created_at . ' '. @trans('common.by').': ' .  $gallary->created_by, ['class' => 'control-label']) !!}
                    </div>
                </div>
            </div>
            @endif

            <!-- Last Updated Form Input -->
            @if(!empty($gallary->updated_at) && !empty($gallary->updated_by))

            <div class="form-group top">
                 {!! Form::label('updated_at', @trans('common.last_update').':', ['class' => 'col-sm-2 control-label']) !!}
                <div class="col-sm-4">
                    <div class="fg-line">
                    {!! Form::label('updated_at', $gallary->updated_at . ' '.@trans('common.by').': '  .  $gallary->updated_by, ['class' => 'control-label']) !!}

                    </div>
                </div>
            </div>
            @endif

      <!-- Save button Input -->


                <div class="form-group ">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary btn-sm">@lang('common.save')</button>
                            <a class="btn btn-info btn-sm" href="{{ redirect()->back()->getTargetUrl()  }}">@lang('common.back')</a>
                        </div>
                </div>




        

            </div>
        </div>
    </div>

    </div>

   
</div>