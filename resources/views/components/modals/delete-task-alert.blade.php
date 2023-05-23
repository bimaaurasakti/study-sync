<div class="modal fade" id="deleteTaskAlert" tabindex="-1" aria-labelledby="deleteTaskAlertLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-md">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body px-5 pt-4 pb-5">
                <div class="d-flex flex-column align-items-center">
                    <lord-icon
                        src="https://cdn.lordicon.com/wbfqtbhv.json"
                        trigger="loop"
                        colors="primary:#5e60ce,secondary:#4ea8de"
                        style="width:250px;height:250px">
                    </lord-icon>
                    <div class="h4 fw-bold mb-4">Are you sure?</div>
                    <p class="text-center mb-5">You will delete task "<span id="alertTaskTItle" class="fw-bold"></span>", are you sure you want to delete this task?</p>
                    <form action="{{ route('tasks.destroy', ['id' => 'none']) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <div class="d-flex align-items-center">
                            <button class="btn btn-outline-secondary button-delete-task fw-bold px-4 py-2 me-3" type="button" data-bs-dismiss="modal" aria-label="Close">
                                Cancel
                            </button>
                            <button class="btn btn-danger fw-bold px-4 py-2" type="submit">
                                Delete
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>