@include('Components.main');
@include('Components.navbar')
    <div class="container m-6">
    <form method="post" action={{$url}}>
        @csrf
        <h2 class="text-center">{{$title}}</h2>
        <div class="form-col">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Title</label>
            <input type="text" name="title" class="form-control" id="inputEmail4" placeholder="Title" value="{{$task->title}}">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Description</label>
            <input type="text" name="description" class="form-control" id="inputPassword4" placeholder="Description"value="{{$task->description}}">
        {{-- <textarea name="description" class="form-control" id="inputPassword4"></textarea>   --}}
        </div>
        </div>
        <div class="form-group col-md-6">
          <label for="inputAddress">Date</label>
          <input type="Date" name="due_date" class="form-control" id="inputAddress" placeholder="Date" value="{{$task->due_date}}">
        </div>
        
        {{-- <div class="form-col">
          
          <div class="form-group col-md-6">
            <label for="inputState">Type</label>
            <select id="inputState" class="form-control" name="type">
              <option selected>Progress</option>
              <option>Pending</option>
              <option>Completed</option>
            </select>
          </div>
          
        </div>
         --}}
        <button type="submit" class="btn btn-primary">Create Task   </button>
      </form>
    </div>
