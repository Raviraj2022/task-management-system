@include('Components.main')
@include('Components.navbar')
<div class="container">
    <h2>Task Management System</h2>
<table class="table">
   <a href="{{url("/insert_task")}}"> <button class="bg-primary float-right">Add Task</button></a>
    <thead>
      <tr>
        <th scope="col">S.no</th>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">Status</th>
        <th scope="col">Due  Date</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($tasks as $item)
            {{-- $i=0; --}}
        
      <tr>
        {{-- <td>{{$i++}}</td> --}}
        <td>1</td>
        <td>{{$item->title}}</td>
        <td>{{$item->description}}</td>
        <td>@if($item->type =="0")
        <button class="btn"><span class="badge badge-danger">Pending</span></button> 
       @else
       <button class="btn"><span class="badge badge-success">Completed</span></button>
            @endif</td>
        <td>{{$item->due_date}}</td>
        <td><a href="{{url('task/edit/')}}/{{$item->task_id}}" class="btn btn-secondary">Edit</a>
            <a href="{{url('task/delete/')}}/{{$item->task_id}}" class="btn btn-danger">Delete</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>