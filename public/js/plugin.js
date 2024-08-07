document.addEventListener('DOMContentLoaded', function(){

const updateBtn = document.getElementById('update_btn');
const updateModal = document.getElementById('update_modal');
const closeModal = document.getElementById('modal_close');


const toggleUpdateBtn = () =>{
    updateModal.classList.toggle('block');
}


updateBtn.addEventListener('click' , (e)=>{
    toggleUpdateBtn()
})

closeModal.addEventListener('click' , ()=>{
    toggleUpdateBtn()
})



})