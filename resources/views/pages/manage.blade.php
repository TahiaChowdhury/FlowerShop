@extends('layout.template')

@section('body-content')
 <center><h4 style="color:#0d6efd; "><b>Manage Flower Bouquets.</b></h4></center>
 <hr>
<div class="container">
<table class="table table-primary table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Bouquet Title</th>
      <th scope="col">Description</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @php $i=1; @endphp
    @foreach($flowers as $flower)
    <tr>
      <th scope="row">{{ $i }}</th>
      <td>{{ $flower->title }}</td>
      <td>{{ $flower->description}}</td>
      <td>{{ $flower->quantity }}</td>
      <td>{{ $flower->price }}</td>
      <td>
          @if (!empty( $flower->image) )
            <img src="{{ asset('img/flowers/' . $flower->image) }}" width="30">
          @else 
          No Image Found
          @endif
      </td>
      <td>
        <div class="action-button">
          <ul>
            <li><a href="{{route('flower.edit',$flower->id )}}"><i class="fa fa-edit"></i></a></li>
            <li><a class="delete_alert" href="{{route('flower.destroy',$flower->id )}}" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></a></li>
          </ul>  
        </div>
      </td>
    </tr>
    @php $i++; @endphp
    @endforeach
                  
  </tbody>
</table>
</div>
@endsection