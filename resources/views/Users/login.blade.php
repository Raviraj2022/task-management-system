@include('Components.main')
@include('Components.navbar')
<div class="container m-10  ">
<form method="post" action="/check_user">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" value="{{old('email')}}">
      
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" value="{{old('password')}}">
    </div>
   
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>