const updateUser = document.getElementById("updateUser");
const addcontact = document.getElementById('addContact');

const proccessApi = "func/auth-process.php"

updateUser.addEventListener("submit", async (e) => {
  e.preventDefault();
  const updateFormData = new FormData(updateUser);
  updateFormData.append("profileEdit", 1);

  const password = updateFormData.get("password");
  const confirmpassword = updateFormData.get("confirmpassword");

  if (password !== confirmpassword) {
    e.stopPropagation();
    updateUser.classList.add("error-password");
    return;
  } else {
    e.stopPropagation();
    updateUser.classList.remove("error-password");
  }

  try {
    const data = await fetch("func/auth-process.php", {
      method: "POST",
      body: updateFormData,
    });
    window.location.href = "profile.php";

    if (!data.ok) {
      console.log(`Cannot Connect to File: ${data.status}`);
    }
  } catch (error) {
    console.log(error);
  }
});


addcontact.addEventListener('submit', async (e)=>{
  e.preventDefault();
  const addContactForm = new FormData(addcontact)
  addContactForm.append('addContact', 1)

  try{
    const data = await fetch(proccessApi, {
      method: "POST",
      body: addContactForm
    })

    const result = await data.text();
    console.log(result);


  }catch(err){
    console.log(err)
  }
})