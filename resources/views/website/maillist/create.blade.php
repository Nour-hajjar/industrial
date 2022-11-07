
@extends('website.template.master')

@section('content')
    <!-- Page Header -->
    <header class="masthead" style="background-image: url({{ asset('/image/slider-one.jpg') }})">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="page-heading">
                        <h1></h1>
                        <span class="subheading">{{trans('app.mas')}}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
  @extends('website.share')
@section('content') 
              
    <!-- Main Content -->
    <body>
        @if(Session::has('message'))
                    <div class=" alert alert-success">
                        {{Session('message')}}
                    </div>
                @endif
                 @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 <h4 class="hhh">{{trans('app.ml')}}</h4>
 <h4 class="hhh">{{trans('app.mll')}}</h4>


<div class="container">

    <form method="POST" action="/maillistaction">


        {{ csrf_field() }}

       <div>
         <div class="form-group floating-label-form-group controls">
                        <label>Name</label>
                        <input type="name" name="name" class="form-control" placeholder="{{trans('app.name')}}" id="name" required
                               data-validation-required-message="Please enter your name.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Email Address</label>
                        <input type="email" name="email" class="form-control" placeholder="{{trans('app.ema')}}"  id="email" required
                               data-validation-required-message="Please enter your email address.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
             
      <div>
<p> </p>
            <input type="submit"  value="{{trans('app.join')}}">
            

      </div>

    </form>  
 </div>   

</body>               
@endsection()

<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #0085a1;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #0085a1;
}


.hhh{
  text-align: center;
}
</style>
   