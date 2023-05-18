<div class="modal fade" id="createTaskModal" tabindex="-1" aria-labelledby="createTaskModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body px-5 pt-4 pb-5">
                <div class="row align-items-stretch mb-1">
                    <div class="col mb-4">
                        <input type="text" class="form-control-plaintext py-2" id="inputTitle" placeholder="Untitled">
                    </div>
                </div>
                <div class="row align-items-stretch mb-1">
                    <div class="col-3 py-2">
                        <i class="bi bi-check-circle me-1"></i> Status
                    </div>
                    <div class="col d-flex align-items-center py-auto">
                        <p class="mb-0">New</p>
                    </div>
                </div>
                <div class="row align-items-stretch mb-1">
                    <div class="col-3 py-2">
                        <i class="bi bi-calendar me-1"></i> Due Date
                    </div>
                    <div class="col d-flex align-items-center">
                        <div class="input-group">
                            <input type="datetime-local" class="form-control-plaintext" id="inputDate">
                        </div>
                    </div>
                </div>
                <div class="row align-items-stretch mb-1">
                    <div class="col-3 py-2">
                        <i class="bi bi-book me-1"></i> Subject
                    </div>  
                    <div class="col d-flex align-items-center">
                        <div class="btn-group btn-input-subject">
                            <button type="button" class="btn subject none btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                Subject
                            </button>
                            <ul class="dropdown-menu">
                                <li><button class="dropdown-item" data-subject-id="1" data-subject-initials="kj"><small>Keamanan Jaringan</small></button></li>
                                <li><button class="dropdown-item" data-subject-id="2" data-subject-initials="dw"><small>Data Warehouse</small></button></li>
                                <li><button class="dropdown-item" data-subject-id="3" data-subject-initials="pkj"><small>Praktikum Keamanan Jaringan</small></button></li>
                                <li><button class="dropdown-item" data-subject-id="4" data-subject-initials="pppb"><small>Praktikum Pemrograman Perangkat Bergerak</small></button></li>
                                <li><button class="dropdown-item" data-subject-id="5" data-subject-initials="ppl"><small>Pemodelan Perangkat Lunak</small></button></li>
                                <li><button class="dropdown-item" data-subject-id="6" data-subject-initials="pf"><small>Pemrograman Framework</small></button></li>
                                <li><button class="dropdown-item" data-subject-id="7" data-subject-initials="mpl"><small>Manajemen Perangkat Lunak</small></button></li>
                                <li><button class="dropdown-item" data-subject-id="8" data-subject-initials="pmb"><small>Praktikum Mesin Pembelajaran</small></button></li>
                                <li><button class="dropdown-item" data-subject-id="9" data-subject-initials="ppb"><small>Pemrograman Perangkat Bergerak</small></button></li>
                                <li><button class="dropdown-item" data-subject-id="10" data-subject-initials="pppl"><small>Praktikum Pemodelan Perangkat Lunak</small></button></li>
                            </ul>
                            <input id="inputSubject" class="d-none" type="text" name="subject">
                        </div>                                      
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-3 py-2">
                        <i class="bi bi-file-earmark me-1"></i> Description
                    </div>  
                    <div class="col py-2">
                        <div class="input-group">
                            <textarea class="form-control-plaintext p-0" name="decription" id="inputDescription" cols="30" rows="8" placeholder="Empty"></textarea>
                        </div>  
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="button" class="btn btn-primary">Create</button>
                </div>
            </div>
        </div>
    </div>
</div>