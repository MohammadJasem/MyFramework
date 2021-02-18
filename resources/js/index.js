var chart;
var totalCustomerGroup;
var totalOrderGroup;
$(function(){
    $('input[name="daterange"]').daterangepicker({
        opens: 'left',
        locale: {
            format: 'YYYY-MM-DD'
        }
    }, function(start, end, label) {
        $.post('getStatistics',{startDate:start.format('YYYY-MM-DD'),endDate:end.format('YYYY-MM-DD')},function(res){
            var resArr = JSON.parse(res);
            $('#totalCustomer').html(resArr['totalCustomer']+' New Customers!');
            $('#totalOrder').html(resArr['totalOrder']+' New Orders!');
            $('#totalRevenue').html(resArr['totalRevenue']+' Total Revenue!');
            addChart(resArr['totalCustomerGroup'], resArr['totalOrderGroup']);
        });
    });
    addChart(totalCustomerGroup, totalOrderGroup)
});

function addChart(totalCustomerGroup, totalOrderGroup) {
    var newTotalCustomerGroup = [];
    var newTotalOrderGroup = [];
    for (var i = 0;i < totalCustomerGroup.length;i++)
        newTotalCustomerGroup.push({ x: moment(totalCustomerGroup[i].create_date), y: totalCustomerGroup[i].count });
    for (var i = 0;i < totalOrderGroup.length;i++)
        newTotalOrderGroup.push({ x: moment(totalOrderGroup[i].purchase_date), y: totalOrderGroup[i].count });
    const dataSets = {
        datasets: [
            {
                type: "line",
                label: "Total Customer",
                borderColor: "#3e7ab6",
                data: newTotalCustomerGroup
            },

            {
                type: "line",
                label: "Total Order",
                borderColor: "#19b697",
                data: newTotalOrderGroup
            }
        ]
    };
    var ctx = document.getElementById('myChart').getContext('2d');
    chart = new Chart(ctx, {
        type: 'line',
        data: dataSets,
        options: {
            scales: {
                xAxes: [{
                    type: 'time',
                    time: {
                        unit: 'day'
                    }
                }]
            }
        }
    });
}