<!-- ================== BEGIN BASE JS ================== -->
{{ Html::script('/assets/plugins/jquery/jquery-1.9.1.min.js')}}
{{ Html::script('/assets/plugins/jquery/jquery-migrate-1.1.0.min.js')}}
{{ Html::script('/assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js')}}
{{ Html::script('/assets/plugins/bootstrap/js/bootstrap.min.js')}}

<!--[if lt IE 9]>
{{ Html::script('/assets/crossbrowserjs/html5shiv.js')}}
{{ Html::script('/assets/crossbrowserjs/respond.min.js"')}}
{{ Html::script('/assets/crossbrowserjs/excanvas.min.js')}}
<![endif]-->
{{ Html::script('/assets/plugins/slimscroll/jquery.slimscroll.min.js')}}
{{ Html::script('/assets/plugins/jquery-cookie/jquery.cookie.js')}}

<!-- ================== END BASE JS ================== -->

<!-- ================== BEGIN PAGE LEVEL JS ================== -->
{{ Html::script('/assets/plugins/gritter/js/jquery.gritter.js')}}
{{ Html::script('/assets/plugins/flot/jquery.flot.min.js')}}
{{ Html::script('/assets/plugins/flot/jquery.flot.time.min.js')}}
{{ Html::script('/assets/plugins/flot/jquery.flot.resize.min.js')}}
{{ Html::script('/assets/plugins/flot/jquery.flot.pie.min.js')}}
{{ Html::script('/assets/plugins/sparkline/jquery.sparkline.js')}}
{{ Html::script('/assets/plugins/jquery-jvectormap/jquery-jvectormap.min.js')}}
{{ Html::script('/assets/plugins/jquery-jvectormap/jquery-jvectormap-world-mill-en.js')}}
{{ Html::script('/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')}}
{{ Html::script('/assets/plugins/bootstrap-datepicker/locales/bootstrap-datepicker.es.min.js')}}
{{ Html::script('/assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js')}}
{{ Html::script('/assets/plugins/bootstrap-datetimepicker/js/locales/bootstrap-datetimepicker.es.js')}}

{{ Html::script('/assets/plugins/DataTables/media/js/jquery.dataTables.js')}}
{{ Html::script('/assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js')}}
{{ Html::script('/assets/plugins/select2/dist/js/select2.min.js')}}
{{ Html::script('/assets/plugins/cytoscape/cytoscape.min.js')}}
{{ Html::script('/assets/plugins/jstree/dist/jstree.min.js')}}
{{ Html::script('/assets/plugins/jquery-contextMenu/jquery.contextMenu.min.js')}}
{{ Html::script('/assets/plugins/chart-js/Chart.min.js')}}

{{ Html::script('/assets/js/trumbowyg.min.js')}}
{{ Html::script('/assets/js/trumbowyg.colors.js')}}
{{ Html::script('/js/app.js')}}

<script src="/assets/js/apps.min.js"></script>
<!-- ================== END PAGE LEVEL JS ================== -->
<script>
    $(document).ready(function() {
        App.init();
        //Dashboard.init();
        $('.dataTable').DataTable({
            language: { "url": "/lang/datatables.es.json" },
            dom: 'lftip',
        });
        
        $('.app-fecha').datepicker({
            language: 'es',
            format: 'yyyy-mm-dd',
            autoclose: true
        });

        $('.app-fechahora').datetimepicker({
            format: 'yyyy-mm-dd hh:ii:ss',
            autoclose: true,
            icons: {
                    time: "fa fa-clock-o",
                    date: "fa fa-calendar",
                    up: "fa fa-arrow-up",
                    down: "fa fa-arrow-down"
            },
            language: 'es'
        });

        $('.select2').select2();

        $('.app-textarea').trumbowyg({
            btns:
                [['bold'], ['removeformat'] ,['foreColor']],
//			['formatting'],
            //'btnGrp-semantic',
//			['superscript', 'subscript'],
//			['link'],
//			['insertImage'],
//			'btnGrp-justify',
//			'btnGrp-lists',
//			['horizontalRule'],
            //['removeformat'],
            //['fullscreen']
            lang: 'es'
        });
        
  
    $('[data-toggle="popover"]').popover();   



    });
</script>
