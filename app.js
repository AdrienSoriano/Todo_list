const btn = document.querySelectorAll('.checklist');

btn.forEach(element => {
    element.addEventListener("click", ()=>{
        let check = element;
        
        if(check.style.backgroundImage = "url('Assets/Media/validation.png')"){
            check.style.backgroundImage = "none";
            check.style.border = 'solid 0.5px grey';check.style.backgroundImage = "url('Assets/Media/validation.png')";
            check.style.border = 'none';
        }
        else
        if(check.style.backgroundImage = "none"){
            check.style.backgroundImage = "url('Assets/Media/validation.png')";
            check.style.border = 'none';
        }
        console.log(element);
    })
});