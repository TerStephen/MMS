<table class="table table-bordered" id="worker-table">
    <thead>
       <tr>
          <th>User ID</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email</th>
          <th></th>
       </tr>
    </thead>
    <tbody>
        @foreach ($workers as $worker)
        <tr>
            <td>{{$worker->worker_id}}</td>
            <td>{{$worker->worker_first_name}}</td>
            <td>{{$worker->worker_last_name}}</td>
            <td>{{$worker->worker_email}}</td>
            <td> <a href="{{ url('/worker/edit/'.$worker->worker_id) }}"><button type="button" class="btn btn-primary" >Edit</button></a> </td>
        </tr>  
        @endforeach

    </tbody>
 </table>

<script>
    $(document).ready( function () {
        $('#worker-table').DataTable();
    } );
</script>
