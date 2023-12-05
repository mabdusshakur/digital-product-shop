<div>
    <div class="card">
        @include('livewire.admin.partials._alerts')
        <div class="card-body">
            <div class="table-responsive">
                <table class="table align-middle table-striped">
                    <thead class="table-light">
                        <tr>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($brands as $brand)
                            <tr>
                                <td class="productlist">
                                    <a class="d-flex align-items-center gap-2" href="#">
                                        <div class="product-box">
                                            <img src="{{Storage::url($brand->logo)}}" alt="">
                                        </div>
                                        <div>
                                            <h6 class="mb-0 product-title">{{$brand->name}}</h6>
                                        </div>
                                    </a>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center gap-3 fs-6">
                                        <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title=""
                                            data-bs-original-title="View detail" aria-label="Views"><i
                                                class="bi bi-eye-fill"></i></a>
                                        <a href="javascript:;" wire:click="editeBrand({{$brand->id}})" class="text-warning" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Edit info"
                                            aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                                        <a href="javascript:;" wire:click="deleteBrand({{$brand->id}})" class="text-danger" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Delete"
                                            aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <nav class="float-end mt-4" aria-label="Page navigation">
                <ul class="pagination">
                    <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>

        </div>
    </div>
</div>
