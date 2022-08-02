@extends('primeraVista')

@section('content')
    <form class="container border p-4 mt-4">
        <label for="formFile" class="form-label">Cargue el archivo a convertir</label>
        <div class="row row-cols-2">
            <div class="col-9">
                <input class="form-control" type="file" id="formFile">
            </div>
            <div class="col-3">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                      Opcion 1
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                    <label class="form-check-label" for="flexRadioDefault2">
                      Opcion 2
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                    <label class="form-check-label" for="flexRadioDefault3">
                      Opcion 3
                    </label>
                </div>
            </div>
        </div>
    </form>
@endsection