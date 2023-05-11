@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <div class="card2 col-lg-11">
        <div class="container-fluid">

            <!---------------------------------------------- CARD DECK ----------------------------------------------->
            <div class="card-deck">

                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-3">
                            <div>
                                <h5 class="card-title">Dengue Cases</h5>
                            </div>
                            <div>
                                <span class="text-success font-14 font-weight-500">+30%</span>
                            </div>
                        </div>
                        <div>
                            <div class="text-center" style="text-align: center; margin-bottom: -25px">
                                <span class="d-block display-4 text-dark mb-5" style="font-weight: 400">357</span>
                            </div>
                            <p class="card-text"><small style="color: rgb(204, 151, 71)">Last updated 1 month
                                    ago</small></p>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-3">
                            <div>
                                <h5 class="card-title">Malaria Cases</h5>
                            </div>
                            <div>
                                <span class="text-success font-14 font-weight-500">+10%</span>
                            </div>
                        </div>
                        <div>
                            <div class="text-center" style="text-align: center; margin-bottom: -25px">
                                <span class="d-block display-4 text-dark mb-5" style="font-weight: 400">262</span>
                            </div>
                            <p class="card-text"><small style="color: rgb(204, 151, 71)">Last updated 1 month
                                    ago</small></p>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-3">
                            <div>
                                <h5 class="card-title">Diabetes Cases</h5>
                            </div>
                            <div>
                                <span class="text-success font-14 font-weight-500">+20%</span>
                            </div>
                        </div>
                        <div>
                            <div class="text-center" style="text-align: center; margin-bottom: -25px">
                                <span class="d-block display-4 text-dark mb-5" style="font-weight: 400">405</span>
                            </div>
                            <p class="card-text"><small style="color: rgb(204, 151, 71)">Last updated 1 month
                                    ago</small></p>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-3">
                            <div>
                                <h5 class="card-title">Stroke Cases</h5>
                            </div>
                            <div>
                                <span class="text-success font-14 font-weight-500">+50%</span>
                            </div>
                        </div>
                        <div>
                            <div class="text-center" style="text-align: center; margin-bottom: -25px">
                                <span class="d-block display-4 text-dark mb-5" style="font-weight: 400">378</span>
                            </div>
                            <p class="card-text"><small style="color: rgb(204, 151, 71)">Last updated 1 month
                                    ago</small></p>
                        </div>
                    </div>
                </div>

            </div>
            <!---------------------------------------------- CARD DECK END ----------------------------------------------->


            <!---------------------------------------------- CHARTS OR STATS ----------------------------------------------->
            <br>
            <div class="card3">
                <div class="card-body pa-0 ma-0">
                    <div class="table-wrap">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th>Name of Disease</th>
                                        <th>Chart</th>
                                        <th>2019</th>
                                        <th>2020</th>
                                        <th>2021</th>
                                        <th>2022</th>
                                        <th>2023</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Dengue</td>
                                        <td class="w-200p" style="position: relative;">
                                            <div id="sparkline_4" style="min-height: 50px;">
                                                <div id="apexchartskqij97kki" class="apexcharts-canvas apexchartskqij97kki"
                                                    style="width: 160px; height: 50px;"><svg id="SvgjsSvg14744"
                                                        width="160" height="50" xmlns="http://www.w3.org/2000/svg"
                                                        version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                                        xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                        style="background: transparent;">
                                                        <g id="SvgjsG14746" class="apexcharts-inner apexcharts-graphical"
                                                            transform="translate(0, 0)">
                                                            <defs id="SvgjsDefs14745">
                                                                <clipPath id="gridRectMaskkqij97kki">
                                                                    <rect id="SvgjsRect14750" width="163" height="53"
                                                                        x="-1.5" y="-1.5" rx="0"
                                                                        ry="0" fill="#ffffff" opacity="1"
                                                                        stroke-width="0" stroke="none"
                                                                        stroke-dasharray="0"></rect>
                                                                </clipPath>
                                                                <clipPath id="gridRectMarkerMaskkqij97kki">
                                                                    <rect id="SvgjsRect14751" width="174" height="64"
                                                                        x="-7" y="-7" rx="0"
                                                                        ry="0" fill="#ffffff" opacity="1"
                                                                        stroke-width="0" stroke="none"
                                                                        stroke-dasharray="0"></rect>
                                                                </clipPath>
                                                                <linearGradient id="SvgjsLinearGradient14757"
                                                                    x1="0" y1="0" x2="0"
                                                                    y2="1">
                                                                    <stop id="SvgjsStop14758" stop-opacity="0.65"
                                                                        stop-color="rgba(0,172,240,0.65)" offset="0">
                                                                    </stop>
                                                                    <stop id="SvgjsStop14759" stop-opacity="0.5"
                                                                        stop-color="rgba(128,214,248,0.5)" offset="1">
                                                                    </stop>
                                                                    <stop id="SvgjsStop14760" stop-opacity="0.5"
                                                                        stop-color="rgba(128,214,248,0.5)" offset="1">
                                                                    </stop>
                                                                </linearGradient>
                                                            </defs>
                                                            <line id="SvgjsLine14749" x1="0" y1="0"
                                                                x2="0" y2="50" stroke="#b6b6b6"
                                                                stroke-dasharray="3" class="apexcharts-xcrosshairs"
                                                                x="0" y="0" width="1"
                                                                height="50" fill="#b1b9c4" filter="none"
                                                                fill-opacity="0.9" stroke-width="1"></line>
                                                            <g id="SvgjsG14763" class="apexcharts-xaxis"
                                                                transform="translate(0, 0)">
                                                                <g id="SvgjsG14764" class="apexcharts-xaxis-texts-g"
                                                                    transform="translate(0, -4)"></g>
                                                            </g>
                                                            <g id="SvgjsG14767" class="apexcharts-grid">
                                                                <line id="SvgjsLine14769" x1="0" y1="50"
                                                                    x2="160" y2="50" stroke="transparent"
                                                                    stroke-dasharray="0"></line>
                                                                <line id="SvgjsLine14768" x1="0" y1="1"
                                                                    x2="0" y2="50" stroke="transparent"
                                                                    stroke-dasharray="0"></line>
                                                            </g>
                                                            <g id="SvgjsG14753"
                                                                class="apexcharts-area-series apexcharts-plot-series">
                                                                <g id="SvgjsG14754" class="apexcharts-series seriesx1"
                                                                    data:longestSeries="true" rel="1"
                                                                    data:realIndex="0">
                                                                    <path id="apexcharts-area-0"
                                                                        d="M 0 50L 0 22.595656670113755L 6.9565217391304355 23.62978283350569L 13.913043478260871 36.039296794208894L 20.869565217391305 18.45915201654602L 27.826086956521742 28.80041365046536L 34.78260869565218 37.59048603929679L 41.73913043478261 26.732161323681492L 48.69565217391305 22.07859358841779L 55.652173913043484 27.766287487073424L 62.60869565217392 29.834539813857294L 69.56521739130436 22.07859358841779L 76.5217391304348 17.942088934850055L 83.47826086956522 1.9131334022750792L 90.43478260869566 33.97104446742503L 97.3913043478261 21.044467425025857L 104.34782608695653 31.90279214064116L 111.30434782608697 31.90279214064116L 118.2608695652174 30.35160289555326L 125.21739130434784 36.039296794208894L 132.17391304347828 25.698035160289557L 139.13043478260872 26.215098241985523L 146.08695652173915 16.39089968976215L 153.0434782608696 30.868665977249226L 160 40.17580144777663L 160 50M 160 40.17580144777663z"
                                                                        fill="url(#SvgjsLinearGradient14757)"
                                                                        fill-opacity="1" stroke-opacity="1"
                                                                        stroke-linecap="butt" stroke-width="0"
                                                                        stroke-dasharray="0" class="apexcharts-area"
                                                                        index="0"
                                                                        clip-path="url(#gridRectMaskkqij97kki)"
                                                                        pathTo="M 0 50L 0 22.595656670113755L 6.9565217391304355 23.62978283350569L 13.913043478260871 36.039296794208894L 20.869565217391305 18.45915201654602L 27.826086956521742 28.80041365046536L 34.78260869565218 37.59048603929679L 41.73913043478261 26.732161323681492L 48.69565217391305 22.07859358841779L 55.652173913043484 27.766287487073424L 62.60869565217392 29.834539813857294L 69.56521739130436 22.07859358841779L 76.5217391304348 17.942088934850055L 83.47826086956522 1.9131334022750792L 90.43478260869566 33.97104446742503L 97.3913043478261 21.044467425025857L 104.34782608695653 31.90279214064116L 111.30434782608697 31.90279214064116L 118.2608695652174 30.35160289555326L 125.21739130434784 36.039296794208894L 132.17391304347828 25.698035160289557L 139.13043478260872 26.215098241985523L 146.08695652173915 16.39089968976215L 153.0434782608696 30.868665977249226L 160 40.17580144777663L 160 50M 160 40.17580144777663z"
                                                                        pathFrom="M -1 50L -1 50L 6.9565217391304355 50L 13.913043478260871 50L 20.869565217391305 50L 27.826086956521742 50L 34.78260869565218 50L 41.73913043478261 50L 48.69565217391305 50L 55.652173913043484 50L 62.60869565217392 50L 69.56521739130436 50L 76.5217391304348 50L 83.47826086956522 50L 90.43478260869566 50L 97.3913043478261 50L 104.34782608695653 50L 111.30434782608697 50L 118.2608695652174 50L 125.21739130434784 50L 132.17391304347828 50L 139.13043478260872 50L 146.08695652173915 50L 153.0434782608696 50L 160 50">
                                                                    </path>
                                                                    <path id="apexcharts-area-0"
                                                                        d="M 0 22.595656670113755L 6.9565217391304355 23.62978283350569L 13.913043478260871 36.039296794208894L 20.869565217391305 18.45915201654602L 27.826086956521742 28.80041365046536L 34.78260869565218 37.59048603929679L 41.73913043478261 26.732161323681492L 48.69565217391305 22.07859358841779L 55.652173913043484 27.766287487073424L 62.60869565217392 29.834539813857294L 69.56521739130436 22.07859358841779L 76.5217391304348 17.942088934850055L 83.47826086956522 1.9131334022750792L 90.43478260869566 33.97104446742503L 97.3913043478261 21.044467425025857L 104.34782608695653 31.90279214064116L 111.30434782608697 31.90279214064116L 118.2608695652174 30.35160289555326L 125.21739130434784 36.039296794208894L 132.17391304347828 25.698035160289557L 139.13043478260872 26.215098241985523L 146.08695652173915 16.39089968976215L 153.0434782608696 30.868665977249226L 160 40.17580144777663"
                                                                        fill="none" fill-opacity="1" stroke="#00acf0"
                                                                        stroke-opacity="1" stroke-linecap="butt"
                                                                        stroke-width="3" stroke-dasharray="0"
                                                                        class="apexcharts-area" index="0"
                                                                        clip-path="url(#gridRectMaskkqij97kki)"
                                                                        pathTo="M 0 22.595656670113755L 6.9565217391304355 23.62978283350569L 13.913043478260871 36.039296794208894L 20.869565217391305 18.45915201654602L 27.826086956521742 28.80041365046536L 34.78260869565218 37.59048603929679L 41.73913043478261 26.732161323681492L 48.69565217391305 22.07859358841779L 55.652173913043484 27.766287487073424L 62.60869565217392 29.834539813857294L 69.56521739130436 22.07859358841779L 76.5217391304348 17.942088934850055L 83.47826086956522 1.9131334022750792L 90.43478260869566 33.97104446742503L 97.3913043478261 21.044467425025857L 104.34782608695653 31.90279214064116L 111.30434782608697 31.90279214064116L 118.2608695652174 30.35160289555326L 125.21739130434784 36.039296794208894L 132.17391304347828 25.698035160289557L 139.13043478260872 26.215098241985523L 146.08695652173915 16.39089968976215L 153.0434782608696 30.868665977249226L 160 40.17580144777663"
                                                                        pathFrom="M -1 50L -1 50L 6.9565217391304355 50L 13.913043478260871 50L 20.869565217391305 50L 27.826086956521742 50L 34.78260869565218 50L 41.73913043478261 50L 48.69565217391305 50L 55.652173913043484 50L 62.60869565217392 50L 69.56521739130436 50L 76.5217391304348 50L 83.47826086956522 50L 90.43478260869566 50L 97.3913043478261 50L 104.34782608695653 50L 111.30434782608697 50L 118.2608695652174 50L 125.21739130434784 50L 132.17391304347828 50L 139.13043478260872 50L 146.08695652173915 50L 153.0434782608696 50L 160 50">
                                                                    </path>
                                                                    <g id="SvgjsG14755"
                                                                        class="apexcharts-series-markers-wrap">
                                                                        <g class="apexcharts-series-markers">
                                                                            <circle id="SvgjsCircle14775" r="0"
                                                                                cx="0" cy="0"
                                                                                class="apexcharts-marker wtwn69n9ok no-pointer-events"
                                                                                stroke="#ffffff" fill="#00acf0"
                                                                                fill-opacity="1" stroke-width="2"
                                                                                stroke-opacity="0.9"
                                                                                default-marker-size="0"></circle>
                                                                        </g>
                                                                    </g>
                                                                    <g id="SvgjsG14756" class="apexcharts-datalabels">
                                                                    </g>
                                                                </g>
                                                            </g>
                                                            <line id="SvgjsLine14770" x1="0" y1="0"
                                                                x2="160" y2="0" stroke="#b6b6b6"
                                                                stroke-dasharray="0" stroke-width="1"
                                                                class="apexcharts-ycrosshairs"></line>
                                                            <line id="SvgjsLine14771" x1="0" y1="0"
                                                                x2="160" y2="0" stroke-dasharray="0"
                                                                stroke-width="0" class="apexcharts-ycrosshairs-hidden">
                                                            </line>
                                                            <g id="SvgjsG14772" class="apexcharts-yaxis-annotations">
                                                            </g>
                                                            <g id="SvgjsG14773" class="apexcharts-xaxis-annotations">
                                                            </g>
                                                            <g id="SvgjsG14774" class="apexcharts-point-annotations">
                                                            </g>
                                                        </g>
                                                        <rect id="SvgjsRect14748" width="0" height="0"
                                                            x="0" y="0" rx="0" ry="0"
                                                            fill="#fefefe" opacity="1" stroke-width="0"
                                                            stroke="none" stroke-dasharray="0">
                                                        </rect>
                                                        <g id="SvgjsG14765" class="apexcharts-yaxis" rel="0"
                                                            transform="translate(-21, 0)">
                                                            <g id="SvgjsG14766" class="apexcharts-yaxis-texts-g"></g>
                                                        </g>
                                                    </svg>
                                                    <div class="apexcharts-legend"></div>
                                                    <div class="apexcharts-tooltip light">
                                                        <div class="apexcharts-tooltip-title"
                                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                        </div>
                                                        <div class="apexcharts-tooltip-series-group"><span
                                                                class="apexcharts-tooltip-marker"
                                                                style="background-color: rgb(0, 172, 240);"></span>
                                                            <div class="apexcharts-tooltip-text"
                                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                <div class="apexcharts-tooltip-y-group"><span
                                                                        class="apexcharts-tooltip-text-label"></span><span
                                                                        class="apexcharts-tooltip-text-value"></span>
                                                                </div>
                                                                <div class="apexcharts-tooltip-z-group"><span
                                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                                        class="apexcharts-tooltip-text-z-value"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="resize-triggers">
                                                <div class="expand-trigger">
                                                    <div style="width: 201px; height: 0px;"></div>
                                                </div>
                                                <div class="contract-trigger"></div>
                                            </div>
                                        </td>
                                        <td><span class="text-success"><i class="ion ion-md-arrow-up"
                                                    aria-hidden="true"></i> 1,234</span> </td>
                                        <td><span class="text-danger"><i class="ion ion-md-arrow-down"
                                                    aria-hidden="true"></i> 5,678</span> </td>
                                        <td><span class="text-success"><i class="ion ion-md-arrow-up"
                                                    aria-hidden="true"></i> 9,101</span> </td>
                                        <td><span class="text-danger"><i class="ion ion-md-arrow-down"
                                                    aria-hidden="true"></i> 1,121</span> </td>
                                        <td>3,141</td>
                                    </tr>
                                    <tr>
                                        <td>Malaria</td>
                                        <td class="w-200p" style="position: relative;">
                                            <div id="sparkline_5" style="min-height: 50px;">
                                                <div id="apexchartskh71jzcx" class="apexcharts-canvas apexchartskh71jzcx"
                                                    style="width: 160px; height: 50px;"><svg id="SvgjsSvg14779"
                                                        width="160" height="50" xmlns="http://www.w3.org/2000/svg"
                                                        version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                                        xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                        style="background: transparent;">
                                                        <g id="SvgjsG14781" class="apexcharts-inner apexcharts-graphical"
                                                            transform="translate(0, 0)">
                                                            <defs id="SvgjsDefs14780">
                                                                <clipPath id="gridRectMaskkh71jzcx">
                                                                    <rect id="SvgjsRect14785" width="163"
                                                                        height="53" x="-1.5" y="-1.5"
                                                                        rx="0" ry="0" fill="#ffffff"
                                                                        opacity="1" stroke-width="0" stroke="none"
                                                                        stroke-dasharray="0"></rect>
                                                                </clipPath>
                                                                <clipPath id="gridRectMarkerMaskkh71jzcx">
                                                                    <rect id="SvgjsRect14786" width="174"
                                                                        height="64" x="-7" y="-7"
                                                                        rx="0" ry="0" fill="#ffffff"
                                                                        opacity="1" stroke-width="0" stroke="none"
                                                                        stroke-dasharray="0"></rect>
                                                                </clipPath>
                                                                <linearGradient id="SvgjsLinearGradient14792"
                                                                    x1="0" y1="0" x2="0"
                                                                    y2="1">
                                                                    <stop id="SvgjsStop14793" stop-opacity="0.65"
                                                                        stop-color="rgba(0,172,240,0.65)" offset="0">
                                                                    </stop>
                                                                    <stop id="SvgjsStop14794" stop-opacity="0.5"
                                                                        stop-color="rgba(128,214,248,0.5)" offset="1">
                                                                    </stop>
                                                                    <stop id="SvgjsStop14795" stop-opacity="0.5"
                                                                        stop-color="rgba(128,214,248,0.5)" offset="1">
                                                                    </stop>
                                                                </linearGradient>
                                                            </defs>
                                                            <line id="SvgjsLine14784" x1="0" y1="0"
                                                                x2="0" y2="50" stroke="#b6b6b6"
                                                                stroke-dasharray="3" class="apexcharts-xcrosshairs"
                                                                x="0" y="0" width="1"
                                                                height="50" fill="#b1b9c4" filter="none"
                                                                fill-opacity="0.9" stroke-width="1"></line>
                                                            <g id="SvgjsG14798" class="apexcharts-xaxis"
                                                                transform="translate(0, 0)">
                                                                <g id="SvgjsG14799" class="apexcharts-xaxis-texts-g"
                                                                    transform="translate(0, -4)"></g>
                                                            </g>
                                                            <g id="SvgjsG14802" class="apexcharts-grid">
                                                                <line id="SvgjsLine14804" x1="0" y1="50"
                                                                    x2="160" y2="50" stroke="transparent"
                                                                    stroke-dasharray="0"></line>
                                                                <line id="SvgjsLine14803" x1="0" y1="1"
                                                                    x2="0" y2="50" stroke="transparent"
                                                                    stroke-dasharray="0"></line>
                                                            </g>
                                                            <g id="SvgjsG14788"
                                                                class="apexcharts-area-series apexcharts-plot-series">
                                                                <g id="SvgjsG14789" class="apexcharts-series seriesx1"
                                                                    data:longestSeries="true" rel="1"
                                                                    data:realIndex="0">
                                                                    <path id="apexcharts-area-0"
                                                                        d="M 0 50L 0 30.35160289555326L 6.9565217391304355 16.39089968976215L 13.913043478260871 40.17580144777663L 20.869565217391305 37.59048603929679L 27.826086956521742 17.942088934850055L 34.78260869565218 28.80041365046536L 41.73913043478261 31.90279214064116L 48.69565217391305 1.9131334022750792L 55.652173913043484 26.215098241985523L 62.60869565217392 36.039296794208894L 69.56521739130436 27.766287487073424L 76.5217391304348 29.834539813857294L 83.47826086956522 25.698035160289557L 90.43478260869566 18.45915201654602L 97.3913043478261 30.868665977249226L 104.34782608695653 33.97104446742503L 111.30434782608697 22.07859358841779L 118.2608695652174 22.07859358841779L 125.21739130434784 22.595656670113755L 132.17391304347828 23.62978283350569L 139.13043478260872 21.044467425025857L 146.08695652173915 36.039296794208894L 153.0434782608696 26.732161323681492L 160 31.90279214064116L 160 50M 160 31.90279214064116z"
                                                                        fill="url(#SvgjsLinearGradient14792)"
                                                                        fill-opacity="1" stroke-opacity="1"
                                                                        stroke-linecap="butt" stroke-width="0"
                                                                        stroke-dasharray="0" class="apexcharts-area"
                                                                        index="0"
                                                                        clip-path="url(#gridRectMaskkh71jzcx)"
                                                                        pathTo="M 0 50L 0 30.35160289555326L 6.9565217391304355 16.39089968976215L 13.913043478260871 40.17580144777663L 20.869565217391305 37.59048603929679L 27.826086956521742 17.942088934850055L 34.78260869565218 28.80041365046536L 41.73913043478261 31.90279214064116L 48.69565217391305 1.9131334022750792L 55.652173913043484 26.215098241985523L 62.60869565217392 36.039296794208894L 69.56521739130436 27.766287487073424L 76.5217391304348 29.834539813857294L 83.47826086956522 25.698035160289557L 90.43478260869566 18.45915201654602L 97.3913043478261 30.868665977249226L 104.34782608695653 33.97104446742503L 111.30434782608697 22.07859358841779L 118.2608695652174 22.07859358841779L 125.21739130434784 22.595656670113755L 132.17391304347828 23.62978283350569L 139.13043478260872 21.044467425025857L 146.08695652173915 36.039296794208894L 153.0434782608696 26.732161323681492L 160 31.90279214064116L 160 50M 160 31.90279214064116z"
                                                                        pathFrom="M -1 50L -1 50L 6.9565217391304355 50L 13.913043478260871 50L 20.869565217391305 50L 27.826086956521742 50L 34.78260869565218 50L 41.73913043478261 50L 48.69565217391305 50L 55.652173913043484 50L 62.60869565217392 50L 69.56521739130436 50L 76.5217391304348 50L 83.47826086956522 50L 90.43478260869566 50L 97.3913043478261 50L 104.34782608695653 50L 111.30434782608697 50L 118.2608695652174 50L 125.21739130434784 50L 132.17391304347828 50L 139.13043478260872 50L 146.08695652173915 50L 153.0434782608696 50L 160 50">
                                                                    </path>
                                                                    <path id="apexcharts-area-0"
                                                                        d="M 0 30.35160289555326L 6.9565217391304355 16.39089968976215L 13.913043478260871 40.17580144777663L 20.869565217391305 37.59048603929679L 27.826086956521742 17.942088934850055L 34.78260869565218 28.80041365046536L 41.73913043478261 31.90279214064116L 48.69565217391305 1.9131334022750792L 55.652173913043484 26.215098241985523L 62.60869565217392 36.039296794208894L 69.56521739130436 27.766287487073424L 76.5217391304348 29.834539813857294L 83.47826086956522 25.698035160289557L 90.43478260869566 18.45915201654602L 97.3913043478261 30.868665977249226L 104.34782608695653 33.97104446742503L 111.30434782608697 22.07859358841779L 118.2608695652174 22.07859358841779L 125.21739130434784 22.595656670113755L 132.17391304347828 23.62978283350569L 139.13043478260872 21.044467425025857L 146.08695652173915 36.039296794208894L 153.0434782608696 26.732161323681492L 160 31.90279214064116"
                                                                        fill="none" fill-opacity="1" stroke="#00acf0"
                                                                        stroke-opacity="1" stroke-linecap="butt"
                                                                        stroke-width="3" stroke-dasharray="0"
                                                                        class="apexcharts-area" index="0"
                                                                        clip-path="url(#gridRectMaskkh71jzcx)"
                                                                        pathTo="M 0 30.35160289555326L 6.9565217391304355 16.39089968976215L 13.913043478260871 40.17580144777663L 20.869565217391305 37.59048603929679L 27.826086956521742 17.942088934850055L 34.78260869565218 28.80041365046536L 41.73913043478261 31.90279214064116L 48.69565217391305 1.9131334022750792L 55.652173913043484 26.215098241985523L 62.60869565217392 36.039296794208894L 69.56521739130436 27.766287487073424L 76.5217391304348 29.834539813857294L 83.47826086956522 25.698035160289557L 90.43478260869566 18.45915201654602L 97.3913043478261 30.868665977249226L 104.34782608695653 33.97104446742503L 111.30434782608697 22.07859358841779L 118.2608695652174 22.07859358841779L 125.21739130434784 22.595656670113755L 132.17391304347828 23.62978283350569L 139.13043478260872 21.044467425025857L 146.08695652173915 36.039296794208894L 153.0434782608696 26.732161323681492L 160 31.90279214064116"
                                                                        pathFrom="M -1 50L -1 50L 6.9565217391304355 50L 13.913043478260871 50L 20.869565217391305 50L 27.826086956521742 50L 34.78260869565218 50L 41.73913043478261 50L 48.69565217391305 50L 55.652173913043484 50L 62.60869565217392 50L 69.56521739130436 50L 76.5217391304348 50L 83.47826086956522 50L 90.43478260869566 50L 97.3913043478261 50L 104.34782608695653 50L 111.30434782608697 50L 118.2608695652174 50L 125.21739130434784 50L 132.17391304347828 50L 139.13043478260872 50L 146.08695652173915 50L 153.0434782608696 50L 160 50">
                                                                    </path>
                                                                    <g id="SvgjsG14790"
                                                                        class="apexcharts-series-markers-wrap">
                                                                        <g class="apexcharts-series-markers">
                                                                            <circle id="SvgjsCircle14810" r="0"
                                                                                cx="0" cy="0"
                                                                                class="apexcharts-marker wi20n51ihf no-pointer-events"
                                                                                stroke="#ffffff" fill="#00acf0"
                                                                                fill-opacity="1" stroke-width="2"
                                                                                stroke-opacity="0.9"
                                                                                default-marker-size="0"></circle>
                                                                        </g>
                                                                    </g>
                                                                    <g id="SvgjsG14791" class="apexcharts-datalabels">
                                                                    </g>
                                                                </g>
                                                            </g>
                                                            <line id="SvgjsLine14805" x1="0" y1="0"
                                                                x2="160" y2="0" stroke="#b6b6b6"
                                                                stroke-dasharray="0" stroke-width="1"
                                                                class="apexcharts-ycrosshairs"></line>
                                                            <line id="SvgjsLine14806" x1="0" y1="0"
                                                                x2="160" y2="0" stroke-dasharray="0"
                                                                stroke-width="0" class="apexcharts-ycrosshairs-hidden">
                                                            </line>
                                                            <g id="SvgjsG14807" class="apexcharts-yaxis-annotations">
                                                            </g>
                                                            <g id="SvgjsG14808" class="apexcharts-xaxis-annotations">
                                                            </g>
                                                            <g id="SvgjsG14809" class="apexcharts-point-annotations">
                                                            </g>
                                                        </g>
                                                        <rect id="SvgjsRect14783" width="0" height="0"
                                                            x="0" y="0" rx="0" ry="0"
                                                            fill="#fefefe" opacity="1" stroke-width="0"
                                                            stroke="none" stroke-dasharray="0">
                                                        </rect>
                                                        <g id="SvgjsG14800" class="apexcharts-yaxis" rel="0"
                                                            transform="translate(-21, 0)">
                                                            <g id="SvgjsG14801" class="apexcharts-yaxis-texts-g"></g>
                                                        </g>
                                                    </svg>
                                                    <div class="apexcharts-legend"></div>
                                                    <div class="apexcharts-tooltip light">
                                                        <div class="apexcharts-tooltip-title"
                                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                        </div>
                                                        <div class="apexcharts-tooltip-series-group"><span
                                                                class="apexcharts-tooltip-marker"
                                                                style="background-color: rgb(0, 172, 240);"></span>
                                                            <div class="apexcharts-tooltip-text"
                                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                <div class="apexcharts-tooltip-y-group"><span
                                                                        class="apexcharts-tooltip-text-label"></span><span
                                                                        class="apexcharts-tooltip-text-value"></span>
                                                                </div>
                                                                <div class="apexcharts-tooltip-z-group"><span
                                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                                        class="apexcharts-tooltip-text-z-value"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="resize-triggers">
                                                <div class="expand-trigger">
                                                    <div style="width: 201px; height: 0px;"></div>
                                                </div>
                                                <div class="contract-trigger"></div>
                                            </div>
                                        </td>
                                        <td><span class="text-danger"><i class="ion ion-md-arrow-down"
                                                    aria-hidden="true"></i> 7,181</span> </td>
                                        <td><span class="text-danger"><i class="ion ion-md-arrow-down"
                                                    aria-hidden="true"></i> 9,202</span> </td>
                                        <td><span class="text-success"><i class="ion ion-md-arrow-up"
                                                    aria-hidden="true"></i> 1,222</span> </td>
                                        <td><span class="text-danger"><i class="ion ion-md-arrow-down"
                                                    aria-hidden="true"></i> 3,242</span> </td>
                                        <td>5,262</td>
                                    </tr>
                                    <tr>
                                        <td>Diabetes</td>
                                        <td class="w-200p" style="position: relative;">
                                            <div id="sparkline_6" style="min-height: 50px;">
                                                <div id="apexcharts7ajd95nw" class="apexcharts-canvas apexcharts7ajd95nw"
                                                    style="width: 160px; height: 50px;"><svg id="SvgjsSvg14814"
                                                        width="160" height="50" xmlns="http://www.w3.org/2000/svg"
                                                        version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                                        xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                        style="background: transparent;">
                                                        <g id="SvgjsG14816" class="apexcharts-inner apexcharts-graphical"
                                                            transform="translate(0, 0)">
                                                            <defs id="SvgjsDefs14815">
                                                                <clipPath id="gridRectMask7ajd95nw">
                                                                    <rect id="SvgjsRect14820" width="163"
                                                                        height="53" x="-1.5" y="-1.5"
                                                                        rx="0" ry="0" fill="#ffffff"
                                                                        opacity="1" stroke-width="0" stroke="none"
                                                                        stroke-dasharray="0"></rect>
                                                                </clipPath>
                                                                <clipPath id="gridRectMarkerMask7ajd95nw">
                                                                    <rect id="SvgjsRect14821" width="174"
                                                                        height="64" x="-7" y="-7"
                                                                        rx="0" ry="0" fill="#ffffff"
                                                                        opacity="1" stroke-width="0" stroke="none"
                                                                        stroke-dasharray="0"></rect>
                                                                </clipPath>
                                                                <linearGradient id="SvgjsLinearGradient14827"
                                                                    x1="0" y1="0" x2="0"
                                                                    y2="1">
                                                                    <stop id="SvgjsStop14828" stop-opacity="0.65"
                                                                        stop-color="rgba(0,172,240,0.65)" offset="0">
                                                                    </stop>
                                                                    <stop id="SvgjsStop14829" stop-opacity="0.5"
                                                                        stop-color="rgba(128,214,248,0.5)" offset="1">
                                                                    </stop>
                                                                    <stop id="SvgjsStop14830" stop-opacity="0.5"
                                                                        stop-color="rgba(128,214,248,0.5)" offset="1">
                                                                    </stop>
                                                                </linearGradient>
                                                            </defs>
                                                            <line id="SvgjsLine14819" x1="0" y1="0"
                                                                x2="0" y2="50" stroke="#b6b6b6"
                                                                stroke-dasharray="3" class="apexcharts-xcrosshairs"
                                                                x="0" y="0" width="1"
                                                                height="50" fill="#b1b9c4" filter="none"
                                                                fill-opacity="0.9" stroke-width="1"></line>
                                                            <g id="SvgjsG14833" class="apexcharts-xaxis"
                                                                transform="translate(0, 0)">
                                                                <g id="SvgjsG14834" class="apexcharts-xaxis-texts-g"
                                                                    transform="translate(0, -4)"></g>
                                                            </g>
                                                            <g id="SvgjsG14837" class="apexcharts-grid">
                                                                <line id="SvgjsLine14839" x1="0" y1="50"
                                                                    x2="160" y2="50" stroke="transparent"
                                                                    stroke-dasharray="0"></line>
                                                                <line id="SvgjsLine14838" x1="0" y1="1"
                                                                    x2="0" y2="50" stroke="transparent"
                                                                    stroke-dasharray="0"></line>
                                                            </g>
                                                            <g id="SvgjsG14823"
                                                                class="apexcharts-area-series apexcharts-plot-series">
                                                                <g id="SvgjsG14824" class="apexcharts-series seriesx1"
                                                                    data:longestSeries="true" rel="1"
                                                                    data:realIndex="0">
                                                                    <path id="apexcharts-area-0"
                                                                        d="M 0 50L 0 27.766287487073424L 6.9565217391304355 23.62978283350569L 13.913043478260871 25.698035160289557L 20.869565217391305 33.97104446742503L 27.826086956521742 21.044467425025857L 34.78260869565218 31.90279214064116L 41.73913043478261 30.35160289555326L 48.69565217391305 16.39089968976215L 55.652173913043484 36.039296794208894L 62.60869565217392 18.45915201654602L 69.56521739130436 1.9131334022750792L 76.5217391304348 26.215098241985523L 83.47826086956522 22.07859358841779L 90.43478260869566 26.732161323681492L 97.3913043478261 17.942088934850055L 104.34782608695653 22.595656670113755L 111.30434782608697 29.834539813857294L 118.2608695652174 37.59048603929679L 125.21739130434784 30.868665977249226L 132.17391304347828 31.90279214064116L 139.13043478260872 28.80041365046536L 146.08695652173915 22.07859358841779L 153.0434782608696 36.039296794208894L 160 40.17580144777663L 160 50M 160 40.17580144777663z"
                                                                        fill="url(#SvgjsLinearGradient14827)"
                                                                        fill-opacity="1" stroke-opacity="1"
                                                                        stroke-linecap="butt" stroke-width="0"
                                                                        stroke-dasharray="0" class="apexcharts-area"
                                                                        index="0"
                                                                        clip-path="url(#gridRectMask7ajd95nw)"
                                                                        pathTo="M 0 50L 0 27.766287487073424L 6.9565217391304355 23.62978283350569L 13.913043478260871 25.698035160289557L 20.869565217391305 33.97104446742503L 27.826086956521742 21.044467425025857L 34.78260869565218 31.90279214064116L 41.73913043478261 30.35160289555326L 48.69565217391305 16.39089968976215L 55.652173913043484 36.039296794208894L 62.60869565217392 18.45915201654602L 69.56521739130436 1.9131334022750792L 76.5217391304348 26.215098241985523L 83.47826086956522 22.07859358841779L 90.43478260869566 26.732161323681492L 97.3913043478261 17.942088934850055L 104.34782608695653 22.595656670113755L 111.30434782608697 29.834539813857294L 118.2608695652174 37.59048603929679L 125.21739130434784 30.868665977249226L 132.17391304347828 31.90279214064116L 139.13043478260872 28.80041365046536L 146.08695652173915 22.07859358841779L 153.0434782608696 36.039296794208894L 160 40.17580144777663L 160 50M 160 40.17580144777663z"
                                                                        pathFrom="M -1 50L -1 50L 6.9565217391304355 50L 13.913043478260871 50L 20.869565217391305 50L 27.826086956521742 50L 34.78260869565218 50L 41.73913043478261 50L 48.69565217391305 50L 55.652173913043484 50L 62.60869565217392 50L 69.56521739130436 50L 76.5217391304348 50L 83.47826086956522 50L 90.43478260869566 50L 97.3913043478261 50L 104.34782608695653 50L 111.30434782608697 50L 118.2608695652174 50L 125.21739130434784 50L 132.17391304347828 50L 139.13043478260872 50L 146.08695652173915 50L 153.0434782608696 50L 160 50">
                                                                    </path>
                                                                    <path id="apexcharts-area-0"
                                                                        d="M 0 27.766287487073424L 6.9565217391304355 23.62978283350569L 13.913043478260871 25.698035160289557L 20.869565217391305 33.97104446742503L 27.826086956521742 21.044467425025857L 34.78260869565218 31.90279214064116L 41.73913043478261 30.35160289555326L 48.69565217391305 16.39089968976215L 55.652173913043484 36.039296794208894L 62.60869565217392 18.45915201654602L 69.56521739130436 1.9131334022750792L 76.5217391304348 26.215098241985523L 83.47826086956522 22.07859358841779L 90.43478260869566 26.732161323681492L 97.3913043478261 17.942088934850055L 104.34782608695653 22.595656670113755L 111.30434782608697 29.834539813857294L 118.2608695652174 37.59048603929679L 125.21739130434784 30.868665977249226L 132.17391304347828 31.90279214064116L 139.13043478260872 28.80041365046536L 146.08695652173915 22.07859358841779L 153.0434782608696 36.039296794208894L 160 40.17580144777663"
                                                                        fill="none" fill-opacity="1" stroke="#00acf0"
                                                                        stroke-opacity="1" stroke-linecap="butt"
                                                                        stroke-width="3" stroke-dasharray="0"
                                                                        class="apexcharts-area" index="0"
                                                                        clip-path="url(#gridRectMask7ajd95nw)"
                                                                        pathTo="M 0 27.766287487073424L 6.9565217391304355 23.62978283350569L 13.913043478260871 25.698035160289557L 20.869565217391305 33.97104446742503L 27.826086956521742 21.044467425025857L 34.78260869565218 31.90279214064116L 41.73913043478261 30.35160289555326L 48.69565217391305 16.39089968976215L 55.652173913043484 36.039296794208894L 62.60869565217392 18.45915201654602L 69.56521739130436 1.9131334022750792L 76.5217391304348 26.215098241985523L 83.47826086956522 22.07859358841779L 90.43478260869566 26.732161323681492L 97.3913043478261 17.942088934850055L 104.34782608695653 22.595656670113755L 111.30434782608697 29.834539813857294L 118.2608695652174 37.59048603929679L 125.21739130434784 30.868665977249226L 132.17391304347828 31.90279214064116L 139.13043478260872 28.80041365046536L 146.08695652173915 22.07859358841779L 153.0434782608696 36.039296794208894L 160 40.17580144777663"
                                                                        pathFrom="M -1 50L -1 50L 6.9565217391304355 50L 13.913043478260871 50L 20.869565217391305 50L 27.826086956521742 50L 34.78260869565218 50L 41.73913043478261 50L 48.69565217391305 50L 55.652173913043484 50L 62.60869565217392 50L 69.56521739130436 50L 76.5217391304348 50L 83.47826086956522 50L 90.43478260869566 50L 97.3913043478261 50L 104.34782608695653 50L 111.30434782608697 50L 118.2608695652174 50L 125.21739130434784 50L 132.17391304347828 50L 139.13043478260872 50L 146.08695652173915 50L 153.0434782608696 50L 160 50">
                                                                    </path>
                                                                    <g id="SvgjsG14825"
                                                                        class="apexcharts-series-markers-wrap">
                                                                        <g class="apexcharts-series-markers">
                                                                            <circle id="SvgjsCircle14845" r="0"
                                                                                cx="0" cy="0"
                                                                                class="apexcharts-marker wxp9tie9b no-pointer-events"
                                                                                stroke="#ffffff" fill="#00acf0"
                                                                                fill-opacity="1" stroke-width="2"
                                                                                stroke-opacity="0.9"
                                                                                default-marker-size="0"></circle>
                                                                        </g>
                                                                    </g>
                                                                    <g id="SvgjsG14826" class="apexcharts-datalabels">
                                                                    </g>
                                                                </g>
                                                            </g>
                                                            <line id="SvgjsLine14840" x1="0" y1="0"
                                                                x2="160" y2="0" stroke="#b6b6b6"
                                                                stroke-dasharray="0" stroke-width="1"
                                                                class="apexcharts-ycrosshairs"></line>
                                                            <line id="SvgjsLine14841" x1="0" y1="0"
                                                                x2="160" y2="0" stroke-dasharray="0"
                                                                stroke-width="0" class="apexcharts-ycrosshairs-hidden">
                                                            </line>
                                                            <g id="SvgjsG14842" class="apexcharts-yaxis-annotations">
                                                            </g>
                                                            <g id="SvgjsG14843" class="apexcharts-xaxis-annotations">
                                                            </g>
                                                            <g id="SvgjsG14844" class="apexcharts-point-annotations">
                                                            </g>
                                                        </g>
                                                        <rect id="SvgjsRect14818" width="0" height="0"
                                                            x="0" y="0" rx="0" ry="0"
                                                            fill="#fefefe" opacity="1" stroke-width="0"
                                                            stroke="none" stroke-dasharray="0">
                                                        </rect>
                                                        <g id="SvgjsG14835" class="apexcharts-yaxis" rel="0"
                                                            transform="translate(-21, 0)">
                                                            <g id="SvgjsG14836" class="apexcharts-yaxis-texts-g"></g>
                                                        </g>
                                                    </svg>
                                                    <div class="apexcharts-legend"></div>
                                                    <div class="apexcharts-tooltip light">
                                                        <div class="apexcharts-tooltip-title"
                                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                        </div>
                                                        <div class="apexcharts-tooltip-series-group"><span
                                                                class="apexcharts-tooltip-marker"
                                                                style="background-color: rgb(0, 172, 240);"></span>
                                                            <div class="apexcharts-tooltip-text"
                                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                <div class="apexcharts-tooltip-y-group"><span
                                                                        class="apexcharts-tooltip-text-label"></span><span
                                                                        class="apexcharts-tooltip-text-value"></span>
                                                                </div>
                                                                <div class="apexcharts-tooltip-z-group"><span
                                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                                        class="apexcharts-tooltip-text-z-value"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="resize-triggers">
                                                <div class="expand-trigger">
                                                    <div style="width: 201px; height: 0px;"></div>
                                                </div>
                                                <div class="contract-trigger"></div>
                                            </div>
                                        </td>
                                        <td><span class="text-success"><i class="ion ion-md-arrow-up"
                                                    aria-hidden="true"></i> 9,303</span> </td>
                                        <td><span class="text-danger"><i class="ion ion-md-arrow-down"
                                                    aria-hidden="true"></i> 1,323</span> </td>
                                        <td><span class="text-success"><i class="ion ion-md-arrow-up"
                                                    aria-hidden="true"></i> 3,343</span> </td>
                                        <td><span class="text-danger"><i class="ion ion-md-arrow-down"
                                                    aria-hidden="true"></i> 5,363</span> </td>
                                        <td>9,404</td>
                                    </tr>
                                    <tr>

                                        <td>Stroke</td>
                                        <td class="w-200p" style="position: relative;">
                                            <div id="sparkline_7" style="min-height: 50px;">
                                                <div id="apexchartsvusd3259" class="apexcharts-canvas apexchartsvusd3259"
                                                    style="width: 160px; height: 50px;"><svg id="SvgjsSvg14849"
                                                        width="160" height="50" xmlns="http://www.w3.org/2000/svg"
                                                        version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                                        xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                        style="background: transparent;">
                                                        <g id="SvgjsG14851" class="apexcharts-inner apexcharts-graphical"
                                                            transform="translate(0, 0)">
                                                            <defs id="SvgjsDefs14850">
                                                                <clipPath id="gridRectMaskvusd3259">
                                                                    <rect id="SvgjsRect14855" width="163"
                                                                        height="53" x="-1.5" y="-1.5"
                                                                        rx="0" ry="0" fill="#ffffff"
                                                                        opacity="1" stroke-width="0" stroke="none"
                                                                        stroke-dasharray="0"></rect>
                                                                </clipPath>
                                                                <clipPath id="gridRectMarkerMaskvusd3259">
                                                                    <rect id="SvgjsRect14856" width="174"
                                                                        height="64" x="-7" y="-7"
                                                                        rx="0" ry="0" fill="#ffffff"
                                                                        opacity="1" stroke-width="0" stroke="none"
                                                                        stroke-dasharray="0"></rect>
                                                                </clipPath>
                                                                <linearGradient id="SvgjsLinearGradient14862"
                                                                    x1="0" y1="0" x2="0"
                                                                    y2="1">
                                                                    <stop id="SvgjsStop14863" stop-opacity="0.65"
                                                                        stop-color="rgba(0,172,240,0.65)" offset="0">
                                                                    </stop>
                                                                    <stop id="SvgjsStop14864" stop-opacity="0.5"
                                                                        stop-color="rgba(128,214,248,0.5)" offset="1">
                                                                    </stop>
                                                                    <stop id="SvgjsStop14865" stop-opacity="0.5"
                                                                        stop-color="rgba(128,214,248,0.5)" offset="1">
                                                                    </stop>
                                                                </linearGradient>
                                                            </defs>
                                                            <line id="SvgjsLine14854" x1="0" y1="0"
                                                                x2="0" y2="50" stroke="#b6b6b6"
                                                                stroke-dasharray="3" class="apexcharts-xcrosshairs"
                                                                x="0" y="0" width="1"
                                                                height="50" fill="#b1b9c4" filter="none"
                                                                fill-opacity="0.9" stroke-width="1"></line>
                                                            <g id="SvgjsG14868" class="apexcharts-xaxis"
                                                                transform="translate(0, 0)">
                                                                <g id="SvgjsG14869" class="apexcharts-xaxis-texts-g"
                                                                    transform="translate(0, -4)"></g>
                                                            </g>
                                                            <g id="SvgjsG14872" class="apexcharts-grid">
                                                                <line id="SvgjsLine14874" x1="0" y1="50"
                                                                    x2="160" y2="50" stroke="transparent"
                                                                    stroke-dasharray="0"></line>
                                                                <line id="SvgjsLine14873" x1="0" y1="1"
                                                                    x2="0" y2="50" stroke="transparent"
                                                                    stroke-dasharray="0"></line>
                                                            </g>
                                                            <g id="SvgjsG14858"
                                                                class="apexcharts-area-series apexcharts-plot-series">
                                                                <g id="SvgjsG14859" class="apexcharts-series seriesx1"
                                                                    data:longestSeries="true" rel="1"
                                                                    data:realIndex="0">
                                                                    <path id="apexcharts-area-0"
                                                                        d="M 0 50L 0 28.80041365046536L 6.9565217391304355 1.9131334022750792L 13.913043478260871 26.732161323681492L 20.869565217391305 18.45915201654602L 27.826086956521742 29.834539813857294L 34.78260869565218 25.698035160289557L 41.73913043478261 30.35160289555326L 48.69565217391305 21.044467425025857L 55.652173913043484 27.766287487073424L 62.60869565217392 26.215098241985523L 69.56521739130436 22.595656670113755L 76.5217391304348 22.07859358841779L 83.47826086956522 37.59048603929679L 90.43478260869566 17.942088934850055L 97.3913043478261 31.90279214064116L 104.34782608695653 40.17580144777663L 111.30434782608697 36.039296794208894L 118.2608695652174 31.90279214064116L 125.21739130434784 33.97104446742503L 132.17391304347828 30.868665977249226L 139.13043478260872 36.039296794208894L 146.08695652173915 23.62978283350569L 153.0434782608696 16.39089968976215L 160 22.07859358841779L 160 50M 160 22.07859358841779z"
                                                                        fill="url(#SvgjsLinearGradient14862)"
                                                                        fill-opacity="1" stroke-opacity="1"
                                                                        stroke-linecap="butt" stroke-width="0"
                                                                        stroke-dasharray="0" class="apexcharts-area"
                                                                        index="0"
                                                                        clip-path="url(#gridRectMaskvusd3259)"
                                                                        pathTo="M 0 50L 0 28.80041365046536L 6.9565217391304355 1.9131334022750792L 13.913043478260871 26.732161323681492L 20.869565217391305 18.45915201654602L 27.826086956521742 29.834539813857294L 34.78260869565218 25.698035160289557L 41.73913043478261 30.35160289555326L 48.69565217391305 21.044467425025857L 55.652173913043484 27.766287487073424L 62.60869565217392 26.215098241985523L 69.56521739130436 22.595656670113755L 76.5217391304348 22.07859358841779L 83.47826086956522 37.59048603929679L 90.43478260869566 17.942088934850055L 97.3913043478261 31.90279214064116L 104.34782608695653 40.17580144777663L 111.30434782608697 36.039296794208894L 118.2608695652174 31.90279214064116L 125.21739130434784 33.97104446742503L 132.17391304347828 30.868665977249226L 139.13043478260872 36.039296794208894L 146.08695652173915 23.62978283350569L 153.0434782608696 16.39089968976215L 160 22.07859358841779L 160 50M 160 22.07859358841779z"
                                                                        pathFrom="M -1 50L -1 50L 6.9565217391304355 50L 13.913043478260871 50L 20.869565217391305 50L 27.826086956521742 50L 34.78260869565218 50L 41.73913043478261 50L 48.69565217391305 50L 55.652173913043484 50L 62.60869565217392 50L 69.56521739130436 50L 76.5217391304348 50L 83.47826086956522 50L 90.43478260869566 50L 97.3913043478261 50L 104.34782608695653 50L 111.30434782608697 50L 118.2608695652174 50L 125.21739130434784 50L 132.17391304347828 50L 139.13043478260872 50L 146.08695652173915 50L 153.0434782608696 50L 160 50">
                                                                    </path>
                                                                    <path id="apexcharts-area-0"
                                                                        d="M 0 28.80041365046536L 6.9565217391304355 1.9131334022750792L 13.913043478260871 26.732161323681492L 20.869565217391305 18.45915201654602L 27.826086956521742 29.834539813857294L 34.78260869565218 25.698035160289557L 41.73913043478261 30.35160289555326L 48.69565217391305 21.044467425025857L 55.652173913043484 27.766287487073424L 62.60869565217392 26.215098241985523L 69.56521739130436 22.595656670113755L 76.5217391304348 22.07859358841779L 83.47826086956522 37.59048603929679L 90.43478260869566 17.942088934850055L 97.3913043478261 31.90279214064116L 104.34782608695653 40.17580144777663L 111.30434782608697 36.039296794208894L 118.2608695652174 31.90279214064116L 125.21739130434784 33.97104446742503L 132.17391304347828 30.868665977249226L 139.13043478260872 36.039296794208894L 146.08695652173915 23.62978283350569L 153.0434782608696 16.39089968976215L 160 22.07859358841779"
                                                                        fill="none" fill-opacity="1" stroke="#00acf0"
                                                                        stroke-opacity="1" stroke-linecap="butt"
                                                                        stroke-width="3" stroke-dasharray="0"
                                                                        class="apexcharts-area" index="0"
                                                                        clip-path="url(#gridRectMaskvusd3259)"
                                                                        pathTo="M 0 28.80041365046536L 6.9565217391304355 1.9131334022750792L 13.913043478260871 26.732161323681492L 20.869565217391305 18.45915201654602L 27.826086956521742 29.834539813857294L 34.78260869565218 25.698035160289557L 41.73913043478261 30.35160289555326L 48.69565217391305 21.044467425025857L 55.652173913043484 27.766287487073424L 62.60869565217392 26.215098241985523L 69.56521739130436 22.595656670113755L 76.5217391304348 22.07859358841779L 83.47826086956522 37.59048603929679L 90.43478260869566 17.942088934850055L 97.3913043478261 31.90279214064116L 104.34782608695653 40.17580144777663L 111.30434782608697 36.039296794208894L 118.2608695652174 31.90279214064116L 125.21739130434784 33.97104446742503L 132.17391304347828 30.868665977249226L 139.13043478260872 36.039296794208894L 146.08695652173915 23.62978283350569L 153.0434782608696 16.39089968976215L 160 22.07859358841779"
                                                                        pathFrom="M -1 50L -1 50L 6.9565217391304355 50L 13.913043478260871 50L 20.869565217391305 50L 27.826086956521742 50L 34.78260869565218 50L 41.73913043478261 50L 48.69565217391305 50L 55.652173913043484 50L 62.60869565217392 50L 69.56521739130436 50L 76.5217391304348 50L 83.47826086956522 50L 90.43478260869566 50L 97.3913043478261 50L 104.34782608695653 50L 111.30434782608697 50L 118.2608695652174 50L 125.21739130434784 50L 132.17391304347828 50L 139.13043478260872 50L 146.08695652173915 50L 153.0434782608696 50L 160 50">
                                                                    </path>
                                                                    <g id="SvgjsG14860"
                                                                        class="apexcharts-series-markers-wrap">
                                                                        <g class="apexcharts-series-markers">
                                                                            <circle id="SvgjsCircle14880" r="0"
                                                                                cx="0" cy="0"
                                                                                class="apexcharts-marker w2mbqt1sa no-pointer-events"
                                                                                stroke="#ffffff" fill="#00acf0"
                                                                                fill-opacity="1" stroke-width="2"
                                                                                stroke-opacity="0.9"
                                                                                default-marker-size="0"></circle>
                                                                        </g>
                                                                    </g>
                                                                    <g id="SvgjsG14861" class="apexcharts-datalabels">
                                                                    </g>
                                                                </g>
                                                            </g>
                                                            <line id="SvgjsLine14875" x1="0" y1="0"
                                                                x2="160" y2="0" stroke="#b6b6b6"
                                                                stroke-dasharray="0" stroke-width="1"
                                                                class="apexcharts-ycrosshairs"></line>
                                                            <line id="SvgjsLine14876" x1="0" y1="0"
                                                                x2="160" y2="0" stroke-dasharray="0"
                                                                stroke-width="0" class="apexcharts-ycrosshairs-hidden">
                                                            </line>
                                                            <g id="SvgjsG14877" class="apexcharts-yaxis-annotations">
                                                            </g>
                                                            <g id="SvgjsG14878" class="apexcharts-xaxis-annotations">
                                                            </g>
                                                            <g id="SvgjsG14879" class="apexcharts-point-annotations">
                                                            </g>
                                                        </g>
                                                        <rect id="SvgjsRect14853" width="0" height="0"
                                                            x="0" y="0" rx="0" ry="0"
                                                            fill="#fefefe" opacity="1" stroke-width="0"
                                                            stroke="none" stroke-dasharray="0">
                                                        </rect>
                                                        <g id="SvgjsG14870" class="apexcharts-yaxis" rel="0"
                                                            transform="translate(-21, 0)">
                                                            <g id="SvgjsG14871" class="apexcharts-yaxis-texts-g"></g>
                                                        </g>
                                                    </svg>
                                                    <div class="apexcharts-legend"></div>
                                                    <div class="apexcharts-tooltip light">
                                                        <div class="apexcharts-tooltip-title"
                                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                        </div>
                                                        <div class="apexcharts-tooltip-series-group"><span
                                                                class="apexcharts-tooltip-marker"
                                                                style="background-color: rgb(0, 172, 240);"></span>
                                                            <div class="apexcharts-tooltip-text"
                                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                <div class="apexcharts-tooltip-y-group"><span
                                                                        class="apexcharts-tooltip-text-label"></span><span
                                                                        class="apexcharts-tooltip-text-value"></span>
                                                                </div>
                                                                <div class="apexcharts-tooltip-z-group"><span
                                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                                        class="apexcharts-tooltip-text-z-value"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="resize-triggers">
                                                <div class="expand-trigger">
                                                    <div style="width: 201px; height: 0px;"></div>
                                                </div>
                                                <div class="contract-trigger"></div>
                                            </div>
                                        </td>
                                        <td><span class="text-success"><i class="ion ion-md-arrow-up"
                                                    aria-hidden="true"></i> 1,424</span> </td>
                                        <td><span class="text-danger"><i class="ion ion-md-arrow-down"
                                                    aria-hidden="true"></i> 3,444</span> </td>
                                        <td><span class="text-success"><i class="ion ion-md-arrow-up"
                                                    aria-hidden="true"></i> 5,464</span> </td>
                                        <td><span class="text-danger"><i class="ion ion-md-arrow-down"
                                                    aria-hidden="true"></i> 7,484</span> </td>
                                        <td>1,525</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
