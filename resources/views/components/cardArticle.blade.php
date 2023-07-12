<div class="card mt-5">
    <img src="{{Storage::url($article['img'])}}" class="card-img-top" alt="...">
    <div class="card-body d-flex flex-column justify-content-center align-items-center">
      <h5 class="card-title fw-bold">{{$article['author']}}</h5>
      <p class="card-text">{{$article['title']}}</p>
      <p class="card-text">{{$article->getdescriptionSubstring()}}</p>
      <p class="card-text">Caricato il: {{$article->getFormatDate()}}</p>
      <a href="#" class="btn btn-primary">Scopri di più</a>
    </div>
</div>