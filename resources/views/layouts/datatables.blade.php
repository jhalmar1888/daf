
    {{ Html::script('/assets/plugins/DataTables/media/js/jquery.dataTables.js')}}
    {{ Html::script('/assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js')}}
    {{ Html::script('/assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js')}}
    {{ Html::script('/assets/js/table-manage-default.demo.min.js')}}
    {{ Html::script('/assets/js/apps.min.js')}}
<script>
		$(document).ready(function() {
			App.init();
			TableManageDefault.init();
		});
	</script>