<div class="container-fluid">
    <!-- Table  -->
    <div class="row">
        <div class="col-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">Tabel Level PIC</h3>&nbsp;
                    <a hre="#" class="btn btn-sm btn-success" wire:click="$refresh">
                    <i class="fas fa-sync"></i>
                    </a>
                    <div class="card-tools">
                    <form wire:submit="search">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" placeholder="cari nama pic" wire:model="query">
                            <button class="btn btn-sm btn-secondary" type="submit">cari</button>
                        </div>
                    </form>
                    </div>
                </div>
                <div class="card-body table-responsive p-0" style="height: 300px;">
                    <table class="table table-head-fixed text-nowrap">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>PIC</th>
                                <th>Level</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $no = 1;
                            @endphp
                            @foreach($pics as $p)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $p->nama_pic }}</td>
                                <td>{{ $p->level_pic }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    {{ $pics->links() }}
                </div>
            </div>
        </div>
    </div>
    <!-- End Table  -->
</div>