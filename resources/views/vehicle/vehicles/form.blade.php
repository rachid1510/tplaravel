<div class="form-group {{ $errors->has('matricule') ? 'has-error' : ''}}">
    <label for="matricule" class="col-md-4 control-label">{{ 'Matricule' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="matricule" type="text" id="matricule" value="{{ $vehicle->matricule or ''}}" required>
        {!! $errors->first('matricule', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('marque') ? 'has-error' : ''}}">
    <label for="marque" class="col-md-4 control-label">{{ 'Marque' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="marque" type="text" id="marque" value="{{ $vehicle->marque or ''}}" >
        {!! $errors->first('marque', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('model') ? 'has-error' : ''}}">
    <label for="model" class="col-md-4 control-label">{{ 'Model' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="model" type="text" id="model" value="{{ $vehicle->model or ''}}" >
        {!! $errors->first('model', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('costumer_id') ? 'has-error' : ''}}">
    <label for="costumer_id" class="col-md-4 control-label">{{ 'Costumer Id' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="costumer_id" type="number" id="costumer_id" value="{{ $vehicle->costumer_id or ''}}" >
        {!! $errors->first('costumer_id', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="col-md-4 control-label">{{ 'User Id' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="user_id" type="number" id="user_id" value="{{ $vehicle->user_id or ''}}" >
        {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
