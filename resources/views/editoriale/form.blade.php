<div class="row padding-1 p-1">
    <div class="col-md-12">

        <div class="form-group mb-2 mb20">
            <label for="editorial" class="form-label">{{ __('Editorial') }}</label>
            <input type="text" name="Editorial" class="form-control @error('Editorial') is-invalid @enderror" value="{{ old('Editorial', $editoriale?->Editorial) }}" id="editorial" placeholder="Editorial">
            {!! $errors->first('Editorial', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="libro_id" class="form-label">{{ __('Libro Id') }}</label>
            <input type="text" name="libro_id" class="form-control @error('libro_id') is-invalid @enderror" value="{{ old('libro_id', $editoriale?->libro_id) }}" id="libro_id" placeholder="Libro Id">
            {!! $errors->first('libro_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>
