$(document).ready(function(){
    
   $("table.display").attr('width','100%;');
   
     
 
var calcDataTableHeight = function() {
       return $(window).height()-290+"px";     
   };
   
     var table = $('#datatable table.display').DataTable({
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
        autoWidth: true,  
        scrollCollapse: true
     
        }
        );
      
 

table.on( 'init', function () {
 
} );


  $('.switch-body-content').height(calcDataTableHeight());
  
$('#opendatasearch').on( 'keyup', function () {
    table.search( this.value ).draw();
} );

  var l = $(".button-bar").width();
  var e = $(window).width()-l;
  $('.dataTables_filter').css('right',-l+l);
  
  
  });
  
  