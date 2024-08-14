@extends('backend.layouts.master')

@section('main-content')

<div class="card">
    <h5 class="card-header">Edit Event</h5>
    <div class="card-body">
      <form method="post" action="{{route('event.update', $event->id)}}">
        {{csrf_field()}}
        @method('put')
        <div class="form-group">
          <label for="inputTitle" class="col-form-label">Name</label>
        <input id="inputTitle" type="text" name="name" placeholder="Enter name"  value="{{$event->name}}" class="form-control">
        @error('name')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>

        <div class="form-group">
            <label for="inputEmail" class="col-form-label">Date</label>
          <input id="inputEmail" type="date" name="event_date" placeholder="Enter Date"  value="{{$event->event_date}}" class="form-control">
          @error('event_date')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
            <label for="Price" class="col-form-label">Price</label>
          <input id="Price" type="number" name="price" placeholder="Enter Price"  value="{{$event->price}}" class="form-control">
          @error('price')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        
        <div class="form-group">
            <label for="time" class="col-form-label">Time</label>
          <input id="time" type="time" name="time" placeholder="Enter Time"  value="{{$event->time}}" class="form-control">
          @error('time')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
          <div class="form-group">
            <label for="status" class="col-form-label">Status</label>
            <select name="status" class="form-control">
                <option @if($event->status =='active') selected @endif value="active">Active</option>
                <option @if($event->status =='inactive') selected @endif value="inactive">Inactive</option>
            </select>
          @error('status')
          <span class="text-danger">{{$message}}</span>
          @enderror
          </div>
        <div class="form-group mb-3">
          <button type="reset" class="btn btn-warning">Reset</button>
           <button class="btn btn-success" type="submit">Submit</button>
        </div>
      </form>
    </div>
</div>

@endsection

@push('scripts')
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script>
    $('#lfm').filemanager('image');
</script>
@endpush