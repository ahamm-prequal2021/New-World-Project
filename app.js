let contactForm = document.querySelector('.formulaire'),
    confirmation = document.querySelector('.confirmation')
    


function home(){
    $('.white').fadeIn();
    contactForm.style.opacity = '0';
    contactForm.style.pointerEvents = 'none';
    confirmation.style.opacity = '0%';
}

function guides(){
    contactForm.style.opacity = '0';
    contactForm.style.pointerEvents = 'none';
}

function builds(){
    contactForm.style.opacity = '0';
    contactForm.style.pointerEvents = 'none';
}

function contact(){
    $('.white').fadeOut();
    contactForm.style.opacity = '100%';
    contactForm.style.pointerEvents = 'all';
}