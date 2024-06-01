@extends('layouts.app')
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Ingrese un número de chasis válido') }}</div>
                    <form name="vin-search" id="vin-search" method="post" action="{{ route('search.vin') }}">
                        @csrf
                        <div class="card-body">
                            <input type="text" class="form-control border-1 rounded-1 text-start " id="vin"
                                name="vin" placeholder="" value="" required>
                            <select name="company" class="form-select ps-0 pe-0 border-1 rounded-0 w-100" required>
                                <option value="" selected>Seleccione ...</option>
                                <option value="01">Bahia Motors</option>
                                <option value="06">Bay Motors</option>
                            </select>
                            <br>
                            <button type="submit" class="btn btn-primary w-50">Buscar</button>
                            <br><br>

                        </div>

                    </form>
                    <form name="download-pdf" id="download-pdf" method="post" action="{{ route('download-pdf') }}">
                        @csrf
                        <div class="card-body">
                            <div class="input-group">
                                <span class="input-group-text">De</span>
                                <input name="DateTrxfrom" type="date" id="abc" value="" class="form-control"
                                    placeholder="0.00" required>
                                <span class="input-group-text">Hasta</span>
                                <input name="DateTrxto" type="date" id="abc" value="" class="form-control"
                                    placeholder="0.00">
                                @if (isset($data))
                                    <input type="hidden" value="{{ $data->chasis }}" id="chasis" name="chasis" readonly
                                        class="border-1 rounded-1 text-start ">
                                @else
                                    <input type="hidden" value="" id="chasis" name="chasis" readonly
                                        class="border-1 rounded-1 text-start ">
                                @endif

                            </div>
                            {{--  <a href="{{ route('download-pdf') }}"> --}}
                            <button type="submit" class="btn btn-outline-primary w-100">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-printer-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2H5zm6 8H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1z">
                                    </path>
                                    <path
                                        d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2V7zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z">
                                    </path>
                                </svg>
                                Imprimir Informe
                                @if (isset($data))
                                    {{ $data->chasis }}
                                @else
                                    General
                                @endif
                            </button>
                            {{-- </a> --}}
                        </div>
                    </form>
                </div>
                <br>

                @if (isset($data))
                    <div class="card">
                        <div class="card-header">{{ __('Información del Vehículo') }}</div>
                        <div class="card-body">

                            <div class="container ">
                                <div class="row justify-content-center ">
                                    <div class="col-md-4 ">
                                        <strong>Marca: </strong>{{ $data->marca }}
                                    </div>
                                    <div class="col-md-4">
                                        <strong>Modelo: </strong>{{ $data->modelo }}
                                    </div>
                                    <div class="col-md-4">
                                        <strong>Motor: </strong>{{ $data->motor }}
                                    </div>

                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-md-4">
                                        <strong>VIM: </strong>{{ $data->chasis }}
                                    </div>
                                    <div class="col-md-4">
                                        <strong>Año: </strong>{{ $data->anio }}
                                    </div>
                                    <div class="col-md-4">
                                        <strong>Versión: </strong>{{ $data->version }}
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-md-4">
                                        <strong>Color Exterior: </strong>{{ $data->colorexterior }}
                                    </div>
                                    <div class="col-md-4">
                                        <strong>Color Interior: </strong>{{ $data->colorinterior }}
                                    </div>
                                    <div class="col-md-4">
                                        <strong>Numero de auto: </strong>{{ $data->numeroauto }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">{{ __('Indique el formulario que desea realizar') }}</div>
                        <div class="card-body">
                            <div class="container">
                                <div class="row justify-content-center">

                                    <div class="col-md-3">

                                        <form name="handover_check_list" id="handover_check_list" method="post"
                                            action="{{ route('handover.check') }}">
                                            @csrf
                                            <input type="hidden" value="{{ $data->marca }}" id="marca" name="marca"
                                                readonly class="border-1 rounded-1 text-start ">
                                            <input type="hidden" value="{{ $data->modelo }}" id="modelo" name="modelo"
                                                readonly>
                                            <input type="hidden" value="{{ $data->motor }}" id="motor"
                                                name="motor" readonly>
                                            <input type="hidden" value="{{ $data->chasis }}" id="chasis"
                                                name="chasis" readonly>
                                            <input type="hidden" value="{{ $data->anio }}" id="anio"
                                                name="anio" readonly>
                                            <input type="hidden" value="{{ $data->version }}" id="version"
                                                name="version" readonly>
                                            <input type="hidden" value="{{ $data->colorexterior }}" id="colorexterior"
                                                name="colorexterior" readonly>
                                            <input type="hidden" value="{{ $data->colorinterior }}" id="colorinterior"
                                                name="colorinterior" readonly>
                                            <input type="hidden" value="{{ $data->numeroauto }}" id="numeroauto"
                                                name="numeroauto" readonly>
                                            <input type="hidden" value="{{ $data->company }}" id="company"
                                                name="company" readonly>

                                            <button type="submit" class="btn btn-primary mh-100"
                                                style="width: 150px; height: 100px;">Handover Check List</button>

                                        </form>
                                    </div>
                                    <div class="col-md-3">
                                        <form name="pdi_check_list" id="pdi_check_list" method="post"
                                            action="{{ route('pdi.check') }}">
                                            @csrf
                                            <input type="hidden" value="{{ $data->marca }}" id="marca"
                                                name="marca" readonly class="border-1 rounded-1 text-start ">
                                            <input type="hidden" value="{{ $data->modelo }}" id="modelo"
                                                name="modelo" readonly>
                                            <input type="hidden" value="{{ $data->motor }}" id="motor"
                                                name="motor" readonly>
                                            <input type="hidden" value="{{ $data->chasis }}" id="chasis"
                                                name="chasis" readonly>
                                            <input type="hidden" value="{{ $data->anio }}" id="anio"
                                                name="anio" readonly>
                                            <input type="hidden" value="{{ $data->version }}" id="version"
                                                name="version" readonly>
                                            <input type="hidden" value="{{ $data->colorexterior }}" id="colorexterior"
                                                name="colorexterior" readonly>
                                            <input type="hidden" value="{{ $data->colorinterior }}" id="colorinterior"
                                                name="colorinterior" readonly>
                                            <input type="hidden" value="{{ $data->numeroauto }}" id="numeroauto"
                                                name="numeroauto" readonly>
                                            <input type="hidden" value="{{ $data->company }}" id="company"
                                                name="company" readonly>

                                            <button type="submit" class="btn btn-primary mh-100"
                                                style="width: 150px; height: 100px;">Pre-Delivery Inspection (PDI) Checking
                                                List</button>
                                        </form>


                                    </div>
                                    <div class="col-md-3">
                                        <form name="48v_battery" id="48v_battery" method="post"
                                            action="{{ route('battery.inspection') }}">
                                            @csrf
                                            <input type="hidden" value="{{ $data->marca }}" id="marca"
                                                name="marca" readonly class="border-1 rounded-1 text-start ">
                                            <input type="hidden" value="{{ $data->modelo }}" id="modelo"
                                                name="modelo" readonly>
                                            <input type="hidden" value="{{ $data->motor }}" id="motor"
                                                name="motor" readonly>
                                            <input type="hidden" value="{{ $data->chasis }}" id="chasis"
                                                name="chasis" readonly>
                                            <input type="hidden" value="{{ $data->anio }}" id="anio"
                                                name="anio" readonly>
                                            <input type="hidden" value="{{ $data->version }}" id="version"
                                                name="version" readonly>
                                            <input type="hidden" value="{{ $data->colorexterior }}" id="colorexterior"
                                                name="colorexterior" readonly>
                                            <input type="hidden" value="{{ $data->colorinterior }}" id="colorinterior"
                                                name="colorinterior" readonly>
                                            <input type="hidden" value="{{ $data->numeroauto }}" id="numeroauto"
                                                name="numeroauto" readonly>
                                            <input type="hidden" value="{{ $data->company }}" id="company"
                                                name="company" readonly>

                                            <button type="submit" class="btn btn-primary mh-100"
                                                style="width: 150px; height: 100px;">48v Battery Vehicle Inspection and
                                                charging Record Form</button>
                                        </form>
                                    </div>
                                    <div class="col-md-3">
                                        @if($longTerm != null)
                                        <a href="{{ route('long.term.edit', ['id' => $longTerm->id, 'title' => 'Nueva inspección', 'type' => 2]) }}" class="btn btn-primary mh-100"
                                            style="width: 150px; height: 100px;">
                                            Long Term Stored Vehicle Check
                                                Sheet
                                        </a>
                                        @else
                                        <form name="long_term_store" id="long_term_store" method="post"
                                            action="{{ route('long.term') }}">
                                            @csrf
                                            <input type="hidden" value="{{ $data->marca }}" id="marca"
                                                name="marca" readonly class="border-1 rounded-1 text-start ">
                                            <input type="hidden" value="{{ $data->modelo }}" id="modelo"
                                                name="modelo" readonly>
                                            <input type="hidden" value="{{ $data->motor }}" id="motor"
                                                name="motor" readonly>
                                            <input type="hidden" value="{{ $data->chasis }}" id="chasis"
                                                name="chasis" readonly>
                                            <input type="hidden" value="{{ $data->anio }}" id="anio"
                                                name="anio" readonly>
                                            <input type="hidden" value="{{ $data->version }}" id="version"
                                                name="version" readonly>
                                            <input type="hidden" value="{{ $data->colorexterior }}" id="colorexterior"
                                                name="colorexterior" readonly>
                                            <input type="hidden" value="{{ $data->colorinterior }}" id="colorinterior"
                                                name="colorinterior" readonly>
                                            <input type="hidden" value="{{ $data->numeroauto }}" id="numeroauto"
                                                name="numeroauto" readonly>
                                            <input type="hidden" value="{{ $data->company }}" id="company"
                                                name="company" readonly>

                                            <button type="submit" class="btn btn-primary mh-100"
                                                style="width: 150px; height: 100px;">Long Term Stored Vehicle Check
                                                Sheet</button>
                                        </form>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @if (!$shows->isEmpty())
                        <div class="card">
                            <div class="card-header">{{ __('Lista de formularios guardados para este vehiculo') }}</div>

                            <div class="card-body">

                                <div class="container ">
                                    <div class="row justify-content-center ">
                                        <div class="col-md-3 ">

                                            <strong>Id</strong>
                                        </div>
                                        <div class="col-md-3 ">

                                            <strong>Fecha</strong>
                                        </div>
                                        <div class="col-md-3">
                                            <strong>Formulario</strong>
                                        </div>
                                        <div class="col-md-3">

                                        </div>

                                    </div>
                                    @foreach ($shows as $show)
                                        <form name="{{ $show->formid }}" id="{{ $show->formid }}" method="post"
                                            action="{{ $show->formaction }}">
                                            @csrf
                                            {{--  <h1>{{ $show->formid }}</h1>
                                            <h1>{{ $show->formaction }}</h1> --}}
                                            <input type="hidden" value="{{ $show->formrequest }}" id="formrequest"
                                                name="formrequest" readonly>

                                            <div class="row justify-content-center m-1 p-1">
                                                <div class="col-md-3 ">

                                                    {{ $show->id }}
                                                </div>
                                                <div class="col-md-3 ">

                                                    {{ $show->created_at }}
                                                </div>
                                                <div class="col-md-3">
                                                    {{ $show->formname }}
                                                </div>
                                                <div class="col-md-3">
                                                    <button type="submit" class="btn btn-primary">Ver</button>
                                                    @if($show->formname == 'Long Term Stored Vehicle Check Sheet')
                                                        <a href="{{ route('long.term.edit', ['id' => $show->id, 'title' => 'Nueva inspección', 'type' => 2]) }}" class="btn btn-primary">
                                                            Editar
                                                        </a>
                                                        <a href="{{ route('long.term.edit', $show->id) }}?title=Nueva Inspeccion" class="btn btn-warning new-inspection" data-url="{{ route('long.term.edit', ['id' => $show->id, 'title' => 'Nueva inspección', 'type' => 1]) }}">
                                                            Nueva Inspección
                                                        </a>
                                                    @endif

                                                </div>

                                            </div>
                                        </form>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endif
                @endif
            </div>
        </div>

    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('.new-inspection').forEach(function (element) {
                element.addEventListener('click', function (event) {
                    event.preventDefault(); // Prevent the default behavior of the link
                    const url = this.getAttribute('data-url');

                    Swal.fire({
                        title: 'Advertencia',
                        text: "Va a realizar una inspección adelantada. ¿Desea continuar?",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Sí, continuar'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = url;
                        }
                    });
                });
            });
        });
    </script>
@endsection
