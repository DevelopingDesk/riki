@extends('dashboard')
@section('content')

<!DOCTYPE html>
<html>
<head>
	<title>adding category</title>
</head>
<body>
<form action="{{route('post.subcategory')}}" method="post">
	<div class="row">
<div class="col-md-8">
	<input type="hidden" name="categoryid" value="{{$categoryid}}">
<input type="text" name="name" class=" form-control" placeholder="add new subcategory">
		</div> 

{{csrf_field()}}

<button class="btn btn-success">Save</button>

	


	</div>
	<hr>
	<h2>SubCategories</h2>
	<div class="row">
		@foreach($subcategory as $cat)
		<div class="col-md-3 col-sm-6 m-b-10">
        <div class="tiles blue">
          <div class="tiles-body">
            <div class="controller"> <a class="reload" href="{{route('delete.subcatgory',$cat->id)}}"></a> <a class="remove" href="{{route('delete.subcatgory',$cat->id)}}"></a> </div>
            <div class="tiles-title"> {{$cat->name}}</div>
            <div class="heading"> <span data-animation-duration="1200" data-value="" class="animate-number"></span></div>
            
            <div class="description"><a href="{{route('get.product',$cat->id)}}" class="hashtags transparent">Upload Products</a></div>
          </div>
        </div>
      </div>
      @endforeach
	</div>


</form>

</body>
</html>

@endsection