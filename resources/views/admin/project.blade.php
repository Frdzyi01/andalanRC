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
                                <label for="name">Project Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="client">Client <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="client" name="client" required>
                            </div>
                            <div class="form-group">
                                <label for="date">Date <span class="text-danger">*</span></label>
                                <input type="date" class="form-control" id="date" name="date" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="category">Category <span class="text-danger">*</span></label>
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
                                <label for="image">Project Images <span class="text-danger">*</span></label>
                                <input type="file" class="form-control-file" id="images" name="images[]" multiple required>
                                
                                <div id="fileList" class="d-flex flex-wrap mt-2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description">Description <span class="text-danger">*</span></label>
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
                                <input type="file" class="form-control-file" id="edit_image" name="images[]" multiple>

                                <div id="editFileList" class="d-flex flex-wrap mt-2"></div>
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

        let selectedFiles = new DataTransfer();

        document.getElementById('images').addEventListener('change', function (event) {
            let input = document.getElementById('images');
            let newFiles = Array.from(input.files);

            newFiles.forEach(file => {
                selectedFiles.items.add(file);
            });

            input.files = selectedFiles.files;

            refreshFileList();
        });

        function removeFile(index) {
            selectedFiles.items.remove(index);

            let input = document.getElementById('images');
            input.files = selectedFiles.files;

            refreshFileList();
        }

        function refreshFileList() {
            let fileList = document.getElementById('fileList');
            fileList.innerHTML = "";

            for (let i = 0; i < selectedFiles.files.length; i++) {
                let file = selectedFiles.files[i];
                let reader = new FileReader();

                reader.onload = function (e) {
                    let listItem = document.createElement('div');
                    listItem.classList.add('image-preview');
                    listItem.setAttribute('data-index', i);

                    listItem.innerHTML = `
                        <img src="${e.target.result}" alt="Preview" width="80" height="80" class="mr-2">
                        <button type="button" class="remove-new-image" data-index="${i}">❌</button>
                    `;

                    fileList.appendChild(listItem);
                };

                reader.readAsDataURL(file);
            }
        }

        document.addEventListener('click', function (event) {
            if (event.target.classList.contains('remove-new-image')) {
                let index = event.target.getAttribute('data-index');
                removeFile(index);
            }
        });

        // EDIT
        let selectedEditFiles = new DataTransfer();
        let removedImages = [];

        function loadExistingImages(images) {
            let fileList = $('#editFileList');
            fileList.html("");

            images.forEach((image, index) => {
                let listItem = $(`
                    <div class="image-preview" data-type="old" data-index="${index}">
                        <img src="${image.url}" alt="Project Image">
                        <button type="button" class="remove-image" data-index="${index}">❌</button>
                    </div>
                `);
                fileList.append(listItem);
            });
        }

        $('#edit_image').on('change', function (e) {
            let files = e.target.files;

            for (let i = 0; i < files.length; i++) {
                let file = files[i];
                selectedEditFiles.items.add(file); // Tambahkan ke DataTransfer

                let index = selectedEditFiles.items.length - 1; // Index dari file baru
                let reader = new FileReader();

                reader.onload = function (event) {
                    let listItem = $(`
                        <div class="image-preview" data-index="${index}" data-type="new">
                            <img src="${event.target.result}" alt="New Image" width="100">
                            <button type="button" class="remove-image" data-index="${index}" data-type="new">❌</button>
                        </div>
                    `);
                    $('#editFileList').append(listItem);
                };

                reader.readAsDataURL(file);
            }

            // Set ulang input file dengan data baru
            $('#edit_image')[0].files = selectedEditFiles.files;
        });

        $(document).on('click', '.remove-image', function () {
            let type = $(this).data('type');

            if (type === 'old') {
                let imageId = $(this).data('id');
                if (imageId) {
                    removedImages.push(imageId); // Simpan ID gambar lama yang dihapus
                }
            } else if (type === 'new') {
                let index = $(this).data('index');
                selectedEditFiles.items.remove(index); // Hapus file dari DataTransfer
                $('#edit_image')[0].files = selectedEditFiles.files; // Update input file
            }

            $(this).closest('.image-preview').remove(); // Hapus dari tampilan
        });

        function openEditModal(project) {
            $('#edit_project_id').val(project.id);
            $('#edit_name').val(project.name);
            $('#edit_client').val(project.client);
            $('#edit_date').val(project.date);
            $('#edit_category').val(project.category.split(' ')).trigger('change');
            $('#edit_link').val(project.link);
            $('#edit_description').val(project.description);

            removedImages = []; // Reset daftar gambar yang akan dihapus
            selectedEditFiles = new DataTransfer(); // Reset file baru
            $('#edit_image')[0].files = selectedEditFiles.files;

            $('#editFileList').html(""); // Kosongkan preview lama

            // **Tampilkan gambar lama**
            project.images.forEach((image) => {
                let listItem = $(`
                    <div class="image-preview" data-id="${image.id}" data-type="old">
                        <img src="${image.url}" alt="Project Image" width="100">
                        <button type="button" class="remove-image" data-id="${image.id}" data-type="old">❌</button>
                    </div>
                `);
                $('#editFileList').append(listItem);
            });

            $('#editProjectModal').modal('show');
        }



        // Submit Add Project Form
        $(document).on('submit', '#addProjectForm', function(e) {
            e.preventDefault();

            let formData = new FormData(this);

            // Tambahkan proteksi agar tidak double submit
            if ($(this).data('processing')) return;
            $(this).data('processing', true);

            console.log("Mengirim request...");

            $.ajax({
                url: '{{ route("projects.save") }}',
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                success: function(response) {
                    console.log("Response diterima:", response);

                    $('#addProjectModal').modal('hide');
                    $('#addProjectForm')[0].reset();
                    $('#category').val(null).trigger('change'); // Reset select2
                    table.ajax.reload();

                    selectedFiles = new DataTransfer(); 
                    $('#images')[0].files = selectedFiles.files;

                    // Reset tampilan daftar file
                    refreshFileList();

                    Swal.fire({
                        toast: true,
                        position: 'top-end',
                        icon: 'success',
                        title: response.message,
                        showConfirmButton: false,
                        timer: 3000
                    });

                    // Reset flag agar bisa submit lagi setelah berhasil
                    $('#addProjectForm').data('processing', false);
                },
                error: function(xhr) {
                    console.log("Error:", xhr.responseText);

                    Swal.fire({
                        toast: true,
                        position: 'top-end',
                        icon: 'error',
                        title: 'Error saving project.',
                        showConfirmButton: false,
                        timer: 3000
                    });

                    // Reset flag agar bisa submit lagi setelah error
                    $('#addProjectForm').data('processing', false);
                }
            });
        });

        // Submit Edit Project Form
        $(document).on('submit', '#editProjectForm', function(e) {
            e.preventDefault();
            
            let formData = new FormData(this);
            let projectId = $('#edit_project_id').val();

            // Kirim daftar gambar lama yang dihapus
            formData.append('removed_images', JSON.stringify(removedImages));

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

                    selectedEditFiles = new DataTransfer(); 
                    $('#edit_image')[0].files = selectedEditFiles.files;
                    $('#editFileList').html(""); // Hapus preview gambar setelah submit

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
                    if (response.success) {
                        openEditModal(response.project);
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'Failed to load project data'
                        });
                    }
                },
                error: function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Something went wrong!'
                    });
                }
            });
        });

    });
</script>
@endsection
