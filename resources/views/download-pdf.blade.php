<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>REPORTE GENERAL</title>
</head>
<style>
    table {
        font-family: arial, sans-serif;
        font-size: 8px;
        background-color: white;
        text-align: left;
        border-collapse: collapse;
        width: 100%;
    }

    th,
    td {
        padding: 1px;
        border: 1px solid #0F362D;
    }

    thead {
        background-color: #246355;
        border-bottom: solid 5px #0F362D;
        color: white;
    }

    tr:nth-child(even) {
        background-color: #ddd;
    }

    tr:hover td {
        background-color: #369681;
        color: white;
    }
</style>

<body>
    <h2>REPORTE GENERAL</h2>
    <table>
        <thead>
            <tr align="left">
                <th style="width: 100px;">Marca temporal</th>
                <th style="width: 100px;">Numero Vim</th>
                <th style="width: 25px;">KMS</th>
                <th style="width: 50px;">Marca</th>
                <th style="width: 50px;">Modelo</th>
                <th>Versión</th>
                <th>Color del automóvil</th>
                <th>HANDOVER CHECK LIST</th>
                <th>LONG TERM STORED</th>
                <th>PDI</th>
                <th>48V BATTERY STOCK</th>
            </tr>
        </thead>
        @if ($list->isNotEmpty())
            @foreach ($list as $data)
                <tr align="left">
                    <td>
                        {{ $data->created_at }}
                    </td>
                    <td>
                        {{ $data->chasis }}
                    </td>
                    <td>
                        kms
                    </td>
                    <td>
                        {{ $data->marca }}
                    </td>
                    <td>
                        {{ $data->modelo }}
                    </td>
                    <td>
                        {{ $data->version }}
                    </td>
                    <td>
                        {{ $data->colorexterior }}-
                        {{ $data->colorinterior }}
                    </td>
                    <td>
                        @if ($data->handover > 0)
                            Inspeccionado
                        @endif
                    </td>
                    <td>
                        @if ($data->long_term_store > 0)
                            Inspeccionado
                        @endif
                    </td>
                    <td>
                        @if ($data->pdi > 0)
                            Inspeccionado
                        @endif
                    </td>
                    <td>
                        @if ($data->battery_inspection > 0)
                            Inspeccionado
                        @endif
                    </td>
                </tr>
            @endforeach
        @endif
    </table>

    <h4>Reporte Individual por inspección con observaciones</h4>
    @if ($list_handover->isNotEmpty())
        <h3>HANDOVER</h3>
        <table>
            <thead>
                <tr align="left">
                    <th style="width: 100px;">Marca temporal</th>
                    <th style="width: 100px;">Numero Vim</th>
                    <th style="width: 25px;">KMS</th>
                    <th style="width: 50px;">Marca</th>
                    <th style="width: 50px;">Modelo</th>
                    <th style="width: 25px;">Versión</th>
                    <th>Color del automóvil</th>
                </tr>
            </thead>
            @foreach ($list_handover as $data)
                @if ($data->handover > 0)
                    <tr align="left">

                        <td>
                            {{ $data->created_at }}
                        </td>
                        <td>
                            {{ $data->chasis }}
                        </td>
                        <td>
                            kms
                        </td>
                        <td>
                            {{ $data->marca }}
                        </td>
                        <td>
                            {{ $data->modelo }}
                        </td>
                        <td>
                            {{ $data->version }}
                        </td>
                        <td>
                            {{ $data->colorexterior }}-
                            {{ $data->colorinterior }}
                        </td>

                    </tr>
                @endif
            @endforeach
        </table>
    @endif

    @if ($list_long_term_store->isNotEmpty())
        <h3>LONGTERM</h3>
        <table>
            <thead>
                <tr align="left">
                    <th style="width: 100px;">Marca temporal</th>
                    <th style="width: 100px;">Numero Vim</th>
                    <th style="width: 25px;">KMS</th>
                    <th style="width: 50px;">Marca</th>
                    <th style="width: 50px;">Modelo</th>
                    <th style="width: 25px;">Versión</th>
                    <th>Color del automóvil</th>
                </tr>
            </thead>
            @foreach ($list_long_term_store as $data)
                @if ($data->long_term_store > 0)
                    <tr align="left">
                        <td>
                            {{ $data->created_at }}
                        </td>
                        <td>
                            {{ $data->chasis }}
                        </td>
                        <td>
                            kms
                        </td>
                        <td>
                            {{ $data->marca }}
                        </td>
                        <td>
                            {{ $data->modelo }}
                        </td>
                        <td>
                            {{ $data->version }}
                        </td>
                        <td>
                            {{ $data->colorexterior }}-
                            {{ $data->colorinterior }}
                        </td>
                    </tr>
                @endif
            @endforeach

        </table>
    @endif

    @if ($list_pdi->isNotEmpty())
        <h3>PDI</h3>
        <table>
            <thead>
                <tr align="left">
                    <th style="width: 100px;">Marca temporal</th>
                    <th style="width: 100px;">Numero Vim</th>
                    <th style="width: 25px;">KMS</th>
                    <th style="width: 50px;">Marca</th>
                    <th style="width: 50px;">Modelo</th>
                    <th style="width: 25px;">Versión</th>
                    <th>Color del automóvil</th>
                    <th>Inspector</th>
                    <th>Registro de fallas y reparaciones</th>
                </tr>
            </thead>
            @foreach ($list_pdi as $data)
                <?php
                $formdata = json_decode($data->formrequest);
                ?>
                @if ($data->pdi > 0)
                    <tr align="left">
                        <td>
                            {{ $data->created_at }}
                        </td>
                        <td>
                            {{ $data->chasis }}
                        </td>
                        <td>
                            kms
                        </td>
                        <td>
                            {{ $data->marca }}
                        </td>
                        <td>
                            {{ $data->modelo }}
                        </td>
                        <td>
                            {{ $data->version }}
                        </td>
                        <td>
                            {{ $data->colorexterior }}-
                            {{ $data->colorinterior }}
                        </td>
                        <td>{{ $formdata->v164 }}</td>
                        <td>{{ $formdata->v187 }}</td>
                    </tr>
                @endif
            @endforeach

        </table>
    @endif

    @if ($list_battery_inspection->isNotEmpty())
        <h3>BATTERY STOCK</h3>
        <table>
            <thead>
                <tr align="left">
                    <th style="width: 100px;">Marca temporal</th>
                    <th style="width: 100px;">Numero Vim</th>
                    <th style="width: 25px;">KMS</th>
                    <th style="width: 50px;">Marca</th>
                    <th style="width: 50px;">Modelo</th>
                    <th style="width: 25px;">Versión</th>
                    <th>Color del automóvil</th>
                </tr>
            </thead>
            @foreach ($list_battery_inspection as $data)
                @if ($data->battery_inspection > 0)
                    <tr align="left">
                        <td>
                            {{ $data->created_at }}
                        </td>
                        <td>
                            {{ $data->chasis }}
                        </td>
                        <td>
                            kms
                        </td>
                        <td>
                            {{ $data->marca }}
                        </td>
                        <td>
                            {{ $data->modelo }}
                        </td>
                        <td>
                            {{ $data->version }}
                        </td>
                        <td>
                            {{ $data->colorexterior }}-
                            {{ $data->colorinterior }}
                        </td>
                    </tr>
                @endif
            @endforeach
        </table>
    @endif
</body>

</html>
