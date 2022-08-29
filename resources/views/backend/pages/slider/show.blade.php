@extends('backend/template/template')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table text-center" border="1">
                <thead>
                    <tr>
                        <th>#SL</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Category</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $sl=1; ?>
                    @foreach ($slider as $slider)
                   
                        <tr>
                            <td>{{$sl}}</td>
                            <td>{{$slider->title}}</td>
                            <td>{{$slider->description}}</td>
                            <td>{{$slider->cat}}</td>
                            <td>
                                @if($slider->status==1)
                                    <a href="{{ route('slider.status',$slider->id) }}" class="btn btn-success btn-sm"><i class="fas fa-check-circle"></i></a>
                                @else
                                <a href="{{ route('slider.status',$slider->id) }}" class="btn btn-danger btn-sm"><i class="fas fa-minus-circle"></i></a>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('slider.edit',$slider->id) }}" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></a>
                                <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete"><i class="fas fa-trash"></i></button>
                                {{-- <a href="{{ route('slider.delete',$slider->id) }}" class="btn btn-danger btn-sm">Delete</a> --}}
                            </td>
                        </tr>
                        <?php $sl++; ?>
                    @endforeach
                </tbody>
            </table>
        </div>
        
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="AddSlider">
                <a href="{{route('slider.add')}}" class="btn btn-primary">Add New Slider</a>
            </div>
        </div>
    </div>
</div>






  
  <!-- Modal for delete -->
  <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Confirmation Message!</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Are you sure you want delete this Slider?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">No</button>
          
          <a href="{{ route('slider.delete',$slider->id) }}" class="btn btn-danger btn-sm">Yes</a>
        </div>
      </div>
    </div>
  </div>

@endsection