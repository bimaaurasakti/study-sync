$(document).ready(function() {
    var taskCard = $('.drag-card .card')
    var detailCardModal = $('#detailTaskModal')
    var taskEditButton = $('.card .btn.edit')
    var buttonInputSubject = $('.btn-input-subject button.btn.dropdown-toggle')
    var buttonDropdownSubject = $('.btn-input-subject button.dropdown-item')
    var inputSubject = $('#inputSubject')

    taskCard.click(function() {
        var taskTitle = $(this).find('.card-title').text()
        var taskDescription = $(this).find('.card-description').text()
        var taskDueDate = $(this).data('due-date')
        var taskStatus = $(this).data('status')
        var taskSubject = $(this).find('.card-subject').text()
        var subjectBox = $(this).find('.subject')

        detailCardModal.find('#inputTitle').val(taskTitle)
        detailCardModal.find('.card-status').text(taskStatus)
        detailCardModal.find('#inputDate').val(taskDueDate)
        detailCardModal.find('#inputDescription').val(taskDescription)
        detailCardModal.find('.btn.subject').text(taskSubject) 
        
        var detailSubjectBox = detailCardModal.find('.btn.subject')
        var subjectBoxClassList = subjectBox.attr("class").split(/\s+/)
        var detailSubjectBoxClassList = detailSubjectBox.attr("class").split(/\s+/)
        
        detailSubjectBox.removeClass(detailSubjectBoxClassList.join(' '))
        detailSubjectBoxClassList[2] = subjectBoxClassList[1]
        detailSubjectBox.addClass(detailSubjectBoxClassList.join(' '))

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

        var buttonChangeSubject = $(this).closest('.btn-input-subject').find('.btn.subject')
        console.log(buttonChangeSubject)
        buttonChangeSubject.text($(this).text())
        inputSubject.val($(this).data('subject-id'))

        var buttonInputSubjectClassList = buttonChangeSubject.attr("class").split(/\s+/)
        buttonChangeSubject.removeClass(buttonInputSubjectClassList.join(' '))

        buttonInputSubjectClassList[2] = $(this).data('subject-initials')
        buttonChangeSubject.addClass(buttonInputSubjectClassList.join(' '))
    })
});