@extends('layout')
@section('content')
<div class="row m-4 text-center">
<h1>Task list</h1>
<table id="tasktable" class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">Sno.</th>
        <th scope="col">UserName</th>
        <th scope="col">Task Detail</th>
        <th scope="col">Task Type</th>
      </tr>
    </thead>
    <tbody>
        @php $sno = 0; @endphp
        @if ($taskdata && $taskdata->count() > 0)
        
        @foreach ($taskdata as $task)
            <tr>
                <td>{{ ++$sno}}</td>
                <td>{{ $task->name }}</td>
                <td>{{ $task->task_detail }}</td>
                <td>{{ $task->task_type }}</td>
            </tr>
        @endforeach
    @else
        <tr>
            <td colspan="4">No users found.</td> 
    @endif
    </tbody>
  </table>
</div>
@endsection
@section('scripts')
<script>
    $(document).ready(function() {
        $('#tasktable').DataTable({
            dom: 'Bfrtip', // This adds the buttons
            buttons: [
                'excel', // Export to Excel
                'csv',   // Export to CSV
                'pdf' // Export to PDF 
            ]
        });
    });
</script>
@endsection