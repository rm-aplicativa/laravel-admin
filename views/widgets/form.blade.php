<form {!! $attributes !!}>
    <div class="box-body fields-group">

        @foreach($fields as $field)
            {!! $field->render() !!}
        @endforeach

    </div>

    <!-- /.box-body -->
    <div class="box-footer">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="col-sm-2">
        </div>
        <div class="col-sm-8">
            <div class="btn-group pull-right">
                <button type="submit" class="btn btn-info pull-right">{{ trans('admin::lang.submit') }}</button>
            </div>
        </div>

    </div>
</form>