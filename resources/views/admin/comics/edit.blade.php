@extends('layouts.dashboard')

@section('content')

<h1>Aggiorna Comics</h1>

  @if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
  <br /> 
  @endif
  <form action="{{ route('admin.comics.update', $comic) }}" method="post" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="form-group">
        <label for="title">Titolo</label>
        <input type="text"
          class="form-control" name="title" id="title" aria-describedby="titleHelper" value="{{$comic->title}}">
        <small id="titleHelper" class="form-text text-muted">Titolo Comics</small>
      </div>
      @error('title')
        <div class="alert alert-danger">{{ $message }}</div>    
      @enderror

      <div class="form-group">
        <label for="description">Descrizione</label>
        <textarea class="form-control" name="description" id="description" rows="5" value="{{ old('description') }}">{{$comic->description}}</textarea>
      </div>
      @error('description')
        <div class="alert alert-danger">{{ $message }}</div>    
      @enderror

        <div class="form-group">
            <label for="price">Prezzo</label>
            <input type="text" name="price" id="price" value="{{$comic->price}}" placeholder="Massimo 999.99€">
        </div>
        @error('price')
        <div class="alert alert-danger">{{ $message }}</div>    
        @enderror

     <div class="form-group">
        <label for="availability">Disponibilità</label>
        <select class="form-control" name="availability" id="availability">
          <option value=1>Si</option>
          <option value=0>No</option>
        </select>
      </div>
      @error('availability')
      <div class="alert alert-danger">{{ $message }}</div>    
      @enderror

      <div class="form-group">
        <label for="cover">Cover Image</label>
        <input type="file" class="form-control-file" name="cover" id="cover" placeholder="Change cover image" aria-describedby="coverImgHelper">
        <small id="coverImgHelper" class="form-text text-muted">Change cover image</small>
    </div>
    @error('cover')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    

        <button type="submit" class="btn btn-success">Aggiorna</button>

    </form>

@endsection