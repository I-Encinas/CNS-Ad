
<div class="form-group mb-3" hidden>
    <label class="form-label">{{ Form::label('order_type_id', 'Order_Type') }}</label>
    <div>
        {{ Form::select('order_type_id', $ordert->pluck('name', 'id'), $order->order_type_id ?? 2, ['class' => 'form-control' . ($errors->has('order_type_id') ? ' is-invalid' : ''), 'placeholder' => 'Tipo']) }}
        {!! $errors->first('order_type_id', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">Selecione.</small>
    </div>
</div>

<div class="form-group mb-3" hidden>
    <label class="form-label">{{ Form::label('status', 'Status') }}</label>
    <div>
        {{ Form::text('status', $order->status ?? 0, ['class' => 'form-control' . ($errors->has('status') ? ' is-invalid' : ''), 'placeholder' => 'Status']) }}
        {!! $errors->first('status', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">Enter the order status.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">{{ Form::label('date_o') }}</label>
    <div>
        {{ Form::date('date_o', $order->date_o, ['class' => 'form-control' . ($errors->has('date_o') ? ' is-invalid' : ''), 'placeholder' => 'Fecha', 'style' => 'width: 50%; display: inline-block;']) }}
        {!! $errors->first('date_o', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">order <b>date_o</b> instruction.</small>
    </div>
</div>


    <div class="form-footer">
        <div class="text-end">
            <div class="d-flex">
                <a href="/orderis" class="btn btn-danger">Cancelar</a>
                <button type="submit" class="btn btn-primary ms-auto ajax-submit">Enviar</button>
            </div>
        </div>
    </div>
