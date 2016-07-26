<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>{{ $beneficiario }}</title>
    <style>
        body{
            background-color:#fff;
            margin-right:0;
            
        }
        
        .recibo-sacado{
           font:9px Arial;
        }

        .conteudo{
            font:700 10px Arial;
            height:13px
        }

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
            width:390px;
            border-bottom:2px dashed #000;
            text-align:left;
            display:table-cell;
            float:left;
            margin-left:-111px;
            position:absolute;
        }

        .linha-pontilhada-vertical{
            transform-origin:156px 41px 0;
            -webkit-transform: rotate(-90deg);
            -moz-transform: rotate(-90deg);
            -ms-transform: rotate(-90deg);
            -o-transform: rotate(-90deg);
            transform: rotate(-90deg);
            filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);
        }
        

        .table-boleto{
            font:9px Arial;
        }
        .table-boleto td.top-2{
            border-top-width: 2px;
        }
        .table-boleto td{
            border-left:1px solid #000;
            border-top:1px solid #000;
            padding:1px 4px
        }
        .table-boleto td:last-child{
            border-right:1px solid #000
        }
        .table-boleto .titulo{
            color:#003
        }
        .linha-pontilhada{
            color:#003;
            font:9px Arial;
            width:100%;
            border-bottom:1px dashed #000;
            text-align:right;
            margin-bottom:10px
        }
        .table-boleto .conteudo{
            font:700 10px Arial;
            height:13px
        }
        .table-boleto .sacador{
            display:inline;
            margin-left:5px
        }
        .table-boleto .noleftborder{
            border-left:none!important
        }
        .table-boleto .notopborder{
            border-top:none!important
        }
        .table-boleto .norightborder{
            border-right:none!important
        }
        .table-boleto .noborder{
            border:none!important
        }
        .table-boleto .bottomborder{
            border-bottom:1px solid #000!important
        }
        .table-boleto .rtl{
            text-align:right
        }
        .table-boleto .logobanco{
            display:inline-block;
            max-width:150px
        }
        .table-boleto .logocontainer{
            width:257px;
            display:inline-block
        }
        .table-boleto .logobanco img{
            margin-bottom:-5px
        }
        .table-boleto .codbanco{
            font:700 20px Arial;
            padding:1px 5px;
            display:inline;
            border-left:2px solid #000;
            border-right:2px solid #000;
            width:51px;
            margin-left:0px
        }
        .table-boleto .linha-digitavel{
            font:700 14px Arial;
            display:inline-block;
            width:406px;
            text-align:right
        }
        .table-boleto .nopadding{
            padding:0!important
        }
        .table-boleto .caixa-gray-bg{
            font-weight:700;
            background:#ccc
        }
        .info,.info-empresa{
            font:11px Arial
        }
        .header{
            font:700 13px Arial;
            display:block;
            margin:4px
        }
        .barcode{
            height:50px
        }
        .barcode div{
            display:inline-block;
            height:100%
        }
        .barcode .black{
            border-color:#000;
            border-left-style:solid;
            width:0
        }
        .barcode .white{
            background:#fff
        }
        .barcode .thin.black{
            border-left-width:1px
        }
        .barcode .large.black{
            border-left-width:3px
        }
        .barcode .thin.white{
            width:1px
        }
        .barcode .large.white{
            width:3px
        }
    </style>
</head>
<body>
<div style="float: left; width: 564px;">
    <table class="recibo-sacado" cellpadding="0" cellspacing="0" border="1">
        <tr>
            <td><img src="{{ $logo_banco_base64 }}" alt="logo do banco"></td>
            <td>{{ $codigo_banco_com_dv }}</td>
            <td style="border-bottom: 1px solid black;">Recibo do Sacado</td>
            <td rowspan="14" style="border-right: 0px;"><div class="linha-pontilhada linha-pontilhada-vertical">Corte na linha pontilhada </div></td>
        </tr>
        <tr>
            <td>Parcelar Plano 1/2</td>
            <td style="border-right: 1px solid black;">
                <div class="titulo">Vencimento</div>
                <div class="conteudo">{{ $data_vencimento }}</div>
            </td>
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