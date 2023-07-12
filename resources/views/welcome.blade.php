<x-layout>
    <section class="container-fluid bg-dark">
        <div class="row py-5">
            <div class="col-12">
                <h1 class="display-1 text-center text-white">Benvenuti in Article81</h1>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">
            @if ($articles->isNotEmpty())
            @foreach ($articles as $article)
                <div class="col-12 col-md-4">
                    <x-cardArticle :article="$article"></x-cardArticle>
                </div>
            @endforeach                
            @endif
        </div>
    </div>
</x-layout>