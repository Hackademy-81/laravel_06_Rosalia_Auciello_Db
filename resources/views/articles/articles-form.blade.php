<x-layout>
    <section class="container-fluid bg-dark">
        <div class="row py-5">
            <div class="col-12">
                <h1 class="display-2 text-center text-white">Aggiungi un nuovo articolo</h1>
            </div>
        </div>
    </section>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <x-formArticles></x-formArticles>
            </div>
        </div>
    </div>
</x-layout>   