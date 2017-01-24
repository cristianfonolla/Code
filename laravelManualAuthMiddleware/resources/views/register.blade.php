<form action="{{ url('/register') }}" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder=""/>

    </div>
    <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder=""/>
    </div>
    <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder=""/>
    </div>
    <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder=""/>
    </div>
    <div class="row">
        <div class="col-xs-1">
            <label>
                <div class="checkbox_register icheck">
                    <label>
                        <input type="checkbox" name="terms">
                    </label>
                </div>
            </label>
        </div><!-- /.col -->
        <div class="col-xs-6">

        </div><!-- /.col -->
        <div class="col-xs-4 col-xs-push-1">
            <button type="submit" class="btn btn-primary btn-block btn-flat">{{ trans('adminlte_lang::message.register') }}</button>
        </div><!-- /.col -->
    </div>
</form>