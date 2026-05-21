<!DOCTYPE html>
<html xmlns:o="urn:schemas-microsoft-com:office:office"
      xmlns:x="urn:schemas-microsoft-com:office:excel"
      xmlns="http://www.w3.org/TR/REC-html40">
<head>
    <meta charset="UTF-8">
    <title>REPORTE GENERAL</title>
    <style>
        table { border-collapse: collapse; font-family: Arial, sans-serif; font-size: 11px; }
        th, td { border: 1px solid #0F362D; padding: 4px; vertical-align: top; }
        thead { background-color: #246355; color: #ffffff; }
    </style>
</head>
<body>
    <h2>REPORTE GENERAL</h2>
    <table>
        <thead>
            <tr>
                <th>Marca temporal</th>
                <th>Numero Vim</th>
                <th>KMS</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Versión</th>
                <th>Color del automóvil</th>
                <th>HANDOVER CHECK LIST</th>
                <th>LONG TERM STORED</th>
                <th>PDI</th>
                <th>48V BATTERY STOCK</th>
            </tr>
        </thead>
        <tbody>
            @if ($list->isNotEmpty())
                @foreach ($list as $data)
                    <tr>
                        <td>{{ $data->created_at }}</td>
                        <td>{{ $data->chasis }}</td>
                        <td>kms</td>
                        <td>{{ $data->marca }}</td>
                        <td>{{ $data->modelo }}</td>
                        <td>{{ $data->version }}</td>
                        <td>{{ $data->colorexterior }}-{{ $data->colorinterior }}</td>
                        <td>@if ($data->handover > 0) Inspeccionado @endif</td>
                        <td>@if ($data->long_term_store > 0) Inspeccionado @endif</td>
                        <td>@if ($data->pdi > 0) Inspeccionado @endif</td>
                        <td>@if ($data->battery_inspection > 0) Inspeccionado @endif</td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>

    <h4>Reporte Individual por inspección con observaciones</h4>

    @if ($list_handover->isNotEmpty())
        <h3>HANDOVER</h3>
        <table>
            <thead>
                <tr>
                    <th>Marca temporal</th>
                    <th>Numero Vim</th>
                    <th>KMS</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Versión</th>
                    <th>Color del automóvil</th>
                    <th>Inspector</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($list_handover as $data)
                    @php $formdatahandover = json_decode($data->formrequest); @endphp
                    @if ($data->handover > 0)
                        <tr>
                            <td>{{ $data->created_at }}</td>
                            <td>{{ $data->chasis }}</td>
                            <td>kms</td>
                            <td>{{ $data->marca }}</td>
                            <td>{{ $data->modelo }}</td>
                            <td>{{ $data->version }}</td>
                            <td>{{ $data->colorexterior }}-{{ $data->colorinterior }}</td>
                            <td>{{ $formdatahandover->v11 ?? '' }}</td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    @endif

    @if ($list_long_term_store->isNotEmpty())
        <h3>LONGTERM</h3>
        <table>
            <thead>
                <tr>
                    <th>Marca temporal</th>
                    <th>Numero Vim</th>
                    <th>KMS</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Versión</th>
                    <th>Color del automóvil</th>
                    <th>Inspector</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($list_long_term_store as $data)
                    @php $formdatalong_term = json_decode($data->formrequest); @endphp
                    @if ($data->long_term_store > 0)
                        <tr>
                            <td>{{ $data->created_at }}</td>
                            <td>{{ $data->chasis }}</td>
                            <td>kms</td>
                            <td>{{ $data->marca }}</td>
                            <td>{{ $data->modelo }}</td>
                            <td>{{ $data->version }}</td>
                            <td>{{ $data->colorexterior }}-{{ $data->colorinterior }}</td>
                            <td>{{ $formdatalong_term->v120 ?? '' }}</td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    @endif

    @if ($list_pdi->isNotEmpty())
        <h3>PDI</h3>
        <table>
            <thead>
                <tr>
                    <th>Marca temporal</th>
                    <th>Numero Vim</th>
                    <th># Auto</th>
                    <th>KMS</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Versión</th>
                    <th>Color del automóvil</th>
                    <th>Inspector</th>
                    <th>Registro de fallas y reparaciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($list_pdi as $data)
                    @php $formdata = json_decode($data->formrequest); @endphp
                    @if ($data->pdi > 0)
                        <tr>
                            <td>{{ $data->created_at }}</td>
                            <td>{{ $data->chasis }}</td>
                            <td>{{ $formdata->v162 ?? '' }}</td>
                            <td>{{ $formdata->v170 ?? '' }} kms</td>
                            <td>{{ $data->marca }}</td>
                            <td>{{ $data->modelo }}</td>
                            <td>{{ $data->version }}</td>
                            <td>{{ $data->colorexterior }}-{{ $data->colorinterior }}</td>
                            <td>{{ $formdata->v164 ?? '' }}</td>
                            <td>{{ $formdata->v187 ?? '' }}</td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    @endif

    @if ($list_battery_inspection->isNotEmpty())
        <h3>BATTERY STOCK</h3>
        <table>
            <thead>
                <tr>
                    <th>Marca temporal</th>
                    <th>Numero Vim</th>
                    <th>KMS</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Versión</th>
                    <th>Color del automóvil</th>
                    <th>Inspector</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($list_battery_inspection as $data)
                    @php $formdata = json_decode($data->formrequest); @endphp
                    @if ($data->battery_inspection > 0)
                        <tr>
                            <td>{{ $data->created_at }}</td>
                            <td>{{ $data->chasis }}</td>
                            <td>{{ $formdata->v170 ?? '' }} kms</td>
                            <td>{{ $data->marca }}</td>
                            <td>{{ $data->modelo }}</td>
                            <td>{{ $data->version }}</td>
                            <td>{{ $data->colorexterior }}-{{ $data->colorinterior }}</td>
                            <td>{{ $formdata->v120 ?? '' }}</td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    @endif
</body>
</html>
