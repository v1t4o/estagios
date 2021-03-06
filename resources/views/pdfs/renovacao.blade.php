@extends('pdfs.fflch')

@section('content')

<div style="border-width: 1px; border-style: solid; border-color: #000; text-align: center; padding: 0px;">
    <b>ADITIVO DE RENOVAÇÃO DO TERMO DE COMPROMISSO</b>
</div>
<hr>
<br><br><br>
<div style="text-align: justify;">
    <p>INFORMAÇÃO IMPORTANTE</p>
    <br><br>
    <p>Renovação do Estágio</p>
    <p>Os documentos para assinatura devem ser entregues com pelo menos 10 dias úteis antes do término do período
        anterior de estágio.</p>
    <p>É obrigatória a entrega de um relatório pessoal (digitado, datado e assinado) na renovação e no término do
        estágio, relatando sua experiência no período do estágio.</p>
    <br><br>
    <p>Ciência do(a) aluno(a) LEONARDO CARRASCO ARINELLI:</p>
    <br><br><br><br>
    <p>________________________________________<br>
        <b>LEONARDO CARRASCO ARINELLI</b><br>
        Número USP: <b>9826380</b></p>
</div>

<p style="page-break-after: always;"></p>

<div style="border-width: 1px; border-style: solid; border-color: #000; text-align: center; padding: 0px;">
    <b>ADITIVO DE RENOVAÇÃO DO TERMO DE COMPROMISSO</b>
</div>

<hr>
<br><br>

<div style="text-align: justify;">
    <p style="text-indent : 6em;"><b>FUNDACAO ORQUESTRA SINFONICA DO EST DE SP, CNPJ 07.495.643/0001-00</b>,
        representada por seu(a) <b>COORDENADOR DE DEPTO DE ED. E MONITORIA, ROGERIO ZAGHI</b> adiante designada
        CONCEDENTE e o ESTAGIÁRIO(A) <b>LEONARDO CARRASCO ARINELLI</b>, no USP <b>9826380</b>, curso História e como
        INTERVENIENTE a Faculdade de Filosofia, Letras e Ciências Humanas da Universidade de São Paulo, representada
        pela Presidente da Comissão de Graduação <b> Profa. Dra. Mona Mohamad Hawi </b>, firmam o presente TERMO DE
        ADITAMENTO DE COMPROMISSO DE ESTÁGIO, nos termos da Lei 11.788/08 e da Resolução USP no 5.528/09, conforme as
        condições a seguir:
    </p>

    <p>1. Alterações a serem feitas: <b> PRORROGAÇÃO de {{ \Carbon\Carbon::parse($estagio->dataini)->format('d/m/Y')}} a
            {{ \Carbon\Carbon::parse($estagio->datafin)->format('d/m/Y')}}. </b></p>

    <p>2. Permanecem inalteradas as demais cláusulas do Termo de Compromisso de Estágio, do qual passa a fazer parte
        integrante o presente Termo Aditivo, ficando sem efeito as disposições em contrário.
    </p>

    <p style="text-indent : 3em;">E por estarem de comum acordo, as partes acima identificadas assinam o presente Termo
        Aditivo em 03(três) vias de igual teor, em papel timbrado ou com carimbo contendo o CNPJ da empresa, para que
        produza seus jurídicos efeitos.
    </p>
</div>

<div style="text-align: center">São Paulo, {{ Carbon\Carbon::now()->formatLocalized('%d/%m/%Y') }}</div>

<br><br><br>

<div>
    <p>________________________________________<br>
        <b> FUNDACAO ORQUESTRA SINFONICA DO EST DE SP</b></p>
    <p>________________________________________<br>
        <b> LEONARDO CARRASCO ARINELLI </b></p>
    <p>________________________________________<br>
        <b>Profa. Dra. Mona Mohamad Hawi</b><br>
        <b>Presidente da Comissão de Graduação da FFLCH</b></p>
</div>

<br><br><br>

<div>
    <p>Contato: Gabriela Castro, tel.: 1130032433 <br>
        e-mail: gabriela.castro@ciee.ong.br</p>
</div>

<p style="page-break-after: always;"></p>

<div style="border-width: 1px; border-style: solid; border-color: #000; text-align: center; padding: 0px;">
    <b>ADITIVO DE RENOVAÇÃO DO TERMO DE COMPROMISSO</b>
</div>

<hr>
<br><br>

<div
    style="border-width: 1px; border-style: solid; border-color: #000; text-align: center; padding: 0px; font-weight: bold">
    PLANO DE ESTÁGIO
</div>

<br>

<div style="text-align: justify">
    Nome do Estagiário(a): <b>LEONARDO CARRASCO ARINELLI</b><br>
    Número USP: <b>9826380</b><br>
    Curso: <b>História</b><br>
    Turno: <b>Noturno</b><br>
    Telefone: <b>11999735249</b> , E-mail: <b>leonardo.arinelli@usp.br</b><br>
    Nome da Empresa: <b>FUNDACAO ORQUESTRA SINFONICA DO EST DE SP</b><br>
    Área de atuação da Empresa: <b>SERVICOS COMUNITARIOS E SOCIAIS</b><br>
    Nome do supervisor(a) interno(a) do Estágio na Empresa: <b>ROGERIO ZAGHI</b><br>
    Telefone: <b>11 33679536</b> , E-mail: <b>BrunaLopes@osesp.art.br</b><br>
    Data de início do estágio: <b>{{ \Carbon\Carbon::parse($estagio->dataini)->format('d/m/Y')}}</b><br>
    Data do término do estágio: <b>{{ \Carbon\Carbon::parse($estagio->datafin)->format('d/m/Y')}}</b><br>
    Horário do Estágio: <b>{{ $estagio->horario }}</b> Carga horária semanal:
    <b>{{ $estagio->cargahoras }}:{{ $estagio->cargaminutos }} horas semanais</b><br>
    Duração em meses (em casos excepcionais inferiores a 6 meses, a empresa deverá incluir justificativa circunstanciada
    que será avaliada pelo Supervisor Geral de Estágios): <b>12 meses</b><br>
    Justificativa: <b><i>{{ $estagio->justificativa }}</i></b><br>
    Valor da Bolsa: R$ <b>{{ $estagio->valorbolsa }} {{ $estagio->tipobolsa }}</b><br>
    Valor do auxílio transporte: R$ <b>{{ $estagio->auxtrans }} {{ $estagio->especifiquevt }}</b><br>
    Descrição detalhada das atividades a serem desenvolvidas pelo estagiário, com a finalidade de permitir a avaliação
    da Comissão de Estágios: <br>
    <b><i>{{ $estagio->atividades }}</i></b>
</div>

<br>

<div>São Paulo, {{ Carbon\Carbon::now()->formatLocalized('%d/%m/%Y') }}</div>

<br>

<div style="font-style: italic">
    <p>________________________________________<br>
        <b>ROGERIO ZAGHI</b></p>
    <p>________________________________________<br>
        <b>LEONARDO CARRASCO ARINELLI</b></p>
    <p>________________________________________<br>
        <b>Profa. Dra. Mona Mohamad Hawi</b><br>
        <b>Presidente da Comissão de Graduação da FFLCH/USP</b></p>
</div>

<p style="page-break-after: never;"></p>

@endsection('content')

@section('footer')
<div style="text-align: initial; font-weight: bold;">
    OS DOCUMENTOS (TERMO E PLANO) DEVEM SER ENTREGUES PARA ANÁLISE 10 DIAS ÚTEIS ANTES DO INÍCIO DO ESTÁGIO.<br>
    AO FINAL DE CADA SEMESTRE DE REALIZAÇÃO DO ESTÁGIO DEVERÁ SER ENTREGUE UM RELATÓRIO PESSOAL, NOS TERMOS DA LEI
    11.788, DA RESOLUÇÃO USP N. 5528.
</div>
@endsection