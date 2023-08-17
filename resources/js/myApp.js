let btnEmpty = document.querySelectorAll('.btnEmpty');
let inputEmpty = document.querySelectorAll('.inputEmpty');

for (let index = 0; index < btnEmpty.length; index++) {
    let element = btnEmpty[index];

    element.addEventListener("click" , () => {
        for (let idx = 0; idx < inputEmpty.length; idx++) {
            let e = inputEmpty[idx];
            e.value = null;
        }
    });
    
};
