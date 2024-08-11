const updateUser = document.getElementById("updateUser");

updateUser.addEventListener("click", async (e) => {
  e.preventDefault();
  const updateFormData = new FormData(updateUser);
  updateFormData.append("profileEdit", 1);

  const password = updateFormData.get("password");
  const confirmpassword = updateFormData.get("confirmpassword");

  if (password !== confirmpassword) {
    updateUser.classList.add("error-password");
  } else {
    updateUser.classList.remove("error-password");
  }

  try {
    const data = await fetch("func/auth-process.php", {
      method: "POST",
      body: updateFormData,
    });
    if (!data.ok) {
      console.log(`Cannot Connect to File: ${data.status}`);
    }

    const result = await data.text();
    console.log(result);
  } catch (error) {
    console.log(error);
  }
});
