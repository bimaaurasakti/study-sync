$(document).ready(function() {
    var detailCardModal = $('#detailTaskModal')
    var taskCard = $('.drag-card .card')
    var taskEditButton = $('.card .btn.edit')
    var buttonInputSubject = $('.btn-input-subject button.btn.dropdown-toggle')
    var buttonDropdownSubject = $('.btn-input-subject button.dropdown-item')
    var inputSubject = $('#inputSubject')

    taskCard.click(function() {
        detailCardModal.modal('show')
    })

    taskEditButton.click(function(event) {
        event.stopPropagation()

        var dropdownMenu = $('.dropdown-menu.show')
        if(dropdownMenu.length > 0) {
            dropdownMenu.removeClass('show')
            $(this).siblings().addClass('show')
        } else {
            $(this).siblings().removeClass('show')
        }
    })

    buttonDropdownSubject.click(function(event) {
        event.preventDefault()
        
        buttonInputSubject.text($(this).text())
        inputSubject.val($(this).data('subject-id'))

        var buttonInputSubjectClassList = buttonInputSubject.attr("class").split(/\s+/)
        buttonInputSubject.removeClass(buttonInputSubjectClassList.join(' '))

        buttonInputSubjectClassList[2] = $(this).data('subject-initials')
        buttonInputSubject.addClass(buttonInputSubjectClassList.join(' '))
    })
});