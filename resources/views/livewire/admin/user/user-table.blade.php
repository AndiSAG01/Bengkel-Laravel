<div>
    <div class="row">
        <div class="col-12">
            <div class="dashboard_header mb_50">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="dashboard_header_title">
                            <h3> Data Admin <i class="fas fa-users"></i></h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="dashboard_breadcam text-end">
                            <p><a href="index.html">Dashboard</a> <i class="fas fa-caret-right"></i> Data Admin</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="QA_section">
                <div class="white_box_tittle list_header">
                    <h4></h4>
                    <div class="box_right d-flex lms_block">
                        <div class="serach_field_2">
                            <div class="search_inner">
                                <form Active="#">
                                    <div class="search_field">
                                        <input type="text" placeholder="Pencarian Admin"
                                            wire:model.live="search">
                                    </div>
                                    <button type="submit"> <i class="ti-search"></i> </button>
                                </form>
                            </div>
                        </div>

                        <div class="add_button ms-2">
                            @livewire('admin.user.user-create')
                        </div>
                    </div>
                </div>
                <div class="QA_table mb_30">
                    <!-- table-responsive -->
                    <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Admin</th>
                                <th scope="col">Email</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $key => $item)
                                <tr>
                                    <th scope="row"> <a href="#" class="question_content">
                                            {{ $users->firstItem() + $key }}
                                        </a></th>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>
                                        <a href="{{ route('user.edit', $item->id) }}"
                                            class="btn btn-info btn-sm btn-block text-dark">Edit</a>
                                        <button class="btn btn-danger btn-sm"
                                            wire:click="confirmDelete({{ $item->id }})">
                                            Hapus
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-end mt-3">
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            window.addEventListener('show-delete-alert', event => {
                Swal.fire({
                    title: 'Yakin ingin menghapus?',
                    text: "Data ini akan dihapus permanen!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Ya, hapus!',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Livewire.dispatch('deleteConfirmed', {
                            id: event.detail.id
                        });
                    }
                });
            });

            window.addEventListener('deleted', () => {
                Swal.fire(
                    'Terhapus!',
                    'Data berhasil dihapus.',
                    'success'
                );
            });
        </script>
    @endpush
</div>
