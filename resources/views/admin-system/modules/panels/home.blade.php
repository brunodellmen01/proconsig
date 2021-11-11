@extends('layouts.system.app')
@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Olá, seja bem vindo ao seu painel!</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Suporte Proconsig</a></li>
                                    <li class="breadcrumb-item active">Painel</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-xl-4">
                        <div class="card overflow-hidden">
                            <div class="bg-primary bg-soft">
                                <div class="row">
                                    <div class="col-7">
                                        <div class="text-primary p-3">
                                            <h5 class="text-primary">Pesquisar cliente</h5>
                                            <p>ID da empresa</p>
                                        </div>
                                    </div>
                                    <div class="col-5 align-self-end">
                                        <img src="{{ asset('assets/images/profile-img.png') }}" alt=""
                                            class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="avatar-md profile-user-wid mb-4">
                                            <br>
                                            <i class="fas fa-user-circle fa-6x text-success"></i>
                                        </div>
                                        <br>
                                        <h5 class="font-size-15 text-truncate">Buscar</h5>
                                    </div>

                                    <div class="col-sm-8">
                                        <div class="pt-4">
                                            <div class="mt-4">
                                                <input type="text" class="form-control" id="billing-name"
                                                    placeholder="ID Proconsig">
                                                <br>
                                                <a href="javascript: void(0);"
                                                    class="btn btn-primary waves-effect waves-light btn-sm">Pesquisar<i
                                                        class="mdi mdi-arrow-right ms-1"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Mês Anterior</h4>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h3>R$34.252</h3>

                                        <div class="mt-4">
                                            <a href="javascript: void(0);"
                                                class="btn btn-primary waves-effect waves-light btn-sm">Últimas vendas <i
                                                    class="mdi mdi-arrow-right ms-1"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mt-4 mt-sm-0">
                                            <div id="radialBar-chart" class="apex-charts"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-8">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card mini-stats-wid">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <p class="text-muted fw-medium">Empresas</p>
                                                <h4 class="mb-0">{{$companiesDayCurrent}}</h4>
                                                <span class="badge rounded-pill bg-warning float-end"
                                                    key="t-new">hoje</span>
                                            </div>

                                            <div class="flex-shrink-0 align-self-center">
                                                <div class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                                                    <span class="avatar-title">
                                                        <i class="far fa-building fa-2x"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card mini-stats-wid">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <p class="text-muted fw-medium">Empresas</p>
                                                <h4 class="mb-0">{{$companiesMonthCurrent}}</h4>
                                                <span class="badge rounded-pill bg-danger float-end" key="t-new">mês atual</span>
                                            </div>

                                            <div class="flex-shrink-0 align-self-center">
                                                <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                    <span class="avatar-title rounded-circle bg-primary">
                                                        <i class="far fa-building fa-2x"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card mini-stats-wid">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <p class="text-muted fw-medium">Empresas </p>
                                                <h4 class="mb-0">{{$companiesWeekCurrent}}</h4>
                                                <span class="badge rounded-pill bg-info float-end"
                                                    key="t-new">semana atual</span>
                                            </div>

                                            <div class="flex-shrink-0 align-self-center">
                                                <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                    <span class="avatar-title rounded-circle bg-primary">
                                                        <i class="far fa-building fa-2x"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card mini-stats-wid">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <p class="text-muted fw-medium">Empresas</p>
                                                <h4 class="mb-0">{{$totalCompaniesActive}}</h4>
                                                <span class="badge rounded-pill bg-success float-end"
                                                    key="t-new">total</span>
                                            </div>

                                            <div class="flex-shrink-0 align-self-center">
                                                <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                    <span class="avatar-title rounded-circle bg-primary">
                                                        <i class="far fa-building fa-2x"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="clearfix">
                                        <div class="float-end">
                                            <div class="input-group input-group-sm">
                                                <select class="form-select form-select-sm">
                                                    <option value="JA" selected="">Jan</option>
                                                    <option value="DE">Dec</option>
                                                    <option value="NO">Nov</option>
                                                    <option value="OC">Oct</option>
                                                </select>
                                                <label class="input-group-text">Month</label>
                                            </div>
                                        </div>
                                        <h4 class="card-title mb-4">Produção</h4>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-2">
                                            <div class="text-muted">
                                                <div class="mb-4">
                                                    <p>Mês atual</p>
                                                    <h4>R$2453</h4>
                                                </div>

                                                <div class="mt-4">
                                                    <p class="mb-2">Mês anterior</p>
                                                    <h5>R$2281</h5>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-lg-10">
                                            <div id="line-chart" class="apex-charts" dir="ltr"
                                                style="min-height: 335px;">
                                                <div id="apexcharts0trf65jfi"
                                                    class="apexcharts-canvas apexcharts0trf65jfi apexcharts-theme-light"
                                                    style="width: 461px; height: 320px;"><svg id="SvgjsSvg1001" width="461"
                                                        height="320" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xmlns:svgjs="http://svgjs.com/svgjs"
                                                        class="apexcharts-svg apexcharts-zoomable"
                                                        xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                        style="background: transparent;">
                                                        <g id="SvgjsG1003" class="apexcharts-inner apexcharts-graphical"
                                                            transform="translate(39.25, 30)">
                                                            <defs id="SvgjsDefs1002">
                                                                <clipPath id="gridRectMask0trf65jfi">
                                                                    <rect id="SvgjsRect1009" width="418.75" height="255.348"
                                                                        x="-3.5" y="-1.5" rx="0" ry="0" opacity="1"
                                                                        stroke-width="0" stroke="none" stroke-dasharray="0"
                                                                        fill="#fff"></rect>
                                                                </clipPath>
                                                                <clipPath id="gridRectMarkerMask0trf65jfi">
                                                                    <rect id="SvgjsRect1010" width="415.75" height="256.348"
                                                                        x="-2" y="-2" rx="0" ry="0" opacity="1"
                                                                        stroke-width="0" stroke="none" stroke-dasharray="0"
                                                                        fill="#fff"></rect>
                                                                </clipPath>
                                                                <filter id="SvgjsFilter1016" filterUnits="userSpaceOnUse"
                                                                    width="200%" height="200%" x="-50%" y="-50%">
                                                                    <feFlood id="SvgjsFeFlood1017" flood-color="#000000"
                                                                        flood-opacity="0.2" result="SvgjsFeFlood1017Out"
                                                                        in="SourceGraphic"></feFlood>
                                                                    <feComposite id="SvgjsFeComposite1018"
                                                                        in="SvgjsFeFlood1017Out" in2="SourceAlpha"
                                                                        operator="in" result="SvgjsFeComposite1018Out">
                                                                    </feComposite>
                                                                    <feOffset id="SvgjsFeOffset1019" dx="7" dy="18"
                                                                        result="SvgjsFeOffset1019Out"
                                                                        in="SvgjsFeComposite1018Out"></feOffset>
                                                                    <feGaussianBlur id="SvgjsFeGaussianBlur1020"
                                                                        stdDeviation="8 "
                                                                        result="SvgjsFeGaussianBlur1020Out"
                                                                        in="SvgjsFeOffset1019Out"></feGaussianBlur>
                                                                    <feMerge id="SvgjsFeMerge1021"
                                                                        result="SvgjsFeMerge1021Out" in="SourceGraphic">
                                                                        <feMergeNode id="SvgjsFeMergeNode1022"
                                                                            in="SvgjsFeGaussianBlur1020Out"></feMergeNode>
                                                                        <feMergeNode id="SvgjsFeMergeNode1023"
                                                                            in="[object Arguments]"></feMergeNode>
                                                                    </feMerge>
                                                                    <feBlend id="SvgjsFeBlend1024" in="SourceGraphic"
                                                                        in2="SvgjsFeMerge1021Out" mode="normal"
                                                                        result="SvgjsFeBlend1024Out"></feBlend>
                                                                </filter>
                                                            </defs>
                                                            <line id="SvgjsLine1008" x1="-0.5" y1="0" x2="-0.5" y2="252.348"
                                                                stroke="#b6b6b6" stroke-dasharray="3"
                                                                class="apexcharts-xcrosshairs" x="-0.5" y="0" width="1"
                                                                height="252.348" fill="#b1b9c4" filter="none"
                                                                fill-opacity="0.9" stroke-width="1"></line>
                                                            <g id="SvgjsG1025" class="apexcharts-xaxis"
                                                                transform="translate(0, 0)">
                                                                <g id="SvgjsG1026" class="apexcharts-xaxis-texts-g"
                                                                    transform="translate(0, -4)"><text id="SvgjsText1028"
                                                                        font-family="Helvetica, Arial, sans-serif" x="0"
                                                                        y="281.348" text-anchor="middle"
                                                                        dominant-baseline="auto" font-size="12px"
                                                                        font-weight="400" fill="#373d3f"
                                                                        class="apexcharts-text apexcharts-xaxis-label "
                                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                                        <tspan id="SvgjsTspan1029">1</tspan>
                                                                        <title>1</title>
                                                                    </text><text id="SvgjsText1031"
                                                                        font-family="Helvetica, Arial, sans-serif"
                                                                        x="37.43181818181817" y="281.348"
                                                                        text-anchor="middle" dominant-baseline="auto"
                                                                        font-size="12px" font-weight="400" fill="#373d3f"
                                                                        class="apexcharts-text apexcharts-xaxis-label "
                                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                                        <tspan id="SvgjsTspan1032">2</tspan>
                                                                        <title>2</title>
                                                                    </text><text id="SvgjsText1034"
                                                                        font-family="Helvetica, Arial, sans-serif"
                                                                        x="74.86363636363635" y="281.348"
                                                                        text-anchor="middle" dominant-baseline="auto"
                                                                        font-size="12px" font-weight="400" fill="#373d3f"
                                                                        class="apexcharts-text apexcharts-xaxis-label "
                                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                                        <tspan id="SvgjsTspan1035">3</tspan>
                                                                        <title>3</title>
                                                                    </text><text id="SvgjsText1037"
                                                                        font-family="Helvetica, Arial, sans-serif"
                                                                        x="112.29545454545453" y="281.348"
                                                                        text-anchor="middle" dominant-baseline="auto"
                                                                        font-size="12px" font-weight="400" fill="#373d3f"
                                                                        class="apexcharts-text apexcharts-xaxis-label "
                                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                                        <tspan id="SvgjsTspan1038">4</tspan>
                                                                        <title>4</title>
                                                                    </text><text id="SvgjsText1040"
                                                                        font-family="Helvetica, Arial, sans-serif"
                                                                        x="149.72727272727272" y="281.348"
                                                                        text-anchor="middle" dominant-baseline="auto"
                                                                        font-size="12px" font-weight="400" fill="#373d3f"
                                                                        class="apexcharts-text apexcharts-xaxis-label "
                                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                                        <tspan id="SvgjsTspan1041">5</tspan>
                                                                        <title>5</title>
                                                                    </text><text id="SvgjsText1043"
                                                                        font-family="Helvetica, Arial, sans-serif"
                                                                        x="187.1590909090909" y="281.348"
                                                                        text-anchor="middle" dominant-baseline="auto"
                                                                        font-size="12px" font-weight="400" fill="#373d3f"
                                                                        class="apexcharts-text apexcharts-xaxis-label "
                                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                                        <tspan id="SvgjsTspan1044">6</tspan>
                                                                        <title>6</title>
                                                                    </text><text id="SvgjsText1046"
                                                                        font-family="Helvetica, Arial, sans-serif"
                                                                        x="224.5909090909091" y="281.348"
                                                                        text-anchor="middle" dominant-baseline="auto"
                                                                        font-size="12px" font-weight="400" fill="#373d3f"
                                                                        class="apexcharts-text apexcharts-xaxis-label "
                                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                                        <tspan id="SvgjsTspan1047">7</tspan>
                                                                        <title>7</title>
                                                                    </text><text id="SvgjsText1049"
                                                                        font-family="Helvetica, Arial, sans-serif"
                                                                        x="262.0227272727273" y="281.348"
                                                                        text-anchor="middle" dominant-baseline="auto"
                                                                        font-size="12px" font-weight="400" fill="#373d3f"
                                                                        class="apexcharts-text apexcharts-xaxis-label "
                                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                                        <tspan id="SvgjsTspan1050">8</tspan>
                                                                        <title>8</title>
                                                                    </text><text id="SvgjsText1052"
                                                                        font-family="Helvetica, Arial, sans-serif"
                                                                        x="299.4545454545455" y="281.348"
                                                                        text-anchor="middle" dominant-baseline="auto"
                                                                        font-size="12px" font-weight="400" fill="#373d3f"
                                                                        class="apexcharts-text apexcharts-xaxis-label "
                                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                                        <tspan id="SvgjsTspan1053">9</tspan>
                                                                        <title>9</title>
                                                                    </text><text id="SvgjsText1055"
                                                                        font-family="Helvetica, Arial, sans-serif"
                                                                        x="336.8863636363637" y="281.348"
                                                                        text-anchor="middle" dominant-baseline="auto"
                                                                        font-size="12px" font-weight="400" fill="#373d3f"
                                                                        class="apexcharts-text apexcharts-xaxis-label "
                                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                                        <tspan id="SvgjsTspan1056">10</tspan>
                                                                        <title>10</title>
                                                                    </text><text id="SvgjsText1058"
                                                                        font-family="Helvetica, Arial, sans-serif"
                                                                        x="374.31818181818187" y="281.348"
                                                                        text-anchor="middle" dominant-baseline="auto"
                                                                        font-size="12px" font-weight="400" fill="#373d3f"
                                                                        class="apexcharts-text apexcharts-xaxis-label "
                                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                                        <tspan id="SvgjsTspan1059">11</tspan>
                                                                        <title>11</title>
                                                                    </text><text id="SvgjsText1061"
                                                                        font-family="Helvetica, Arial, sans-serif"
                                                                        x="411.75000000000006" y="281.348"
                                                                        text-anchor="middle" dominant-baseline="auto"
                                                                        font-size="12px" font-weight="400" fill="#373d3f"
                                                                        class="apexcharts-text apexcharts-xaxis-label "
                                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                                        <tspan id="SvgjsTspan1062">12</tspan>
                                                                        <title>12</title>
                                                                    </text></g>
                                                                <line id="SvgjsLine1063" x1="0" y1="253.348" x2="411.75"
                                                                    y2="253.348" stroke="#e0e0e0" stroke-dasharray="0"
                                                                    stroke-width="1"></line>
                                                            </g>
                                                            <g id="SvgjsG1082" class="apexcharts-grid">
                                                                <g id="SvgjsG1083" class="apexcharts-gridlines-horizontal">
                                                                    <line id="SvgjsLine1097" x1="0" y1="0" x2="411.75"
                                                                        y2="0" stroke="#e0e0e0" stroke-dasharray="0"
                                                                        class="apexcharts-gridline"></line>
                                                                    <line id="SvgjsLine1098" x1="0" y1="36.04971428571429"
                                                                        x2="411.75" y2="36.04971428571429" stroke="#e0e0e0"
                                                                        stroke-dasharray="0" class="apexcharts-gridline">
                                                                    </line>
                                                                    <line id="SvgjsLine1099" x1="0" y1="72.09942857142858"
                                                                        x2="411.75" y2="72.09942857142858" stroke="#e0e0e0"
                                                                        stroke-dasharray="0" class="apexcharts-gridline">
                                                                    </line>
                                                                    <line id="SvgjsLine1100" x1="0" y1="108.14914285714286"
                                                                        x2="411.75" y2="108.14914285714286" stroke="#e0e0e0"
                                                                        stroke-dasharray="0" class="apexcharts-gridline">
                                                                    </line>
                                                                    <line id="SvgjsLine1101" x1="0" y1="144.19885714285715"
                                                                        x2="411.75" y2="144.19885714285715" stroke="#e0e0e0"
                                                                        stroke-dasharray="0" class="apexcharts-gridline">
                                                                    </line>
                                                                    <line id="SvgjsLine1102" x1="0" y1="180.24857142857144"
                                                                        x2="411.75" y2="180.24857142857144" stroke="#e0e0e0"
                                                                        stroke-dasharray="0" class="apexcharts-gridline">
                                                                    </line>
                                                                    <line id="SvgjsLine1103" x1="0" y1="216.29828571428573"
                                                                        x2="411.75" y2="216.29828571428573" stroke="#e0e0e0"
                                                                        stroke-dasharray="0" class="apexcharts-gridline">
                                                                    </line>
                                                                    <line id="SvgjsLine1104" x1="0" y1="252.348" x2="411.75"
                                                                        y2="252.348" stroke="#e0e0e0" stroke-dasharray="0"
                                                                        class="apexcharts-gridline"></line>
                                                                </g>
                                                                <g id="SvgjsG1084" class="apexcharts-gridlines-vertical">
                                                                </g>
                                                                <line id="SvgjsLine1085" x1="0" y1="253.348" x2="0"
                                                                    y2="259.348" stroke="#e0e0e0" stroke-dasharray="0"
                                                                    class="apexcharts-xaxis-tick"></line>
                                                                <line id="SvgjsLine1086" x1="37.43181818181818" y1="253.348"
                                                                    x2="37.43181818181818" y2="259.348" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" class="apexcharts-xaxis-tick">
                                                                </line>
                                                                <line id="SvgjsLine1087" x1="74.86363636363636" y1="253.348"
                                                                    x2="74.86363636363636" y2="259.348" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" class="apexcharts-xaxis-tick">
                                                                </line>
                                                                <line id="SvgjsLine1088" x1="112.29545454545453"
                                                                    y1="253.348" x2="112.29545454545453" y2="259.348"
                                                                    stroke="#e0e0e0" stroke-dasharray="0"
                                                                    class="apexcharts-xaxis-tick"></line>
                                                                <line id="SvgjsLine1089" x1="149.72727272727272"
                                                                    y1="253.348" x2="149.72727272727272" y2="259.348"
                                                                    stroke="#e0e0e0" stroke-dasharray="0"
                                                                    class="apexcharts-xaxis-tick"></line>
                                                                <line id="SvgjsLine1090" x1="187.1590909090909" y1="253.348"
                                                                    x2="187.1590909090909" y2="259.348" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" class="apexcharts-xaxis-tick">
                                                                </line>
                                                                <line id="SvgjsLine1091" x1="224.5909090909091" y1="253.348"
                                                                    x2="224.5909090909091" y2="259.348" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" class="apexcharts-xaxis-tick">
                                                                </line>
                                                                <line id="SvgjsLine1092" x1="262.02272727272725"
                                                                    y1="253.348" x2="262.02272727272725" y2="259.348"
                                                                    stroke="#e0e0e0" stroke-dasharray="0"
                                                                    class="apexcharts-xaxis-tick"></line>
                                                                <line id="SvgjsLine1093" x1="299.45454545454544"
                                                                    y1="253.348" x2="299.45454545454544" y2="259.348"
                                                                    stroke="#e0e0e0" stroke-dasharray="0"
                                                                    class="apexcharts-xaxis-tick"></line>
                                                                <line id="SvgjsLine1094" x1="336.8863636363636" y1="253.348"
                                                                    x2="336.8863636363636" y2="259.348" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" class="apexcharts-xaxis-tick">
                                                                </line>
                                                                <line id="SvgjsLine1095" x1="374.3181818181818" y1="253.348"
                                                                    x2="374.3181818181818" y2="259.348" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" class="apexcharts-xaxis-tick">
                                                                </line>
                                                                <line id="SvgjsLine1096" x1="411.75" y1="253.348"
                                                                    x2="411.75" y2="259.348" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" class="apexcharts-xaxis-tick">
                                                                </line>
                                                                <line id="SvgjsLine1106" x1="0" y1="252.348" x2="411.75"
                                                                    y2="252.348" stroke="transparent" stroke-dasharray="0">
                                                                </line>
                                                                <line id="SvgjsLine1105" x1="0" y1="1" x2="0" y2="252.348"
                                                                    stroke="transparent" stroke-dasharray="0"></line>
                                                            </g>
                                                            <g id="SvgjsG1011"
                                                                class="apexcharts-line-series apexcharts-plot-series">
                                                                <g id="SvgjsG1012" class="apexcharts-series"
                                                                    seriesName="series1" data:longestSeries="true" rel="1"
                                                                    data:realIndex="0">
                                                                    <path id="SvgjsPath1015"
                                                                        d="M0 212.6933142857143C13.101136363636362 212.6933142857143 24.330681818181816 180.24857142857144 37.43181818181818 180.24857142857144C50.532954545454544 180.24857142857144 61.762499999999996 194.66845714285716 74.86363636363636 194.66845714285716C87.96477272727273 194.66845714285716 99.19431818181818 140.59388571428573 112.29545454545455 140.59388571428573C125.3965909090909 140.59388571428573 136.62613636363636 147.8038285714286 149.72727272727272 147.8038285714286C162.82840909090908 147.8038285714286 174.05795454545455 64.88948571428574 187.1590909090909 64.88948571428574C200.26022727272726 64.88948571428574 211.48977272727274 75.70440000000002 224.5909090909091 75.70440000000002C237.69204545454545 75.70440000000002 248.9215909090909 122.56902857142859 262.02272727272725 122.56902857142859C275.12386363636364 122.56902857142859 286.35340909090905 79.30937142857144 299.45454545454544 79.30937142857144C312.5556818181818 79.30937142857144 323.78522727272724 28.839771428571453 336.8863636363636 28.839771428571453C349.9875 28.839771428571453 361.2170454545454 79.30937142857144 374.3181818181818 79.30937142857144C387.4193181818182 79.30937142857144 398.6488636363636 50.469600000000014 411.75 50.469600000000014C411.75 50.469600000000014 411.75 50.469600000000014 411.75 50.469600000000014 "
                                                                        fill="none" fill-opacity="1"
                                                                        stroke="rgba(85,110,230,0.85)" stroke-opacity="1"
                                                                        stroke-linecap="butt" stroke-width="3"
                                                                        stroke-dasharray="0" class="apexcharts-line"
                                                                        index="0" clip-path="url(#gridRectMask0trf65jfi)"
                                                                        filter="url(#SvgjsFilter1016)"
                                                                        pathTo="M 0 212.6933142857143C 13.101136363636362 212.6933142857143 24.330681818181816 180.24857142857144 37.43181818181818 180.24857142857144C 50.532954545454544 180.24857142857144 61.762499999999996 194.66845714285716 74.86363636363636 194.66845714285716C 87.96477272727273 194.66845714285716 99.19431818181818 140.59388571428573 112.29545454545455 140.59388571428573C 125.3965909090909 140.59388571428573 136.62613636363636 147.8038285714286 149.72727272727272 147.8038285714286C 162.82840909090908 147.8038285714286 174.05795454545455 64.88948571428574 187.1590909090909 64.88948571428574C 200.26022727272726 64.88948571428574 211.48977272727274 75.70440000000002 224.5909090909091 75.70440000000002C 237.69204545454545 75.70440000000002 248.9215909090909 122.56902857142859 262.02272727272725 122.56902857142859C 275.12386363636364 122.56902857142859 286.35340909090905 79.30937142857144 299.45454545454544 79.30937142857144C 312.5556818181818 79.30937142857144 323.78522727272724 28.839771428571453 336.8863636363636 28.839771428571453C 349.9875 28.839771428571453 361.2170454545454 79.30937142857144 374.3181818181818 79.30937142857144C 387.4193181818182 79.30937142857144 398.6488636363636 50.469600000000014 411.75 50.469600000000014"
                                                                        pathFrom="M -1 324.4474285714286L -1 324.4474285714286L 37.43181818181818 324.4474285714286L 74.86363636363636 324.4474285714286L 112.29545454545455 324.4474285714286L 149.72727272727272 324.4474285714286L 187.1590909090909 324.4474285714286L 224.5909090909091 324.4474285714286L 262.02272727272725 324.4474285714286L 299.45454545454544 324.4474285714286L 336.8863636363636 324.4474285714286L 374.3181818181818 324.4474285714286L 411.75 324.4474285714286">
                                                                    </path>
                                                                    <g id="SvgjsG1013"
                                                                        class="apexcharts-series-markers-wrap"
                                                                        data:realIndex="0">
                                                                        <g class="apexcharts-series-markers">
                                                                            <circle id="SvgjsCircle1112" r="0" cx="0"
                                                                                cy="212.6933142857143"
                                                                                class="apexcharts-marker w23idcc07k no-pointer-events"
                                                                                stroke="#ffffff" fill="#556ee6"
                                                                                fill-opacity="1" stroke-width="2"
                                                                                stroke-opacity="0.9"
                                                                                default-marker-size="0"></circle>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                                <g id="SvgjsG1014" class="apexcharts-datalabels"
                                                                    data:realIndex="0"></g>
                                                            </g>
                                                            <line id="SvgjsLine1107" x1="0" y1="0" x2="411.75" y2="0"
                                                                stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                                class="apexcharts-ycrosshairs"></line>
                                                            <line id="SvgjsLine1108" x1="0" y1="0" x2="411.75" y2="0"
                                                                stroke-dasharray="0" stroke-width="0"
                                                                class="apexcharts-ycrosshairs-hidden"></line>
                                                            <g id="SvgjsG1109" class="apexcharts-yaxis-annotations"></g>
                                                            <g id="SvgjsG1110" class="apexcharts-xaxis-annotations"></g>
                                                            <g id="SvgjsG1111" class="apexcharts-point-annotations"></g>
                                                            <rect id="SvgjsRect1113" width="0" height="0" x="0" y="0" rx="0"
                                                                ry="0" opacity="1" stroke-width="0" stroke="none"
                                                                stroke-dasharray="0" fill="#fefefe"
                                                                class="apexcharts-zoom-rect"></rect>
                                                            <rect id="SvgjsRect1114" width="0" height="0" x="0" y="0" rx="0"
                                                                ry="0" opacity="1" stroke-width="0" stroke="none"
                                                                stroke-dasharray="0" fill="#fefefe"
                                                                class="apexcharts-selection-rect"></rect>
                                                        </g>
                                                        <rect id="SvgjsRect1007" width="0" height="0" x="0" y="0" rx="0"
                                                            ry="0" opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fefefe"></rect>
                                                        <g id="SvgjsG1064" class="apexcharts-yaxis" rel="0"
                                                            transform="translate(9.25, 0)">
                                                            <g id="SvgjsG1065" class="apexcharts-yaxis-texts-g"><text
                                                                    id="SvgjsText1066"
                                                                    font-family="Helvetica, Arial, sans-serif" x="20"
                                                                    y="31.7" text-anchor="end" dominant-baseline="auto"
                                                                    font-size="11px" font-weight="400" fill="#373d3f"
                                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan1067">90</tspan>
                                                                </text><text id="SvgjsText1068"
                                                                    font-family="Helvetica, Arial, sans-serif" x="20"
                                                                    y="67.74971428571429" text-anchor="end"
                                                                    dominant-baseline="auto" font-size="11px"
                                                                    font-weight="400" fill="#373d3f"
                                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan1069">80</tspan>
                                                                </text><text id="SvgjsText1070"
                                                                    font-family="Helvetica, Arial, sans-serif" x="20"
                                                                    y="103.79942857142858" text-anchor="end"
                                                                    dominant-baseline="auto" font-size="11px"
                                                                    font-weight="400" fill="#373d3f"
                                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan1071">70</tspan>
                                                                </text><text id="SvgjsText1072"
                                                                    font-family="Helvetica, Arial, sans-serif" x="20"
                                                                    y="139.84914285714285" text-anchor="end"
                                                                    dominant-baseline="auto" font-size="11px"
                                                                    font-weight="400" fill="#373d3f"
                                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan1073">60</tspan>
                                                                </text><text id="SvgjsText1074"
                                                                    font-family="Helvetica, Arial, sans-serif" x="20"
                                                                    y="175.89885714285714" text-anchor="end"
                                                                    dominant-baseline="auto" font-size="11px"
                                                                    font-weight="400" fill="#373d3f"
                                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan1075">50</tspan>
                                                                </text><text id="SvgjsText1076"
                                                                    font-family="Helvetica, Arial, sans-serif" x="20"
                                                                    y="211.94857142857143" text-anchor="end"
                                                                    dominant-baseline="auto" font-size="11px"
                                                                    font-weight="400" fill="#373d3f"
                                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan1077">40</tspan>
                                                                </text><text id="SvgjsText1078"
                                                                    font-family="Helvetica, Arial, sans-serif" x="20"
                                                                    y="247.99828571428571" text-anchor="end"
                                                                    dominant-baseline="auto" font-size="11px"
                                                                    font-weight="400" fill="#373d3f"
                                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan1079">30</tspan>
                                                                </text><text id="SvgjsText1080"
                                                                    font-family="Helvetica, Arial, sans-serif" x="20"
                                                                    y="284.048" text-anchor="end" dominant-baseline="auto"
                                                                    font-size="11px" font-weight="400" fill="#373d3f"
                                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan1081">20</tspan>
                                                                </text></g>
                                                        </g>
                                                        <g id="SvgjsG1004" class="apexcharts-annotations"></g>
                                                    </svg>
                                                    <div class="apexcharts-legend" style="max-height: 160px;"></div>
                                                    <div class="apexcharts-tooltip apexcharts-theme-light"
                                                        style="left: 50.25px; top: 215.693px;">
                                                        <div class="apexcharts-tooltip-title"
                                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                            1</div>
                                                        <div class="apexcharts-tooltip-series-group apexcharts-active"
                                                            style="order: 1; display: flex;"><span
                                                                class="apexcharts-tooltip-marker"
                                                                style="background-color: rgb(85, 110, 230);"></span>
                                                            <div class="apexcharts-tooltip-text"
                                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                <div class="apexcharts-tooltip-y-group"><span
                                                                        class="apexcharts-tooltip-text-label">series1:
                                                                    </span><span
                                                                        class="apexcharts-tooltip-text-value">31</span>
                                                                </div>
                                                                <div class="apexcharts-tooltip-z-group"><span
                                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                                        class="apexcharts-tooltip-text-z-value"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"
                                                        style="left: 24.9062px; top: 284.348px;">
                                                        <div class="apexcharts-xaxistooltip-text"
                                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px; min-width: 4.17188px;">
                                                            1</div>
                                                    </div>
                                                    <div
                                                        class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                        <div class="apexcharts-yaxistooltip-text"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="resize-triggers">
                                                <div class="expand-trigger">
                                                    <div style="width: 486px; height: 321px;"></div>
                                                </div>
                                                <div class="contract-trigger"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="card bg-warning text-white-50">
                                <div class="card-body">
                                    <h5 class="mb-4 text-white"><i class="fas fa-trophy"></i> Produção Diária</h5>
                                    <p class="card-text">R$2.300,00</p>
                                    <span class="badge rounded-pill bg-danger float-end" key="t-new">5 contratos</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card bg-info text-white-50">
                                <div class="card-body">
                                    <h5 class="mb-4 text-white"><i class="fas fa-tachometer-alt"></i> Ticket Médio</h5>
                                    <p class="card-text">R$ 2.599,00</p>
                                    <br>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card bg-success text-white-50">
                                <div class="card-body">
                                    <h5 class="mb-4 text-white"><i class="fas fa-plane-departure"></i> Prev. Fechamento</h5>
                                    <p class="card-text">R$ 2.500,00</p>
                                    <br>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card bg-danger text-white-50">
                                <div class="card-body">
                                    <h5 class="mb-4 text-white"><i class="fas fa-phone"></i> Ligações Diárias</h5>
                                    <p class="card-text">0</p>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Últimas Vendas</h4>
                                <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Empresa</th>
                                            <th>E-mail</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        @forelse ($lastSales as $ls)
                                        <tr>
                                            <td>{{$ls->code}}</td>
                                            <td>{{$ls->company_name}}</td>
                                            <td>{{$ls->email}}</td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td>Sem registros!</td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->



    </div>
@endsection
