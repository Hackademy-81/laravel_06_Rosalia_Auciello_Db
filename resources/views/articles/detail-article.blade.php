<x-layout>
    <section class="container-fluid bg-dark">
        <div class="row py-5">
            <div class="col-12">
                <h1 class="display-1 text-center text-white">Dettaglio</h1>
            </div>
        </div>
    </section>
    <section class="container">
        <div class="row py-5">
            <div class="col-12">
                <x-cardArticle :article="$article"></x-cardArticle>
            </div>
        </div>
    </section>
</x-layout>