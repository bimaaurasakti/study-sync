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

        let taskId = lastDraggedCard.find('.card').data('id');
        let activityStatusId = $(this).data('container-status-id');
        let form = $('#updateTaskStatus')
        form.find('#activityStatusId').val(activityStatusId)
        
        console.log(form.find('#activityStatusId').val())

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
})