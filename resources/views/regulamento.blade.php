@extends('layouts.master')

@section('title') Regulamento @endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') Superação @endslot
@slot('title') Regulamento @endslot
@endcomponent
<div class="row">
    <div class="col-12">
        <div class="card ">
            <div class="card-body">
                <div class="p-lg-1">
                    <div class="d-xl-flex">
                        <div class="w-100 container">
                            <h3><strong>CAMPANHA DE SUPERAÇÃO 2022</strong></h3>
                            <p>A Campanha de Superação Unicred 2022 visa alcançar os objetivos do Planejamento
                                Estratégico e motivar as Unidades e Cooperativas em busca do crescimento
                                sustentável.</p>
                            <h4 class="mt-4"><strong>PERÍODO DA CAMPANHA:</strong></h4>
                            <p>Janeiro a dezembro de 2022.</p>
                            <h4 class="mt-4"><strong>PRINCIPAIS OBJETIVOS:</strong></h4>
                            <ul>
                                <li>
                                    Apoiar o desenvolvimento de negócios das cooperativas;
                                </li>
                                <li>
                                    Facilitar a Gestão Estratégica;
                                </li>
                                <li>
                                    Incentivar a troca de experiências entre os colaboradores;
                                </li>
                            </ul>
                            <h4 class="mt-4" id="campanhaSuperacao"><strong>1. CAMPANHA DE SUPERAÇÃO</strong></h4>
                            <p> A estrutura da campanha é voltada, principalmente, para o crescimento
                                sustentável das Unidades e Cooperativas
                                do Sistema RS. Todas as ações são direcionadas para proporcionar o atingimento do
                                planejamento estratégico das Cooperativas, além de estimular o desenvolvimento dos
                                colaboradores dentro das Unidades. Os indicadores serão divididos
                                em áreas como crédito, captação, relacionamento & produtos e serviços e crescimento
                                de base, todos com foco central na geração de resultado de forma sustentável e perene.
                                O período da Campanha será de janeiro a dezembro de 2022. A campanha não impede
                                a realização de ações independentes, “minicampanhas” que possam aproveitar alguma
                                oportunidade comercial.</p>

                            <h4 class="mt-4"><strong>2. PARTICIPANTES</strong></h4>
                            <p> A campanha será destinada às Unidades e Cooperativas do Sistema RS, seguindo os
                                critérios de porte e potencial de negócios, definidos neste regulamento, conforme
                                seguem:
                                2.1 Unidades de Negócios
                                Participarão da Campanha de Superação as Unidades de Negócios inauguradas
                                até 31 de dezembro de 2020 e todos seus Gerentes/Responsáveis.
                                Em caso de regionalização, as unidades de negócios pertencentes a cooperativa
                                incorporada, serão mantidas nos respectivos grupos e obedecem às mesmas
                                regras deste regulamento.
                                2.2 Cooperativas
                                As Cooperativas que aderiram ao sistema até a data de 31/12/2019, participarão
                                da Campanha de Superação, e serão avaliadas por meio da produção conjunta
                                de suas Unidades de Negócios.
                                Em caso de regionalização, a cooperativa incorporada é removida dos grupos e
                                seus números (incluindo histórico) passam a ser considerados no somatório da
                                cooperativa incorporadora.</p>

                            <h4 class="mt-4"><strong>3. FORMAÇÃO DOS GRUPOS</strong></h4>
                            <p> Serão participantes desta Campanha, nos Grupos Consolidados, Dez (10) Cooperativas
                                (Unicred Vale das Antas, Unicred Porto Alegre, Unicred Eleva, Unicred Integração,
                                Unicred Horizontes, Unicred Premium, Unicred Região da Campanha, Unicred Região
                                dos Vales, Unicred Ponto Capital RS e Unicred Coopnore) e as 67 Unidades de Negócios
                                inauguradas até dezembro/2020.</p>
                            <p class="mb-3">No Grupo de Novas Unidades, participarão nove (9) Unidades físicas (Marau,
                                Torres,
                                Capão da Canoa – Unicred Porto Alegre, Teresina, Natal, Canoas-Unicred VTRPP,
                                Tramandaí, Capão da Canoa-Unicred Região dos Vales, Caruaru).</p>
                            <p><strong>IMPORTANTE:</strong>
                                Mesmo que alguma unidade ou cooperativa tenha o seu porte alterado durante o
                                período da Campanha de Superação 2022, esta permanecerá no mesmo grupo até o
                                final, não sendo permitida qualquer alteração.</p>

                            <h5 class="mt-4"><strong>3.1 Unidades de Negócios</strong></h5>
                            <p>O critério adotado para a formação dos 6 grupos respeita a ponderação dos indicadores:
                                Carteira de Crédito (40%), Carteira de Recursos Administrados (40%) e Quantidade de
                                Cooperados (20%). A divisão foi feita utilizando-se os números de novembro 2021.</p>
                            <p>Abaixo o quadro resumo das Unidades e seus respectivos grupos:
                            </p>
                            <p class="bg-success">TABELA</p>
                            <h5 class="mt-4"><strong>3.2 Cooperativas</strong></h5>
                            <p>Dez (10) Cooperativas do Sistema RS participantes, foram divididas em 2 Grupos,
                                buscando maior equilíbrio na campanha, usando como métrica o mesmo critério da
                                distribuição das Unidades, as alocando da seguinte forma: Nº de Cooperados (20%),
                                Volume de Recursos Administrados (40%) e Carteira de Crédito (40%).
                                Em caso de regionalização, a cooperativa incorporada é removida dos grupos e seus
                                números passam a ser considerados no somatório da cooperativa incorporadora.</p>
                            <p>Abaixo o quadro resumo das Cooperativas e seus respectivos grupos:</p>

                            <p class="bg-success">TABELA</p>

                            <h5 class="mt-4"><strong>4. ESTRUTURA DA CAMPANHA DE SUPERAÇÃO 2022</strong></h5>
                            <p><strong>Crédito</strong></p>
                            <p class="bg-success">TABELA</p>
                            <p><strong>Captação</strong></p>
                            <p class="bg-success">TABELA</p>
                            <p><strong>Resultado</strong></p>
                            <p class="bg-success">TABELA</p>
                            <p><strong>Relacionamento e P&S</strong></p>
                            <p class="bg-success">TABELA</p>
                            <p><strong>Crescimento de base</strong></p>
                            <p class="bg-success">TABELA</p>

                            <h5 class="mt-4"><strong>4.1 Premissas</strong></h5>
                            <p>Abaixo os critérios que serão considerados para deliberação dos índices:</p>
                            <ul>
                                <li>Serão consideradas matrículas com status ATIVO e INATIVO.</li>
                                <li>Associados com status de matrículas diferentes de Ativo e Inativo não poderão
                                    ser reativados sem justificativa.</li>
                                <li>Em caso de cooperados pessoa física serão considerados apenas maiores de 18
                                    anos.</li>
                                <li>No cálculo dos índices, também serão considerados os segundos titulares.</li>
                                <li>Todos os cooperados pessoa jurídica serão considerados.</li>
                            </ul>
                            DAP: Serão considerados como Depósito a Prazo os produtos: RDC (Pós, Pré,
                            Garantido, Ganho Real), Letra financeira (LF) e LCI. Caso ao longo de 2022 ocorra o
                            lançamento de um novo produto que se caracterize como captação via depósito a
                            prazo, este também será considerado nos indicadores.
                            Parâmetro de renda: Para cálculo dos indicadores que consideram a renda do
                            cooperado, será utilizado a renda cadastrada no SAU (independentemente de ser a
                            renda cadastrada ou renda presumida). A renda utilizada será a mais recente.

                            5. INDICADORES AVALIADOS

                            5.1 Crédito: 50 pontos
                            5.1.1 – Crédito PF per capita: 15 Pontos

                            O indicador será medido por meio do valor per capita da carteira de crédito, onde
                            o cálculo será executado dividindo-se a carteira de crédito total PF da
                            cooperativa/unidade (fechamento mês) pela quantidade total de cooperados
                            que possuírem operações de crédito vigentes na Unicred e/ou mercado (SFN).
                            Para averiguação dessa base total de cooperados serão considerados apenas
                            pessoas que possuírem operações na Unicred ou mercado dentro das seguintes modalidades
                            BACEN: 203, 299, 902, 499, 401, 402, 211, 213, 202, 301, 302, 204.
                            Não serão consideradas as modalidades limite de cartão de crédito não utilizado
                            (1901) e limite de cheque especial não utilizado (1902).CÁLCULO: CARTEIRA DE CRÉDITO
                            TOTAL
                            PF / QTD TOTAL DE COOPERADOS PF COM PERFIL DE CRÉDITO

                            5.1.2 – Crédito PJ per capita: 15 Pontos
                            O indicador será medido por meio do valor per capita da carteira de crédito, onde
                            o cálculo será executado dividindo-se a carteira de crédito total PJ da
                            cooperativa/unidade (fechamento mês) pela quantidade total de cooperados
                            que possuírem operações de crédito vigentes na Unicred e/ou mercado (SFN).
                            Para averiguação dessa base total de cooperados serão considerados apenas
                            empresas que possuírem operações na Unicred ou mercado dentro das
                            seguintes modalidades BACEN: 204, 213, 215, 216, 299, 301, 302, 401, 402, 499.
                            Não serão consideradas as modalidades limite cartão de crédito não utilizado e
                            limite de cheque especial não utilizado.

                            CÁLCULO: CARTEIRA DE CRÉDITO TOTAL PJ / QTD TOTAL DE COOPERADOS PJ
                            COM PERFIL DE CRÉDITO

                            5.1.3 – Stress/Share - Stress Realiza PF (%): 10 Pontos
                            Será medido pelo percentual (%) do volume de crédito PF em carteira na
                            Cooperativa, em relação ao Sistema Financeiro Nacional, respeitando o seu
                            Patrimônio de Referência.
                            Abaixo as modalidades que compõem o stress do Realiza.
                            5.1.4.2 – Cheque Especial
                            5.1.4.3 – Crédito Pessoal
                            5.1.4.4 – Financiamento de Veículos
                            5.1.4.5 – Investimentos
                            CÁLCULO: Valor em Carteira PF na Unicred / (Valor da Carteira na Unicred +
                            Potencial com base no Patrimônio de Referência)
                            Ex. R$ 314.509.530,00 / (R$ 314.509.530,00 + 455.058.199,00) = 40,87%

                            5.1.4 – Stress/Share - Stress Realiza PJ (%): 10 Pontos
                            Será medido pelo percentual (%) do volume de crédito PJ em carteira na
                            Cooperativa, em relação ao Sistema Financeiro Nacional, respeitando o seu
                            Patrimônio de Referência.
                            Abaixo as modalidades que compõem o stress do Realiza.
                            5.1.4.1 – Capital de Giro
                            5.1.4.2 – Cheque Especial
                            5.1.4.4 – Financiamento de Veículos
                            5.1.4.5 – Investimentos
                            CÁLCULO: Valor em Carteira PJ na Unicred / (Valor da Carteira na Unicred +
                            Potencial com base no Patrimônio de Referência)
                            Ex. R$ 314.509.530,00 / (R$ 314.509.530,00 + 455.058.199,00) = 40,87%

                            TABELA
                            Relatório disponível no Realiza em Relatórios > Stress da Carteira

                            5.2 CAPTAÇÃO: 60 pontos
                            5.2.1 – Investimento PF per capita: 30 Pontos
                            O indicador será medido por meio do valor per capita da carteira de captação,
                            onde o cálculo será executado dividindo-se a carteira de captação total PF (DAP
                            + fundos) da cooperativa/unidade (fechamento mês) pela quantidade total de
                            cooperados.
                            Para averiguação dessa base total de cooperados serão considerados
                            cooperados PF, maiores de idade, com status de matrícula ativo, inativo. Não
                            serão contabilizados os segundos titulares.
                            CÁLCULO: CARTEIRA DE DEPÓSITO A PRAZO + FUNDOS PF / QTD TOTAL DE
                            COOPERADOS PF

                            5.2.2 – Investimento PJ per capita: 30 Pontos
                            O indicador será medido por meio do valor per capita da carteira de captação,
                            onde o cálculo será executado dividindo-se a carteira de captação PJ (DAP +
                            fundos) da cooperativa/unidade (fechamento mês) pela quantidade total de
                            cooperados.
                            Para averiguação dessa base total de cooperados serão considerados
                            cooperados PJ, com status de matrícula ativo, inativo.
                            CÁLCULO: CARTEIRA DE DEPÓSITO A PRAZO + FUNDOS PJ / QTD TOTAL DE COOPERADOS PJ

                            5.3 RESULTADO: 60 Pontos
                            5.3.1 – Participação da Receita de Produtos e Serviços sobre a receita
                            total: 25 Pontos
                            A evolução será medida por meio da participação da receita de produtos e
                            serviços sobre a receita total da cooperativa/agência de forma cumulativa ao
                            longo dos meses de 2022.
                            Para apuração desse indicador não serão consideradas as receitas oriundas de
                            tarifas, tais como pacotes de serviços, anuidades de cartão, tarifas de TED e DOC,
                            tanto para PF quanto PJ.
                            CÁLCULO: RECEITA DE PRODUTOS E SERVIÇOS ACUMULADA NO ANO DE 2022
                            / RECEITA TOTAL ACUMULADA NO DE 2022

                            5.3.2 – Crescimento % do Resultado Total: 20 Pontos
                            A evolução será medida por meio da média das posições de saldo final mensal
                            de cada mês de 2022, em relação à média das posições de saldo final de cada
                            mês de igual período do ano de 2021.
                            Cooperativas ou agências que apresentaram resultado negativo em 2021 não
                            pontuarão nesse item.
                            Esse indicador não será contabilizado/apurado no grupo de novas agências
                            (G0).
                            CÁLCULO: MÉDIA DO RESULTADO TOTAL ACUMULADO 2022 / MÉDIA DO
                            RESULTADO TOTAL ACUMULADO DE IGUAL PERÍODO DE 2021

                            Exemplo: base de exemplo para o mês de março/2021
                            TABELA
                            EX. R$ 52.000,00 (Média JAN/MAR 2022) / R$ 50.000,00 (Média JAN/MAR
                            2021) = 4,00%

                            5.3.3 – Crescimento do VALOR do Resultado Total: 15 Pontos
                            A evolução será medida por meio da média das posições de saldo final mensal
                            de cada mês de 2022, em relação à média das posições de saldo final de cada
                            mês de igual período do ano de 2021.
                            Esse indicador não será contabilizado/apurado no grupo de novas agências (G0).
                            CÁLCULO: MÉDIA RESULTADO TOTAL ACUMULADO 2022 – MÉDIA RESULTADO
                            TOTAL ACUMULADO DE IGUAL PERÍODO DE 2021
                            Exemplo: base de exemplo para o mês de março/2022
                            TABELA
                            EX. R$ 52.000,00 (Média JAN/MAR 2022) - R$ 50.000,00 (Média JAN/MAR
                            2021) = R$ 2.000,00

                            5.4 RELACIONAMENTO E PRODUTOS & SERVIÇOS: 80 Pontos
                            5.4.1 Índice de Fidelização PF: 30 pontos
                            Será medido conforme Critério de Fidelização Sistêmico PF. Cada Cooperado
                            deve possuir quatro produtos na Unicred, para ser considerado fidelizado. Sendo
                            pelo menos dois de maior relevância*, além de atender ao parâmetro/regra
                            mínima de utilização definido para o respectivo produto.
                            *Relevância – É um conceito desenvolvido para medir o envolvimento do
                            cooperado com a cooperativa, e não a importância dos produtos para os
                            resultados das cooperativas e do sistema.

                            CÁLCULO: NÚMERO DE COOPERADOS PF FIDELIZADOS / TOTAL DE
                            COOPERADOS PF
                            Ex. Unidade com 400 Cooperados Fidelizados / 1000 Cooperados na Base = 40%
                            índice de fidelização
                            Conceito Sistêmico de Fidelização PF:

                            TABELA
                            Caso ocorra alguma alteração no modelo sistêmico de fidelização, a Campanha
                            acompanhará o novo regramento sistêmico.
                            5.4.2 Índice de Fidelização PJ: 30 pontos
                            Será medido conforme Critério de Fidelização Sistêmico PJ. Cada Cooperado
                            deve possuir quatro produtos na Unicred, para ser considerado fidelizado. Sendo
                            pelo menos dois de maior relevância*, além de atender ao parâmetro/regra
                            mínima de utilização definido para o respectivo produto.
                            *Relevância – É um conceito desenvolvido para medir o envolvimento do
                            cooperado com a cooperativa, e não a importância dos produtos para os
                            resultados das cooperativas e do sistema.
                            CÁLCULO: NÚMERO DE COOPERADOS PJ FIDELIZADOS / TOTAL DE
                            COOPERADOS PJ
                            Ex. Unidade com 400 Cooperados Fidelizados / 1000 Cooperados na Base = 40%
                            índice de fidelização

                            Conceito Sistêmico de Fidelização PJ:
                            TABELA
                            Caso ocorra alguma alteração no modelo sistêmico de fidelização, a Campanha
                            acompanhará o novo regramento sistêmico.


                            5.4.3 – Cartão de Crédito: 10 Pontos
                            Será medido conforme Critério de Fidelização Sistêmico referente ao produto
                            cartão de crédito. Onde, considera-se fidelizado no produto o cooperado (tanto
                            PF, quanto PJ) que possuir fatura na Unicred maior que 50% no SFN (Média dos
                            últimos 3 meses).
                            CÁLCULO: COOPERADOS FIDELIZADOS NO CARTÃO DE CRÉDITO / TOTAL DE
                            COOPERADOS

                            Ex. 400 Cooperados fidelizados no produto cartão / 1000 Total de Cooperados
                            = 40%


                            5.4.4 – Previdência: 10 Pontos
                            Será medido conforme Critério de Fidelização Sistêmico referente ao produto
                            previdência. Onde, considera-se fidelizado no produto o cooperado PF que
                            possuir previdência, independentemente do valor.
                            CÁLCULO: COOPERADOS FIDELIZADOS NA PREVIDÊNCIA / TOTAL DE
                            COOPERADOS PF
                            Ex. 400 Cooperados fidelizados no produto previdência / 1000 Total de
                            Cooperados = 40%

                            5.5 CRESCIMENTO DE BASE: 50 Pontos
                            Pontuação Base:
                            Nos grupos de Cooperativas e agências consolidadas (G1 ao G8), para apuração desse
                            indicador, será criada uma pontuação que servirá como base de comparação para
                            medir a evolução ao longo dos meses da Campanha. Essa pontuação base será criada
                            avaliando-se o perfil de renda da base de cooperados da agência/cooperativa no
                            fechamento de dezembro/2021, multiplicando-se pelos fatores mencionados abaixo:
                            20

                            Tabela 1- Fator de multiplicação
                            TABELA
                            Tabela 2 - Exemplo – Pontuação Base PF:
                            TABELA
                            Tabela 3- Exemplo – Pontuação Base PJ:
                            TABELA
                            </p>
                        </div>
                        <!-- Start right-side-nav -->
                        <div class="d-none d-xl-block">
                            <div class="right-side-nav">
                                <ul class="nav nav-pills flex-column">
                                    <li class="nav-item">
                                        <a href="#campanhaSuperacao" class="nav-link active">Campanha Superação</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#prerequisites" class="nav-link">Participantes</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#installation" class="nav-link">Formação dos Grupos</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#multi" class="nav-link">Estrutura da campanha superação 2022</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- End right-side-nav -->
                    </div>

                </div> <!-- end padding-->
            </div> <!-- end card-body-->
        </div>

    </div>
</div>
@endsection