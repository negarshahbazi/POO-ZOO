document.addEventListener('DOMContentLoaded', () => {


document.querySelector('.btnzoo').addEventListener('click',()=>{
    document.querySelector('.zoo').classList.remove('d-none');
    document.querySelector('.zoo').classList.add('d-flex');
})
document.querySelector('.btnemployee').addEventListener('click',()=>{
    document.querySelector('.employee').classList.remove('d-none');
    document.querySelector('.employee').classList.add('d-flex');
})
document.querySelector('.btnenclos').addEventListener('click',()=>{
    document.querySelector('.enclos').classList.remove('d-none');
    document.querySelector('.enclos').classList.add('d-flex');
})
document.querySelector('.btnanimal').addEventListener('click',()=>{
    document.querySelector('.animal').classList.remove('d-none');
    document.querySelector('.animal').classList.add('d-flex');
})
})