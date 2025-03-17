@extends('admin.layouts.app')
@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Manage Projects</h1>
<p class="mb-4">Below is the list of projects. You can add, edit, or delete projects as needed.</p>

<!-- Add Project Button -->
<button class="btn btn-primary mb-3" data-toggle="modal" data-target="#addProjectModal">Add Project</button>

<!-- DataTables Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Projects Data</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="projectsTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th></th>
                        <th>Name</th>
                        <th>Client</th>
                        <th>Date</th>
                        <th>Category</th>
                        <th>Link</th>
                        <th>Description</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Add Project Modal -->
<div class="modal fade" id="addProjectModal" tabindex="-1" role="dialog" aria-labelledby="addProjectModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addProjectModalLabel">Add New Project</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="addProjectForm" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Project Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="client">Client</label>
                                <input type="text" class="form-control" id="client" name="client" required>
                            </div>
                            <div class="form-group">
                                <label for="date">Date</label>
                                <input type="date" class="form-control" id="date" name="date" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="category">Category</label>
                                <select class="form-control" id="category" name="category[]" multiple="multiple" required>
                                    <option value="branding">Branding</option>
                                    <option value="web-design">Web Design</option>
                                    <option value="development">Development</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="link">Project Link</label>
                                <input type="url" class="form-control" id="link" name="link">
                            </div>
                            <div class="form-group">
                                <label for="image">Project Image <span class="text-danger">*</span></label>
                                <input type="file" class="form-control-file" id="image" name="image" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Save Project</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit Project Modal -->
<div class="modal fade" id="editProjectModal" tabindex="-1" role="dialog" aria-labelledby="editProjectModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editProjectModalLabel">Edit Project</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editProjectForm" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" id="edit_project_id" name="id">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="edit_name">Project Name</label>
                                <input type="text" class="form-control" id="edit_name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="edit_client">Client</label>
                                <input type="text" class="form-control" id="edit_client" name="client" required>
                            </div>
                            <div class="form-group">
                                <label for="edit_date">Date</label>
                                <input type="date" class="form-control" id="edit_date" name="date" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="edit_category">Category</label>
                                <select class="form-control" id="edit_category" name="category[]" multiple="multiple" required>
                                    <option value="branding">Branding</option>
                                    <option value="web-design">Web Design</option>
                                    <option value="development">Development</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="edit_link">Project Link</label>
                                <input type="url" class="form-control" id="edit_link" name="link">
                            </div>
                            <div class="form-group">
                                <label for="edit_image">Project Image</label>
                                <input type="file" class="form-control-file" id="edit_image" name="image">
                                <small id="currentImage"></small>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="edit_description">Description</label>
                        <textarea class="form-control" id="edit_description" name="description" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Project</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
<script>
    $(document).ready(function() {
        $('#category').select2({
            placeholder: "Select categories",
            allowClear: true,
            width: '100%'
        });

        $('#edit_category').select2({
            placeholder: "Select categories",
            allowClear: true,
            width: '100%'
        });

        let table = $('#projectsTable').DataTable({
            ajax: '{{ route("projects.data") }}',
            processing: true,
            serverSide: false,
            responsive: true,
            autoWidth: false,
            dom: '<"row"<"col-md-6"l><"col-md-6"f>>t<"row"<"col-md-6"i><"col-md-6"p>>',
            columns: [
                { data: 'image', name: 'image' },
                { data: 'name', name: 'name' },
                { data: 'client', name: 'client' },
                { data: 'date', name: 'date' },
                { data: 'category', name: 'category' },
                { data: 'link', name: 'link', render: function(data) {
                        return `<a href="${data}" class="text-primary" target="_blank">View</a>`;
                    }
                },
                { data: 'description', name: 'description', render: function(data) {
                        return data.length > 50 ? data.substring(0, 50) + '...' : data;
                    }
                },
                { data: 'id', name: 'id', className: "text-center", render: function(data) {
                        return `<a href="#" class="btn btn-sm btn-warning edit-btn" data-id="${data}">Edit</a> 
                                <a href="#" class="btn btn-sm btn-danger delete-btn" data-id="${data}">Delete</a>`;
                    }
                }
            ]
        });

        $(document).on('click', '#addProjectBtn', function() {
            $('#addProjectForm')[0].reset();
            $('#addProjectModal').modal('show');
        });

        // Submit Add Project Form
        $(document).on('submit', '#addProjectForm', function(e) {
            e.preventDefault();
            let formData = new FormData(this);
            
            $.ajax({
                url: '{{ route("projects.save") }}',
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                success: function(response) {
                    $('#addProjectModal').modal('hide');
                    $('#addProjectForm')[0].reset();
                    $('#category').val(null).trigger('change'); // Reset select2
                    table.ajax.reload();

                    // SweetAlert2 Toast Notification
                    Swal.fire({
                        toast: true,
                        position: 'top-end',
                        icon: 'success',
                        title: response.message,
                        showConfirmButton: false,
                        timer: 3000
                    });
                },
                error: function() {
                    Swal.fire({
                        toast: true,
                        position: 'top-end',
                        icon: 'error',
                        title: 'Error saving project.',
                        showConfirmButton: false,
                        timer: 3000
                    });
                }
            });
        });

        // Submit Edit Project Form
        $(document).on('submit', '#editProjectForm', function(e) {
            e.preventDefault();
            let formData = new FormData(this);
            let projectId = $('#edit_project_id').val();
            
            $.ajax({
                url: '{{ route("projects.save") }}',
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                success: function(response) {
                    $('#editProjectModal').modal('hide');
                    $('#editProjectForm')[0].reset();
                    $('#edit_category').val(null).trigger('change'); // Reset select2
                    table.ajax.reload();

                    // SweetAlert2 Toast Notification
                    Swal.fire({
                        toast: true,
                        position: 'top-end',
                        icon: 'success',
                        title: response.message,
                        showConfirmButton: false,
                        timer: 3000
                    });
                },
                error: function() {
                    Swal.fire({
                        toast: true,
                        position: 'top-end',
                        icon: 'error',
                        title: 'Error updating project.',
                        showConfirmButton: false,
                        timer: 3000
                    });
                }
            });
        });



        $(document).on('click', '.delete-btn', function(e) {
            e.preventDefault();
            let projectId = $(this).data('id');

            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#d33",
                cancelButtonColor: "#3085d6",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: `/projects/${projectId}`,
                        type: 'DELETE',
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                        success: function(response) {
                            table.ajax.reload();
                            Swal.fire({
                                icon: "success",
                                title: "Deleted!",
                                text: response.message,
                                showConfirmButton: false,
                                timer: 3000
                            });
                        },
                        error: function() {
                            Swal.fire({
                                icon: "error",
                                title: "Error!",
                                text: "Failed to delete project.",
                                showConfirmButton: false,
                                timer: 3000
                            });
                        }
                    });
                }
            });
        });

        $(document).on('click', '.edit-btn', function() {
            let projectId = $(this).data('id');

            $.ajax({
                url: `/projects/${projectId}`,
                type: 'GET',
                success: function(response) {
                    $('#edit_project_id').val(response.id);
                    $('#edit_name').val(response.name);
                    $('#edit_client').val(response.client);
                    $('#edit_date').val(response.date);
                    $('#edit_category').val(response.category.split(' ')).trigger('change');
                    $('#edit_link').val(response.link);
                    $('#edit_description').val(response.description);

                    if (response.image) {
                        $('#currentImage').html(`<img src="/storage/${response.image}" width="50">`);
                    } else {
                        $('#currentImage').html('');
                    }

                    $('#editProjectModal').modal('show');
                },
                error: function() {
                    alert('Error fetching project data.');
                }
            });
        });
    });
</script>
@endsection
