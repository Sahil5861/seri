@extends('admin.layouts.app')
@section('title', 'Dashboard')

@section('content')
<div class="content-wrapper">
    <div class="content-inner">
        <div class="page-header page-header-light shadow">
            <div class="page-header-content d-lg-flex">
                <div class="d-flex">
                    <h4 class="page-title mb-0">
                        Dashboard - <span class="fw-normal">Update User</span>
                    </h4>                    
                </div>
            </div>            
        </div>
        

        <div class="content">
            @if(session()->has('message'))
        <div class="alert alert-success fade in alert-dismissible show">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true" style="font-size:20px; color:#fff;">×</span>
            </button>
            {{ session()->get('message') }}
        </div>
        @elseif(session()->has('error'))
        <div class="alert alert-danger fade in alert-dismissible show">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true" style="font-size:20px; color:#fff;">×</span>
            </button>
            {{ session()->get('error') }}
        </div>
        @endif
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{route('profile.update')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body"> 
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="hidden" name="id" value="{{$user->id}}">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control" name="username" placeholder="{{$user->name}}" value="{{$user->name}}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="username">Email</label>
                                        <input type="email" class="form-control" name="email" placeholder="{{$user->email}}" value="{{$user->email}}">
                                    </div>    
                                </div>    
                            </div>                           
                            <div class="btn-wrap mt-3">
                                <button type="submit" class="btn btn-primary btn-block">Update</button>
                            </div>
                        </div>
                    </form>                     
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5>Upadte Password</h5>
                </div>
                <div class="card-body">                    
                    <form method="POST" action="{{route('update-passoword')}}" id="update-password-form">
                        @csrf
                        <input type="hidden" name="id" value="{{$user->id}}">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="cur_password">Enter Current Password *</label>
                                    <input class="form-control" type="password" name="cur_password" required>
                                    @error('cur_password')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="new_password">Enter New Password *</label>
                                    <input class="form-control" type="password" name="new_password" required>
                                    @error('new_password')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="conf_new_password">Confirm New Password *</label>
                                    <input class="form-control" type="password" name="confirm_password" required>
                                    @error('confirm_password')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        

                        <div class="btn-wrap mt-3">
                            <button type="submit" form="update-password-form" class="btn btn-primary btn-block">Update</button>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla magni quia blanditiis nostrum beatae porro pariatur, repudiandae expedita iste neque quas corrupti iure natus, quo perferendis? Reprehenderit ex maxime adipisci nihil fugit molestiae magni voluptatum sit at veniam explicabo architecto ipsa, corrupti quidem nisi sequi. --}}



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 

<script>
    $(document).ready(function(){
        var uploadUrl = "{{ route('admin.upload.image') }}";
        var csrfToken = "{{ csrf_token() }}";
        tinymce.init({
                // imagetools
                selector: '.ckeditor',
                relative_urls: false, // ✅ Prevents relative URLs
                remove_script_host: false, // ✅ Ensures full URLs are used
                convert_urls: true, // ✅ Converts all URLs to absolute
                plugins: 'lists link image imagetools code', // Add plugins you want (optional)
                toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright | bullist numlist outdent indent | link image', // Customize toolbar (optional)
                images_upload_url: uploadUrl ,
                automatic_uploads: true,
                file_picker_types: 'image',
                images_upload_handler: function (blobInfo, success, failure) {
                    let formData = new FormData();
                    formData.append('file', blobInfo.blob(), blobInfo.filename());

                    fetch(uploadUrl, {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': csrfToken, 
                            'Accept': 'application/json'
                        },
                        body: formData
                    })
                    .then(response => response.json())
                    .then(result => {
                        if (result.location) {
                            success(result.location); // ✅ Image URL returned from Laravel
                        } else {
                            failure('Image upload failed.');
                        }
                    }).catch(error => failure('Image upload failed: ' + error.message));
                },
                menubar: true, // Hide the menubar (optional)
                height: 800,
                setup: function (editor) {
                    var placeholder = 'Enter Your Text';
                    function insertPlaceholder(){
                        if (editor.getContent() === '') {
                            editor.setContent('<p style="color: #888;">' + placeholder+'</p>');
                        }
                    }
                    editor.on('init', function(){
                        insertPlaceholder();
                    });
                    editor.on('focus', function (){
                        if (editor.getContent({format: 'text'}) === placeholder) {
                            editor.setContent('');
                        }
                    });
                    editor.on('blur', function(){
                        if (editor.getContent() === '') {
                            insertPlaceholder();
                        }
                    });
                    editor.on('change', function () {
                        editor.save();
                    });
                },
            });        
    })    
</script>

<script>
    function generateSEO(){
        let title = $('#blog_title').val().trim(); // Get title and remove extra spaces
        console.log(title);
        
        let seo_url = $('#seo_url');

        if (title !== '') {
            let formattedTitle = title.replace(/\s+/g, '-').toLowerCase(); // Replace spaces with "_"
            seo_url.val(formattedTitle); // Set the value in the SEO URL field
        }
    }
</script>

<script>
    $('#author_id').on('change', function () {
        let selectedOption = $(this).find(':selected'); // Get the selected option
        let image = selectedOption.data('image'); // Get data-name from selected option
        let designation = selectedOption.data('designation'); // Get data-designation from selected option

        
        $('#author_designation').val(designation);

        $('#author_image').attr('src', `{{ asset('') }}${image}`);
        console.log(image, designation); // Check if values are correct
    }); 


    $(document).ready(function (){
        let selectedOption = $('#author_id').find(':selected'); // Get the selected option
        let image = selectedOption.data('image'); // Get data-name from selected option
        let designation = selectedOption.data('designation'); // Get data-designation from selected option

        
        $('#author_designation').val(designation);

        $('#author_image').attr('src', `{{ asset('') }}${image}`);
        console.log(image, designation); // Check if values are correct
    })

</script>


@endsection
