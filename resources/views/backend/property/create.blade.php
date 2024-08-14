@extends('backend.layouts.master')

@section('main-content')
<style>
    h5{
        color:white;
    }
        .tags-input-wrapper {
            border: 1px solid #ced4da;
            padding: 0.5rem;
            display: flex;
            flex-wrap: wrap;
            min-height: 38px;
            align-items: center;
        }
        .tags-input-wrapper input {
            border: none;
            outline: none;
            flex-grow: 1;
            min-width: 200px; /* Adjust width as needed */
            margin: 2px;
        }
        .tag {
            background-color: #007bff;
            color: white;
            padding: 0.3rem;
            margin: 2px;
            border-radius: 0.2rem;
            display: flex;
            align-items: center;
        }
        .tag .remove-tag {
            margin-left: 0.5rem;
            cursor: pointer;
        }
    </style>
<div class="container">
    <form action="{{route('property.store')}}" method="POST" id="myForm" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-lg-8 col-md-4 col-sm-12 col-xs-12">
            <div class="card">
                <h5 class="card-header bg-gradient-primary">Create Property</h5>
                <div class="card-body">
                    <div class="form-group">
                        <label class="form-label">Property Title</label>
                        <input type="text" name="title" class="form-control" value="{{old('title')}}">
                        @error('title')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">Price</label>
                        <input type="number" class="form-control" name="price" required>
                        @error('price')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label">Bedroom</label>
                        <input type="number" class="form-control" name="bedroom" required>
                        @error('bedroom')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label">Bathroom</label>
                        <input type="number" class="form-control" name="bathroom" required>
                        @error('bathroom')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label">City</label>
                        <input type="text" class="form-control" name="city" required>
                        @error('city')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label">Address</label>
                        <input type="text" class="form-control" name="address" required>
                        @error('address')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label">Area (Square Feet)</label>
                        <input type="number" class="form-control" name="area" required>
                        @error('area')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="featured">Featured</label>
                        <input type="checkbox" id="featured" name="featured" class="filled-in" value="1" />
                        @error('featured')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="tinymce">Description</label>
                        <textarea name="description" id="summernote">{{old('description')}}</textarea>
                        @error('description')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="tinymce-nearby">Nearby</label>
                        <textarea name="nearby" class="form-control">{{old('nearby')}}</textarea>
                        @error('nearby')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group u-tagsinput">
                        <label for="">Features</label>
                        <!-- <div class="tags-input-wrapper" id="tags-input-wrapper"> -->
                            <input type="text" class="form-control" data-role="tagsinput" placeholder="Type a hashtag and press enter">
                        <!-- </div> -->
                        <!-- <input type="hidden" name="features" id="hiddenHashtags"> -->
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label>GALLERY IMAGE</label>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <a id="lfmm" data-input="thumbnaild" data-preview="holder" style="color: white;" class="btn btn-primary">
                                        <i class="fa fa-picture-o"></i> Choose
                                        </a>
                                    </span>
                                    <input readonly id="thumbnaild" class="form-control" type="text" name="gallaryimage" value="{{old('gallaryimage')}}">
                                    <!-- <input id="input-id" type="file" name="gallaryimage[]" class="form-control" multiple> -->
                                </div>
                            </div>
                            <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="card">
                <h5 class="card-header bg-gradient-primary">Select</h5>
                <div class="card-body">
                    <div class="form-group">
                        <label>Select Purpose</label>
                        <select name="purpose" class="form-control show-tick">
                            <option value="">-- Please select --</option>
                            <option value="sale">Sale</option>
                            <option value="rent">Rent</option>
                        </select>
                        @error('purpose')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Select Type</label>
                        <select name="type" class="form-control show-tick">
                            <option value="">-- Please select --</option>
                            <option value="house">House</option>
                            <option value="apartment">Apartment</option>
                        </select>
                        @error('sku')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    
                    
                    <div class="form-group u-tagsinput" >
                        <label for="">Video</label>
                        <input type="text" class="form-control" name="video_url"  placeholder="Video Url">
                    </div>
                    
                    <div class="form-group u-tagsinput" >
                        <label for="">Google Map</label>
                        <input type="text" class="form-control" name="latitude"  placeholder="Latitude"><br>
                        <input type="text" class="form-control" name="longitude"  placeholder="Longitude">
                    </div>
                </div>
            </div><br>
            <div class="card">
                <h5 class="card-header bg-gradient-primary">Floor Plan</h5>
                <div class="card-body">
                    <div class="form-group u-tagsinput" >
                        <!-- <label for=""></label> -->
                        <!-- <input type="file" class="form-control" name="floor_plan"> -->
                        <div class="input-group">
                            <span class="input-group-btn">
                                <a id="lfmmm" style="color: white;" data-input="thumbnail" data-preview="holderr" class="btn btn-primary">
                                <i class="fa fa-picture-o"></i> Choose
                                </a>
                            </span>
                            <input readonly id="thumbnail" class="form-control" type="text" name="floor_plan" value="{{old('floor_plan')}}">
                        </div>
                    </div>
                    <div id="holderr" style="margin-top:15px;max-height:100px;"></div>
                </div>
            </div><br>
            <div class="card">
                <h5 class="card-header bg-gradient-primary">FEATURED IMAGE</h5>
                <div class="card-body">
                    <div class="form-group u-tagsinput" >
                        <!-- <label for="">Video</label> -->
                        <!-- <input type="file" class="form-control" name="featured_image"> -->
                        <div class="input-group">
                            <span class="input-group-btn">
                                <a id="lfmmmm" style="color: white;" data-input="thumbnaill" data-preview="holderrr" class="btn btn-primary">
                                <i class="fa fa-picture-o"></i> Choose
                                </a>
                            </span>
                            <input readonly id="thumbnaill" class="form-control" type="text" name="featured_image" value="{{old('featured_image')}}">
                        </div>
                    </div>
                    <div id="holderrr" style="margin-top:15px;max-height:100px;"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-md-4 col-sm-12 col-xs-12">
            <br>
            <button class="btn btn-success" type="submit">Submit</button>
        </div>
    </div>
    </form>
</div>


<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->

@endsection

