<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>PLATAFORMA VIRTUAL - MUSERPOL {{ $title ?? '' }}</title>
    <link rel="stylesheet" href="{{ asset('css/materialicons.css') }}" media="all" />
    <link rel="stylesheet" href="{{ asset('css/wkhtml.css') }}" media="all" />
</head>

<body>
    <div class="page-break">
        <table class="w-100 ">
            <tr>
                <th class="w-20 text-left no-padding no-margins align-middle">
                    <div class="text-center">
                        <img src="{{ asset('images/logo.jpg') }}" class="w-100">
                    </div>
                </th>
                <th class="w-50 align-top">
                    <span class="font-semibold uppercase leading-tight text-md">
                    {{ $institution ?? 'MUTUAL DE SERVICIOS AL POLICÍA "MUSERPOL"' }} <br>
                    {{ $direction ?? 'DIRECCIÓN DE BENEFICIOS ECONÓMICOS' }} <br>
                    @if(isset($unit1))
                        {!! $unit1 !!}
                    @endif
                    {{ $unit ?? 'UNIDAD DE OTORGACIÓN DE FONDO DE RETIRO POLICIAL, CUOTA MORTUORIA Y AUXILIO MORTUORIO' }}
                </span>
                </th>
                <th class="w-20 no-padding no-margins align-top">
                </th>
            </tr>
            <tr>
                <td colspan="3" style="border-bottom: 1px solid #22292f;"></td>
            </tr>
            <tr>
                <td colspan="3" class="font-bold text-center text-xl uppercase">
                    {{ $title }} @if (isset($subtitle))
                    <br><span class="font-medium text-lg">{!! $subtitle ?? '' !!}</span> @endif
                </td>
            </tr>

        </table>

        <div class="block">

            @yield('content')
            <table class="table-info w-100 m-b-5">
                <thead class="bg-grey-darker">
                    <tr class="font-medium text-white text-sm text-center">
                        <td>Nº</td>
                        <td>GESTION</td>
                        <td>TRAMITE Nº</td>
                        <td>DICTAMEN Nº</td>
                        <td>INF. JEFATURA Nº</td>
                        <td>RESOL. COMISION Nº</td>
                        <td>GRADO</td>
                        <td>Nº C.I.</td>
                        <td>EXTENCION</td>
                        <td>SOLICITANTE O BENEFICARIO</td>                        
                        <td>CONCEPTO</td>
                        <td>CIUDAD</td>
                    <tr></tr>
                </thead>
                <tbody>
                    @php
                        $index = 1
                    @endphp
                    @foreach ($retirement_funds as $r)
                        <tr>
                            <td class="uppercase px-5 text-right">{{ $index++ }}</td>
                            <td class="uppercase px-5 text-right">{{ $year }}</td>
                            <td class="uppercase px-5 text-right">{{ $r->code }}</td>
                            <td class="uppercase px-5 text-right">{{ $r->getCorrelative(25) }}</td>
                            <td class="uppercase px-5 text-right">{{ $r->getCorrelative(24) }}</td>
                            <td class="uppercase px-5 text-right">{{ $r->getCorrelative(26) }}</td>
                            <td class="uppercase px-15 text-left">{{ $r->affiliate->degree->shortened }}</td>
                            <td class="uppercase px-15 text-right">{{ $r->affiliate->identity_card }}</td>
                            <td class="uppercase px-15 text-left">{{ $r->affiliate->city_identity_card->first_shortened ?? null }}</td>
                            <td class="uppercase px-15 text-left">{{ $r->affiliate->fullName() }}</td>
                            <td class="uppercase px-15 text-left">{{ $r->procedure_modality->name }}</td>
                            <td class="uppercase px-15 text-left">{{ $r->city_end->name }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <footer>
            @yield('footer')
        </footer>
    </div>
</body>

</html>