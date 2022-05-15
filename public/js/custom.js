(function () {
    // window.addEventListener('init-timeline', event => {
    //     let data = JSON.parse(event.detail.data);
    //     for (let index = 0; index < data.length; index++) {
    //         let line = []
    //         let element = data[index];

    //         let ts_start = Date.parse(element.start_date)
    //         var ts_ms_start = ts_start * 1000;
    //         var date_ob_start = new Date(ts_start);
    //         var year_start = date_ob_start.getFullYear();
    //         var date_ob_start = new Date(ts_ms_start);
    //         var month_start = ("0" + (date_ob_start.getMonth() + 1)).slice(-2);

    //         let ts_end = Date.parse(element.start_date) + 3024000
    //         var ts_ms_end = ts_end * 1000;
    //         var date_ob_end = new Date(ts_end);
    //         var year_end = date_ob_end.getFullYear();
    //         var date_ob_end = new Date(ts_ms_end);
    //         var month_end = ("0" + (date_ob_end.getMonth() + 1)).slice(-2);

    //         line.push(element.start_date);
    //         line.push(element.end_date);
    //         line.push(element.descriptif);
    //         line.push(element.plus);
    //         data[index] = line;
    //     }
    //     console.log(data);
    //     new Timesheet('timesheet', 2020, 2025, data);
    // })

})();