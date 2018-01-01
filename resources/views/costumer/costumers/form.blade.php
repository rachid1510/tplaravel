<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="col-md-4 control-label">{{ 'Name' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="name" type="text" id="name" value="{{ $costumer->name or ''}}" required>
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('phone') ? 'has-error' : ''}}">
    <label for="phone" class="col-md-4 control-label">{{ 'Phone' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="phone" type="text" id="phone" value="{{ $costumer->phone or ''}}" >
        {!! $errors->first('phone', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('Type') ? 'has-error' : ''}}">
    <label for="Type" class="col-md-4 control-label">{{ 'Type' }}</label>
    <div class="col-md-6">
        <select name="Type" class="form-control" id="Type" >
    @foreach (json_decode('{"Particulier":"Particulier","Soci\u00e8t\u00e9":"Soci\u00e8t\u00e9"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($costumer->Type) && $costumer->Type == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
        {!! $errors->first('Type', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('city') ? 'has-error' : ''}}">
    <label for="city" class="col-md-4 control-label">{{ 'City' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="city" type="text" id="city" value="{{ $costumer->city or ''}}" >
        {!! $errors->first('city', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('departement') ? 'has-error' : ''}}">
    <label for="departement" class="col-md-4 control-label">{{ 'Departement' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="departement" type="text" id="departement" value="{{ $costumer->departement or ''}}" >
        {!! $errors->first('departement', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('adress') ? 'has-error' : ''}}">
    <label for="adress" class="col-md-4 control-label">{{ 'Adress' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="adress" type="text" id="adress" value="{{ $costumer->adress or ''}}" >
        {!! $errors->first('adress', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="col-md-4 control-label">{{ 'User Id' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="user_id" type="number" id="user_id" value="{{ $costumer->user_id or ''}}" >
        {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
