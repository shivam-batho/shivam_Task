@extends('include.app')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb mt-5">
    <div class="row">
        <div class="col-lg-10 col-md-10 col-sm-10 pull-left text-center">
            <h2>QR Code Generator</h2>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 pull-right">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#generateQRcode">
                Generate QR code
            </button>
        </div>
    </div>
        <table class="table table-bordered">
         <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>QR Code</th>
              
            </tr>
         </thead>   
        <tbody>
        @if (count($qrcode) > 0)
            @php $i = 0; @endphp
            @foreach ($qrcode as $value)
            <tr >
                <td>{{ ++$i }}</td>
                <td>{{ $value->text_box }}</td>
                <td> <img width = 100 height = 100 src="{{ asset($value->qrcode_path) }}" /></td>
            
            </tr>
            @endforeach
        @else
            <tr>
                <td>No data Found.</td>
            </tr>
        @endIf
        </tbody>
    </table>

<!-- Modal -->
<div class="modal fade" id="generateQRcode" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Generate QR Code </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="{{ route('generate-qrcode') }}" method="POST">
            @csrf
          
             <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Text Box:</strong>
                        <input type="text" class="form-control" name='text_box' id="textBox" aria-describedby="textBox" required>
                    </div>
                </div>
            </div>
           
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>





@endsection