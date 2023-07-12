<x-layout>
    <section class="container-fluid bg-dark">
        <div class="row py-5">
            <div class="col-12">
                <h1 class="display-1 text-center text-white">Accedi</h1>
            </div>
        </div>
    </section>
    <section class="container">
        <div class="row py-5">
            <div class="col-12 col-md-8">
                <form method="POST" action="{{route('login')}}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </section>
</x-layout>