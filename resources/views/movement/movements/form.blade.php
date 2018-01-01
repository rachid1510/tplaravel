<div class="form-group {{ $errors->has('provider') ? 'has-error' : ''}}">
    <label for="provider" class="col-md-4 control-label">{{ 'Provider' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="provider" type="text" id="provider" value="{{ $movement->provider or ''}}" >
        {!! $errors->first('provider', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('order_ref') ? 'has-error' : ''}}">
    <label for="order_ref" class="col-md-4 control-label">{{ 'Order Ref' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="order_ref" type="text" id="order_ref" value="{{ $movement->order_ref or ''}}" >
        {!! $errors->first('order_ref', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('plan') ? 'has-error' : ''}}">
    <label for="plan" class="col-md-4 control-label">{{ 'Plan' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="plan" type="text" id="plan" value="{{ $movement->plan or ''}}" >
        {!! $errors->first('plan', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('date_arrived') ? 'has-error' : ''}}">
    <label for="date_arrived" class="col-md-4 control-label">{{ 'Date Arrived' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="date_arrived" type="date" id="date_arrived" value="{{ $movement->date_arrived or ''}}" >
        {!! $errors->first('date_arrived', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('state') ? 'has-error' : ''}}">
    <label for="state" class="col-md-4 control-label">{{ 'State' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="state" type="text" id="state" value="{{ $movement->state or ''}}" >
        {!! $errors->first('state', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('observtion') ? 'has-error' : ''}}">
    <label for="observtion" class="col-md-4 control-label">{{ 'Observtion' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="observtion" type="text" id="observtion" value="{{ $movement->observtion or ''}}" >
        {!! $errors->first('observtion', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('quantity') ? 'has-error' : ''}}">
    <label for="quantity" class="col-md-4 control-label">{{ 'Quantity' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="quantity" type="text" id="quantity" value="{{ $movement->quantity or ''}}" >
        {!! $errors->first('quantity', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('category') ? 'has-error' : ''}}">
    <label for="category" class="col-md-4 control-label">{{ 'Category' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="category" type="number" id="category" value="{{ $movement->category or ''}}" >
        {!! $errors->first('category', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
