/* Get all grid items from document */
const gridItems = document.querySelectorAll('.product-card');
let cardExists = false; /* Flag to track if info card exists */
let currentCard = null; /* Variable to hold reference to current info card */

gridItems.forEach(item => {
    /* Create infocard when hovering over element */
    item.addEventListener('mouseenter', (event) => {
        const infoCard = createCard();        

        /* Get the bounding rectangle of the info card */
        const rect = infoCard.getBoundingClientRect();

        /* Position the info card with boundary checking */
        positionCard(infoCard, rect, event);
        /* Set the flags to indicate that the info card exists and is currently active */
        cardExists = true;
        currentCard = infoCard;
    });

    /* Remove the info card when the mouse leaves the element */
    item.addEventListener('mouseleave', () => {
        const infoCard = document.body.querySelector('.info-card');
        if (infoCard) {
            document.body.removeChild(infoCard);
            cardExists = false;
        }
    });

    /* Update the position of the info card as the mouse moves */
    item.addEventListener('mousemove', (event) => {
        if (currentCard) { /* If there is an active card, just update its position */
            const rect = currentCard.getBoundingClientRect();
            positionCard(currentCard, rect, event);
        }
        else{ /* Otherwise, create a new card, this is made to allow the card to be recreated if it dissappeared but the cursosr stayed on top of the product card */
            const infoCard = createCard();
            const rect = infoCard.getBoundingClientRect();
            positionCard(infoCard, rect, event);
            cardExists = true;
            currentCard = infoCard;
        }
    });
});

/* Function to position the infocard in the screen preventing it from going out of bounds */
function positionCard(infoCard, rect, event) {
    /* If the card goes out of bounds to the right, then */
    if (event.clientX + 10 + rect.width > window.innerWidth) {
        /* If the card goes out of bounds to the left, then try to place it in the middle of the screen */
        if (event.clientX - 10 - rect.width < 0) {
            infoCard.style.left = `${window.innerWidth / 2 - rect.width / 2}px`;
        }
        else { /* Otherwise, put it completely on the left */
            infoCard.style.left = `${event.clientX - rect.width - 10}px`;
        }
    } /* If the card fits notmally without going out of bounds, put it on the right */
    else {
        infoCard.style.left = `${event.clientX + 10}px`;
    }

    /* Same logic applied for vertical positioning */
    if (event.clientY + 10 + rect.height > window.innerHeight) {
        if (event.clientY - 10 - rect.height < 0) {
            infoCard.style.top = `${window.innerHeight / 2 - rect.height / 2}px`;
        }
        else {
            infoCard.style.top = `${event.clientY - rect.height - 10}px`;
        }
    }
    else {
        infoCard.style.top = `${event.clientY + 10}px`;
    }
}

let scrollTimeout;
document.addEventListener('scroll', () => {
    clearTimeout(scrollTimeout);
    scrollTimeout = setTimeout(() => {
        const infoCard = document.body.querySelector('.info-card');
        if(infoCard){
            document.body.removeChild(infoCard);
            cardExists = false; /* Flag to track if info card exists */
            currentCard = null; /* Variable to hold reference to current info card */    
        }
    }, 500); 
});

function createCard(/*item*/){
    //const description = item.getAttribute('data-description');

    /* Creation of the info card */
    const infoCard = document.createElement('div');
    infoCard.classList.add('info-card');

    /* Title */
    const title = document.createElement('h4');
    title.textContent = 'Descripción del artículo';

    /* Description */
    const descriptionP = document.createElement('p');
    descriptionP.textContent = "description";

    /* Append elements to the info card */
    infoCard.appendChild(title);
    infoCard.appendChild(descriptionP);
    document.body.appendChild(infoCard);

    return infoCard;
}