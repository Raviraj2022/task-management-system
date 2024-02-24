@include('Components.main');
@include('Components.navbar');
<div class="container">
<form method="post" action="/save_user">
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input type="text" class="form-control" 
         aria-describedby="emailHelp" placeholder="Enter name" name="name" value="{{old('name')}}" >
        
      </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" value="{{old('email')}}">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" value="{{old('password')}}">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Confirm Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="confirm_password" value="{{old('confirm_password')}}">
      </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>