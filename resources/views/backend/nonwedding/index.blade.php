@extends('backend.layouts.master')

@section('main-content')
 <!-- DataTales Example -->
 <div class="card shadow mb-4">
     <div class="row">
         <div class="col-md-12">
            @include('backend.layouts.notification')
         </div>
     </div>
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary float-left">Non Wedding Form List</h6>
      <!-- <a href="{{route('event.create')}}" class="btn btn-primary btn-sm float-right" data-toggle="tooltip" data-placement="bottom" title="Add Event"><i class="fas fa-plus"></i> Add Event</a> -->
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="user-dataTable" width="100%" cellspacing="0">
          <thead>
          <tr>
              <th>S.No</th>                    
              <th>User Name</th>
              <th>Type</th>
              <th>Event Date</th>
              <th>Start Time</th>
              <th>End Time</th>
              <th>Venue</th>
              <th>Contact Person Name</th>
              <th>Contact No</th>
              <th>Guests</th>
              <th>Microphones</th>
              <th>Marital Status</th>
              <th>Speaker Name</th>
              <th>Speech Time</th>
              <th>Music Style Preference</th>
              <th>Specific Song Requests</th>
              <th>additional details</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
         
          <tbody>
            @foreach($events as $user)   
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->user->name}}</td>
                    <td>{{$user->type}}</td>
                    <td>{{$user->event_date}}</td>
                    <td>{{$user->start_time}}</td>
                    <td>{{$user->end_time}}</td>
                    <td>{{$user->venue}}</td>
                    <td>{{$user->contact_person_name}}</td>
                    <td>{{$user->contact}}</td>
                    <td>{{$user->no_of_guest}}</td>
                    <td>{{$user->microphone}}</td>
                    <td>{{$user->marital_status}}</td>
                    <td>{{$user->speaker_name}}</td>
                    <td>{{$user->speach_time}}</td>
                    <td>{{$user->music_style}}</td>
                    <td>{{$user->song_requests}}</td>
                    <td>{{$user->additional_details}}</td>
                    <td>{{$user->status}}</td>
                    <td>
                        <!-- <a href="/admin/non-wedding-detail/{{$user->id}}" class="btn btn-primary btn-sm float-left mr-1" style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip" title="edit" data-placement="bottom"><i class="fas fa-eye"></i></a> -->
                    <form method="POST" action="{{route('event.destroy',[$user->id])}}">
                      @csrf 
                      @method('delete')
                          <button class="btn btn-danger btn-sm dltBtn" data-id={{$user->id}} style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>  
            @endforeach
          </tbody>
        </table>
        <span style="float:right">{{$events->links()}}</span>
      </div>
    </div>
</div>
@endsection

@push('styles')
  <link href="{{asset('backend/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
  <style>
      div.dataTables_wrapper div.dataTables_paginate{
          display: none;
      }
  </style>
@endpush

@push('scripts')

  <!-- Page level plugins -->
  <script src="{{asset('backend/vendor/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('backend/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="{{asset('backend/js/demo/datatables-demo.js')}}"></script>
  <script>
      
      $('#user-dataTable').DataTable( {
            "columnDefs":[
                {
                    "orderable":false,
                    "targets":[6,7]
                }
            ]
        } );

        // Sweet alert

        function deleteData(id){
            
        }
  </script>
  <script>
      $(document).ready(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
          $('.dltBtn').click(function(e){
            var form=$(this).closest('form');
              var dataID=$(this).data('id');
              // alert(dataID);
              e.preventDefault();
              swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this data!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                       form.submit();
                    } else {
                        swal("Your data is safe!");
                    }
                });
          })
      })
  </script>
@endpush