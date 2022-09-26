@extends('include.app')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb mt-5">
        <div class="pull-left text-center">
            <h2>Star Pattern</h2>
        </div>
        <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
        <form  data-action="/generateStarPattern" method="POST" enctype="multipart/form-data" id="star-pattern-form" >
             <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong class ='mb-4'>Pattern Length:</strong>
                        <input type="number" class="form-control" name='pattern_len' id="pattern_len" aria-describedby="pattern_len" required>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-primary" id='star_pattern'>Submit</button>
                    </div>
                </div>
            </div>
           
        </form>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="h-100 p-5 bg-dark border rounded-3 pt-4">
               <div id='star_code' class="text-center text-white"></div>
            </div>
    </div>
</div>
    </div>
</div>


<script type="text/javascript">
    $(function() {
        $("#star_pattern").click(function (event) {
            event.preventDefault();
            let pattern_len = $('#pattern_len').val();
                var url = $('#star-pattern-form').attr('data-action');
                console.log(url);
                data1 =  {pattern_len:pattern_len };
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
            $.ajax({
                url: url,
                method: 'POST',
                data: data1,
                dataType: 'JSON',
                success: function(data) {
                    console.log(data.data);
                    if(data.status_code == 200){
                        $('#star_code').html(data.data)
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

