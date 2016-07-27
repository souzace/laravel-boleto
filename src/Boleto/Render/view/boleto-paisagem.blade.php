<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>{{ $beneficiario }}</title>
    <style>

        body{ background-color:#fff; margin-right:0; }

        .conteudo{ font: 700 10px Arial; height: 13px; }

        .vertical-text { transform-origin: 17px 151px 0; -webkit-transform: rotate(-90deg); -moz-transform: rotate(-90deg); -ms-transform: rotate(-90deg); -o-transform: rotate(-90deg); transform: rotate(-90deg); filter: progid:DXImageTransform.Microsoft.BasicImage(rotation = 3); border: 0; font: 700 10px Arial; text-align: center;}

        .linha-pontilhada { color: #003; font: 9px Arial; width: 350px; border-bottom: 2px dashed #000; text-align:left; display:table-cell; float:left; margin-left:-111px; position: absolute; }
        .linha-pontilhada-vertical{ transform-origin: 150px 33px 0; -webkit-transform: rotate(-90deg); -moz-transform: rotate(-90deg); -ms-transform: rotate(-90deg); -o-transform: rotate(-90deg); transform: rotate(-90deg); filter: progid:DXImageTransform.Microsoft.BasicImage(rotation = 3); }

        .info,.info-empresa { font: 11px Arial;}

        .header { font: 700 13px Arial; display:block; margin: 4px; }

        .barcode { height: 50px; }
        .barcode div { display:inline-block; height: 100%; }
        .barcode .black{ border-color: #000; border-left-style:solid; width:0;}
        .barcode .white { background: #fff; }
        .barcode .thin.black { border-left-width: 1px; }
        .barcode .large.black { border-left-width: 3px; }
        .barcode .thin.white { width:1px; }
        .barcode .large.white { width:3px; }

        .recibo-sacado { width: 200px; font:9px Arial; line-height: 1.78; margin-right: 12px; }
        .recibo-sacado td { border-left: 1px solid #000; border-top: 1px solid #000; padding: 0px; }
        .recibo-sacado .titulo { color: #003; }
        .recibo-sacado .codbanco { font: 700 15px Arial; padding: 0px 8px 12px; display: inline; border-left: 2px solid #000; border-right: 2px solid #000; margin-left: 0px; }
        .recibo-sacado .conteudo { font: 700 10px Arial; height: 11px; }
        .recibo-sacado .sacador { display: inline; margin-left: 5px; }
        .recibo-sacado .noleftborder { border-left: none!important; }
        .recibo-sacado .notopborder { border-top: none!important; }
        .recibo-sacado .norightborder { border-right: none!important; }
        .recibo-sacado .noborder { border-left: none!important; border-right: none!important; border-top: none!important;  border-bottom: 1px solid #000; }
        .recibo-sacado .bottomborder { border-bottom: 1px solid #000!important; }
        .recibo-sacado .rtl { text-align: right }
        .recibo-sacado .logobanco { display: inline-block; max-width: 150px; }
        .recibo-sacado .logocontainer { display: inline-block; }
        .recibo-sacado .logobanco img { width: 80px; margin-bottom: -5px; }
        .recibo-sacado .linha-digitavel { font: 700 10px Arial; display: inline-block; width: 55px; ttext-align:left; padding-left:7px; margin-top: 10px; }
        .recibo-sacado .nopadding { padding: 0!important; }
        .recibo-sacado .caixa-gray-bg { font-weight: 700; background: #ccc; }

        .table-boleto { font:9px Arial; width: 490px; line-height: 1.2; }
        .table-boleto td.top-2 { border-top-width: 2px; }
        .table-boleto td { border-left: 1px solid #000; border-top: 1px solid #000; padding: 0px; margin:0px;}
        .table-boleto td:last-child { border-right: 1px solid #000; }
        .table-boleto .titulo { color: #003; }
        .table-boleto .codbanco { font: 700 15px Arial; padding: 0px; display: inline; border-left: 2px solid #000; border-right: 2px solid #000; margin-left: 0px; }
        .table-boleto .conteudo { font:700 10px Arial; height: 12px; }
        .table-boleto .sacador { display: inline; margin-left: 5px; }
        .table-boleto .noleftborder { border-left: none!important; }
        .table-boleto .notopborder { border-top: none!important; }
        .table-boleto .norightborder { border-right: none!important; }
        .table-boleto .noborder { border: none!important; }
        .table-boleto .bottomborder { border-bottom: 1px solid #000!important; }
        .table-boleto .rtl { text-align: right; }
        .table-boleto .logobanco { display: inline; }
        .table-boleto .logocontainer { width: 222px; display: inline; }
        .table-boleto .logobanco img { width: 80px; margin-bottom: -5px; display: inline; }
        .table-boleto .linha-digitavel { font: 700 12px Arial; display: inline; text-align: right; }
        .table-boleto .nopadding { padding: 0!important; }
        .table-boleto .caixa-gray-bg { font-weight: 700; background: #ccc; }

    </style>
</head>
<body>
<div>
    <div style="display: inline-block;">
        <table class="recibo-sacado" cellpadding="0" cellspacing="0" border="0">
            <tbody>
            <tr>
                <td class="noborder">
                    <div class="logocontainer logobanco" >
                        <img src="{{ $logo_banco_base64 }}" alt="logo do banco">
                    </div>
                </td>
                <td class="noborder">
                    <div class="codbanco">
                        {{ $codigo_banco_com_dv }}
                    </div>
                </td>
                <td class="noborder" style="border-bottom:2px solid #000;">
                    <div class="linha-digitavel">
                        Recibo <br>do Sacado
                    </div>
                </td>
                <td rowspan="14" style="border-top: 0px none;">
                    <div class="linha-pontilhada linha-pontilhada-vertical">
                    </div>
                </td>
            </tr>
            <tr>
                <td>Parcelar Plano 1/2</td>
                <td style="border-right: 1px solid black;">
                    <div class="titulo">Vencimento</div>
                    <div class="conteudo">{{ $data_vencimento }}</div>
                </td>
                <td rowspan="12" class="vertical-text" style="border-left: 0px none;border-top: 0px none;">
                    Autenticação Mecânica
                </td>
            </tr>
            <tr>
                <td colspan="2" style="border-right: 1px solid black;">
                    <div class="titulo">Agência / Código Cedente</div>
                    <div class="conteudo">{{ $agencia_codigo_beneficiario }}<div class="conteudo">
                </td>
            </tr>
            <tr>
                <td colspan="2" style="border-right: 1px solid black;">
                    <div class="titulo"> Nosso Número</div>
                    <div class="conteudo"> {{ $nosso_numero_boleto }}</div>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="border-right: 1px solid black;">
                    <div class="titulo"> Número do documento</div>
                    <div class="conteudo"> {{ $numero_documento }}</div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="titulo">Espécie Moeda</div>
                    <div class="conteudo">{{ $especie }}</div>
                </td>
                <td style="border-right: 1px solid black;">
                    <div class="titulo">Quantidade</div>
                    <div class="conteudo">{{ $quantidade }}</div>
                </td>
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
                {{ $demonstrativo[0] }}
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <div style="display: inline-block;">
        @include('BoletoHtmlRender::partials/ficha-compensacao-paisagem')
    </div>
</div>

</body>
</html>