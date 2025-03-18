@extends('admin.layouts.app')
@section('content')

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Manage Categories</h1>
<p class="mb-4">Below is the list of categories. You can add categories as needed.</p>

<!-- Add Project Button -->
<button class="btn btn-primary mb-3" data-toggle="modal" data-target="#addCategoriesModal">Add Categories</button>

<!-- DataTables Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Categories Data</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="categoriesTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Slug</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal Tambah Kategori -->
<div class="modal fade" id="addCategoriesModal" tabindex="-1" aria-labelledby="addCategoriesLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addCategoriesLabel">Add Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="addCategoryForm">
                    @csrf
                    <div class="form-group">
                        <label for="category_name">Category Name</label>
                        <input type="text" class="form-control" id="category_name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="category_slug">Slug (Auto Generated)</label>
                        <input type="text" class="form-control" id="category_slug" name="slug" readonly>
                    </div>
                    <button type="submit" class="btn btn-primary">Save Category</button>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection
@section('script')
<script>
    $(document).ready(function() {
        let table = $('#categoriesTable').DataTable({
            ajax: '{{ route("categories.data") }}',
            processing: true,
            serverSide: false,
            responsive: true,
            autoWidth: false,
            dom: '<"row"<"col-md-6"l><"col-md-6"f>>t<"row"<"col-md-6"i><"col-md-6"p>>',
            columns: [
                { data: 'name', name: 'name' },
                { data: 'slug', name: 'slug' },
            ]
        });

        $('#category_name').on('input', function () {
            let name = $(this).val();
            let slug = name.toLowerCase().replace(/\s+/g, '-').replace(/[^a-z0-9-]/g, '');
            $('#category_slug').val(slug);
        });

        // Handle form submit dengan AJAX
        $('#addCategoryForm').on('submit', function (e) {
            e.preventDefault();

            $.ajax({
                url: "{{ route('categories.save') }}",
                type: "POST",
                data: $(this).serialize(),
                success: function (response) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: response.message,
                        showConfirmButton: false,
                        timer: 2000
                    });

                    $('#addCategoriesModal').modal('hide');
                    $('#addCategoryForm')[0].reset();
                    // Bisa refresh daftar kategori di tabel atau dropdown
                    table.ajax.reload();
                },
                error: function (xhr) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: xhr.responseJSON.message || 'Something went wrong!',
                    });
                }
            });
        });
    });
</script>
@endsection