@extends ('backend.layouts.app')

@section ('title', __('labels.backend.access.users.management') . ' | ' . __('labels.backend.access.users.create'))

@section('breadcrumb-links')
    @include('backend.auth.user.includes.breadcrumb-links')
@endsection

@section('content')
    {{ html()->form('POST', route('admin.post.store'))->class('form-horizontal')->open() }}
    <div class="row">
        <div class="col-sm-8">
             <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-5">
                            <h4 class="card-title mb-0">
                                <label for="">Post Management</label>
                                <small class="text-muted"><label for="">Post create</label></small>
                            </h4>
                        </div><!--col-->
                    </div><!--row-->

                    <hr />

                    <div class="row mt-4 mb-4">
                        <div class="col">
                            <div class="form-group">
                                <input type="text" name="title" class="form-control" placeholder="masukan judul">
                             <input type="text" name="categories" value="1" hidden>
                            </div>
                            <div class="form-group">
                                <textarea name="content" id="content" name="content" cols="30" rows="10"></textarea>
                            </div>

                            
                        </div><!--col-->
                    </div><!--row-->
                </div><!--card-body-->
            </div><!--card-->
        </div><!-- col-sm-8 -->
        <div class="col-sm-4">
            <div class="card">
                <div class="card-header">
                    Publish
                </div><!-- card-header -->
                <div class="card-body">
                    <div>
                    <button class="btn btn-secondary float-left btn-sm">Save draft</button>
                    <button class="btn btn-secondary float-right btn-sm">Preview</button>
                    </div>
                </div><!-- card-body -->
                <div class="card-footer">
                    <div>
                        <a href="#" class="float-left" style="text-decoration: none;">Move to trash</a>
                        <button class="btn btn-primary float-right">Publish</button>
                    </div>
                </div><!-- card-footer -->
            </div><!-- card -->
            <div class="card">
                <div class="card-header">
                    Add Image
                </div>
                <div class="card-body">
                    <!-- Dropzone -->
                    <div action="#" class="dropzone" id="myDropzone">
                      <div class="fallback">
                        <input name="file" type="file" multiple />
                      </div>
                    </div><!-- dropzone -->
                </div><!-- card-body -->
            </div><!-- card -->
        </div><!-- col-sm-4 -->
    </div><!-- row -->
    {{ html()->form()->close() }}
    @push('after-styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/basic.css">
    @endpush
    @push('after-scripts')
        <script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone-amd-module.js"></script>
        <script>
            Dropzone.options.myDropzone = {
                paramName: "file",
                maxFiles: 1,
                maxfilesexceeded: function(file) {
                    this.removeAllFiles();
                    this.addFile(file);
                },
                addRemoveLinks : true,
                clickable : true,
                uploadMultiple: false,
            };
        </script>
        <script>
        tinymce.init({
            selector: "textarea#content",
            plugins: [
                "advlist autolink lists link image charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
        });
        </script>
    @endpush
@endsection