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


// New Version of Modal

function handleModal(modalSelector){

const modal = document.getElementById(modalSelector)

function openModal(){ modal.classList.add('active') }
function closeModal(){ modal.classList.remove('active') }

    document.querySelectorAll(`.open__modal[data-modal="${modalSelector}"]`).forEach(button =>{
        button.addEventListener('click', openModal)
    })

    modal.querySelectorAll('.modal--close').forEach(button => {
        button.addEventListener('click', closeModal)
    })
}
handleModal('addcontact_modal')
})