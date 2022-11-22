@extends('layout.template')
@section('body-content')
   
<h1 class="text-center text-primary">Welcome to Flower Shop</h1>
<br>
<!-- hero image section start -->
<div id="hero-image" style="background-image: ">
  <img src="{{asset('frontend/image/hero.jpg')}}" class="img-fluid" width="100%" height="30%" alt="CoverPhoto" >
</div>
<!-- hero image section start -->
<hr>
<center>
  <h6>Please press the button below to Insert a new Flower Bouquet..</h6>
<!-- Button trigger modal -->
<button type="button btn_create" class="btn btn-outline-primary fw-bold fs-4 rounded-pill" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Add New Flower Boucuets
</button>
<!-- Modal start -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" id="exampleModalLabel">Insert New Flower</h6>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="create" method="POST" enctype="multipart/form-data">
              @csrf 
              <div class="row">
                <div class="col-lg-12">

                  <div class="form-group">
                    <label>Flower Name</label>
                    <input type="text" name="name" class="form-control" required="required" autocomplete="off" placeholder="Enter Flower Name">
                  </div>
                  <div class="form-group">
                    <label>Short Description</label>
                    <textarea class="form-control" rows="4" name="description"></textarea>  
                  </div>
                  <div class="form-group">
                    <label>Quantity [ Ex: 5 ]</label>
                    <input type="text" name="quantity" class="form-control" required="required" autocomplete="off" placeholder="Enter Flower Quantity">
                  </div>
                  <div class="form-group">
                    <label>Price</label>
                    <input type="text" name="price" class="form-control" required="required" autocomplete="off" placeholder="Enter Flower Price">
                  </div>

                  <div class="form-group">
                    <label>Image</label>
                    <input type="file" name="image" class="form-control-file">
                  </div>

          <button type="submit" class="btn btn-outline-success fw-bold fs-4 rounded-pill">Add</button>
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
<br>

<center>
<!-- Button for Insert new Flowers Bouquets -->
<h6>Please press the button below to Manage the data of inserted Flower Bouquets..</h6>
<button type="button" class="btn btn-outline-primary fw-bold fs-4 rounded-pill" >
  <a href="manage">Manage Flower Boucuets</a>
</button>

</center>
<br>
<center>
<h6>Please press the button below to Contact With Us..</h6>
<!-- Button for Contact -->
<button type="button" class="btn btn-outline-primary fw-bold fs-4 rounded-pill" >
  <a href="#">Contact With US</a>
</button>
</center>

<br>
@endsection
