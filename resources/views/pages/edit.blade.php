@extends('layout.template')

@section('body-content')

<center>
<hr>
<!-- Button trigger modal -->
<button type="button" class="btn btn-outline-primary fw-bold fs-4 rounded-pill" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Update Inserted Flower Boucuets Data
</button>
<hr>


<!-- display start -->
<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{ asset('img/flowers/' . $flower->image) }}" class="img-fluid rounded-start" width= "540px" alt="image">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">{{ $flower->title }}</h5>
        <p class="card-text">{{ $flower->description }}</p>
        <h4 class="text-center primary">Quantity</h4>
	    <p class="card-text">{{ $flower->quantity }}</p>
	    <h4 class="text-center primary">Price</h4>
	    <p class="card-text">{{ $flower->Price }}</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>

<!-- display end -->

<!-- Modal start -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      	<hr>
      	<hr>
       <h5 class="modal-title" id="exampleModalLabel">Edit Flower Bouquets</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
		<form action="{{ route('update' , $flower->id) }}" method="POST" enctype="multipart/form-data">
			@csrf 
			<div class="row">
				<div class="col-lg-12">

					<div class="form-group">
	      				<label>Bouquets Name</label>
	      				<input type="text" name="name" class="form-control" required="required" autocomplete="off" value="{{ $flower->name}}">
	      			 </div>
	      			 <div class="form-group">
	      				<label>Bouquets Description</label>
	      				<input type="text" name="description" class="form-control" required="required" autocomplete="off" value="{{ $flower->description}}">
	      			 </div>
	      			 <div class="form-group">
	                    <label>Quantity [ Ex: 5 ]</label>
	                    <input type="text" name="quantity" class="form-control" required="required" autocomplete="off" value="{{ $flower->quantity}}">
	                  </div>
	                  <div class="form-group">
	                    <label>Price</label>
	                    <input type="text" name="price" class="form-control" required="required" autocomplete="off" value="{{ $flower->price}}">
	                  </div>
	      			  <div class="form-group">
	      				<label>Image</label>
	      				<input type="file" name="image" class="form-control-file">
	      			  </div>

	      			  <div class="form-group">
	      			  	<input type="hidden" name="hidden_id" value="{{ $flower->id }}" />
	      				<input type="submit" class="btn btn-outline-success fw-bold fs-4 rounded-pill" value="Save Changes"> 
	      			  </div>
					
				</div>
			</div>
			
      	</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- modal end -->
</center>

@endsection