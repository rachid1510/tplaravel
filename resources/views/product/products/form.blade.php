<div class="form-group {{ $errors->has('imei_product') ? 'has-error' : ''}}">
    <label for="imei_product" class="col-md-4 control-label">{{ 'Imei Product' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="imei_product" type="text" id="imei_product" value="{{ $product->imei_product or ''}}" required>
        {!! $errors->first('imei_product', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('label') ? 'has-error' : ''}}">
    <label for="label" class="col-md-4 control-label">{{ 'Label' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="label" type="text" id="label" value="{{ $product->label or ''}}" >
        {!! $errors->first('label', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('model') ? 'has-error' : ''}}">
    <label for="model" class="col-md-4 control-label">{{ 'Model' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="model" type="text" id="model" value="{{ $product->model or ''}}" >
        {!! $errors->first('model', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('enabled_date') ? 'has-error' : ''}}">
    <label for="enabled_date" class="col-md-4 control-label">{{ 'Enabled Date' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="enabled_date" type="date" id="enabled_date" value="{{ $product->enabled_date or ''}}" >
        {!! $errors->first('enabled_date', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('state') ? 'has-error' : ''}}">
    <label for="state" class="col-md-4 control-label">{{ 'State' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="state" type="text" id="state" value="{{ $product->state or ''}}" >
        {!! $errors->first('state', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
    <label for="status" class="col-md-4 control-label">{{ 'Status' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="status" type="text" id="status" value="{{ $product->status or ''}}" >
        {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('movement_id') ? 'has-error' : ''}}">
    <label for="movement_id" class="col-md-4 control-label">{{ 'Movement Id' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="movement_id" type="number" id="movement_id" value="{{ $product->movement_id or ''}}" >
        {!! $errors->first('movement_id', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('observtion') ? 'has-error' : ''}}">
    <label for="observtion" class="col-md-4 control-label">{{ 'Observtion' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="observtion" type="text" id="observtion" value="{{ $product->observtion or ''}}" >
        {!! $errors->first('observtion', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="col-md-4 control-label">{{ 'User Id' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="user_id" type="number" id="user_id" value="{{ $product->user_id or ''}}" >
        {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
