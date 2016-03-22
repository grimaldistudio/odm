$(document).ready(function(){
    
   $("table.display").attr('width','100%;');
   
     
 
var calcDataTableHeight = function() {
       return $(window).height()-290;            
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
        scrollY:    true,
        scrollX: true,
        autoWidth: true,  
        scrollCollapse: true,    
        }
        );
      
 

table.on( 'preAutoFill', function () {
   $(".dataTables_scroll, .dataTables_scrollBody").height(calcDataTableHeight()+"px");
} );


  $('.switch-body-content').height(calcDataTableHeight()+"px");

$('#opendatasearch').on( 'keyup', function () {
    table.search( this.value ).draw();
} );

  var l = $(".button-bar").width();
  var e = $(window).width()-l;
  $('.dataTables_filter').css('right',-l+l);
  
  
  //download counter
  $(".stats-download").on( 'click', function () {
      $.ajax({
            method: "POST",
            url: "/stats/downloadadd",
            data: { codice: $(this).attr('codice') }
          })
            .done(function( msg ) {
              $( "#stats_downloads").text( msg );
            });
      
  });
  
  });
  
  