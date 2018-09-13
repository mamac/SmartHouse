$("form input.datepicker").datepicker({
    dateFormat: 'yy-mm-dd', 
    firstDay:1,
    changeMonth: true,
    changeYear: true
}).attr("readonly","readonly");