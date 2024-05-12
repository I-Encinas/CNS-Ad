
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('order_type_id') }}</label>
    <div>
        {{ Form::text('order_type_id', $order->order_type_id, ['class' => 'form-control' .
        ($errors->has('order_type_id') ? ' is-invalid' : ''), 'placeholder' => 'Order Type Id']) }}
        {!! $errors->first('order_type_id', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">order <b>order_type_id</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('status') }}</label>
    <div>
        {{ Form::text('status', $order->status, ['class' => 'form-control' .
        ($errors->has('status') ? ' is-invalid' : ''), 'placeholder' => 'Status']) }}
        {!! $errors->first('status', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">order <b>status</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('date_o') }}</label>
    <div>
        {{ Form::text('date_o', $order->date_o, ['class' => 'form-control' .
        ($errors->has('date_o') ? ' is-invalid' : ''), 'placeholder' => 'Date O']) }}
        {!! $errors->first('date_o', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">order <b>date_o</b> instruction.</small>
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
