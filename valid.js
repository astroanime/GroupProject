const form = document.getElementById('form');
const name = documen.getElementById("name")
const type1= document.getElementById('type');
const info = document.getElementById('info');
const number = document.getElementById('number');

const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success')
}

const setSuccess = element => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
};

const validateInputs = () => {
    const uname = username.value.trim();
    const inform = info.value.trim();
    const unumber = number.value.trim();

    if(uname === '') {
        setError(username, 'Username is required');
    } else {
        setSuccess(username);
    }
    if(inform === '') {
        setError(info, 'Password is required');
    } else if (inform.length < 8 ) {
        setError(info, 'Password must be at least 8 character.')
    } else {
        setSuccess(info);
    }
    if(unumber === '') {
        setError(number, 'Password is required');
    } else if (unumber.length < 8 ) {
        setError(info, 'Password must be at least 8 character.')
    } else {
        setSuccess(info);
    }
};



const type = document.querySelector('#type');

typer.addEventListener('change', function() {
    const selectedOption = this.value;
    console.log(`Selected option: ${selectedOption}`);
});










/*
dropdowns.forEach(dropdown =>{
    const select = dropdown.querySelector('.select')
    const caret = dropdown.querySelector('.caret')
    const menu = dropdown.querySelector('.menu')
    const options = dropdown.querySelector('.menu li')
    const selected = dropdown.querySelector('.selected')
    select.addEventListener('click', ()=>{
        select.classList.toggle('select-clicked')
        caret.classList.toggle('caret-rotate')
        menu.classList.toggle('menu-open')
    }
    )
    options.forEach(option =>{
        option.addEventListener('click',()=>{
            selected.innerText = option.innerText;
            select.classList.remove('select-clicked')
            caret.classList.remove('caret-rotate')
            menu.classList.remove('menu-open')
            options.forEach(option =>{
                option.classList.remove('active')
            })
        option.classList.add('active')
        })
    })
})*/