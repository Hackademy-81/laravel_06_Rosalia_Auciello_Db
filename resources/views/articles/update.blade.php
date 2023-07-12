<x-layout>
    <section class="container bg-dark">
        <div class="row py-5">
            <div class="col-12">
                <h1 class="display-1 text-center text-white">Modifica</h1>
            </div>
        </div>
    </section>
    <section class="container">
        <div class="row py-5 justify-content-center">
            <div class="col-12 col-md-8">
                <form method="POST" action="{{route('article.edit', ['article'=>$article])}}" class="py-5" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                      <label class="form-label">Autore</label>
                      <input type="text" class="form-control @error('author') is-invalid @enderror" name="author" value="{{$article['author']}}">
                        @error('author')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Titolo</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{$article['title']}}">
                        @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Descrizione</label>
                        <textarea name="description" cols="30" rows="10" class="form-control @error('description') is-invalid @enderror" placeholder="Inserisci descrizione">{{$article['description']}}</textarea>
                        @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Img Corrente:</label>
                        <img src="{{Storage::url($article['img'])}}" alt="" height="150px" width="150px">
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
            </div>
        </div>
    </section>
</x-layout>