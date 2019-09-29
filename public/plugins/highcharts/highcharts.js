// column charts
function renderCharts(categories,data){
    Highcharts.setOptions({
        lang: {
            decimalPoint: '.',
            thousandsSep: ',',
            numericSymbols: ["K", "M", "G", "T", "P", "E"],
        }
    });

    var w = window.innerWidth
    || document.documentElement.clientWidth
    || document.body.clientWidth;

    ChartsOption = {
        chart: {
            type: 'column',
            marginTop: 55,
            marginRight: 20,
            // marginBottom: 75,
            marginLeft: 40,
        },
        colors: [],
        credits: {
            enabled:false
        },
        title: {
            text: '',
            enabled: false
        },
        xAxis: {
            className: 'chart-axis',
        
            title: {
                // text: '',
                style: {
                    fontSize: '1.55em',
                    fontFamily: '"DB Helvethaica Medium", sans-serif',
                    fontWeight: '400',
                    color: '#758EAC',
                },
                align: 'high',
                offset: -15,
                rotation: 0,
                x: 18
            },
            categories: categories,
            labels:{
                style: {
                    fontSize: '1.55em',
                    fontFamily: '"DB Helvethaica Medium", sans-serif',
                    fontWeight: '400',
                    color: '#758EAC',
                }
            }
        },
        yAxis: {
            className: 'chart-axis',
            title: {
                // text: '',
                style: {
                    fontSize: '1.55em',
                    fontFamily: 'DB Helvethaica Medium", sans-serif',
                    fontWeight: '400',
                },
                align: 'high',
                offset: -100, // title and rim
                rotation: 0,
                y: -25 // distance between title y and graph
            },
            type: 'logarithmic',
            labels:{
                // step: 2,
                style: {
                    fontSize: '1.55em',
                    fontFamily: 'DB Helvethaica Medium", sans-serif',
                    fontWeight: '400'
                },
                // formatter: function () {
                //     return this.axis.defaultLabelFormatter.call(this);
                // } 

                // format: '{value:,.0f} ',
            }
        },
        plotOptions: {
            column: {
                dataLabels: {
                    enabled: false,
                    verticalAlign:'top',
                    style:{
                        color: '#5482B8',
                        fontSize:'1rem'
                    },
                    y:-25,
                    rotation:-70
                },
                maxPointWidth: 50
            },
        },
        legend: {
            // title:{
            //     text: '-',
            //     style: {
            //         color: '#FFFFFF'
            //     },
            //     enabled: false
            // },
            // align: 'center',
            // verticalAlign: 'bottom',
            // shadow: false,
            symbolHeight: 13,
            symbolRadius: 0,
            symbolPadding: 10,
            // labelFormat: '{name}',
            itemStyle: {
                fontSize: '1.8rem',
                fontFamily: 'DB Helvethaica Medium',
                fontWeight: '400',
            },
            itemMarginTop: 5,
            padding: 0
            // y: 30,
            // x: 0 // move type 
        },
        tooltip: {
            headerFormat: '',
            pointFormat: '<b>{point.y}<br></b>',
            shared: true,
            style:{
                fontSize: '1.8rem',
                fontFamily: 'DB Helvethaica Normal',
                fontWeight: '400',
            },
            enabled: true,
        },
        series: data,
    }

    ChartsOptionMultiData = {
        chart: {
            type: 'column',
            marginTop: 55,
            marginRight: 40,
            marginLeft: 50,
        },
        colors: [],
        credits: {
            enabled:false
        },
        title: {
            text: '',
            enabled: false
        },
        xAxis: {
            className: 'chart-axis',
            title: {
                text: 'เดือน',
                style: {
                    fontSize: '1.55em',
                    fontFamily: '"DB Helvethaica Medium", sans-serif',
                    fontWeight: '400',
                    color: '#758EAC',
                },
                align: 'high',
                offset: -15,
                rotation: 0,
                x: 38
            },
            categories: categories,
            labels:{
                style: {
                    fontSize: '1.55em',
                    fontFamily: '"DB Helvethaica Medium", sans-serif',
                    fontWeight: '400',
                    color: '#758EAC',
                }
            }
        },
        yAxis: {
            className: 'chart-axis',
            title: {
                // text: '',
                style: {
                    fontSize: '1.55em',
                    fontFamily: 'DB Helvethaica Medium", sans-serif',
                    fontWeight: '400',
                },
                align: 'high',
                offset: -15, // title and rim
                rotation: 0,
                y: -25 // distance between title y and graph
            },
            type: 'logarithmic',
            labels:{
                style: {
                    fontSize: '1.55em',
                    fontFamily: 'DB Helvethaica Medium", sans-serif',
                    fontWeight: '400'
                },
            }
        },
        plotOptions: {
            column: {
                dataLabels: {
                    enabled: false,
                    verticalAlign:'top',
                    style:{
                        color: '#5482B8',
                        fontSize:'1rem'
                    },
                    y:-25,
                    rotation:-70
                },
                maxPointWidth: 40
            },
        },
        legend: {
            symbolHeight: 13,
            symbolRadius: 0,
            itemStyle: {
                fontSize: '1.8rem',
                fontFamily: '"DB Helvethaica Medium", sans-serif',
                fontWeight: '400',
            },
            itemMarginTop: 5,
            padding: 0
        },
        tooltip: {
            headerFormat: '',
            pointFormat: '<span style="color:{series.color}">{series.name} : </span><b>{point.y}</b><br>',
            shared: true,
            style:{
                fontSize: '1.8rem',
                fontFamily: 'DB Helvethaica Normal',
                fontWeight: '400',
            },
            enabled: true,
        },
        series: data,
    }
}

function revenueExportRenderCharts(categories,data){
    renderCharts(categories,data);
    var revenueExportBar = JSON.parse(JSON.stringify(ChartsOption));
    revenueExportBar.colors = ['#6FC1E1'];
    revenueExportBar.xAxis.title.text = 'ปี';
    revenueExportBar.yAxis.title.text = 'จำนวนเงิน (หน่วยล้านบาท)';
    
    Highcharts.chart('revenueExportBar', revenueExportBar);
}

function awardPeopleOfMonthRenderCharts(categories,data){
    renderCharts(categories,data);
    var awardPeopleOfMonthBar = JSON.parse(JSON.stringify(ChartsOption));
    awardPeopleOfMonthBar.chart.marginLeft = 45;
    awardPeopleOfMonthBar.chart.marginRight = 45;
    awardPeopleOfMonthBar.colors = ['#90B1D8'];
    awardPeopleOfMonthBar.xAxis.title.text = 'เดือน';
    awardPeopleOfMonthBar.xAxis.title.x = 43;
    awardPeopleOfMonthBar.yAxis.title.text = 'จำนวนผู้ตรวจผลรางวัล (ราย)';
    awardPeopleOfMonthBar.yAxis.title.offset = -113;
    
    Highcharts.chart('awardPeopleOfMonthBar', awardPeopleOfMonthBar);
}

function payAmountReportRenderCharts(categories,data){
    renderCharts(categories,data);
    var payAmountReportBar = JSON.parse(JSON.stringify(ChartsOptionMultiData));
    payAmountReportBar.colors = ['#6FC1E1','#9CC395','#EEBB5E'];
    payAmountReportBar.yAxis.title.text = 'จำนวน';

    Highcharts.chart('payAmountReportBar', payAmountReportBar);
}

function paySatisfyReporRenderCharts(categories,data){
    renderCharts(categories,data);
    var paySatisfyReportBar = JSON.parse(JSON.stringify(ChartsOptionMultiData));
    paySatisfyReportBar.colors = ['#6FC1E1','#9CC395','#EEBB5E','#FF9419','#FC8658','#FF5411'];
    paySatisfyReportBar.yAxis.title.text = 'ระดับความพึงพอใจ';
    paySatisfyReportBar.yAxis.title.offset = -55;
    paySatisfyReportBar.yAxis.type = '';
    paySatisfyReportBar.yAxis.labels = {
        formatter: function () {
            return this.axis.defaultLabelFormatter.call(this) + '%' ;
        }, 
        style: {
            fontSize: '1.55em',
            fontFamily: 'DB Helvethaica Medium", sans-serif',
            fontWeight: '400'
        },
    };
    paySatisfyReportBar.tooltip.pointFormat = '<span style="color:{series.color}">{series.name} : </span><b>{point.y}%</b><br></br>'

    Highcharts.chart('paySatisfyReportBar', paySatisfyReportBar);
}

function donateAnnualRanderCharts(categories,data){
    renderCharts(categories,data);
    var donateAnnualBar = JSON.parse(JSON.stringify(ChartsOption));
    donateAnnualBar.colors = ['#00AEEF'];
    donateAnnualBar.xAxis.title.text = 'ไตรมาส';
    donateAnnualBar.xAxis.title.x = 55;
    donateAnnualBar.yAxis.title.text = 'จำนวนเงิน';
    donateAnnualBar.yAxis.title.offset = -25;
    donateAnnualBar.legend.enabled = false;
    donateAnnualBar.chart.marginRight = 55;
    donateAnnualBar.chart.marginTop = 45;

    Highcharts.chart('donateAnnualBar', donateAnnualBar);
}

function donateAnnualStatRanderCharts(categories,data){
    renderCharts(categories,data);
    var donateAnnualStatBar = JSON.parse(JSON.stringify(ChartsOption));
    donateAnnualStatBar.colors = ['#00AEEF'];
    donateAnnualStatBar.xAxis.title.text = 'ปี';
    donateAnnualStatBar.xAxis.title.x = 20;
    donateAnnualStatBar.yAxis.title.text = 'จำนวนเงิน';
    donateAnnualStatBar.yAxis.title.offset = -30;
    donateAnnualStatBar.legend.enabled = false;
    donateAnnualStatBar.chart.marginLeft = 50;
    donateAnnualStatBar.chart.marginTop = 45;

    Highcharts.chart('donateAnnualStatBar', donateAnnualStatBar);
}

//pie charts
function renderPieCharts(data_pie){
    Highcharts.setOptions({
        lang: {
            decimalPoint: '.',
            thousandsSep: ',',
            numericSymbols: ["K", "M", "G", "T", "P", "E"],
        }
    });

    var w = window.innerWidth
    || document.documentElement.clientWidth
    || document.body.clientWidth;

    
    PieChartsOption = {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            backgroundColor: "rgba(255, 255, 255, 0)",
            type: 'pie'
        },
        title: {
            text: '',
            enabled : false
        },
        credits: {
            enabled : false
        },
        // legend: {
        //     symbolHeight: 13,
        //     symbolRadius: 0,
        //     itemStyle: {
        //         fontSize: '1.8rem',
        //         fontFamily: '"DB Helvethaica Medium", sans-serif',
        //         fontWeight: '400',
        //     },
        //     itemMarginTop: 5,
        //     padding: 0
        // },
        tooltip: {
            headerFormat: '',
            pointFormat: '<span style="color:{point.color}">{point.name} : </span><b>{point.percentage}%</b>',
            className: 'pie-label',
            style: {
                fontSize: '1.8em',
            }
            // enabled: false
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                colors: [],
                className: 'pie-label',
                padding: 0,
                dataLabels: {
                    enabled: true,
                    // format: '<b>{point.name}<br><span style="font-size:5rem;">{point.percentage}%</span></b>',
                    format: '<b>{point.name}</b><br><span style="font-size:3.5rem; color:{point.color};">{point.percentage:.1f} %</span>',
                    style: {
                        fontSize: '1.8em',
    
                    }
                }
            }
        },
        series: [{
            colorByPoint: true,
            data: data_pie
        }]
    }
}

function revenueRenderPieCharts(data_pie){
    renderPieCharts(data_pie);
    var revenuePie = JSON.parse(JSON.stringify(PieChartsOption));
    revenuePie.plotOptions.pie.colors = ['#6FC1E1','#78B5C2','#74B7A2'];
    Highcharts.chart('revenuePie',revenuePie);
}

function donateTypeStatRenderPieCharts(data_pie) {
    renderPieCharts(data_pie);
    var donateTypeStatPie = JSON.parse(JSON.stringify(PieChartsOption));
    donateTypeStatPie.plotOptions.pie.colors = ['#74B7A2','#FFDF9A','#64CDF6','#0873BA','#FFB88A','#B2C0D1'];
    donateTypeStatPie.tooltip.pointFormat = '<span style="color:{point.color}">{point.name} : </span><b>{point.percentage:.2f}%</b>';
    Highcharts.chart('donateTypeStatPie',donateTypeStatPie);
}

// bar charts
function purchaseSumRenderCharts(categories,data){
    Highcharts.setOptions({
        lang: {
            decimalPoint: '.',
            thousandsSep: ',',
            numericSymbols: ["K", "M", "G", "T", "P", "E"],
        }
    });

    var w = window.innerWidth
    || document.documentElement.clientWidth
    || document.body.clientWidth;

    Highcharts.chart('purchaseSumBar', {
        chart: {
            type: 'bar',
            height: 450,
            // marginLeft: 150,
            marginTop: 40,
            marginRight: 35,
        },
        colors: ['#6FC1E1','#9CC395','#EEBB5E'],
        credits: {
            enabled:false
        },
        title: {
            text: '',
            enabled: false
        },
        xAxis: {
            className: 'chart-axis',
            title: {
                text: 'ชื่อโครงการ',
                style: {
                    fontSize: '1.55em',
                    fontFamily: '"DB Helvethaica Medium", sans-serif',
                    fontWeight: '400',
                    color: '#758EAC',
                },
                align: 'high',
                offset: 0,
                rotation: 0,
                x: 35,
                y: -13
            },
            min: 0,
            max: 4,
            scrollbar: {
                enabled: true,
                margin: 15,
                size : 8,
                barBackgroundColor: '#758EAC',
                barBorderRadius: 4,
                barBorderWidth: 0,
                buttonBackgroundColor: '#E2E7EC',
                buttonBorderWidth: 0,
                buttonArrowColor: '#758EAC',
                buttonBorderRadius: 4,
                rifleColor: 'white',
                trackBackgroundColor: '#E2E7EC',
                trackBorderWidth: 1,
                trackBorderColor: '#E2E7EC',
                trackBorderRadius: 4
            },
            tickLength: 0,
            categories: categories,
            labels:{
                overflow: 'allow',
                style: {
                    fontSize: '1.55em',
                    fontFamily: '"DB Helvethaica Medium", sans-serif',
                    fontWeight: '400',
                    color: '#758EAC',
                }
            }
        },
        yAxis: {
            className: 'chart-axis',
            title: {
                text: 'จำนวนเงิน',
                style: {
                    fontSize: '1.55em',
                    fontFamily: 'DB Helvethaica Medium", sans-serif',
                    fontWeight: '400',
                },
                align: 'high',
                offset: 30, // title and rim
                rotation: 0,
                y: 0, // distance between title y and graph
                x: 0
            },
            type: 'logarithmic',
            labels:{
                style: {
                    fontSize: '1.55em',
                    fontFamily: 'DB Helvethaica Medium", sans-serif',
                    fontWeight: '400'
                },
            }
        },
        plotOptions: {
            bar: {
                dataLabels: {
                    enabled: false,
                    verticalAlign:'top',
                    style:{
                        color: '#5482B8',
                        fontSize:'1rem'
                    },
                    y:-25,
                    rotation:-70
                },
                maxPointWidth: 40
            },
        },
        legend: {
            symbolHeight: 13,
            symbolRadius: 0,
            itemStyle: {
                fontSize: '1.8rem',
                fontFamily: '"DB Helvethaica Medium", sans-serif',
                fontWeight: '400',
            },
            itemMarginTop: 5,
            padding: 0
        },
        tooltip: {
            headerFormat: '',
            pointFormat: '<span style="color:{series.color}">{series.name} : </span><b>{point.y}</b><br>',
            shared: true,
            style:{
                fontSize: '1.8rem',
                fontFamily: 'DB Helvethaica Normal',
                fontWeight: '400',
            },
            enabled: true,
        },
        series: data
    });  
}