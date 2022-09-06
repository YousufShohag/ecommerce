@extends('backend/template/template')
@section('content')

<div class="br-pagetitle">
  <i class="icon ion-ios-home-outline"></i>
  <div>
    <h4>Dashboard||Here are  Your  all Slider</h4>
    <p class="mg-b-0 " >Here are all description all slider.</p>
  </div>
</div>




<div class="container">
  <div class="row mt-5">
    {{-- <div class="col-md-6">
        <div class="AddSlider">
            <a href="{{route('slider.add')}}" class="btn btn-primary">Add New Slider</a>
        </div>
    </div> --}}
    {{-- <div class="col-md-6" style="text-align: right;">
      <div class="AddSlider">
          <a href="{{route('slider.multi')}}" class="btn btn-primary">Images/Galleries</a>
      </div>
  </div> --}}
  </div>
    <div class="row">
        <div class="col-md-12 mt-5">
            <table class="table text-center">
                <thead>
                    <tr>
                        <th>#SL</th>
                        <th>product Code</th>
                        <th>Product Name</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $sl=1; ?>
                    @foreach ($productGallerys as $productGallerys)
                   
                        <tr>
                            <td>{{$sl}}</td>
                            <td>{{$productGallerys->id}}</td>
                            <td>{{$productGallerys->product_code}}</td>
                            <td>
                              <img height="100px" src="{{asset('backend/productgallery/'.$productGallerys->image)}}" alt="">
                            </td> 
                           {{-- <td>
                                @if($slider->status==1)
                                    <a href="" class="btn btn-success btn-sm"><i class="fas fa-check-circle"></i></a>
                                @else
                                <a href="" class="btn btn-danger btn-sm"><i class="fas fa-minus-circle"></i></a>
                                @endif
                            </td>  --}}
                            
                            <td>
                                <a href="" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                                <a href="" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></a>
                                {{-- <button class="btn btn-danger btn-sm" value="{{$slider->id}}" data-toggle="modal" data-target="#delete"><i class="fas fa-trash"></i></button> --}}
                                <a href="" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                        <?php $sl++; ?>
                    @endforeach
                </tbody>
            </table>
        </div>
        
    </div>
    
</div>






  
  {{-- <!-- Modal for delete -->
  <div class="modal fade" id="delete" value="{{$slider->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
  </div> --}}

@endsection