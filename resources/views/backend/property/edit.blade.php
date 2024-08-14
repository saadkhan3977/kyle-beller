@extends('backend.layouts.master')

@section('main-content')
<style>
    .tag {
            display: inline-block;
            padding: 0.5em 1em;
            margin: 0.2em;
            background-color: #007bff;
            color: white;
            border-radius: 20px;
        }
        .tag .remove-tag {
            margin-left: 0.5em;
            cursor: pointer;
        }
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
<form action="{{route('property.update',$property->id)}}" method="POST" id="myForm" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="row">
        <div class="col-lg-8 col-md-4 col-sm-12 col-xs-12">
            <div class="card">
                <h5 class="card-header bg-gradient-primary">Edit Property</h5>
                <div class="card-body">
                    <div class="form-group">
                        <label class="form-label">Property Title</label>
                        <input type="text" name="title" class="form-control" value="{{$property->title}}">
                        @error('title')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">Price</label>
                        <input type="number" class="form-control" name="price" value="{{$property->price}}" required>
                        @error('price')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label">Bedroom</label>
                        <input type="number" class="form-control" name="bedroom" value="{{$property->bedroom}}" required>
                        @error('bedroom')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label">Bathroom</label>
                        <input type="number" class="form-control" name="bathroom" value="{{$property->bathroom}}" required>
                        @error('bathroom')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label">City</label>
                        <input type="text" class="form-control" name="city" value="{{$property->city}}" required>
                        @error('city')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label">Address</label>
                        <input type="text" class="form-control" name="address" value="{{$property->address}}" required>
                        @error('address')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label">Area (Square Feet)</label>
                        <input type="number" class="form-control" name="area" value="{{$property->area}}" required>
                        @error('area')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="featured">Featured</label>
                        <input type="checkbox" id="featured" name="featured" @if($property->featured == 1) checked @endif class="filled-in" value="1" />
                        @error('featured')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="tinymce">Description</label>
                        <textarea name="description" id="summernote">{{$property->description}}</textarea>
                        @error('description')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="tinymce-nearby">Nearby</label>
                        <textarea name="nearby" class="form-control">{{$property->nearby}}</textarea>
                        @error('nearby')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group u-tagsinput">
                        <label for="">Features</label>
                        <div class="tags-input-wrapper" id="tags-input-wrapper">
                            <input type="text" id="hashtags" value="{{$property->features}}" placeholder="Type a hashtag and press enter">
                        </div>
                        <input type="hidden" name="features" id="hiddenHashtags">
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label>GALLERY IMAGE</label>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <a id="lfmm" data-input="thumbnaild" data-preview="holderrr" style="color: white;" class="btn btn-primary">
                                        <i class="fa fa-picture-o"></i> Choose
                                        </a>
                                    </span>
                                    <input readonly id="thumbnaild" class="form-control" type="text" name="gallaryimage[]" value="{{$property->gallaryimag}}">
                                    <!-- <input id="input-id" type="file" name="gallaryimage[]" class="form-control" multiple> -->
                                </div>
                            </div>
                            <div id="holderrr" style="margin-top:15px;max-height:100px;">
                                @php $tags = explode(',',$property->gallaryimage); @endphp
                                @foreach($tags as $gallaryimage)
                                <img src="{{$gallaryimage}}" width="100" alt="">
                                @endforeach
                            </div>
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
                            <option @if($property->purpose == 'sale') selected @endif value="sale">Sale</option>
                            <option @if($property->purpose == 'rent') selected @endif value="rent">Rent</option>
                        </select>
                        @error('purpose')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Select Type</label>
                        <select name="type" class="form-control show-tick">
                            <option value="">-- Please select --</option>
                            <option @if($property->type == 'house') selected @endif value="house">House</option>
                            <option @if($property->type == 'apartment') selected @endif value="apartment">Apartment</option>
                        </select>
                        @error('sku')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    
                    
                    <div class="form-group u-tagsinput" >
                        <label for="">Video</label>
                        <input type="text" class="form-control" name="video_url" value="{{$property->video}}" placeholder="Video Url">
                    </div>
                    
                    <div class="form-group u-tagsinput" >
                        <label for="">Google Map</label>
                        <input type="text" class="form-control" name="latitude" value="{{$property->latitude}}" placeholder="Latitude"><br>
                        <input type="text" class="form-control" name="longitude" value="{{$property->longitude}}" placeholder="Longitude">
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
                                <a id="lfmmm" style="color: white;" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                <i class="fa fa-picture-o"></i> Choose
                                </a>
                            </span>
                            <input readonly id="thumbnail" class="form-control" type="text" name="floor_plan" value="{{$property->floor_plan}}">
                        </div>
                    </div>
                    <div id="holder" style="margin-top:15px;max-height:100px;">
                        <img src="{{$property->floor_plan}}" width="100" alt="">
                    </div>

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
                                <a id="lfmmmm" style="color: white;" data-input="thumbnaill" data-preview="holderr" class="btn btn-primary">
                                <i class="fa fa-picture-o"></i> Choose
                                </a>
                            </span>
                            <input readonly id="thumbnaill" class="form-control" type="text" name="featured_image" value="{{$property->featured_image}}">
                        </div>
                    </div>
                    <div id="holderr" style="margin-top:15px;max-height:100px;">
                        <img src="{{$property->featured_image}}" width="100" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-md-4 col-sm-12 col-xs-12">
            <br>
            <button class="btn btn-success" type="submit">Update</button>
        </div>
    </div>
    </form>
</div>
@endsection