<div class="modal fade" id="detailTaskModal" tabindex="-1" aria-labelledby="detailTaskModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body px-5 pt-4 pb-5">
                <div class="row align-items-stretch mb-1">
                    <div class="col mb-4">
                        <input type="text" class="form-control-plaintext py-2" id="inputTitle" placeholder="Untitled" name="title" readonly>
                    </div>
                </div>
                <div class="row align-items-stretch mb-1">
                    <div class="col-3 py-2">
                        <i class="bi bi-check-circle me-1"></i> Status
                    </div>
                    <div class="col d-flex align-items-center py-auto">
                        <p class="card-status mb-0">New</p>
                    </div>
                </div>
                <div class="row align-items-stretch mb-1">
                    <div class="col-3 py-2">
                        <i class="bi bi-calendar me-1"></i> Due Date
                    </div>
                    <div class="col d-flex align-items-center">
                        <div class="input-group">
                            <input type="datetime-local" class="form-control-plaintext" id="inputDate" name="due_date" readonly>
                        </div>
                    </div>
                </div>
                <div class="row align-items-stretch mb-1">
                    <div class="col-3 py-2">
                        <i class="bi bi-book me-1"></i> Subject
                    </div>  
                    <div class="col d-flex align-items-center">
                        <div class="btn-group btn-input-subject">
                            <button type="button" class="btn subject none btn-sm">
                                Subject
                            </button>
                        </div>                                      
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-3 py-2">
                        <i class="bi bi-file-earmark me-1"></i> Description
                    </div>  
                    <div class="col py-2">
                        <div class="input-group">
                            <textarea class="form-control-plaintext p-0" name="description" id="inputDescription" cols="30" rows="8" placeholder="Empty" readonly></textarea>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>