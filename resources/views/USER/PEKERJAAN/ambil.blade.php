<x-layout>
    <x-slot:tittle>{{ $tittle }}</x-slot:tittle>
    <x-slot:name>{{ $name }}</x-slot:name>
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Pekerjaan yang tersedia</h1>
    <hr>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-borderless" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>
                                <hr class="mt-0">
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td>
                                    <div class="card shadow">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary">{{ $post['author'] }}</h6>
                                        </div>
                                        <div class="card-body">
                                            <p>
                                                {{ Str::limit($post['desc'], 70) }}
                                            </p>
                                            <a href="/ambil/{{ $post['slug'] }}" class="btn btn-primary ">Detail</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layout>
