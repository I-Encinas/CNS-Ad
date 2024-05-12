
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('service_id') }}</label>
    <div>
        {{ Form::text('service_id', $employee->service_id, ['class' => 'form-control' .
        ($errors->has('service_id') ? ' is-invalid' : ''), 'placeholder' => 'Service Id']) }}
        {!! $errors->first('service_id', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">employee <b>service_id</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('ci') }}</label>
    <div>
        {{ Form::text('ci', $employee->ci, ['class' => 'form-control' .
        ($errors->has('ci') ? ' is-invalid' : ''), 'placeholder' => 'Ci']) }}
        {!! $errors->first('ci', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">employee <b>ci</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('name') }}</label>
    <div>
        {{ Form::text('name', $employee->name, ['class' => 'form-control' .
        ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
        {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">employee <b>name</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('paternal_surname') }}</label>
    <div>
        {{ Form::text('paternal_surname', $employee->paternal_surname, ['class' => 'form-control' .
        ($errors->has('paternal_surname') ? ' is-invalid' : ''), 'placeholder' => 'Paternal Surname']) }}
        {!! $errors->first('paternal_surname', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">employee <b>paternal_surname</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('maternal_surname') }}</label>
    <div>
        {{ Form::text('maternal_surname', $employee->maternal_surname, ['class' => 'form-control' .
        ($errors->has('maternal_surname') ? ' is-invalid' : ''), 'placeholder' => 'Maternal Surname']) }}
        {!! $errors->first('maternal_surname', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">employee <b>maternal_surname</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('address') }}</label>
    <div>
        {{ Form::text('address', $employee->address, ['class' => 'form-control' .
        ($errors->has('address') ? ' is-invalid' : ''), 'placeholder' => 'Address']) }}
        {!! $errors->first('address', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">employee <b>address</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('phone') }}</label>
    <div>
        {{ Form::text('phone', $employee->phone, ['class' => 'form-control' .
        ($errors->has('phone') ? ' is-invalid' : ''), 'placeholder' => 'Phone']) }}
        {!! $errors->first('phone', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">employee <b>phone</b> instruction.</small>
    </div>
</div>

    <div class="form-footer">
        <div class="text-end">
            <div class="d-flex">
                <a href="#" class="btn btn-danger">Cancelar</a>
                <button type="submit" class="btn btn-primary ms-auto ajax-submit">Enviar</button>
            </div>
        </div>
    </div>
