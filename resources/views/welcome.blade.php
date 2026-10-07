<x-layout>
        <!-- Seção Hero -->
    <div class="bg-primary text-white py-5 text-center">
        <div class="container">
            <h1 class="display-4 fw-bold mb-3">Bem-vindo à Sua Biblioteca de Livros</h1>
            <p class="lead mb-4">Organize e gerencie sua coleção de livros com facilidade</p>
            <a href="{{ route('books.index') }}" class="btn btn-light btn-lg px-5 fw-semibold">Navegar pela Coleção</a>
        </div>
    </div>

    <!-- Livros Recentes -->
    <div class="container py-5">
        <h2 class="mb-4">Livros Adicionados Recentemente</h2>
        <div class="row g-4">
            <!-- Cards dos Livros -->
            @foreach ($books as $book)
                {{-- O ":" é para ele aceitar o $book como uma array --}}
                <div class="col-md-6 col-lg-4">
                    <x-book-card :book="$book" class="shadow-md"/>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>