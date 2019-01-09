<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
	Event List
	</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
<link rel="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.5.0/bootstrap-table.min.css">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.5.0/bootstrap-table.min.js"></script>

<script type="text/javascript">
	$(function(){
		$('#table-javascript').bootstrapTable({
			method:'get',
			url: 'jsonencode.json',
			cache:false,
			pagination:true,
			pageSize:10,
			pageList:[10,25,50,100,200],
			minimumCountColumns:2,
			clickToSelect:true,
			
			columns:[{
				field: 'eventname',
				title: 'Event Name',
				align: 'center',
				sortable: true
			}, {
				field: 'description',
				title: 'Description',
				align: 'center',
				sortable: true
			}, {
				field: 'date',
				title: 'Date',
				align: 'center',
				}]
		});
	});
</script>
<style type="text/css">
	.table{
		font-size: 13px;
	}
</style>
</head>
<body>
<div class="container">
	<div class="row">
		<table id="table-javascript"></table>
	</div>
</div>
</body>
</html>