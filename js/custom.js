function goto(url) {
    location.href = url;
}
function printChart() {
    $(document).ready(function () {
        let xValues = [];
        let yValues = [];
        $.ajax({
            url: "../api/result.php",
            type: "GET",
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            success: function (response) {
                for (let i = 0; i < response.length; i++) {
                    xValues.push(response[i]['name']);
                    yValues.push(response[i]['score']);

                    new Chart("myChart", {
                        type: "bar",
                        data: {
                            labels: xValues,
                            datasets: [{
                                backgroundColor: "blue",
                                data: yValues
                            }]
                        },
                        options: {
                            legend: { display: false },
                            title: {
                                display: true,
                                text: "投票結果統計"
                            },
                            scales: {
                                xAxes: [{
                                    gridLines: {
                                        display: false
                                    }
                                }]
                            }
                        }
                    });
                }
            },
            error: function () {
                alert('傳送失敗');
            }
        });
    })
}
