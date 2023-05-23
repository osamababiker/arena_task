
jQuery(document).ready(function($) {
    $('#more-btn').on('click', function() {
        const loadButton = document.querySelector('#more-btn');
        if(typeof(loadButton) != 'undefined' && loadButton != null){
            let currentPage = document.querySelector('.boxes').dataset.page;
            // send ajax request
            $.ajax({
                type: 'POST',
                url: '/wp-admin/admin-ajax.php',
                dataType: 'html',
                data: {
                    'action': 'load_more_posts',
                    'current_page': currentPage
                },
                success: function (response) {

                    // append the response into our page 
                    response = JSON.parse(response);
                    let properties = document.querySelector('.boxes');
                    properties.innerHTML += response.data;

                    // update the page url
                    let getUrl = window.location;
                    let baseUrl = getUrl.protocol + "//" + getUrl.host + "/";
                    window.history.pushState('','', baseUrl + 'page/' + (parseInt(document.querySelector('.boxes').dataset.page) + 1))

                    // remove the load button if there is no more post to load
                    if(document.querySelector('.boxes').dataset.page == document.querySelector('.boxes').dataset.max){
                        loadButton.parentNode.removeChild(loadButton)
                    }

                    // updating the number of page
                    document.querySelector('.boxes').dataset.page++;

                }
            });
        }
    });


    /**
     * Validate the contact form displayed with the [contact-form] shortcode.
     */
    const contactFormSubmit = document.querySelector('#contact-form-submit');
    $('#contact-form-submit').on('click', validateForm);

    function validateForm(event) {
        event.preventDefault();
        event.stopPropagation();
        //Name
        const name = document.querySelector('#name') !== null ?
            document.querySelector('#name').value :'';
        //Phone
        const phone = document.querySelector('#phone') !== null ?
            document.querySelector('#phone').value :'';
        //Email
        const email = document.querySelector('#email') !== null ?
            document.querySelector('#email').value :'';
        //Amount
        const amount = document.querySelector('#amount') !== null ?
            document.querySelector('#amount').value :'';
        //Message
        const message = document.querySelector('#message') !== null ?
        document.querySelector('#message').value :'';

        const validationMessages = [];
        if (name.length === 0) {
            validationMessages.push('Please enter a valid name.');
        }

        if (email.length === 0 || !emailIsValid(email)) {
            validationMessages.push('Please enter a valid email address.');
        }

        if (phone.length === 0) {
            validationMessages.push('Please enter a valid phone number.');
        }

        if (amount.length === 0) {
            validationMessages.push('Please enter a valid investment amount.');
        }

        if (message.length === 0) {
            validationMessages.push('Please enter a valid message.');
        }

        if (validationMessages.length === 0) {
            //Submit the form
            //document.querySelector('contact-form').submit();
            $.ajax({
                type: 'POST',
                url: '/wp-admin/admin-ajax.php',
                dataType: 'html',
                data: {
                    'action': 'submit_contact_form',
                    'contact_form': true,
                    'name': name,
                    'email': email,
                    'phone': phone,
                    'amount': amount,
                    'message': message
                },
                success: function (response) {
                    response = JSON.parse(response);
                    let element = document.querySelector('#validation-messages-container');
                    element.innerHTML += response.data;
                }
            });
        } else {
            //Delete all the existing validation messages from the DOM
            const parent = document.querySelector('#validation-messages-container');
            while (parent.firstChild) {
                parent.removeChild(parent.firstChild);
            }
            //Add the new validation messages to the DOM
            validationMessages.forEach(function(validationMessage, index) {
                //add message to the DOM
                const divElement = document.createElement('div');
                divElement.classList.add('validation-message');
                const node = document.createTextNode(validationMessage);
                divElement.appendChild(node);
                const element = document.querySelector('#validation-messages-container');
                element.appendChild(divElement);
            });
        }
    }

    /**
     * A simple function that verify the email .
     *
     * @param email
     * @returns {boolean}
     */
    function emailIsValid(email) {
        const regex = /\S+@\S+\.\S+/;
        return regex.test(email);
    }

});