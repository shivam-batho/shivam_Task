@extends('include.app')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb mt-5">
        <div class="pull-left text-center">
            <h2>OCR Reader</h2>
        </div>
        <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
        <form  data-action="/fileReader" method="POST" enctype="multipart/form-data" id="file-reader-form" >
             <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong class ='mb-4'>Upload File:</strong>
                        <input type="file" class="form-control" name='file' id="file" aria-describedby="file" required>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-primary" id='upload_file'>Submit</button>
                    </div>
                </div>
            </div>
           
        </form>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="h-100 p-5 bg-light border rounded-3 pt-4">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong class ='mb-4'>Upload File text:</strong><br/>
                    <input id='file_text' class="form-control" >
                </div>
            </div>
            </div>
    </div>
</div>
    </div>
</div>




<script type="text/javascript">
    $(function() {
        $("#file-reader-form").submit(function (event) {
            event.preventDefault();
            formData = new FormData(this);
                var url = $('#file-reader-form').attr('data-action');
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
            $.ajax({
                url: url,
                method: 'POST',
                data: formData,
                cache : false,
                contentType: false,
                processData: false,
                success: function(data) {
                    if(data.status_code == 200){
                        $('#file_text').val(data.data)
                    }
                
                },
                error: function(response) {
                    console.log(response);
                }
            });

            });
});
</script>

@endsection