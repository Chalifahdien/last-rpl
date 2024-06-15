<x-layout-admin>
    <x-slot:tittle>{{ $tittle }}</x-slot:tittle>

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Pekerjaan yang tersedia</h1>
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
                        <tr>
                            <td>
                                <div class="card shadow">
                                    <div class="card-header py-3">
                                        <span class="m-0 font-weight-bold text-primary">
                                            Nasi Kotak jadi Bubur, ini judul Lur
                                        </span> | <a href="#">By Chalifahdien</a>
                                    </div>
                                    <div class="card-body">
                                        The styling for this basic card example is created by using default Bootstrap
                                        utility classes. By using utility classes, the style of the card component can
                                        be
                                        easily modified with no need for any custom CSS!
                                        <p class="card-text">
                                            This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                        <p class="card-text">
                                            <small class="text-body-secondary">
                                                Tenggat Waktu : 2 Januri 2024
                                            </small>
                                        </p>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</x-layout-admin>
