$(document).ready(function() {
    let cards = $('.drag-card');
    let lists = $('.list');
    var lastDraggedCard

    cards.each(function() {
        registerEventsOnCard($(this));
    });

    lists.on('dragover', function(e) {
        e.preventDefault();
        let draggingCard = $('.dragging');
        let cardAfterDraggingCard = getCardAfterDraggingCard($(this), e.clientY);

        if (cardAfterDraggingCard) {
            draggingCard.insertBefore(cardAfterDraggingCard);
        } else {
            $(this).find('.draggingContainer').append(draggingCard);
        }
    });

    lists.on('dragend', function(event) {
        event.preventDefault()

        let card = lastDraggedCard.find('.card')
        let taskId = card.data('id');
        let activityStatusId = $(this).data('container-status-id');
        let form = $('#updateTaskStatus')

        form.find('#activityStatusId').val(activityStatusId)
        if (activityStatusId == 3) {
            changeCardOnDone(card)
        } else {
            changeCardOnNotDone(card)
        }

        $.ajax({
            url: "/activities/" + taskId,   
            method: 'POST',
            data: form.serialize(),
            success: function( result ) {
                console.log('success')
            }
        })
    });

    function getCardAfterDraggingCard(list, yDraggingCard) {
        let listCards = list.find('.drag-card:not(.dragging)');

        return listCards.toArray().reduce(function(closestCard, nextCard) {
            let nextCardRect = nextCard.getBoundingClientRect();
            let offset = yDraggingCard - nextCardRect.top - nextCardRect.height / 2;

            if (offset < 0 && offset > closestCard.offset) {
                return { offset: offset, element: nextCard };
            } else {
                return closestCard;
            }
        }, { offset: Number.NEGATIVE_INFINITY }).element;
    }

    function registerEventsOnCard(card) {
        card.on('dragstart', function() {
            card.addClass('dragging');
            lastDraggedCard = $(this)
        });

        card.on('dragend', function() {
            card.removeClass('dragging');
        });
    }

    function changeCardOnDone(card) {
        let classList = card.attr("class").split(/\s+/)
        let lateIcon = card.find('.bi-x-circle')
        let warningIcon = card.find('.bi-exclamation-triangle')

        card.removeClass(classList)
        classList[1] = 'none'
        card.addClass(classList)

        lateIcon.addClass('d-none')
        warningIcon.addClass('d-none')
    }

    function changeCardOnNotDone(card) {
        let classList = card.attr("class").split(/\s+/)
        let lateIcon = card.find('.bi-x-circle')
        let warningIcon = card.find('.bi-exclamation-triangle')
        let cardStatusType = card.data('card-status-type')

        card.removeClass(classList)
        classList[1] = cardStatusType
        card.addClass(classList)

        if (cardStatusType == 'danger') {
            lateIcon.removeClass('d-none')
            warningIcon.addClass('d-none')
        } else if (cardStatusType == 'warning') {
            lateIcon.addClass('d-none')
            warningIcon.removeClass('d-none')
        } else {
            lateIcon.addClass('d-none')
            warningIcon.addClass('d-none')
        }
    }
})