
const regionList = document.querySelectorAll('.region');
regionList.forEach((reg) => {

    let timer

    // On mouseenter call showLightbox with delay .3s
    // .3s should be enough for mouse to travel 
    // through parent element and reach the target
    // before time's up
    reg.addEventListener('mouseenter', () => {
        
        // also need to save the timerID returned by setTimout()
        timer = setTimeout(() => showLightbox(reg.id), 300)
    })

    // On mouseout 
    reg.addEventListener('mouseout', (event) => {
        
        // Check if mouse moved to appropriate (not any) child element
        // then clearTimout using previously saved timerID
        if(event.relatedTarget.classList.contains('region') || event.relatedTarget == reg.parentElement) {


            clearTimeout(timer)
        }
    })    
})


const lightbox = document.querySelector('.lightbox')

function closeLightbox() {
    if(lightbox.classList.contains('active')) {
        lightbox.classList.remove('active')
    }
}

function showLightbox(msg) {
    if(!lightbox.classList.contains('active')) {
        lightbox.classList.add('active')
    }
    
    lightbox.querySelector('.lightbox__text').innerText = 'Lightbox caled by: ' + msg
}

