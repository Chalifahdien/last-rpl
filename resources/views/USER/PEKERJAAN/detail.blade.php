<x-layout>
    <x-slot:tittle>{{ $tittle }}</x-slot:tittle>
    <x-slot:name>{{ $name }}</x-slot:name>
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Pekerjaan yang tersedia</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <a href="/ambil" class="nav-link">Kembali</a>
        <div class="card-body">

            <div class="card shadow">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">{{ $post['author'] }}</h6>
                </div>
                <div class="card-body">
                    <p>
                        {{ $post['desc'] }}
                    </p>
                    <a href="#" class="btn btn-primary ">Ambil</a>
                </div>
            </div>
            </td>
        </div>
    </div>
</x-layout>
