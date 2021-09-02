readMoreResponse('.zoom-recruitment', '.zoom-recruitment-btn');
readMoreResponse('.eb-transport', '.eb-transport-btn');
readMoreResponse('.hitech-2', '.hitech-2-btn');
readMoreResponse('.salmat', '.salmat-btn');
readMoreResponse('.hitech-1', '.hitech-1-btn');

function readMoreResponse(_text, _readMoreBtn) {
    const readMoreBtn = document.querySelector(_readMoreBtn);
    const text = document.querySelector(_text);
   
    readMoreBtn.addEventListener('click',()=> {
        text.classList.toggle('show-more');
    
        if(readMoreBtn.innerText === 'Read More') {
            readMoreBtn.innerText = 'Read Less';
        }
        else {
            readMoreBtn.innerText = 'Read More';
        }
    })    
}
