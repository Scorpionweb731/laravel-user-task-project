@extends('layout')
@section('content')
<div class="row m-4 text-center">
<h1>User list</h1>
<table id="usertable" class="table table-bordered" >
    <thead>
      <tr>
        <th scope="col">Sno.</th>
        <th scope="col">UserName</th>
        <th scope="col">Email</th>
        <th scope="col">Mobile</th>
      </tr>
    </thead>
    <tbody>
        @php $sno = 0; @endphp
        @if ($userdata && $userdata->count() > 0)
        
        @foreach ($userdata as $user)
            <tr>
                <td>{{ ++$sno}}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->mobile }}</td>
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
        $('#usertable').DataTable({
            dom: 'Bfrtip', // This adds the buttons
            buttons: [
                'excel', // Export to Excel
                'csv',   // Export to CSV
                'pdf', // Export to PDF 
            ]
        });
    });
</script>
@endsection