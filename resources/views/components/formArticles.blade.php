<form method="POST" action="{{route('articleCreated')}}" class="py-5" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label class="form-label">Autore</label>
      <input type="text" class="form-control @error('author') is-invalid @enderror" name="author" value="{{old('author')}}">
        @error('author')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Titolo</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{old('title')}}">
        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Descrizione</label>
        <textarea name="description" cols="30" rows="10" class="form-control @error('description') is-invalid @enderror" placeholder="Inserisci descrizione">{{old('description')}}</textarea>
        @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Img</label>
        <input type="file" class="form-control @error('img') is-invalid @enderror" name="img" value="{{old('img')}}">
        @error('img')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>