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

     </div> </div>

    <!-- status Form Input -->
    <div class="form-group">
        {!! Form::label('status', @trans('gallary.status').' :', ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-10">
            <div class="fg-line">
                <select name="status" id="status" class="form-control input-sm selectpicker">
                    @if(isset($album->status) && $album->status == 1)
                        <option value="1" selected="selected" >@lang('common.active')</option>
                        <option value="0">@lang('common.inactive')</option>
                     @elseif(old('status') != 0)
                        <option value="1" @if(old('status') == 1) selected="selected" @endif  >@lang('common.active')</option>
                        <option value="0" @if(old('status') == 0) selected="selected" @endif>@lang('common.inactive')</option>    
                    @else
                        <option value="1">@lang('common.active')</option>
                        <option value="0" selected="selected">@lang('common.inactive')</option>
                    @endif
                </select>
            </div>
        </div>
    </div>
 

      <!-- Save button Input -->


                <div class="form-group ">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary btn-sm">@lang('common.save')</button>
                            <a class="btn btn-info btn-sm" href="{{ redirect()->back()->getTargetUrl()  }}">@lang('common.back')</a>
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



        

            </div>
        </div>
    </div>

    </div>

   
</div>