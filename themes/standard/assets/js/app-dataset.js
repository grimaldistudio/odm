var calcDataTableHeight = function() {
       return $(window).height()-290+"px";     
   };
   
        $('#datatable table.display').DataTable({
        "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.10/i18n/Italian.json"
            },             
        info:       false,  
        ajax:           $('#yiiGetUrl').text(),
        dataSrc: 'data',      
        deferRender:    true,
        scroller:       true,
        scrollY:    calcDataTableHeight(),
        scrollX: true,
        ScrollXInner: true,
        autoWidth: false,
         scroller: {
            loadingIndicator: true
        },
        
        }
        );
        
  $('.switch-body-content').height(calcDataTableHeight());
  $('#DataTables_Table_0').css('width','100%');
  var l = $(".button-bar").width();
var e = $(window).width()-l;
$('.dataTables_filter').css('right',-l+l);