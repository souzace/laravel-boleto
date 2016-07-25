<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>{{ $beneficiario }}</title>
    <style>
        .vertical-text {
            transform-origin:50px 186px 0;
            -webkit-transform: rotate(-90deg);
            -moz-transform: rotate(-90deg);
            -ms-transform: rotate(-90deg);
            -o-transform: rotate(-90deg);
            transform: rotate(-90deg);
            filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);
            border:0;
        }
        
        .linha-pontilhada{
            color:#003;
            font:9px Arial;
            width:100%;
            border-bottom:1px dashed #000;
            text-align:right;
            margin-bottom:10px;
            transform-origin:50% 50%;
            -webkit-transform: rotate(-90deg);
            -moz-transform: rotate(-90deg);
            -ms-transform: rotate(-90deg);
            -o-transform: rotate(-90deg);
            transform: rotate(-90deg);
        }
        
    </style>
</head>
<body>
<div style="float: left;">
    <table class="table-boleto" cellpadding="0" cellspacing="0" border="1">
        <tr>
            <td><img src="{{ $logo_banco_base64 }}" alt="logo do banco"></td>
            <td>{{ $codigo_banco_com_dv }}</td>
            <td style="border-bottom: 1px solid black;">Recibo do Sacado</td>
            <td rowspan="14">Corte na linha pontilhada</td>
        </tr>
        <tr>
            <td>Parcelar Plano 1/2</td>
            <td style="border-right: 1px solid black;">Vencimento {{ $data_vencimento }}</td>
            <td rowspan="12" class="vertical-text">Autenticação Mecânica</td>
        </tr>
        <tr>
            <td colspan="2" style="border-right: 1px solid black;">Agência / Código Cedente {{ $agencia_codigo_beneficiario }}</td>
        </tr>
        <tr>
            <td colspan="2" style="border-right: 1px solid black;">Nosso Número {{ $nosso_numero_boleto }}</td>
        </tr>
        <tr>
            <td colspan="2" style="border-right: 1px solid black;">Número do documento {{ $numero_documento }}</td>
        </tr>
        <tr>
            <td>Espécie Moeda {{ $especie }}</td>
            <td style="border-right: 1px solid black;">Quantidade {{ $quantidade }}</td>
        </tr>
        <tr>
            <td colspan="2" style="border-right: 1px solid black;">1 (=) Valor do Documento {{ $valor_documento }}</td>
        </tr>
        <tr>
            <td colspan="2" style="border-right: 1px solid black;">2 (-) Desconto / Abatimento</td>
        </tr>
        <tr>
            <td colspan="2" style="border-right: 1px solid black;">3 (-) Outras Deduções</td>
        </tr>
        <tr>
            <td colspan="2" style="border-right: 1px solid black;">4 (+) Mora / Multa</td>
        </tr>
        <tr>
            <td colspan="2" style="border-right: 1px solid black;">5 (+) Outros Acréscimos</td>
        </tr>
        <tr>
            <td colspan="2" style="border-right: 1px solid black;">6 (=) Valor Cobrado</td>
        </tr>
        <tr>
            <td colspan="2" style="border-right: 1px solid black;">Sacado: {{ $pagador }}<br /> cedente: {{ $beneficiario }}<br /> CNPJ: {{ $beneficiario_cpf_cnpj }}</td>
        </tr>
        <tr>
            <td colspan="3" style="border-right: 1px solid black;">
            {{ $demonstrativo[0] }} <br />
            {{ $demonstrativo[1] }} <br />
            {{ $demonstrativo[2] }} <br />
            </td>
        </tr>
    </table>
</div>
<div style="width: 666px: float: left;">
     @include('BoletoHtmlRender::partials/ficha-compensacao-paisagem')
</div>
</body>
</html>