<div id="addcontact_modal" class="modal_container">
    <div class="modal_backdrop"></div>
    <div class="modal__box">

        <div class="modal__header">
            <h3>Add your contact</h3> <span class="modal--close">&#10006;</span>
        </div>

        <section class="modal__section">
            <form class="form" id="addContact">
                <div class="flex-col">
                    <div class="input_form"> <span>First Name</span> <input type="text" name="firstname"> </div>
                    <div class="input_form"> <span>Last Name</span> <input type="text" name="lastname"> </div>
                </div>

                <div class="input_form"> <span>Email</span> <input type="email" name="email"> </div>
                <div class="input_form"> <span>Phone No.</span> <input type="text" name="phone" class="phone"> </div>

            <div class="flex-col">
                <button type="submit" class="btn">Add</button>
                <button type="button" class="btn btn-danger modal--close">Cancel</button>
            </div>
            </form>
        </section>

    </div>

</div>