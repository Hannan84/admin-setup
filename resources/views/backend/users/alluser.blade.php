@extends('backend.layouts.app')

@section('title', 'All User')

@section('content')
		<div class="xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>DataTable</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">DataTable</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
									July 2025
								</a>
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="#">Export List</a>
									<a class="dropdown-item" href="#">Policies</a>
									<a class="dropdown-item" href="#">View Assets</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Export Datatable start -->
				<div class="card-box mb-30">
					<div class="pd-20">
						<h4 class="text-blue h4">Data Table with Export Buttons</h4>
					</div>
					<div class="pb-20">
						<table id="users-table" class="table hover multiple-select-row data-table-export nowrap">
							<thead>
								<tr>
                                    <th>SN</th>
									<th class="table-plus datatable-nosort">Name</th>
									<th>Email</th>
                                    <th>Created At</th>
								</tr>
							</thead>
							<tbody>
								<tr>
                                    <td></td>
									<td class="table-plus"></td>
									<td></td>
                                    <td></td>
								</tr>
								
							</tbody>
						</table>
					</div>
				</div>
				<!-- Export Datatable End -->
			</div>
		</div>
@endsection

@push('scripts')
<script>
$(document).ready(function () {
    let $table = $('#users-table');

    if ( $.fn.DataTable.isDataTable($table) ) {
        $table.DataTable().clear().destroy(); // Destroy existing instance if any
    }

    $table.DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('users.data') }}",
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'email', name: 'email' },
            { data: 'created_at', name: 'created_at' }
        ]
    });
});
</script>
@endpush
