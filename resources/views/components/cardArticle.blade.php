<div class="card mt-5">
    <img src="{{Storage::url($article['img'])}}" class="card-img-top" alt="...">
    <div class="card-body d-flex flex-column justify-content-center align-items-center">
      <h5 class="card-title fw-bold">{{$article['author']}}</h5>
      <p class="card-text">{{$article['title']}}</p>
      <p class="card-text">{{$article->getdescriptionSubstring()}}</p>
      <p class="card-text">Caricato il: {{$article->getFormatDate()}}</p>
      @if(Route::currentRouteName()=='homePage')
      <a href="{{route('pageDetail', ['idArticle'=>$article['id']])}}" class="btn btn-primary">Scopri di più</a>
      @else
      <div class="d-flex justify-content-center"> 
        <a href="{{route('homePage')}}" class="btn btn-primary mx-2">Torna alla Home</a>
        @if (Auth::user()->name==$article['author'])
              <a href="{{route('article.update', ['article'=>$article])}}" class="btn btn-warning mx-2">Modifica</a>
              <form action="{{route('article.delete', ['article'=>$article])}}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">Elimina</button>
              </form>
        @endif
      </div>    
      @endif
    </div>
</div>