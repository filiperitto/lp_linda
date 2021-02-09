(function () {

    var headerScroll = getId('header-main'),
        scrollHeight = 10,
        classHeader = 'fixed-top';

    //SCROLL
    window.addEventListener("scroll", scrollOn);

    function scrollOn() {
        animatedScroll(headerScroll, classHeader, scrollHeight);
    }

    //Função que on scroll muda o comportamento do elemento
    function animatedScroll(element, classN, height) {
        y = pageYOffset; //resgata do objeto window o valor pageYOffset e guarda na variável
        if (y > height) {
            element.className = classN;
        } else {
            element.className = '';
        }
    }

    // Função toggle adiciona ou tira a class do elemento
    function toggle(element, classe) {
        element.className = element.className ? '' : classe;
    }

    //Função que retorna o id do elemento
    function getId(id) {
        return document.getElementById(id);
    }


})();
//------------------------ Header
//== Accordion Module
(function(){
    let accTitle = document.getElementsByClassName("acc-heading");
    let accContent = document.getElementsByClassName("acc-content");
    let singleMode = true;
    
    for( let j=0; j<accContent.length; j++ ){
        let realHeight = accContent[j].offsetHeight;
        accContent[j].setAttribute("data-height", realHeight + "px");
        accContent[j].style.height = 0;
    }
    
    for( let i=0; i<accTitle.length; i++ ){
        accTitle[i].onclick = function(){
            let openedAcc = this.getAttribute('href').replace('#', '');
    
            if( this.classList.contains("active") ){
                this.classList.remove("active");
                document.getElementById(openedAcc).style.height = 0;
                
                return false;
            }
            
            if( singleMode ){						
                for(let k=0; k<accTitle.length; k++) {
                    accTitle[k].classList.remove("active");
                }
    
                for(let j=0; j<accContent.length; j++) {
                    accContent[j].style.height = 0;
                }
            }
            
            this.classList.add("active");
            
            document.getElementById(openedAcc).style.height = accContent[i].getAttribute("data-height");
            
            return false;
        }
    }
})();
//======================== /Accordion Module