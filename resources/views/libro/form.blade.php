<div class="row padding-1 p-1">
    <div class="col-md-12">

        <div class="form-group mb-2 mb20">
            <label for="name" class="form-label">{{ __('Name') }}</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $libro?->name) }}" id="name" placeholder="Name">
            {!! $errors->first('name', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="año" class="form-label">{{ __('Año') }}</label>
            <input type="text" name="año" class="form-control @error('año') is-invalid @enderror" value="{{ old('año', $libro?->año) }}" id="año" placeholder="Año">
            {!! $errors->first('año', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="escritor" class="form-label">{{ __('Escritor') }}</label>
            <input type="text" name="escritor" class="form-control @error('escritor') is-invalid @enderror" value="{{ old('escritor', $libro?->escritor) }}" id="escritor" placeholder="Escritor">
            {!! $errors->first('escritor', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>
