<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>{{ $beneficiario }}</title>
    <style>
        .verticalTableHeader {
            text-align:center;
            white-space:nowrap;
            transform-origin:50% 50%;
            -webkit-transform: rotate(-90deg);
            -moz-transform: rotate(-90deg);
            -ms-transform: rotate(-90deg);
            -o-transform: rotate(-90deg);
            transform: rotate(-90deg);
            
        }
        .verticalTableHeader:before {
            content:'';
            padding-top:110%;/* takes width as reference, + 10% for faking some extra padding */
            display:inline-block;
            vertical-align:middle;
        }

    </style>
</head>
<body>
<div style="float: left;">
    <table class="table-boleto" cellpadding="0" cellspacing="0" border="1">
    <tr>
        <td><img src="{{ $logo_banco_base64 }}" alt="logo do banco"></td>
        <td>{{ $codigo_banco_com_dv }}</td>
        <td>Recibo do Sacado</td>
    </tr>
    <tr>
        <td>parcelar plano 1/2</td>
        <td>vencimento {{ $data_vencimento }}</td>
        <td rowspan="12" class="verticalTableHeader">
            Autenticação Mecânica
        </td>
    </tr>
    <tr>
        <td colspan="2">agência / código cedente vencimento 01/08/10</td>
        
    </tr>
    <tr>
        <td colspan="2">Nosso Número 1000000000000</td>
        
    </tr>
    <tr>
        <td colspan="2">Número do documento 1000000000000</td>
        
    </tr>
    <tr>
        <td>especie moeda</td>
        <td>quantidade</td>
        
    </tr>
    <tr>
        <td colspan="2">valor do documento</td>
        
    </tr>
    <tr>
        <td colspan="2">desconto abatimento</td>
        
    </tr>
    <tr>
        <td colspan="2">outras deduções</td>
        
    </tr>
    <tr>
        <td colspan="2">mora / multa</td>
        
    </tr>
    <tr>
        <td colspan="2">outros acrescimos</td>
        
    </tr>
    <tr>
        <td colspan="2">valor cobrado</td>
        
    </tr>
    <tr>
        <td colspan="2">sacado: <br /> cedente: <br /> CNPJ</td>
        
    </tr>
    <tr>
        <td colspan="3">mensagem</td>
    </tr>
    </table>
</div>
<div style="width: 666px: float: left;">
     @include('BoletoHtmlRender::partials/ficha-compensacao-paisagem')
</div>
</body>
</html>