(() => {
    const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/
    const nipRegex = /^\d{10}$/
    const pasRegex = /^([a-zA-Z0-9]{9})$/

    const form = document.querySelector('#my_form')

    form.addEventListener('submit', (e) => {
        e.preventDefault()

        const emailInput = form.querySelector('[data-validate=email]')
        const email = emailInput.value
        const errorHolder = emailInput.parentElement.querySelector('.error-holder')
        errorHolder.innerHTML = ''

        if (!emailRegex.test(email)) {
            emailInput.classList.add('error')
            const errorMessage = document.createElement('p')
            errorMessage.innerText = 'Please enter a valid email address'
            errorHolder.appendChild(errorMessage)
        } else {
            emailInput.classList.remove('error')
            errorHolder.innerHTML = ''
        }

        const nipInput = form.querySelector('[data-validate=nip]')
        const nip = nipInput.value
        const nipErrorHolder = nipInput.parentElement.querySelector('.error-holder')
        nipErrorHolder.innerHTML = ''

        if (!nipRegex.test(nip)) {
            nipInput.classList.add('error')
            const errorMessage = document.createElement('p')
            errorMessage.innerText = 'Please enter a valid NIP'
            nipErrorHolder.appendChild(errorMessage)
        } else {
            nipInput.classList.remove('error')
            nipErrorHolder.innerHTML = ''
        }

        const pasInput = form.querySelector('[data-validate=password]')
        const pas = pasInput.value
        const pasErrorHolder = pasInput.parentElement.querySelector('.error-holder')
        pasErrorHolder.innerHTML = ''

        if (!pasRegex.test(pas)) {
            pasInput.classList.add('error')
            const errorMessage = document.createElement('p')
            errorMessage.innerText = 'Please enter a valid password'
            pasErrorHolder.appendChild(errorMessage)
        } else {
            pasInput.classList.remove('error')
            pasErrorHolder.innerHTML = ''
        }

        const pas2Input = form.querySelector('[data-validate=password2]')
        const pas2 = pas2Input.value
        const pas2ErrorHolder = pas2Input.parentElement.querySelector('.error-holder')
        pas2ErrorHolder.innerHTML = ''

        if (!pasRegex.test(pas2)) {
            pas2Input.classList.add('error')
            const errorMessage = document.createElement('p')
            errorMessage.innerText = 'Please enter a valid password'
            pas2ErrorHolder.appendChild(errorMessage)
        } else {
            pas2Input.classList.remove('error')
            pas2ErrorHolder.innerHTML = ''
        }
    })
})()